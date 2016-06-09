<header>

  <!-- BEGIN NAVIGATION BAR -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="row">

      <div class="col-xs-8">

        <!-- BEGIN SIDEBAR TOGGLE -->
        <div class="hidden-md hidden-lg pull-left sidebar-toggle">
          <a class="btn" data-target="#sidebar" data-toggle="slide" id="toggle-sidebar-btn" role="button">
            <i class="fa fa-bars"></i>
          </a>
        </div>
        <!-- END SIDEBAR TOGGLE -->

        <!-- BEGIN NAVIGATION BAR HEADER -->
        <div class="navbar-header">

          <!-- BEING NAVIGATION BAR BRAND -->
          <a class="navbar-brand" href="{{ action('PagesController@index') }}">
            <span>Nuleaf Technologies</span>
          </a>
          <!-- END NAVIGATION BAR BRAND -->

        </div>
        <!-- END NAVIGATION BAR HEADER -->

      </div>

      <!-- BEGIN NAVIGATION BAR BODY -->
      <div class="col-xs-4">
        <ul class="nav navbar-nav pull-right">

          <!-- BEGIN USER DROPDOWN -->
          <li class="dropdown">
            <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
              <img alt="User icon" class="img-circle user-icon" src="{{ Auth::user()->image1 }}https://case.edu/medicine/admissions/media/school-of-medicine/admissions/classprofile.png">
              {{ Auth::user()->firstname }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="#">
                  <i aria-hidden="true" class="fa fa-user"></i> My Profile
                </a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="{{ action('Auth\AuthController@logout') }}">
                  <i aria-hidden="true" class="fa fa-sign-out"></i> Logout
                </a>
              </li>
            </ul>
          </li>
          <!-- END USER DROPDOWN -->

        </ul>
      </div>
      <!-- END NAVIGATION BAR BODY -->

    </div>
  </nav>
  <!-- END NAVIGATION BAR -->

  </header>