@extends ('layouts.cp')

@section('page_title')
  <h3 class="page-title"> Admin Control Panel </h3>
@endsection

@section('content')

<div>
  <h5> UNDER CONSTRUCTION </h5>
  <br />
  <form id="username_form" method="GET" action="{{ action('UsersController@search') }}">
    <label for="username">Enter username:</label>
    <input id="username_input" name="username" type="text">
    {{ csrf_field() }}
    <input id="username_search" type="button" value="Search">
  </form>
</div>
@endsection

@section ('page_level_plugins')
  <script type="text/javascript" src="{{ URL::asset('js/users.js') }}"></script>
@stop