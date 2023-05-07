<!DOCTYPE html>
<html lang="en" @if (app()->currentLocale() =='ar')dir="rtl" @endif>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('import/assets/admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('import/assets/admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('import/assets/admin/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('import/assets/admin/images/favicon.ico')}}" />
  </head>
  <body>
    <div class="container-scroller ">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo text-success" href="{{ route('admin.index') }}"><h1>{{ __('admin.maysara') }}</h1></a>
          <a class="navbar-brand brand-logo-mini text-success" href="index.html"><h1>M</h1></a>
        </div>

        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#" method="GET">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" name="search" placeholder="Search projects" required>
              </div>
            </form>
          </div>

          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>

            @foreach(LaravelLocalization::getSupportedLocales()
            as $localeCode => $properties)
                {{-- {{ $localeCode }} --}}
                @if (app()->currentLocale()!=$localeCode)
                <a class="navbar-nav">
                    <a class="nav-link" rel="alternate"
                     hreflang="{{ $localeCode }}"
                     href="{{ LaravelLocalization::getLocalizedURL($localeCode, null,
                      [], true) }}">
                      <img width="30" src="{{ asset('import/assets/admin/images/'.$properties['flag']) }}" alt="">

                    </a>
                </a>
                @endif

            @endforeach


          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
@include('admin.layouts.sidbar')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('import/assets/admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('import/assets/admin/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('import/assets/admin/js/jquery.cookie.js" type="text/javascript')}}""></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('import/assets/admin/js/off-canvas.js')}}"></script>
  <script src="{{ asset('import/assets/admin/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('import/assets/admin/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="{{ asset('import/assets/admin/js/dashboard.js')}}"></script>
  <script src="{{ asset('import/assets/admin/js/todolist.js')}}"></script>
  <script src="{{ asset('import/assets/admin/js/file-upload.js')}}"></script>
  <!-- End custom js for this page -->
</body>
</html>
