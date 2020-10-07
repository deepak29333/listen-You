
 @extends('frontend.layout.app')
 <!--page start-->
  @section('content')


    <!-- START homemainclassicslider REVOLUTION SLIDER 6.1.0 -->
<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
   <rs-module id="rev_slider_1_1" data-version="6.1.0">
       <rs-slides>

           <rs-slide data-key="rs-1" data-title="Slide1" data-thumb="{{asset('frontend/images/slider/slide.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:3dcurtain-vertical;sl:d;">
s
               <img src="{{ asset('frontend/images/slider/slide.jpg')}}" title="slider-bg-image" width="1920" height="690" class="rev-slidebg" data-no-retina>

               <rs-layer id="slider-1-slide-1-layer-1"
                   data-type="text"
                   data-xy="xo:50px,20px,15px,10px;yo:230px,230px,119px,78px;"
                   data-text="w:normal;s:30,30,18,18;l:20,20,18,18;a:left;fw:400;"
                   data-color="#0b0c26"
                   data-rsp_ch="on"
                   data-padding="t:12,12,10,10;r:30,30,20,15;b:12,12,10,10;l:30,30,20,15;"
                   data-ford="frame_0;frame_1;frame_2;frame_999;"
                   data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-20deg;oY:0%;"
                   data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-10deg;oY:0%;e:power4.in;st:500;sp:500;sR:200;" data-frame_999="st:w;sp:2000;sR:7500;"
                   data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1000;sp:500;"
                   style="z-index:50;background-color:rgba(255,255,255,.88);text-transform:uppercase;" >Understand  Your
               </rs-layer>

               <rs-layer id="slider-1-slide-1-layer-2"
                   data-type="text"
                   data-xy="xo:50px,20px,15px,10px;yo:285px,285px,169px,127px;"
                   data-text="w:normal;s:59,59,49,36;l:60,60,50,38;a:left;fw:300;"
                   data-color="#0b0c26"
                   data-rsp_ch="on"
                   data-padding="t:15,15,14,12;r:30,30,20,20;b:15,15,14,12;l:30,30,20,20;"
                   data-ford="frame_0;frame_1;frame_2;frame_999;"
                   data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-10deg;oY:0%;"
                   data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-5deg;oY:0%;e:power4.in;st:900;sp:500;sR:600;" data-frame_999="st:w;sp:2000;sR:7100;"
                   data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1400;sp:500;"
                   style="z-index:48;background-color:rgba(255,255,255,.88);font-family: 'Roboto', sans-serif; text-transform:uppercase;" > <strong class="cmt-textcolor-skincolor"> Source   </strong> of <strong class="cmt-textcolor-skincolor">Emotions</strong>
               </rs-layer>

               <rs-layer  id="slider-1-slide-1-layer-3"
                   class="rev-btn cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-white"
                   data-type="button"
                   data-xy="x:l;xo:50px,20px,15px,10px;y:b,b,b,b;yo:230px,230px,117px,78px;"
                   data-rsp_ch="on"
                   data-color="#1d2143"
                   data-text="s:15;a:c;fw:600;"
                   data-frame_0="y:50px;"
                   data-frame_1="e:power4.out;st:900;sp:500;sR:900;"
                   data-frame_999="st:w;sp:2000;sR:7600;"
                   data-frame_hover="c:#fff;bow:1px,1px,1px,1px;boc:#809bce;bgc:#809bce"
                   style="z-index:7;text-transform: capitalize;">Book a Session!
               </rs-layer>

           </rs-slide>

           <rs-slide data-key="rs-2" data-title="Slide2" data-thumb="{{asset('frontend/images/slider/slide2.jpg')}}" data-anim="ei:d;eo:d;s:2000ms;r:0;t:3dcurtain-horizontal;sl:d;">

               <img src="{{ asset('frontend/images/slider/slide4.jpg')}}" title="slider-bg-image" width="1920" height="690" class="rev-slidebg" data-no-retina>

               <rs-layer id="slider-1-slide-2-layer-1"
                   data-type="text"
                   data-xy="xo:50px,20px,15px,10px;yo:230px,230px,119px,78px;"
                   data-text="w:normal;s:30,30,18,18;l:20,20,18,18;a:left;fw:400;"
                   data-color="#0b0c26"
                   data-rsp_ch="on"
                   data-padding="t:12,12,10,10;r:30,30,20,15;b:12,12,10,10;l:30,30,20,15;"
                   data-ford="frame_0;frame_1;frame_2;frame_999;"
                   data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-20deg;oY:0%;"
                   data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-10deg;oY:0%;e:power4.in;st:500;sp:500;sR:200;" data-frame_999="st:w;sp:2000;sR:7500;"
                   data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1000;sp:500;"
                   style="z-index:50;background-color:rgba(255,255,255,.88);text-transform:uppercase;" >Feel Positive
               </rs-layer>

               <rs-layer id="slider-1-slide-2-layer-2"
                   data-type="text"
                   data-xy="xo:50px,20px,15px,10px;yo:285px,285px,169px,127px;"
                   data-text="w:normal;s:59,59,49,36;l:60,60,50,38;a:left;fw:300;"
                   data-color="#0b0c26"
                   data-rsp_ch="on"
                   data-padding="t:15,15,14,12;r:30,30,20,20;b:15,15,14,12;l:30,30,20,20;"
                   data-ford="frame_0;frame_1;frame_2;frame_999;"
                   data-frame_0="x:100px,82px,62px,38px;sX:0.8;sY:0.8;rY:-10deg;oY:0%;"
                   data-frame_1="x:50px,41px,31px,19px;sX:1.5;sY:1.5;rY:-5deg;oY:0%;e:power4.in;st:900;sp:500;sR:600;" data-frame_999="st:w;sp:2000;sR:7100;"
                   data-frame_2="x:0px;sX:1;sY:1;rY:0deg;oX:50%;oY:0%;oZ:0;tp:600px;e:power4.out;st:1400;sp:500;"
                   style="z-index:48;background-color:rgba(255,255,255,.88);font-family: 'Roboto', sans-serif; text-transform:uppercase;" >And <strong class="cmt-textcolor-skincolor"> Light  </strong>  <strong class="cmt-textcolor-skincolor">Inside</strong>
               </rs-layer>

               <rs-layer  id="slider-1-slide-2-layer-3"
                   class="rev-btn cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-fill cmt-btn-color-white"
                   data-type="button"
                   data-xy="x:l;xo:50px,20px,15px,10px;y:b,b,b,b;yo:230px,230px,117px,78px;"
                   data-border="bos:solid;boc:#fff;bow:1px,1px,1px,1px;"
                   data-rsp_ch="on"
                   data-color="#1d2143"
                   data-text="s:15;a:c;fw:600;"
                   data-frame_0="y:50px;"
                   data-frame_1="e:power4.out;st:900;sp:500;sR:900;"
                   data-frame_999="st:w;sp:2000;sR:7600;"
                   data-frame_hover="c:#fff;bow:1px,1px,1px,1px;boc:#809bce;bgc:#809bce"
                   style="z-index:7;text-transform: capitalize;">Book a Session!
               </rs-layer>

           </rs-slide>
       </rs-slides>
       <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
   </rs-module>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">
               <!--skill-section-->
   <section class="cmt-row skill-section clearfix">
       <div class="container">
           <div class="row row-equal-height">
               <div class="col-xl-6 col-lg-6 col-md-7 col-sm-7 mx-auto">
                   <div class="d-flex cmt-boxes-spacing-20px">
                       <div class="cmt-box-col-wrapper">
                           <!-- ttm_single_image-wrapper -->
                           <div class="ttm_single_image-wrapper">
                               <img class="img-fluid" src="{{ asset('frontend/images/single-img-05.jpg')}}" alt="single_01">
                           </div>
                       </div>
                       <div class="cmt-box-col-wrapper">
                           <!-- ttm_single_image-wrapper -->
                           <div class="ttm_single_image-wrapper pb-20">
                               <img class="img-fluid" src="{{ asset('frontend/images/single-img-06.jpg')}}" alt="single_02">
                           </div>
                           <!-- ttm_single_image-wrapper -->
                           <div class="ttm_single_image-wrapper">
                               <img class="img-fluid" src="{{ asset('frontend/images/single-img-07.jpg')}}" alt="single_03">
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                   <div class="pl-15 mt-15 text-left res-991-pl-0 res-991-mt-15">
                       <!-- section title -->
                       <div class="section-title">
                           <div class="title-header">
                               <h5>ABOUT Us</h5>
                               <h2 class="title">Understand  Your <strong>Source of Emotions</strong></h2>
                           </div>
                           <div class="title-desc">This space is our source of guidance, strength and joy. When we stop expressing ourself.</div>
                       </div><!-- section title end -->
                       <p class="mb-0">At I Listen U, we strongly feel for all those who are going through this or similar unpleasant experiences in their life.  We can reduce the levels of depression by a very simple act  Listening. A lot of times, we find it difficult to express ourself, even to our near and dear ones. In this situation, simply pouring your heart out to a stranger, who’s only there to listen to you, can help immensely. </p><p>We provide a platform for a safe expression of your story, your pain. Our team of listeners is specially trained through an extensive program using various skill building and emotional intelligence exercises to expand their inner space and serve as a true self reflection mirror to the person speaking. <a class="cmt-textcolor-skincolor" href="#">Read More</a></p>
                   </div>
               </div>
           </div><!-- row end -->
       </div>
   </section>
   <!--skill-section-->
       <!--services-section-->
       <section class="cmt-row services-section cmt-bgcolor-darkgrey bg-img3 cmt-bg cmt-bgimage-yes clearfix">
          <div class="cmt-row-wrapper-bg-layer cmt-bg-layer"></div>
          <div class="container">
             <!-- row -->
             <div class="row">
                <div class="col-lg-12">
                   <!-- section title -->
                   <div class="section-title title-style-center_text">
                      <div class="title-header">
                         <h5>Our Space</h5>
                         <h2 class="title">Deep inside us, there is a<br>  <strong> quiet space</strong></h2>
                      </div>
                   </div>
                   <!-- section title end -->
                </div>
             </div>
             <!-- row end -->
             <!-- row -->
             <div class="row mb-40 res-991-mb-15">
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <!--featured-icon-box-->
                   <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                      <div class="featured-content">
                         <div class="featured-title">
                            <h5>Emotions</h5>
                         </div>
                         <div class="featured-desc">
                            <p>This space is our source of guidance, strength and joy. When we stop expressing ourself.</p>
                         </div>
                      </div>
                   </div>
                   <!-- featured-icon-box end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <!--featured-icon-box-->
                   <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                      <div class="featured-content">
                         <div class="featured-title">
                            <h5>Mind</h5>
                         </div>
                         <div class="featured-desc">
                            <p>This space is our source of guidance, strength and joy. When we stop expressing ourself.</p>
                         </div>
                      </div>
                   </div>
                   <!-- featured-icon-box end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <!--featured-icon-box-->
                   <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                      <div class="featured-content">
                         <div class="featured-title">
                            <h5>Breath</h5>
                         </div>
                         <div class="featured-desc">
                            <p>This space is our source of guidance, strength and joy. When we stop expressing ourself.</p>
                         </div>
                      </div>
                   </div>
                   <!-- featured-icon-box end-->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <!--featured-icon-box-->
                   <div class=" featured-icon-box icon-align-top-content style5 border bor_rad_3">
                      <div class="featured-content">
                         <div class="featured-title">
                            <h5>Body</h5>
                         </div>
                         <div class="featured-desc">
                            <p>This space is our source of guidance, strength and joy. When we stop expressing ourself.</p>
                         </div>
                      </div>
                   </div>
                   <!-- featured-icon-box end-->
                </div>
             </div>
             <!-- row end -->
          </div>
       </section>
       <!--services-section-->
       <!--cta-section-->
       <section class="cmt-row cta-section clearfix">
          <div class="container">
             <!-- row -->
             <div class="row no-gutters">
                <div class="col-lg-12">
                   <div class="cmt-col-bgcolor-yes cmt-bgcolor-skincolor cmt-col-bgimage-yes cmt-bg col-bg-img-two cmt-bg-pattern spacing-2 border bor_rad_5">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                         <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                      <div class="layer-content cmt-textcolor-white">
                         <div class="d-lg-flex justify-content-between align-items-center">
                            <div>
                               <h4 class="mb-5">Are You Looking For Session Just Call Us!</h4>
                               <h5><span class="font-weight-lighter"> Call us today 1-888-123-45678 or email us: info@domainname.com</span></h5>
                            </div>
                        <a class="cmt-btn cmt-btn-size-md cmt-btn-shape-round cmt-btn-style-border cmt-btn-color-white mb-10 res-991-mb-0 res-991-mt-15" href="{{url('booking-session')}}">book a Session</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- row end -->
          </div>
       </section>
       <!--cta-section-->
       <!--testimonial-section-->
       <section class="cmt-row testimonial_2-section bg-layer-equal-height cmt-bg bg-img4 cmt-bgimage-yes clearfix">
          <div class="bg-anim-2 text-right">
             <img class="img-fluid" src="{{ asset('frontend/images/anim_img_02.png')}}" alt="">
          </div>
          <div class="container">
             <div class="row">
                <div class="col-lg-6">
                   <!-- col-img-img-three -->
                   <div class="col-bg-img-three cmt-col-bgimage-yes cmt-bg pt-100 pb-90">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                         <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                   </div>
                   <!-- col-img-bg-img-one end-->
                </div>
                <div class="col-lg-6 col-xs-12">
                   <div class="cmt-col-bgcolor-yes cmt-bg cmt-bgcolor-white box-shadow spacing-3">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                         <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                      <div class="layer-content">
                         <!-- section title -->
                         <div class="section-title title-style-center_text">
                            <div class="title-header">
                               <h5>TESTIMONIALS</h5>
                               <h2 class="title">What Our <strong>Client Says?</strong></h2>
                            </div>
                         </div>
                         <!-- section title end -->
                         <div class="row slick_slider slick-dots-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "dots":true, "arrows":false, "autoplay":true, "infinite":true,  "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 1}}, {"breakpoint":550,"settings":{"slidesToShow": 1}}]}'>
                            <div class="col-lg-12">
                               <!-- testimonials -->
                               <div class="testimonials cmt-testimonial-box-view-style1">
                                  <div class="testimonial-content">
                                     <blockquote class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</blockquote>
                                     <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                           <img class="img-fluid" src="{{ asset('frontend/images/testimonial/01.jpg')}}" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial-caption">
                                           <h5>Himanshu Singh</h5>
                                           <label>Delhi</label>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- testimonials end -->
                            </div>
                            <div class="col-lg-12">
                               <!-- testimonials -->
                               <div class="testimonials cmt-testimonial-box-view-style1">
                                  <div class="testimonial-content">
                                     <blockquote class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</blockquote>
                                     <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                           <img class="img-fluid" src="{{ asset('frontend/images/testimonial/02.jpg')}}" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial-caption">
                                           <h5>Adnan Saifi</h5>
                                           <label>Noida</label>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- testimonials end -->
                            </div>
                            <div class="col-lg-12">
                               <!-- testimonials -->
                               <div class="testimonials cmt-testimonial-box-view-style1">
                                  <div class="testimonial-content">
                                     <blockquote class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</blockquote>
                                     <div class="testimonial-avatar">
                                        <div class="testimonial-img">
                                           <img class="img-fluid" src="{{ asset('frontend/images/testimonial/03.jpg')}}" alt="testimonial-img">
                                        </div>
                                        <div class="testimonial-caption">
                                           <h5>Ankit Gupta</h5>
                                           <label>Delhi</label>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <!-- testimonials end -->
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- row end -->
          </div>
       </section>
       <!--testimonial-section-->
       <section class="cmt-row faq-section clearfix">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-lg-7">
                   <div class="pr-30 res-991-pr-0 res-991-pb-40">
                      <!-- section title -->
                      <div class="section-title">
                         <div class="title-header">
                            <h5>WHAT WE OFFER</h5>
                            <h2 class="title">Do you have<strong class="cmt-textcolor-skincolor"> Questions ?</strong></h2>
                         </div>
                      </div>
                      <!-- section title end -->
                      <div class="accordion pt-10">
                         <!-- toggle -->
                         <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                            <div class="toggle-title"><a href="#" class="active">Can​ ​I​ ​cancel​ ​my​ ​booking​ ​once​ ​booked?</a></div>
                            <div class="toggle-content">
                               <p>Yes. Booking can be cancelled and rescheduled if done atleast 48 hours prior to the appointment. </p>
                            </div>
                         </div>
                         <!-- toggle end -->
                         <!-- toggle -->
                         <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                            <div class="toggle-title"><a href="#"  >Is the information shared by me confidential / anonymous?</a></div>
                            <div class="toggle-content">
                               <p>Yes! All information shared by you will be kept strictly confidential. All our team and staff members sign a Non Disclosure Agreement. However, during the session, if there is any information shared by you which indicates harm to self or others, we are under obligation to report the same to the legal authorities. Please go through our <a href="#" target="_blank">privacy policy.</a></p>
                            </div>
                         </div>
                         <!-- toggle end -->
                         <!-- toggle -->
                         <div class="toggle cmt-style-classic cmt-toggle-title-bgcolor-grey cmt-control-right-true">
                            <div class="toggle-title"><a href="#">Can​ ​I​ ​use​ this service​ ​even​ ​if​ ​I​ ​am​ ​not​ ​diagnosed​ ​with​ ​anything?</a></div>
                            <div class="toggle-content">
                               <p>Yes! These sessions are for everyone to share their pain and release their emotions.</p>
                            </div>
                         </div>
                         <!-- toggle end -->
                      </div>
                   </div>
                </div>
                <div class="col-lg-5">
                   <div class="cmt-bg cmt-col-bgcolor-yes cmt-bgcolor-darkgrey cmt-col-bgimage-yes col-bg-img-two spacing-2 pt-10 mt-0 z-index-1">
                      <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                         <div class="cmt-col-wrapper-bg-layer-inner"></div>
                      </div>
                      <div class="layer-content">
                         <div class="section-title">
                            <div class="title-header">
                               <h2 class="title text-center"> <strong><br>Kindly Note </strong></h2>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="down-box-content">
                      <ul>
                         <li>This is not a counseling session.</li>
                         <li>The listeners will not be providing direct solutions to your current life challenges – they are simply there to help you express yourself completely and realize your own solutions through a guided conversation.</li>
                         <li>These sessions are completely confidential.</li>
                      </ul>
                   </div>
                </div>
             </div>
             <!-- row end -->
          </div>
       </section>
    </div>
    <!--site-main end-->

    <!--form-->

    <!--form-->
    <!--back-to-top start-->
    <!-- <a id="totop" href="#top">
       <i class="fa fa-angle-up"></i>
       </a> -->
    <!--back-to-top end-->
 <!-- page end -->

@endsection
@section('footer')
    @include('frontend.layout.footer')
@endsection
