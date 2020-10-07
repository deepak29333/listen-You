<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<head>
<title>I Listen You</title>
<style>
.addmore{
        height: 10px;
         color: blue;
}
.remove{
        color: red;
}
#loader {
transition:all .3s ease-in-out;
	opacity:1;
	visibility:visible;
	position:fixed;
	height:100vh;
	width:100%;
	background:#fff;
	z-index:90000
}
#loader.fadeOut {
	opacity:0;
	visibility:hidden
}
.spinner {
	width:40px;
	height:40px;
	position:absolute;
	top:calc(50% - 20px);
	left:calc(50% - 20px);
	background-color:#333;
	border-radius:100%;
	-webkit-animation:sk-scaleout 1s infinite ease-in-out;
	animation:sk-scaleout 1s infinite ease-in-out
}
@-webkit-keyframes sk-scaleout {
0% {
-webkit-transform:scale(0)
}
100% {
-webkit-transform:scale(1);
opacity:0
}
}
@keyframes sk-scaleout {
0% {
-webkit-transform:scale(0);
transform:scale(0)
}
100% {
-webkit-transform:scale(1);
transform:scale(1);
opacity:0
}
}
</style>
<link href="{{ asset('backend/css/style.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/parsley.css') }}"/>

</head>
<body class="app">
<div id="loader">
  <div class="spinner"></div>
</div>
<script type="text/javascript">window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });</script>
<div>
  @yield('sidebar')
  <div class="page-container">
    @yield('header')
   @yield('content')
   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{asset('backend/js/vendor.js')}}"></script>
       <script src="{{ asset('frontend/js/parsley.js') }}"></script>
    <script type="text/javascript" src="{{asset('backend/js/bundle.js')}}"></script>

   @yield('footer')
  </div>
</div>

</body>
</html>
