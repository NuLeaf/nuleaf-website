<footer id="main-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6">
        <span class="hidden-xs">Connect with us:</span>
        <a href="mailto:contact@nusleaftech.com">contact@nuleaftech.com</a>
      </div>
      <div class="col-xs-6 text-right">

      <!-- BEGIN LOGIN PANEL -->
      @if (!Auth::check())
        <a href="{{ action('Auth\AuthController@showLoginForm') }}">Members Login</a>
      @else
        <a href="{{ action('MembersController@index') }}">Dashboard</a>
      @endif
        | <a href="/forum">Forum</a>
      <!-- END LOGIN PANEL -->

      </div>
    </div>
  </div>
</footer>