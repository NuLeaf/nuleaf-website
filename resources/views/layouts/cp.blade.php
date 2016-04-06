<!DOCTYPE html>
<html lang="en">
  @include ('_head')

  <!-- BEGIN LOCAL STYLES -->
  <link href="{{ URL::asset('css/cp.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('css/nuleaf_light.css') }}" rel="stylesheet" type="text/css">
  <!-- END LOCAL STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  @yield ('page_level_styles')
  <!-- END PAGE LEVEL STYLES -->

  <body>
    <!-- BEGIN PAGE MODALS -->
    @yield ('page_modals')
    <!-- END PAGE MODALS -->

    @include ('cp._header')
    @include ('cp._sidebar')

    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">

      <!-- BEGIN BREADCRUMB -->
      <ol class="breadcrumb">
        @yield ('breadcrumb')
        @stack ('breadcrumb')
        
        @foreach ($breadcrumbs as $breadcrumb => $url)
          {!! $url !== '' ? '<li><a href="'.$url.'">' : '<li class="active">' !!}
          {{ ucfirst($breadcrumb) }}
          {!! $url !== '' ? '</a>' : '' !!}</li>
        @endforeach
      </ol>
      <!-- END BREADCRUMB -->

    </div>
    <!-- END PAGE BAR -->

    <!-- BEGIN PAGE CONTAINER -->
    <div class="container-fluid page-container">

      <!-- BEGIN PAGE TITLE -->
      @yield ('page_title')
      <!-- END PAGE TITLE -->

      <!-- BEGIN CONTENT INNER BODY -->
      @yield ('content')
      <!-- END CONTENT INNER BODY -->

    <!-- END PAGE CONTAINER -->
  </body>

  @include ('_foot')

  <!-- BEGIN LOCAL PLUGINS -->
  <!-- END LOCAL PLUGINS -->
  
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  @yield ('page_level_plugins')
  <!-- END PAGE LEVEL PLUGINS -->
</html>
