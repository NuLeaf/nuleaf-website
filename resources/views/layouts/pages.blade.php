<!DOCTYPE html>
<html lang="en">
  @include ('_head')

  <!-- BEGIN LOCAL STYLES -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
  <!-- END LOCAL STYLES -->

  <!-- BEGIN PAGE LEVEL STYLES -->
  @yield ('page_level_styles')
  <!-- END PAGE LEVEL STYLES -->
  
  <body>

    <!-- BEGIN HEADER -->
    <header>
      <a href="{{ action('PagesController@index') }}">
        {{ HTML::image('images/banner.jpg', null, ['id' => 'logo']) }}
      </a>

      <!-- BEGIN SEARCH BAR -->
      <span id="search">
        <input type="text" class="form-control search-bar" placeholder="Search">
        <button type="submit" class="btn btn-default" id="search-button" onclick="location.href='search.php'">
          Submit
        </button>
      </span>
      <!-- END SEARCH BAR -->

    </header>
    <!-- END HEADER -->
    
    <!-- BEGIN NAVIGATION BAR -->
    <div id="navbar">
      <a class="nav-link" href="{{ action('PagesController@index') }}">Home</a>
      <a class="nav-link" href="{{ action('PagesController@about') }}">About</a>
      <a class="nav-link" href="{{ action('PagesController@faq') }}">FAQ</a>
      <a class="nav-link" href="{{ action('PagesController@teams') }}">Teams</a>
      <a class="nav-link" href="{{ action('PagesController@members') }}">Members</a>
    </div>
    <!-- END NAVIGATION BAR -->

    <!-- BEGIN CONTENT -->
    <div class="content-container">
      @yield ('content')
    </div>
    <!-- END CONTENT -->

    <!-- BEGIN FOOTER -->
    <footer>
      <hr class="divider">
      <div class="left-column text-bold vertical-center">
        Connect with us:
        <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a>
      </div>

      <div class="right-column text-right text-gray text-bold">

        <!-- BEGIN NAVIGATION BAR -->
        <p>
          <a href="{{ action('PagesController@index') }}">Home</a> |
          <a href="{{ action('PagesController@about') }}">About</a> |
          <a href="{{ action('PagesController@faq') }}">FAQ</a> |
          <a href="{{ action('PagesController@teams') }}">Teams</a> |
          <a href="{{ action('PagesController@members') }}">Members</a>
        <p>
        <!-- END NAVIGATION BAR -->

        <!-- BEGIN LOGIN PANEL -->
        <p id="members">
        @if (!Auth::check())
          <a href="{{ action('Auth\AuthController@showLoginForm') }}">Members Login</a>
        @else
          <a href="{{ action('Auth\AuthController@logout') }}">Logout ({{ Auth::user()->username }})</a>
        @endif
          | <a href="/forum">Forum</a>
        </p>
        <!-- END LOGIN PANEL -->

      </div>
    </footer>
    <!-- END FOOTER -->

  </body>
  
  @include ('_foot')

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  @yield ('page_level_plugins')
  <!-- END PAGE LEVEL PLUGINS -->
  
</html>