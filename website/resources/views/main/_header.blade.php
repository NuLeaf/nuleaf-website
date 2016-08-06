<header>

  <!-- BEGIN MAIN NAVIGATION BAR -->
  <nav class="nuleaf-navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span><i class="fa fa-chevron-down"></i></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar">

        <!-- BEGIN NAVIGATION BAR BODY -->
        <ul class="nav navbar-nav navbar-right text-center">
          <li><a href="{{ action('MainController@index') }}">Home</a></li>
          <li><a href="{{ action('MainController@about') }}">About</a></li>
          <li><a href="{{ action('MainController@events') }}">Events</a></li>
          <li><a href="{{ action('MainController@faq') }}">FAQ</a></li>
          <li><a href="{{ action('MainController@teams') }}">Teams</a></li>
          <li><a href="{{ action('MainController@members') }}">Members</a></li>
        </ul>
        <!-- END NAVIGATION BAR BODY -->

      </div>
    </div>
  </nav>
  <!-- END MAIN NAVIGATION BAR -->

  <!-- BEGIN LOGO -->
<!--   <a href="{{ action('MainController@index') }}">
    <img id="logo" src="{{ URL::asset('images/banner.jpg') }}" />
  </a> -->
  <!-- END LOGO -->

  <!-- BEGIN SEARCH BAR -->
<!--      <span id="search">
    <input type="text" class="form-control search-bar" placeholder="Search">
    <button type="submit" class="btn btn-default" id="search-button" onclick="location.href='search.php'">
      Submit
    </button>
  </span> -->
  <!-- END SEARCH BAR -->

</header>