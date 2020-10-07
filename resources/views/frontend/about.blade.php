@extends('frontend.layout.app')
@section('content')
   <!-- page-title -->
   <div class="cmt-page-title-row">
    <div class="cmt-page-title-row-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="page-title-heading">
                        <h2 class="title">About Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="index.html">Home</a>
                        </span>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page-title end -->
 <!--site-main start-->
<div class="site-main">


<!--about-section-->
<section class="cmt-row about_2-section clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mx-auto">
                <div class="ttm_single_image-wrapper">
                    <img class="img-fluid" src="{{asset('frontend/images/bg-image/col-bgimage-3.jpg')}}" alt="single_09">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pt-15 res-991-pt-30">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h5>Welcome to I Listen U</h5>
                            <h2 class="title">Understand Your  <strong>Source Of Emotions</strong></h2>
                        </div>
                    </div><!-- section title end -->
                    <p>At I Listen U, we strongly feel for all those who are going through this or similar unpleasant experiences in their life. We can reduce the levels of depression by a very simple act Listening. A lot of times, we find it difficult to express ourself, even to our near and dear ones. In this situation, simply pouring your heart out to a stranger, who’s only there to listen to you, can help immensely.
                    </p><p>We provide a platform for a safe expression of your story, your pain. Our team of listeners is specially trained through an extensive program using various skill building and emotional intelligence exercises to expand their inner space and serve as a true self reflection mirror to the person speaking.</p>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--about-section end-->
<section class=" pb-70 about_fea-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 col-xs-8 mx-auto">
                <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-grey pt-10 pl-10 pr-10 pb-10 z-index-1">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <div class="layer-content p-3 ">
                        <div class=" res-991-pr-0 res-991-pb-40">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="title"><strong>Our Vision</strong></h2>
                                </div>
                            </div><!-- section title end -->
                            <p>I Listen U is created with the purpose of providing a space for individuals to express themselves fully and completely and experience emotional release and inner growth through such expressions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 col-xs-8 mx-auto">
                <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-grey pt-10 pl-10 pr-10 pb-10 z-index-1">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <div class="layer-content p-3 ">
                        <div class=" res-991-pr-0 res-991-pb-40">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2 class="title"><strong>Our Mission</strong></h2>
                                </div>
                            </div><!-- section title end -->
                            <p>To provide a platform where individuals can express themselves in the presence of trained listeners and experience -</p>
                            <p>Acceptance, Freedom of expression, Clarity of thought and Emotional release</p>
                        </div>
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

<!--about_fea-section-->
<section class="cmt-row about_fea-section cmt-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mx-auto">
                <div class="cmt-bg cmt-col-bgcolor-yes  pt-10 pl-10 pr-10 pb-10 z-index-1">
                    <div class="cmt-col-wrapper-bg-layer cmt-bg-layer"></div>
                    <div class="layer-content  ">
                        <div class=" res-991-pr-0 res-991-pb-40">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--about_fea-sectio end-->

</div><!--site-main end-->

@endsection
@section('footer')
    @include('frontend.layout.footer')
@endsection
