@extends ('layouts.cp')

@section ('content')
<div>
  <ul>User Info:
    <li>{{ $user->username }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->firstname }}</li>
    <li>{{ $user->lastname }}</li>
    <li>{{ $user->team }}</li>
    <li>{{ $user->roles }}</li>
  </ul>
</div>

<div>
  <a href="{{ action('UsersController@edit', $user) }}">Edit</a>
</div>
@stop