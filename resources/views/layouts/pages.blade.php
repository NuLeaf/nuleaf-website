<!DOCTYPE html>
<html lang="en">
  @include ('partials.header')
  <!-- BEGIN LOCAL STYLES -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
  <!-- END LOCAL STYLES -->
  <!-- BEGIN PAGE LEVEL STYLES -->
  @yield ('page_level_styles')
  <!-- END PAGE LEVEL STYLES -->
  
  <body>
    <div id="header">
      <a href="{{ action('PagesController@index') }}">
        {{ HTML::image('images/banner.jpg', null, ['id' => 'logo']) }}
      </a>
      @include ('partials.search')
    </div>
    @include ('partials.nav')
    <div class="content-container">
      @yield ('content')
    </div>
  </body>
  
    @include ('partials.footer')
    @yield ('includes')
</html>