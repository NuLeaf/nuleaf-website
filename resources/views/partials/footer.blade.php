<!-- BEGIN FOOTER -->
<footer>
  <hr class="divider">
  <div class="left-column text-bold vertical-center">
    Connect with us:
    <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a>
  </div>

  <div class="right-column text-right text-gray text-bold">

    <!-- Navigation Bar -->
    <p>
      <a href="{{ action('PagesController@index') }}">Home</a> |
      <a href="{{ action('PagesController@about') }}">About</a> |
      <a href="{{ action('PagesController@faq') }}">FAQ</a> |
      <a href="{{ action('PagesController@teams') }}">Teams</a> |
      <a href="{{ action('PagesController@members') }}">Members</a>
    <p>

    <!-- Member Login -->
    <p id="members">
    @if (!Auth::check())
      <a href="{{ action('Auth\AuthController@showLoginForm') }}">Members Login</a>
    @else
      <a href="{{ action('Auth\AuthController@logout') }}">Logout ({{ Auth::user()->username }})</a>
    @endif
      | <a href="/forum">Forum</a>
    </p>
  </div>
</footer>
<!-- END FOOTER -->

<!-- BEGIN GLOBAL PLUGINS -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<!-- END GLOBAL PLUGINS -->