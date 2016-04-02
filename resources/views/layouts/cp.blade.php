<!DOCTYPE html>
<html lang="en">
  @include ('_head')

  <!-- BEGIN LOCAL STYLES -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/components.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/darkblue.css') }}" id="style_color" />
  <!-- END LOCAL STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  @yield ('page_level_styles')
  <!-- END PAGE LEVEL STYLES -->

  <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    @include ('cp._header')

    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    
    <!-- BEGIN PAGE CONTAINER -->
    <div class="page-container">
      @include ('cp._sidebar')

      <!-- BEGIN CONTENT -->
      <div class="page-content-wrapper">

        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="min-height:1112px">

          <!-- BEGIN PAGE HEADER -->

          <!-- BEGIN PAGE BAR -->
          <div class="page-bar">
            <ul class="page-breadcrumb">
              @yield ('page_breadcrumb')
            </ul>
          </div>
          <!-- END PAGE BAR -->

          <!-- BEGIN PAGE TITLE -->
          @yield ('page_title')
          <!-- END PAGE TITLE -->

          <!-- END PAGE HEADER -->

          <!-- BEGIN CONTENT INNER BODY -->
          @yield ('content')
          <!-- END CONTENT INNER BODY -->

        </div>
        <!-- END CONTENT BODY -->

      </div>
      <!-- END CONTENT -->

    <!-- END PAGE CONTAINER -->
  </body>

  @include ('_foot')

  <!-- BEGIN LOCAL PLUGINS -->
  <!-- END LOCAL PLUGINS -->
  
  <!-- BEGIN PAGE LEVEL PLUGINS -->
  @yield ('page_level_plugins')
  <!-- END PAGE LEVEL PLUGINS -->
</html>
