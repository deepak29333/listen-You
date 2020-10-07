<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use App\Models\Counsellor;
use Illuminate\Http\Request;
use App\Mail\BookingMail;
use App\Mail\MailToCounsellor;
class PaymentController extends Controller
{
    public function index()
    {
        if(session()->has('id')){
        return view('frontend.paymentSuccess');
        }
        else{
            return redirect('/');
        }
    }
    public function pay(Request $request){

      $api = new \Instamojo\Instamojo(
             config('services.instamojo.api_key'),
             config('services.instamojo.auth_token'),
             config('services.instamojo.url')
         );
         $data=Booking::find(session()->get('id'));
         $Booked_counsellor=Counsellor::find($data['counsellor_id']);
         if($data->session_duration=="half"){
             $amt=$Booked_counsellor->half_hour_amt;
         }else{
             $amt=$Booked_counsellor->one_hour_amt;
         }
         $flight = Payment::updateOrCreate(
            ['name' => $data->f_name, 'mobile_number' => $data->mobile_no,'order_id'=>session()->get('id')],
            ['amount' => $amt]
        );
     try {
         $response = $api->paymentRequestCreate(array(
             "purpose" => "Listen You Session Fees",
             "amount" => $amt,
             "buyer_name" => "$data->name",
             "send_email" => true,
             "email" => "$data->email",
             "phone" => "$data->mobile_no",
             "redirect_url" => "http://127.0.0.1:8000/pay-success"
             ));

             header('Location: ' . $response['longurl']);
             exit();
     }catch (Exception $e) {
         print('Error: ' . $e->getMessage());
     }
 }
 public function success(Request $request){
      try {
         $api = new \Instamojo\Instamojo(
             config('services.instamojo.api_key'),
             config('services.instamojo.auth_token'),
             config('services.instamojo.url')
         );
         $response = $api->paymentRequestStatus(request('payment_request_id'));
         if( !isset($response['payments'][0]['status']) ) {
            return 'payment failed';
         } else if($response['payments'][0]['status'] != 'Credit') {
            return 'payment failed';
         }
       }catch (\Exception $e) {
        return 'payment failed';
     }
    //  dd($response);
      $data=Booking::find(session()->get('id'));
      $data->status='1';
      $data->save();
      $Booked_counsellor=Counsellor::find($data['counsellor_id']);
      $data['counselor_name']=$Booked_counsellor->name;
      $Booked_counsellor['client_name']=$data['f_name']." ".$data['l_name'];
      $Booked_counsellor['client_mobile_no']=$data['mobile_no'];
      $Booked_counsellor['client_email']=$data['email'];
      $Booked_counsellor['pre_date']=$data['pre_date'];
      $Booked_counsellor['session_day']=$data['session_day'];
      $Booked_counsellor['session_time']=$data['session_time'];

      Payment::where('order_id',session()->get('id'))->update(['status'=>'success','transaction_id'=>$response['id']]);
      \Mail::to($data->email)->send(new BookingMail($data));
      \Mail::to($Booked_counsellor->email)->send(new MailToCounsellor($Booked_counsellor));
      return redirect('/paymentSuccess');
   }
}
