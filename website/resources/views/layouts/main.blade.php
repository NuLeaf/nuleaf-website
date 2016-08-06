<!DOCTYPE html>
<html lang="en">
  @include ('_head')

  <!-- BEGIN LOCAL STYLES -->
  <link href="{{ URL::asset('css/main.css?v=1.1') }}" rel="stylesheet" type="text/css"/>
  <!-- END LOCAL STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  @yield ('page_level_styles')
  <!-- END PAGE LEVEL STYLES -->

  <!-- BEGIN THEME STYLES -->
  <link href="{{ URL::asset('css/nuleaf_light.css?v=1.1') }}" rel="stylesheet" type="text/css">
  <!-- BEGIN THEME STYLES -->
  
  <body>
    @include ('main._header')

    <!-- BEGIN PAGE CONTAINER -->
    <div class="page-container">

      <!-- BEGIN LOGO -->
      <!-- <div class="container">
        <div class="hidden-xs">
          <a href="{{ action('MainController@index') }}">
            <img id="logo" src="{{ URL::asset('images/banner.jpg') }}" />
          </a>
        </div>
      </div> -->
      <!-- END LOGO -->

      <!-- BEGIN SEARCH BAR -->
      <!-- <span id="search">
        <input type="text" class="form-control search-bar" placeholder="Search">
        <button type="submit" class="btn btn-default" id="search-button" onclick="location.href='search.php'">
        Submit
        </button>
      </span> -->
      <!-- END SEARCH BAR -->

      <!-- BEGIN PAGE CONTENT -->
      @yield ('content')
      <!-- END PAGE CONTENT -->

    </div>
    <!-- END PAGE CONTAINER -->

    @include ('main._footer')
  </body>
  
  @include ('_foot')

  <!-- BEGIN LOCAL PLUGINS -->
  <!-- END LOCAL PLUGINS -->

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  @yield ('page_level_plugins')
  <!-- END PAGE LEVEL PLUGINS -->
  
</html>