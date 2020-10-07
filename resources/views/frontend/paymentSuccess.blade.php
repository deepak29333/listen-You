@extends('frontend.layout.app')
@section('content')
@php session()->forget('id');
@endphp
       <!-- page-title -->
       <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-title-heading">
                            <h2 class="title">Payment Success</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span>Payment Success</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
     <!--site-main start-->
<div class="site-main">

     <!--google_map-->

    <section class="cmt-row pt-0 mt-60 res-991-mt-0  pt-60  clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <h3><span class="text-success"> Your Payment is Success <br>
                    Payment reciept and Session Booking Details Sent On Your email.</span></h3>
                </div>
            </div>
        </div>
    </section>


    <!--cta-section-->
    <section class="cmt-row cta_2-section cmt-bgcolor-skincolor bg-img8 cmt-bg cmt-bgimage-yes clearfix">
        <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
        <div class="container">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="row-title">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title">Are You Looking For Session <strong>Just Call Us!</strong></h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-white float-lg-right mb-25 res-991-mb-0 res-991-mt-15" href="#">book a Session</a>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!--cta-section end-->
</div><!--site-main end-->
@endsection
@section('footer')
    @include('frontend.layout.footer')
@endsection
