<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=1" />
      <title>I Listen U</title>
      <!-- bootstrap -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

      <!-- animate -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('css/parsley.css') }}"/>
      <!-- fontawesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- themify -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/themify-icons.css') }}"/>
      <!-- flaticon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/font/flaticon.css') }}"/>
      <!-- slick -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}">
      <!-- REVOLUTION LAYERS STYLES -->
      <link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('frontend/css/rs6.css') }}">
      <!-- prettyphoto -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/prettyPhoto.css') }}">
      <!-- shortcodes -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shortcodes.css') }}"/>
      <!-- main -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}"/>
      <!-- main -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/megamenu.css') }}"/>
      <!-- responsive -->
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}"/>
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   </head>
   <body>
    <div class="page">

       @include('frontend.layout.nav')
       @yield('content')
        @yield('footer')
   </body>
</html>
