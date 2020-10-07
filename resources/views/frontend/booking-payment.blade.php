@extends('frontend.layout.app')
@section('content')

<div class="site-main">
    <div class="container pt-50 pb-50">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="custom_background">
                <div class="top-title">
                <h4> Payment Information</h4>
                <hr>
             </div>
             <div class="pt-20">
             <form id="contact_form" class="contact_form wrap-form clearfix" method="post" action="{{route('pay')}}" >
                                 @csrf
                                    @if(session()->get('success'))
                                        <div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                        {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->get('error'))
                                    <div class="notification is-danger">
                                    {{ session()->get('error') }}
                                    </div>
                                @endif
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Your Name</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($booking->f_name) ? $booking->f_name:'' }}</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Counsellor Name</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($booking->counsellor_name) ? $booking->counsellor_name:'' }}</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>email</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($booking->email) ? $booking->email:'' }}</div>
                                            </div><br><br>
                                             <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Payable Amount</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($amt) ? $amt:'' }}</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Mobile Number</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($booking->mobile_no) ? $booking->mobile_no:'' }}</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Session Date</label></b></div>
                                                <div class="col-md-6 float-left">{{date("d-m-Y", strtotime($booking->pre_date))}}</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Session Duration</label></b></div>
                                                <div class="col-md-6 float-left">@php if($booking->session_duration=="half"){echo "30 Minute";} else{echo "60 Minute";} @endphp</div>
                                            </div><br><br>
                                            <div class="col-md-6">
                                                <div class="col-md-6 float-left"><b><label>Session Time</label></b></div>
                                                <div class="col-md-6 float-left">{{isset($booking->session_time) ? $booking->session_time:'' }}</div>
                                            </div><br><br>


                                        </div>
                                 <div class="pt-20 text-right">
                                    <button class=" cmt-btn col-md-3 cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark" type="submit">Confirm Booking</button>
                                 </div>
                                </form>
                        </div>
             </div>
          </div>
       </div>
    </div>
    </div>



    @endsection

@section('footer')
 @include('frontend.layout.footer')
@endsection
