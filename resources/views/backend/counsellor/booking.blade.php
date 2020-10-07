@extends('backend.layout.app')
@section('content')
<div class="row">
    {{-- <div class="col"> --}}
       <div class="">
        <div class="top-title">
          <h4>Edit Counsellor</h4>
          <hr>
       </div>
       <div class="col-md-2">

       </div>
       {{-- <div class="col-md-10"> --}}
        <form id="loginform"  method="post"  data-parsley-validate="true" action="{{route('Counsellor.update',$counsellor->id)}}" >
            @csrf
            @method('PATCH')

            <div style="margin-bottom: 25px" class="input-group">
                <label for="f_name"class="col-md-3" > Full Name</label>
            <input id="login-username" id="f_name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z ]+$" type="text" class="form-control @error('f_name') is-invalid @enderror " name="f_name" value=" {{isset($counsellor->name) ? $counsellor->name:''}} " placeholder="Name">
            </div>
            @error('f_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror

            <div style="margin-bottom: 25px" class="input-group">
                    <label for="email"class="col-md-3" >Email</label>
                    <input readonly id="email" data-parsley-type="email" data-parsley-required-message="Enter Valid Email id" data-parsley-error-message="Please enter your valid email id" data-parsley-required="true" type="email" class="form-control @error('email') is-invalid @enderror" value=" {{isset($counsellor->email) ? $counsellor->email:''}}" name="email" placeholder="Email">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
             <div style="margin-bottom: 25px" class="input-group">
                <label for="half_hour_amt"class="col-md-3" >Half hour Paymnet</label>
                <input id="half_hour_amt" type="number" class="form-control @error('half_hour_amt') is-invalid @enderror" data-parsley-required="true" data-parsley-type="digits" value="{{isset($counsellor->half_hour_amt)?$counsellor->half_hour_amt:''}}" name="half_hour_amt">
        </div>
        @error('half_hour_amt')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
         <div style="margin-bottom: 25px" class="input-group">
            <label for="one_hour_amt"class="col-md-3" >One hour Paymnet</label>
            <input id="one_hour_amt" type="number" class="form-control @error('one_hour_amt') is-invalid @enderror" data-parsley-required="true" data-parsley-type="digits" value="{{isset($counsellor->one_hour_amt)?$counsellor->one_hour_amt:''}}" name="one_hour_amt" >
         </div>
            @error('one_hour_amt')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @foreach($counsellor->getTiming($counsellor->id) as $key => $value)
            <div style="margin-bottom: 25px" class="input-group">
                <label for="email"class="col-md-3" >{{$key}}</label>
                <input type="checkbox" checked value="{{$key}}" class=" col-md-2 checkbox" name="day[]" >

                    <div class="slots">
                        @foreach ($value as $time)
                        <div class="timeslote">
                            <div class="showtime"  data-myval="{{$key}}">
                            <input type="time"  name="{{$key}}_start[]" value="{{$time[0]}}"  ><input type="time" value="{{$time[1]}}" name="{{$key}}_end[]"  >
                            <button type='button' class='btn btn-danger remove' >Remove</button></div>
                        @endforeach
                        <button type="button" class=" btn btn-info addmore" >add more</button></div>

                    </div>
            </div>
            @endforeach
            @foreach($unavailable_days as $days)
            <div style="margin-bottom: 25px" class="input-group">
                <label for="days"class="col-md-3" >{{$days}}</label>
                <input type="checkbox" class=" col-md-2 checkbox" data-parsley-required="true" data-parsley-required-message="Select Days" data-parsley-mincheck="2"  value="{{$days}}" name="day[]" >

                    <div class="slots" style="display: none" >
                        <div class="timeslote">
                            <div class="showtime" data-myval="{{$days}}">
                            <input type="time" name="{{$days}}_start[]"  ><input type="time" name="{{$days}}_end[]"  >
                        </div> <button type="button" class=" btn btn-info addmore" >add more</button></div>
                    </div>
            </div>
            @endforeach
            <div style="margin-top:10px" class="form-group">
                <div class="col-sm-12 controls">
                    <button  type="submit" class="btn btn-success">save  </button>
                </div>
            </div>
    </form>
       </div>
       </div>
    {{-- </div> --}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>

    $(document).ready(function(){
        $(document).on('click','.checkbox',function(){
            if($(this).prop("checked")==true){
                $(this).closest("div").find('.slots').css('display','block');
                $(this).closest("div").find(':input').attr('required','true');
            }
            else{
                $(this).closest("div").find('.slots').css('display','none');
                $(this).closest("div").find(':input').attr('required','false');

            }
        });
        $(document).on('click','.addmore',function(){
            var addafter=$(this).closest('div').find('.showtime');
            var a = addafter.data('myval');
            // alert(a);
            var add="<div class='timeslote' >\
                        <input type='time' name='"+a+"_start[]' required ><input type='time' name='"+a+"_end[]' required>\
                    <button type='button' class='btn btn-danger remove' >Remove</button> </div> ";
                 $(addafter ).after( add);
        });
        $(document).on('click','.remove',function(){
            var addafter=$(this).closest('div').remove();
        });
    });
    </script>
    @endsection
    @section('footer')
        @include('backend.layout.footer')
    @endsection
