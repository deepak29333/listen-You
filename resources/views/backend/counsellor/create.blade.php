@extends('backend.layout.app')
@section('header')
    @include('backend.layout.top_nav')
@endsection
@section('sidebar')
    @include('backend.layout.nav')
@endsection
@section('content')

<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="container-fluid">
        <h4 class="c-grey-900 mT-10 mB-30">All Counsellors</h4>
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">

              <h4 class="c-grey-900 mB-20">All Counsellors</h4>
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
              <div style="padding-top:30px" class="panel-body" >
                <form id="loginform"  method="post" data-parsley-validate="true" action="{{route('Counsellor.store')}}" >
                        @csrf
                    <div class="row">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label for="f_name"class="col-md-3" > Full Name</label>
                            <input id="login-username" id="f_name" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z ]+$" type="text" class="form-control col-md-7 @error('f_name') is-invalid @enderror " name="f_name" value="" placeholder="Name">
                        </div>
                        @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror

                        <div style="margin-bottom: 25px" class="input-group">
                                <label for="email"class="col-md-3" >Email</label>
                                <input id="email" type="email" data-parsley-type="email" data-parsley-required-message="Enter Valid Email id" data-parsley-error-message="Please enter your valid email id" data-parsley-required="true" class="form-control col-md-7 @error('email') is-invalid @enderror" name="email" placeholder="Email">
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                         <div style="margin-bottom: 25px" class="input-group">
                            <label for="half_hour_amt"class="col-md-3">Half hour Paymnet</label>
                            <input id="half_hour_amt" type="text" data-parsley-required="true" data-parsley-type="digits" class="form-control col-md-7 @error('half_hour_amt') is-invalid @enderror" name="half_hour_amt">
                        </div>
                        @error('half_hour_amt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div style="margin-bottom: 25px" class="input-group">
                            <label for="one_hour_amt"class="col-md-3" >One hour Paymnet</label>
                            <input id="one_hour_amt" type="text" data-parsley-required="true" data-parsley-type="digits" class="form-control col-md-7 @error('one_hour_amt') is-invalid @enderror" name="one_hour_amt" >
                        </div>
                        @error('one_hour_amt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                        <div class="row">
                            <div class="col-md-2">Sunday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Sunday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots">
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control select_time" name="Sunday_start[]" > <option value="">Select Start Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Sunday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Monday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Monday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Monday_start[]" > <option value="">Select Start Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Monday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Tuesday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Tuesday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Tuesday_start[]" > <option value="">Select Start Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Tuesday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Wednesday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Wednesday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Wednesday_start[]" > <option value="">Select Start Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Wednesday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Thursday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Thursday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Thursday_start[]" > <option value="">Select Start Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Thursday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Friday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Friday" class="checkbox"   name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Friday_start[]" > <option value="">Select Start Time</option> @php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Friday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-2">Saturday</div>
                                <div class="col-md-2">
                                    <input type="checkbox" value="Saturday" class="checkbox" data-parsley-required="true" data-parsley-required-message="Select Days" data-parsley-mincheck="2"  name="day[]">
                                </div>

                            <div class="col-md-6 showslote d-none">
                                    <div class="timeslots " >
                                        <div class="copytext">
                                            <div class="col-md-6 float-left "><select class="form-control" name="Saturday_start[]" > <option value="">Select Start Time</option> @php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp </select></div>
                                            <div class="col-md-6 float-left"><select  class="form-control" name="Saturday_end[]"> <option value="">Select End Time</option>@php for($h=8;$h<20;$h++){echo "<option value='$h:00'>$h:00 </option>"; } @endphp</select></div>
                                        </div>
                                    </div>
                            </div>
                            <div type="button" class="addmore d-none">Add More</div>
                        </div><hr>


                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <button  type="submit" class="btn btn-success">save  </button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @endsection
@section('footer')
   @include('backend.layout.footer')

   <script>

   $(document).ready(function(){
        $(document).on('click','.checkbox',function(){
            if($(this).prop("checked")==true){
                $(this).closest(".row").find('.showslote').removeClass('d-none');
                $(this).closest(".row").find('.showslote').find('select').attr('data-parsley-required','true');
                $(this).closest(".row").find('.addmore').removeClass('d-none');
                $(this).closest("div").find('select').attr('required','true');
            }
            else{
                $(this).closest(".row").find('.showslote').find('select').attr('data-parsley-required','flase');
                $(this).closest(".row").find('.showslote').addClass('d-none');
                $(this).closest(".row").find('.addmore').addClass('d-none');
                $(this).closest("div").find('select').attr('required','false');
            }
        });
        $(document).on('click','.addmore',function(){
            if($(this).closest(".row").find('.showslote').find('select').slice('-2').val() !=""){
                $(this).closest(".row").find('.showslote').find('select').attr('data-parsley-required','true');
                var addafter=$(this).parent().find('.timeslots').last();
                var add=$(this).parent().find('.timeslots').first('div').html();
                    add=add+"<div class='col-md-2 remove'>Remove</div>";
                    $(addafter ).after(add);
            }
        });
        $(document).on('click','.remove',function(){
            var addafter=$(this).prev('div').remove();
            var addafter=$(this).remove();
        });
    });
    </script>
@endsection
