<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

@include('partials.head')

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- fixed-top-->
@include('partials.nav')

<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('partials.sidebar')
  
  @yield('content')
  
  <!-- ////////////////////////////////////////////////////////////////////////////-->
@include('partials.footer')

@include('partials.javascript')

</body>
</html>