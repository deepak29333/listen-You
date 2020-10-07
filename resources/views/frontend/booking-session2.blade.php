@extends('frontend.layout.app')
@section('content')

<div class="site-main">
    <div class="container form_step pt-50 pb-50">
       <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="custom_background">
                <div class="top-title">
                <h4> Information</h4>
                <hr>
             </div>
             <div class="form-bg pt-20">
             <form id="contact_form" class="contact_form wrap-form clearfix" method="post" action="{{route('sessionStep2')}}" >
                @csrf
                                    @if(session()->get('success'))
                                        <div class="notification is-success">
                                        {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->get('error'))
                                    <div class="notification is-danger">
                                    {{ session()->get('error') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Time Zone</label>
                                        <span class="text-input"><select name="time_zone" class="@error('time_zone') is-invalid @enderror" >
                                           <option selected="" disabled="Please select your time zone">Please select your time zone</option>
                                           <option value="india" >India</option>
                                           <option value="indonesia/thailand" >Indonesia / Thailand</option>
                                           <option value="malaysia/singapore/hongkong" >Malaysia / Singapore / Hongkong</option>
                                           <option value="japan" >Japan</option>
                                           <option value="australia" >Australia</option>
                                        </select>
                                      </span>
                                      @error('time_zone')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Your city of residence</label>
                                    <span class="text-input"><input class="@error('city_name') is-invalid @enderror" name="city_name" type="text" value="{{ isset($booking->city_residence) ? $booking->city_residence: old('city_name') }}" placeholder="Your city of residence" ></span>
                                        @error('city_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Please select your preferred date</label>
                                        <span class="text-input"><input class="@error('p_date') is-invalid @enderror" value=" {{isset($booking->pre_date) ? $booking->pre_date: old('p_date') }}" name="p_date" id="datepicker"/>
                                      </span>
                                      @error('p_date')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Please select your preferred time</label>
                                        <span class="text-input"><input  class="@error('p_time') is-invalid @enderror" name="p_time" value="{{ isset($booking->pre_time) ? $booking->pre_time: old('p_time') }}" id="timepicker"/>
                                           <small>All the timings are in IST</small>
                                      </span>
                                      @error('p_time')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="pt-20">
                                    <a href="/booking-session"><button class=" col-md-2 cmt-btn  cmt-btn-shape-rounded cmt-btn-style-border cmt-btn-color-dark" type="button">Back</button></a>
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
@endsection
