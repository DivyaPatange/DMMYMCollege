<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DMMYM | @yield('title')</title>
  <!-- plugins:css -->
  @include('admin.admin_layouts.link')
  @yield('customcss')
</head>
<body>
<script src="{{ asset('brandAssets/js/preloader.js') }}"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.admin_layouts.sidebar')
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      @include('admin.admin_layouts.topbar')
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          @yield('content')
        </main>
        <!-- partial:partials/_footer.html -->
        @include('admin.admin_layouts.footer')
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  @include('admin.admin_layouts.scripts')
  @yield('customjs')
</body>
</html> 