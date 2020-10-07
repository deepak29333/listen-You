@extends('frontend.layout.app')
@section('content')
       <!-- page-title -->
       <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-title-heading">
                            <h2 class="title">Contact Us</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span>Contact Us</span>
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
    <div id="google_map" class="google_map res-991-mt-60">
        <div class="map_container">
          <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.16374094796!2d76.81306273508741!3d28.64727993572817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1599724178473!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div>
    </div>
    <section class="cmt-row pt-0 mt-60 res-991-mt-0  pt-60  clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mt_60 res-991-mt-0">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="ti ti-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Email Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content cmt-bgcolor-skincolor icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="ti ti-location-pin"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Our Address</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p></p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-before-content cmt-bgcolor-darkgrey icon-ver_align-top style6">
                                <div class="featured-icon">
                                    <div class="cmt-icon cmt-icon_element-fill cmt-icon_element-color-white cmt-icon_element-size-sm cmt-icon_element-style-square">
                                        <i class="ti ti-alarm-clock"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Call us</h5>
                                    </div>
                                    <div class="featured-desc">
                                        <p><a href="tel:" target="_blank"></a></p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
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
