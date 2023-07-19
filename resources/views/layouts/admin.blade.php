<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{URL::asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/css/vendor.bundle.base.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/vendors/css/vendor.bundle.addons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/shared/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/demo_1/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <link href="{{URL::asset('assets/images/fav_ico.png')}}" rel="shortcut icon">

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="main-panel">

          <div class="content-wrapper">
            @yield('contenido')

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->


    <script src="{{URL::asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{URL::asset('assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{URL::asset('assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{URL::asset('assets/js/shared/misc.js')}}"></script>
    <script src="{{URL::asset('assets/js/demo_1/dashboard.js')}}"></script>
    <script src="{{URL::asset('assets/js/shared/jquery.cookie.js')}}"></script>

    <script src="{{URL::asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('js/demo/datatables-demo.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('scripts')
  </body>
</html>
