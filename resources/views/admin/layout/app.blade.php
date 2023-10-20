@include('admin.layout.header')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
@include('admin.layout.nav')
  <!-- Main Sidebar Container -->
@include('admin.layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
 @include('admin.layout.breadcrumb')
    <!-- /.content-header -->
    @yield('content')

    <!-- Main content -->
  </div>
  <!-- /.content-wrapper -->
 @include('admin.layout.footer')
</body>
