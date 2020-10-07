<?php

namespace App\Http\Controllers;
use App\Http\Requests\sessionStep1;
use App\Http\Requests\SessionStep2;
use App\Http\Requests\sessionstep3;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Counsellor;
use DB;
class BookingController extends Controller
{
    public function AllBooking(){
        $booking=DB::table('bookings')
                    ->join('counsellors','bookings.counsellor_id','=','counsellors.id')
                    ->join('payments','bookings.id','payments.order_id')
                    ->select('bookings.*','counsellors.name as counsellor_name',
                    'counsellors.email as counsellor_email','payments.amount as amount','payments.status as payment_status','payments.created_at as booking_date')
                    ->get();
                    // dd($booking);
                    return view('backend.index',['booking'=>$booking]);
    }
    public function sessionStep1Index(){
        // session()->forget('id');
        if (session()->exists('id')){
            $data=Booking::find(session()->get('id'));
            return view('frontend.booking-session',['booking'=>$data]);
        }
        $data=[];
        return view('frontend.booking-session',['booking'=>$data]);
    }
    public function sessionStep1Index2(){
        if (session()->exists('id')){
            $data=Booking::find(session()->get('id'));
            return view('frontend.booking-session2',['booking'=>$data]);
        }
        $data=[];
        return view('frontend.booking-session2',['booking'=>$data]);    }
    public function sessionStep1Index3(){
        $counsellor=Counsellor::select('name','id')->distinct()->get(['id']);
        $data=Booking::find(session()->get('id'));
        return view('frontend.booking-session3',['counsellors'=>$counsellor,'data'=>$data]);
    }
    public function sessionPayment(){
        $data=Booking::find(session()->get('id'));
        $Booked_counsellor=Counsellor::find($data['counsellor_id']);
        if($data->session_duration=="half"){
            $amt=$Booked_counsellor->half_hour_amt;
        }else{
            $amt=$Booked_counsellor->one_hour_amt;
        }
        $data['counsellor_name']=$Booked_counsellor->name;
        return view('frontend.booking-payment',['booking'=>$data,'amt'=>$amt]);
    }

    public function sessionStep1(sessionStep1 $request){
       if(session()->has('id')){
           $booking= Booking::find(session()->get('id'));
           $booking->visitor_id=$_SERVER['REMOTE_ADDR'];
           $booking->f_name=$request->f_name;
           $booking->l_name=$request->l_name;
           $booking->mobile_no=$request->mobile_no;
           $booking->email=$request->email;
           $booking->gender=$request->gender;
           $booking->save();
           return redirect('/booking-session3')->with('success','Updated Successfully');
       }
        $booking  = new Booking;
        $booking->visitor_id=$_SERVER['REMOTE_ADDR'];
        $booking->f_name=$request->f_name;
        $booking->l_name=$request->l_name;
        $booking->mobile_no=$request->mobile_no;
        $booking->email=$request->email;
        $booking->gender=$request->gender;
        $booking->save();
        session(['id' =>$booking->id]);
        return redirect('/booking-session3')->with('success','saved Successfully');

    }
    // public function sessionStep2(sessionStep2 $request){
    //     // $data=Booking::where('visitor_id',$_SERVER['REMOTE_ADDR'])->first();
    //     $booking= Booking::find(session()->get('id'));
    //     $booking->timezone=$request->time_zone;
    //     $booking->city_residence=$request->city_name;
    //     $booking->pre_date=$request->p_date;
    //     $booking->pre_time=$request->p_time;
    //     $booking->save();
    //     return redirect('/booking-session3')->with('success','saved Successfully');
    // }
    public function sessionStep3(sessionstep3 $request){
        $id=$request->counsellor_id;
        $time=$request->time;
        $date=$request->p_date;
        $check=Booking::where(['counsellor_id'=>$id,'pre_date'=>$date,'session_time'=>$time,'status'=>'1'])->exists();
        if($check){
            return back()->with('error','Counsllor is Not Availble at This time Please check Time or Day');
        }
        $booking= Booking::find(session()->get('id'));
        $booking->counsellor_id=$request->counsellor_id;
        $booking->session_day=$request->day;
        $booking->session_time=$request->time;
        $booking->session_duration=$request->hourtime;
        $booking->pre_date=$request->p_date;
        $booking->save();
        return redirect('/booking-payment')->with('success','saved Successfully');
    }
    public function getCounsellorDay(Request $request){
        $date=$request->p_date;
        $timetype=$request->timetype;
        $fees=0;
        $day=date('l', strtotime($date));
        // dd($day);
        $counsellor=Counsellor::find($request->id);
        $days=unserialize($counsellor->timing);
        $i=0;
        $totalDays=[];
        $Totaltiming=[];
        $data=[];
        $data['status']=false;
        foreach( $days as $key=>$value){
            $totalDays[$i]=$key;
            $i++;
        }
        // dd($totalDays);
        foreach( $days as $key=>$value){
            if(in_array($day,$totalDays)){
                $i=0;
                foreach($value as $timing){
                    $hour=strtotime($timing[0]);
                    $endtime=strtotime($timing[1]);
                    $start_time=strftime('%X', $hour);
                    while($hour < $endtime){
                        $start_time = date('h:i a', $hour);
                        if($timetype=="one"){
                                $hour= strtotime('+1 hour',$hour);
                                $shiftend = date('h:i a', $hour);
                                $fees=$counsellor->one_hour_amt;
                        }
                        else{
                            $hour= strtotime('+30 minutes',$hour);
                            $shiftend = date('h:i a', $hour);
                            $fees=$counsellor->half_hour_amt;
                        }
                        $start_time=$start_time.'-'.$shiftend;
                        $time=str_replace(' ', '', $start_time);
                        $check=Booking::where(['counsellor_id'=>$request->id,'pre_date'=>$date,'session_time'=>$time,'status'=>'1'])->exists();
                        if(!$check){
                            $Totaltiming[$i]=$time;
                            $i++;
                        }
                    }
                }

                $data['status']=true;
                $data['Totaltiming']=$Totaltiming;
                $data['fees']=$fees;
                // dd($data);
                return $data;
            }
            $data['status']=false;
            $data['Totaltiming']=[];
            $data['fees']=0;
            $data['response']='Counsellor is Not Available on this Date please Change your Session Date';
            return $data;
        }
    }
    public function getCounsellorTime(Request $request){
            $data=[];
            $data['status']=false;
            $id=$request->id;
            $time=$request->time;
            $date=$request->date;
            $check=Booking::where(['counsellor_id'=>$id,'pre_date'=>$date,'session_time'=>$time,'status'=>'1'])->exists();
            if($check){
                $data['status']=true;
                $data['response']="Counsellor is Not Available on This Time please select Another Time";
                return $data;
            }
            else{
                return $data;
            }
    }
    public function filterBooking(Request $request){
            if(($request->has('start_date') or
                !empty($request->start_date))
                and (($request->has('end_date')) or
                (!empty($request->end_date)))){
                    $start=date('y-m-d',strtotime($request->start_date));
                    $end=date('y-m-d',strtotime($request->end_date.' +1 day'));
                    $booking=DB::table('bookings')
                        ->join('counsellors','bookings.counsellor_id','=','counsellors.id')
                        ->join('payments','bookings.id','payments.order_id')
                        ->select('bookings.*','counsellors.name as counsellor_name',
                        'counsellors.email as counsellor_email','payments.amount as amount','payments.status as payment_status','payments.created_at as booking_date')
                        ->whereBetween('payments.created_at', [$start, $end])
                        ->get();
                        return view('backend.index',['booking'=>$booking]);
                }
    }

}
