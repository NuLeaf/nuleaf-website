@extends ('layouts.cp')

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/events.css?v=1.1') }}">
@stop

@section ('content')
  <!-- BEGIN EVENTS BAR -->
  <div class="events-bar">
    <ul class="events-bar-menu">
      <li class="navbar">
        <a href="{{ action('EventsController@index') }}" class="nav-link nav-toggle">
          <i class="fa fa-home"></i>
          <span class="title">Home</span>
        </a>
      </li>
      <li class="navbar">
        <a href="{{ action('EventsController@showAll') }}" class="nav-link nav-toggle">
          <i class="fa fa-list"></i>
          <span class="title">View All Events</span>
        </a>
      </li>
      <li class="navbar">
        <a href="{{ action('EventsController@create') }}" class="nav-link nav-toggle">
          <i class="fa fa-pencil"></i>
          <span class="title">Create New Event</span>
        </a>
      </li>
      <li class="navbar">
        <a href="#" class="nav-link nav-toggle">
          <i class="fa fa-search"></i>
          <span class="title">Search</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- END EVENTS BAR -->
  @yield ('inner_content')
@stop

@section ('page_level_plugins')
  <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/events.js') }}"></script>
@stop