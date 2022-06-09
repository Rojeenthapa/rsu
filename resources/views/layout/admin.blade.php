<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>RSU</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
      <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
   <!-- CSS Files -->
   <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('/css/normalize.css')}}" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('/css/animate.min.css')}}" />
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/css/fontawesome-all.min.css')}}" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/css/fonts/flaticon.css')}}" />
    <link rel="stylesheet" href="css/font/flaticon.css" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('/css/meanmenu.min.css')}}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('/css/magnific-popup.css')}}" />
    <!-- Slick Caousel CSS -->
    <link rel="stylesheet" href="{{asset('/css/vendor/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/vendor/slick/slick-theme.css')}}" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('/css/vendor/OwlCarousel/owl.carousel.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('/css/vendor/OwlCarousel/owl.theme.default.min.css')}}"
    />
    <!-- Nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('/css/vendor/slider/css/nivo-slider.css')}}" />
     <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset('/css/select2.min.css')}}">
<!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{asset('/css/jquery.datetimepicker.css')}}">
    <!-- Elements CSS -->
    <link rel="stylesheet" href="{{asset('/css/elements.css')}}" />
    <!-- Swiper CSS -->
    <link
      rel="stylesheet"
      href="{{asset('/css/https://unpkg.com/swiper/swiper-bundle.min.css')}}"
    />
    <!-- Custom CSS -->
    <link rel="{{asset('/css/stylesheet" href="style.css')}}" />
    <!-- jqury ui -->
    <link
      rel="stylesheet"
      href="{{asset('/css//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css')}}"
    />
    <link href="{{asset('/css/https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous')}}">
  </head>
    <!-- Modernizr Js -->
    <script src="js/modernizr-3.5.0.min.js"></script>
  </head>

  <body>
      <div class="wrapper">
      @include('layout.inc.sidebar')    


    <!-- scrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollUp">
      <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- scrollUp End Here -->
    <div id="wrapper" class="wrapper">
 
     
     @include('layout.header')
     @yield('content')
     @include('layout.footer')
    </div>
     
     <!--   Core JS Files   -->
     <script src="{{assets('assets/js/core/popper.min.js')}}" defer></script>
     <script src="{{assets('assets/js/core/bootstrap.min.js')}}" defer></script>
     <script src="{{assets('assets/js/plugins/perfect-scrollbar.min.js')}}" defer></script>
     <script src="{{assets('assets/js/plugins/smooth-scrollbar.min.js')}}" defer></script>
     <script src="{{assets('assets/js/core/popper.min.js')}}" defer></script>
     <script>

    <!-- jquery-->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- jquery UI -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Waypoints Js -->
    <script src="js/waypoints.min.js"></script>
    <!-- Parallaxie Js -->
    <script src="js/parallaxie.js"></script>

    <!-- Owl Carousel Js -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js"></script>
<!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Magnific Popup Js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- Isotope Js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- Slick Cauosel JS -->
    <script src="vendor/slick/slick.min.js"></script>
     <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <!-- Select2 Js -->
        <script src="js/select2.min.js"></script>
<!-- Datetimepicker Js -->
    <script src="js/jquery.datetimepicker.full.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
  </body>
</html>
