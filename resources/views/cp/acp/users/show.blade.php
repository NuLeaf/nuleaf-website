@extends ('layouts.cp')

@section ('content')
<div>
  <ul>User Info:
    <li>{{ $user->username }}</li>
    <li>{{ $user->email }}</li>
    <li>{{ $user->firstname }}</li>
    <li>{{ $user->lastname }}</li>
    <li>{{ $user->teams }}</li>
    <li>{{ $user->roles }}</li>
  </ul>
  <br />
  <ul>All Teams:
  @foreach ($teams as $team)
    <li>{{ $team->team_name }}</li>
  @endforeach
  </ul>
  <br />
  <ul>All Roles:
  @foreach ($roles as $role)
    <li>{{ $role->role_name }}</li>
  @endforeach
  </ul>
</div>
@stop