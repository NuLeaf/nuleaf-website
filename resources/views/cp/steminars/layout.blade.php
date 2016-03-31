@extends ('layouts.cp')

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/steminars.css?v=1.1') }}">
@yield ('module_level_styles')
@stop

@section ('content')
  <!-- BEGIN STEMINARS BAR -->
  <div class="steminars-bar">
    <ul class="steminars-bar-menu">
      <li class="navbar">
        <a href="{{ action('SteminarsController@index') }}" class="nav-link nav-toggle">
          <i class="fa fa-home"></i>
          <span class="title">Home</span>
        </a>
      </li>
      <li class="navbar">
        <a href="{{ action('SteminarsController@showAll') }}" class="nav-link nav-toggle">
          <i class="fa fa-list"></i>
          <span class="title">View All Steminars</span>
        </a>
      </li>
      <li class="navbar">
        <a href="{{ action('SteminarsController@create') }}" class="nav-link nav-toggle">
          <i class="fa fa-pencil"></i>
          <span class="title">Create New Steminar</span>
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
  <!-- END STEMINARS BAR -->
  @yield ('inner_content')
@stop

@section ('page_level_plugins')
  @yield ('module_level_plugins')
@stop