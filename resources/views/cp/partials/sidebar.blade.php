<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
  <!-- BEGIN INNER SIDEBAR -->
  <div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
      <li class="sidebar-toggler-wrapper hide">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler"> </div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
      </li>
      <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="{{-- action('MembersController@search') --}}" method="POST">
          <a href="javascript:;" class="remove">
            <i class="fa fa-close"></i>
          </a>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <a href="javascript:;" class="btn submit">
                <i class="fa fa-search"></i>
              </a>
            </span>
          </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
      </li>
      <li class="nav-item start">
        <a href="{{ action('MembersController@index') }}" class="nav-link">
          <i class="fa fa-home"></i>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="heading">
        <h3 class="uppercase">Action</h3>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-clock-o"></i>
          <span class="title">User Action 1</span>
          <span class="selected"></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-clock-o"></i>
          <span class="title">User Action 2</span>
          <span class="selected"></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-clock-o"></i>
          <span class="title">User Action 3</span>
          <span class="selected"></span>
        </a>
      </li>
      @if (Auth::user()->hasRole(['admin', 'editor'], 'or'))
        <li class="heading">
          <h3 class="uppercase">Editor Action</h3>
        </li>
        <li class="nav-item">
          <a href="{{ action('EventsController@index') }}" class="nav-link">
            <i class="fa fa-pencil-square-o"></i>
            <span class="title">Manage Events</span>
            <span class="selected"></span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ action('SteminarsController@index') }}" class="nav-link">
            <i class="fa fa-pencil-square-o"></i>
            <span class="title">Manage Steminars</span>
            <span class="selected"></span>
          </a>
        </li>
      @endif
      @if (Auth::user()->hasRole('admin'))
      <li class="heading">
        <h3 class="uppercase">Admin Action</h3>
      </li>
      <li class="nav-item">
        <a href="{{ action('AdminController@index') }}" class="nav-link">
          <i class="fa fa-users"></i>
          <span class="title">Admin Control Panel</span>
          <span class="selected"></span>
        </a>
      </li>
      @endif
    </ul>
    <!-- END SIDEBAR MENU -->
  </div>
  <!-- END INNER SIDEBAR -->
</div>
<!-- END SIDEBAR -->