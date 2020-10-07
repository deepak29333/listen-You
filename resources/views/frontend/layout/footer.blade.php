 <!--footer start-->
 <footer class="footer cmt-bgcolor-darkgrey widget-footer clearfix pt-50">
    <div class="bottom-footer-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright text-center">
                   <div class="social-icons circle pb-25">
                      <ul class="list-inline cmt-textcolor-skincolor">
                         <li class="social-facebook"><a class="tooltip-top" target="_blank" href="" data-tooltip="Facebook"><i class="ti ti-facebook"></i></a></li>
                         <li class="social-twitter"><a class="tooltip-top" target="_blank" href="" data-tooltip="twitter"><i class="ti ti-twitter-alt"></i></a></li>
                         <li class="social-instagram"><a class="tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="ti ti-instagram"></i></a></li>
                         <li class="social-twitter"><a class="tooltip-top" target="_blank" href="" data-tooltip="Linkedin"><i class="ti ti-linkedin"></i></a></li>
                      </ul>
                   </div>
                    <div id="menu-footer-menu">
                        <ul class="footer-nav-menu text-center pb-15">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="{{url('/contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                    <span>Copyright © 2020&nbsp;<a href="#">I Listen U</a> Designed By <a href="https://www.deltait.co.in/" target="_blank">Delta Web Services</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
 </footer>
 <a href="https://deltait.co.in/demos/listen-final/booking-session"  data-tooltip="Click" class="float-form">
    <!-- <i class="flaticon-email my-float"></i> -->
    Book A Session
    </a>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>


  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="{{ asset('frontend/js/tether.min.js') }}"></script>

  <script src="{{ asset('frontend/js/jquery.easing.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-waypoints.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
  <script src="{{ asset('frontend/js/imagesloaded.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-isotope.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/parsley.js') }}"></script>
  <!-- Revolution Slider -->

  <script src="{{ asset('frontend/js/slider.js') }}"></script>
  <!-- SLIDER REVOLUTION 6.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script  src="{{ asset('frontend/js/revolution.tools.min.js') }}"></script>
  <script  src="{{ asset('frontend/js/rs6.min.js') }}"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script>
    var dateToday = new Date();
    dateToday.setDate(dateToday.getDate()+1);
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
		footer:true,
        format:'dd/mm/yyyy', minDate: dateToday });
    $('#timepicker').timepicker({
        uiLibrary: 'bootstrap4'
    });
    $('.selectpicker').selectpicker();

</script>
  <!-- Javascript end-->
 <!--footer end-->
