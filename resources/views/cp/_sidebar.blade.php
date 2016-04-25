@stack ('sidebar-select')

<!-- BEGIN SIDE NAVIGATION BAR -->
<nav class="sidebar" id="sidebar">
  <ul class="sidebar-nav">
    <li class="divider hidden-xs hidden-sm" role="seperator"></li>
    <li{{ $sidebar_selected === 'dashboard' ? ' class=active' : '' }}>
      <a href="{{ action('MembersController@index') }}">
        <div class="sidebar-icon">
          <i aria-hidden="true" class="fa fa-th-large"></i>
        </div>
        <span class="sidebar-title hidden-xs hidden-sm">Dashboard</span>
        @if ($sidebar_selected === 'dashboard')
          <span class="selected hidden-xs hidden-sm"></span>
        @endif
      </a>
    </li>
    <li role="separator" class="divider"></li>
    <li{{ $sidebar_selected === 'events' ? ' class=active' : '' }}>
      <a href="{{ action('EventsController@index') }}">
        <div class="sidebar-icon">
          <i aria-hidden="true" class="fa fa-calendar-o"></i>
        </div>
        <span class="sidebar-title hidden-xs hidden-sm">Events</span>
        @if ($sidebar_selected === 'events')
          <span class="selected hidden-xs hidden-sm"></span>
        @endif
      </a>
    </li>
    <li{{ $sidebar_selected === 'steminars' ? ' class=active' : '' }}>
      <a href="{{ action('SteminarsController@index') }}">
        <div class="sidebar-icon">
          <i aria-hidden="true" class="fa fa-share-alt"></i>
        </div>
        <span class="sidebar-title hidden-xs hidden-sm">Steminars</span>
        @if ($sidebar_selected === 'steminars')
          <span class="selected hidden-xs hidden-sm"></span>
        @endif
      </a>
    </li> 
    <li{{ $sidebar_selected === 'users' ? ' class=active' : '' }}>
      <a href="{{ action('UsersController@index') }}">
        <div class="sidebar-icon">
          <i aria-hidden="true" class="fa fa-users"></i>
        </div>
        <span class="sidebar-title hidden-xs hidden-sm">Users</span>
        @if ($sidebar_selected === 'users')
          <span class="selected hidden-xs hidden-sm"></span>
        @endif
      </a>
    </li>
  </ul>
</nav>
<!-- END SIDE NAVIGATION BAR -->