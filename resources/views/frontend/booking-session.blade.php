@extends('frontend.layout.app')
@section('content')

<div class="site-main">
    <div class="container form_step pt-50 pb-50">
       <!--<div class="row">-->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
             <div class="custom_background">
                <div class="top-title">
                <h4>Basic Information</h4>
                <hr>
             </div>
             <div class="form-bg pt-20">
             <form id="contact_form" class="contact_form wrap-form clearfix" method="post" data-parsley-validate="true" action="{{route('sessionStep1')}}" >
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
                                    <div class="col-lg-6">
                                        <label>First Name <span class="text-danger">*</span></label>
                                    <span class="text-input" ><input name="f_name" type="text" value="{{ $booking->f_name ?? old('f_name')}}" data-parsley-required="true" data-parsley-pattern="^[a-zA-Z ]+$" class="@error('f_name') is-invalid @enderror "  placeholder="First Name"></span>
                                        @error('f_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Last Name</label>
                                        <span class="text-input "><input name="l_name" type="text" class="@error('l_name') is-invalid @enderror" data-parsley-pattern="^[a-zA-Z ]+$" value="{{ $booking->l_name ?? old('l_name')}}" placeholder="Last Name" ></span>
                                        @error('l_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <span class="text-input"><input name="mobile_no" data-parsley-minlength="10" data-parsley-maxlength="10" data-parsley-pattern="^[0-9]+$" data-parsley-required-message="Enter your Valid Mobile No." data-parsley-required="true" data-parsley-error-message="Enter your Valid Mobile No." class="@error('mobile_no') is-invalid @enderror" type="text" value="{{ $booking->mobile_no ?? old('mobile_no')}}" placeholder="Phone Number" ></span>
                                        @error('mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <span class="text-input "><input name="email" type="email" class="@error('email') is-invalid @enderror" data-parsley-type="email" data-parsley-required-message="Enter Valid Email id" data-parsley-error-message="Please enter your valid email id" data-parsley-required="true" value="{{ $booking->email ?? old('email')}}" placeholder="Email" ></span>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <span class="text-input ">
                                            <select selected="" data-parsley-required="true" class="@error('gender') is-invalid @enderror" name="gender" >
                                           <option  value="">Select A Gender</option>
                                           <option value="female" <?php if(isset($booking->gender)){if($booking->gender=="female"){echo "selected";}} ?> >Female</option>
                                           <option value="male" <?php if(isset($booking->gender)){if($booking->gender=="male"){echo "selected";}} ?> >Male</option>
                                           <option value="other" <?php if(isset($booking->gender)){if($booking->gender=="other"){echo "selected";}} ?> >Other</option>
                                        </select></span>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="text-right">
                                <button class="btn btn-primary col-md-2 "  type="submit">Next</button>
                                </div>
                            </form>
             </div>
             </div>
          </div>
       <!--</div>-->
    </div>
    </div>
    @endsection
    @section('footer')
        @include('frontend.layout.footer')

    @endsection
