<!doctype html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:59:03 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Metoxi | Bootstrap 5 Admin Dashboard Template</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png">

  <!--plugins-->
  <link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/plugins/metismenu/metisMenu.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/plugins/metismenu/mm-vertical.css">
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css">
  <!--bootstrap css-->
  <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset('backend')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="{{asset('backend')}}/sass/main.css" rel="stylesheet">
  <link href="{{asset('backend')}}/sass/dark-theme.css" rel="stylesheet">
  <link href="{{asset('backend')}}/sass/semi-dark.css" rel="stylesheet">
  <link href="{{asset('backend')}}/sass/bordered-theme.css" rel="stylesheet">
  <link href="{{asset('backend')}}/sass/responsive.css" rel="stylesheet">

</head>

<body>

  <!--start header-->
  @include('admin.layout.header')
  <!--end top header-->


  <!--start sidebar-->
  @include('admin.layout.sidebar')
  <!--end sidebar-->


  <!--start main wrapper-->
  @yield('admin_content')
  <!--end main wrapper-->

  <!--start overlay-->
  <div class="overlay btn-toggle"></div>
  <!--end overlay-->

  <!--start footer-->
  @include('admin.layout.footer')
  <!--top footer-->

  <!--start cart-->
  @include('admin.layout.cart')
  <!--end cart-->

  <!--start switcher-->
  @include('admin.layout.switcher')
  <!--start switcher-->


  <!--bootstrap js-->
  <script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
  <!--plugins-->
  <script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{asset('backend')}}/assets/plugins/metismenu/metisMenu.min.js"></script>
  <script src="{{asset('backend')}}/assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="{{asset('backend')}}/assets/js/index.js"></script>
  <script src="{{asset('backend')}}/assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{asset('backend')}}/assets/js/main.js"></script>


</body>


<!-- Mirrored from codervent.com/matoxi/demo/vertical-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 08:59:56 GMT -->

</html>