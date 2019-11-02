<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('templates.user.partials._head')
<body class="hold-transition skin-blue sidebar-mini">
  <div id="page-container" class="page-header-light">

    <!-- Header -->
    @include('templates.user.partials._header')
    <!-- End Header -->

    <!-- Content  -->
    @yield('content')
    <!-- End Content -->
  </div>
  @include('templates.user.partials._script')

</body>
</html>