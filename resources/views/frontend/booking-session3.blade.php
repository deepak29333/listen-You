@extends('frontend.layout.app')
@section('content')
<div class="site-main">
    <div class="container form_step pt-50 pb-50">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="custom_background">
                <div class="top-title">
                <h4> Choose Counsellor</h4>
                <hr>
             </div>
             <div class="form-bg pt-20">
             <form id="contact_form" class="contact_form wrap-form clearfix" data-parsley-validate="true" method="post" action="{{route('sessionStep3')}}" >
                                @csrf
                                    @if(session()->get('success'))
                                        <div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                        {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->get('error'))
                                    <div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                                        {{ session()->get('error') }}
                                        </div>
                                     @endif
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label>Counsellor Name <span class="text-danger">*</span></label>
                                        <span class="text-input"><select data-parsley-required="true" id="counsellor_id" name="counsellor_id" class="@error('f_name') is-invalid @enderror " >
                                           <option selected="" disabled="Please select your time zone">Please select your Counsellor</option>
                                           @foreach ($counsellors as $counsellor)
                                            <option  value="{{$counsellor->id}}" >{{$counsellor->name}}</option>
                                           @endforeach
                                        </select>
                                      </span>
                                    </div>
                                    @error('counsellor_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label>Session Duration <span class="text-danger">*</span> </label>
                                        <span class="text-input"><select data-parsley-required="true" id="hourtime" name="hourtime" class="@error('f_name') is-invalid @enderror ">
                                           <option selected="" disabled="Please select your time zone">Please select your Hours</option>
                                           <option value="half">30 Minute</option>
                                           <option value="one">1 Hours</option>
                                        </select>
                                      </span>
                                      @error('hourtime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Please select your Session date <span class="text-danger">*</span> </label>
                                        <span class="text-input"><input data-parsley-required="true" class="@error('p_date') is-invalid @enderror" value="" name="p_date" id="datepicker"/>
                                      </span>
                                      <ul class="parsley-errors-list filled">
                                        <li class="parsley-required" id="p_date_sms"></li>
                                        </ul>
                                      @error('p_date')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                    {{-- <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label>Operating Week <span class="text-danger">*</span></label>
                                        <span class="text-input"><select data-parsley-required="true" id='day' name="day" class="@error('f_name') is-invalid @enderror " >
                                           <option selected="" disabled="Please select your time zone">Please select your Week</option>

                                        </select>
                                      </span>
                                    </div> --}}
                                    @error('day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label>Operating Hours <span class="text-danger">*</span> </label>
                                        <span class="text-input"><select data-parsley-required="true" id="time" name="time" class="@error('f_name') is-invalid @enderror " >
                                            <?php if(isset($data->session_time) and !empty($data->session_time)){ echo "<option value='$data->session_time'>$data->session_time</option>";} ?>
                                            <option value="">Please select your Hours</option>
                                         </select>
                                      </span>
                                      <ul class="parsley-errors-list filled" >
                                        <li class="parsley-required" id="time_sms"></li>
                                    </ul>
                                    </div>

                                    @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                    <div class="col-lg-6">
                                        <label>Fees</label>
                                    <span class="text-input" ><input id="fees" value="{{old('fees')}}" name="fees" readonly  type="text"></span>
                                        @error('fees')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="pt-20 text-right">
                                    <a href="{{url('/booking-session')}}"><button class=" col-md-2 cmt-btn  cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark" type="button">Back</button></a>
                                  <button class=" col-md-2 cmt-btn  cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark" type="submit">Next</button>
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

      <script>
          $(document).ready(function(){
            // $('#time').on('change', function(){
            //     $id=$('#counsellor_id').val();
            //     $date=$('#datepicker').val();
            //     $time=$(this).val();
            //     $.ajax({
            //     url:"{{ route('getCounsellorTime') }}",
            //     method:"POST",
            //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            //     data:{'id':$id,'time':$time,'date':$date,'_token': "{{ csrf_token() }}",},
            //                 success:function(data)
            //                 {
            //                     if(data.status){
            //                         $('#time_sms').html(data.response);
            //                     }
            //                     else{
            //                         $('#time_sms').html('');
            //                     }
            //                 }
            //         });

            //     });

                //for time
                $('#datepicker').on('change', function(){
                    $("#time").empty();
                    $id=$('#counsellor_id').val();
                    $hourtime=$('#hourtime').val();
                    $timetype=$(this).val();
                    $.ajax({
                    url:"{{ route('getCounsellorDay') }}",
                    method:"POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    data:{'id':$id,'p_date':$timetype,'timetype':$hourtime, '_token': "{{ csrf_token() }}",},
                                success:function(data)
                                {
                                    if(data.status){
                                        $('#p_date_sms').html('');
                                        $("#time").empty();
                                        $("#time").append('<option value="">Select Time</option>');
                                            $.each(data.Totaltiming,function(key, value)
                                            {
                                            $("#time").append('<option value='+value+'>' + value+ '</option>');
                                        });
                                        $('#fees').empty();
                                        $('#fees').val(data['fees']);
                                    }
                                    else{
                                        $('#datepicker').val('');
                                        $('#fees').empty();
                                        $("#time").empty();
                                        $('#p_date_sms').html(data.response);
                                    }

                            }
                        });

                });

          });
      </script>
    @endsection
