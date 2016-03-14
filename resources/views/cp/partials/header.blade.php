<!-- BEGIN HEADER -->
<head>
  <div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
      <!-- BEGIN LOGO -->
      <div class="page-logo">
        <a href="{{ action('MembersController@index') }}">
          {{ HTML::image('images/page-logo.jpg', 'logo', ['class' => 'logo-default']) }}
        </a>
        <div class="menu-toggler sidebar-toggler"></div>
      </div>
      <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <!-- BEGIN NOTIFICATION DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="fa fa-bell"></i>
              <span class="badge badge-default"> 7 {{-- $n_new_notifications --}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="external">
                <h3>
                  <span class="bold">12 {{-- $n_notifications --}} pending</span> notifications
                </h3>
                <a href="{{-- action('MembersController@profile') --}}">view all</a>
              </li>
              <li>
                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                  {{-- @foreach ($notifications as $notification) --}}
                    <li>
                      <a href="javascript:;">
                        <span class="time">just now{{-- $notification->time --}}</span>
                        <span class="details">
                          <span class="label label-sm label-fa fa label-success">
                              <i class="fa fa-plus"></i>
                          </span>
                          New Poke from Anonymous{{-- $notification->text --}}
                        </span>
                      </a>
                    </li>
                  {{-- @endforeach --}}
                </ul>
              </li>
            </ul>
          </li>
          <!-- END NOTIFICATION DROPDOWN -->
          <!-- BEGIN INBOX DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <i class="fa fa-envelope-o"></i>
              <span class="badge badge-default"> 5 {{-- $n_new_messages --}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="external">
                <h3>
                  You have <span class="bold"> 5 {{-- $n_messages --}} new</span> messages
                </h3>
                <a href="{{-- action('MembersController@inbox') --}}">view all</a>
              </li>
              <li>
                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                  {{-- @foreach ($messages as $message) --}}
                    <li>
                      <a href="{{-- $message->url --}}">
                        <span class="photo">
                          <img src="{{-- $message->user->avatar --}}" class="img-circle" alt="">
                        </span>
                        <span class="subject">
                          <span class="from">Anonymous{{-- $message->user->fullname --}}</span>
                          <span class="time">just now{{-- $message->time --}}</span>
                        </span>
                        <span class="message">I just poked you!...{{-- $message->short_text --}}</span>
                      </a>
                    </li>
                  {{-- @endforeach --}}
                </ul>
              </li>
            </ul>
          </li>
          <!-- END INBOX DROPDOWN -->
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
              <img alt="" class="img-circle" src="{{-- Auth::user()->avatar --}}" />
              <span class="username username-hide-on-mobile"> Tuan {{-- Auth::user()->fullname --}}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li>
                <a href="{{-- action('MembersController@profile') --}}">
                  <i class="fa fa-user"></i> My Profile </a>
              </li>
              <li>
                <a href="{{-- action('MembersController@calendar') --}}">
                  <i class="fa fa-calendar"></i> My Calendar </a>
              </li>
              <li class="divider"> </li>
              <li>
                <a href="{{-- action('Auth\AuthController@logout') --}}">
                  <i class="fa fa-key"></i> Log Out </a>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
  </div>
</head>
<!-- END HEADER -->