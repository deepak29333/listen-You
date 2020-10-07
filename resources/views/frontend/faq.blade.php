@extends('frontend.layout.app')
@section('content')
     <!-- page-title -->
     <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-title-heading">
                            <h2 class="title">frequently asked questions</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span>Faq</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->
     <!--site-main start-->
<div class="site-main">
  <section class="cmt-row faq-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pr-30 res-991-pr-0 res-991-pb-40">
                        <!-- section title -->
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title">Do you have<strong class="cmt-textcolor-skincolor"> Questions ?</strong></h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="accordion pt-10">
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">Is the information shared by me confidential / anonymous?</a></div>
                                <div class="toggle-content">
                                    <p>Yes! All information shared by you will be kept strictly confidential. All our team and staff members sign a Non Disclosure Agreement. However, during the session, if there is any information shared by you which indicates harm to self or others, we are under obligation to report the same to the legal authorities. Please go through our <a href="#" target="_blank">privacy policy.</a></p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">Can​ ​I​ ​use​ this service​ ​even​ ​if​ ​I​ ​am​ ​not​ ​diagnosed​ ​with​ ​anything?</a></div>
                                <div class="toggle-content">
                                    <p>Yes! These sessions are for everyone to share their pain and release their emotions.</p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">Can​ ​I​ ​cancel​ ​my​ ​booking​ ​once​ ​booked?</a></div>
                                <div class="toggle-content">
                                    <p>Yes. Booking can be cancelled and rescheduled if done atleast 48 hours prior to the appointment. </p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">I’m under 18 years of age.</a></div>
                                <div class="toggle-content">
                                    <p>You will require parental consent to attend this session.</p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">How much does a session cost?</a></div>
                                <div class="toggle-content">
                                    <p>The session is free of cost. If you wish to donate towards our cause, please follow the link.</p>
                                </div>
                            </div><!-- toggle end -->
                            <!-- toggle -->
                            <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                                <div class="toggle-title"><a href="#">How to book a session?</a></div>
                                <div class="toggle-content">
                                    <p>You can book a session via this website only. We will soon start a helpline number to help with bookings.</p>
                                </div>
                            </div><!-- toggle end -->
                       </div>
                    </div>
                </div>
            </div><!-- row end -->
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
