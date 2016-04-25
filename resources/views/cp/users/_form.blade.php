<div class="form-group">
  <label for="username">Username:</label>
  <input class="form-control" type="text" maxlength="100" name="username" value="{{ $user->username or old('username') }}" />
  <label for="email">Email:</label>
  <input class="form-control" type="text" maxlength="100" name="email" value="{{ $user->email or old('email') }}" />
  <label for="password">{{ isset($user) ? 'New ' : '' }}Password:</label>
  <input class="form-control" type="password" maxlength="100" name="password" value="{{ old('password') }}" />
  <label for="password_confirmed">Confirm Password:</label>
  <input class="form-control" type="password" maxlength="100" name="password_confirmation" value="{{ old('password_confirmation') }}" />
</div> 
<div class="form-group">
  <label for="firstname">First Name:</label>
  <input class="form-control" type="text" maxlength="100" name="firstname" value="{{ $user->firstname or old('firstname') }}" />
  <label for="lastname">Last Name:</label>
  <input class="form-control" type="text" maxlength="100" name="lastname" value="{{ $user->lastname or old('lastname') }}" />
  <label for="image1">Image 1:</label>
  <input class="form-control" type="text" maxlength="100" name="image1" value="{{ $user->image1 or old('image1') }}" />
  <label for="image2">Image 2:</label>
  <input class="form-control" type="text" maxlength="100" name="image2" value="{{ $user->image2 or old('image2') }}" />
  <label for="description">Description:</label>
  <input class="form-control" type="textbox" name="description" value="{{ $user->description or old('description') }}" />
</div>

@if (isset($teams) || isset($roles))
<div class="form-group">
  
  @if (isset($teams))
  <label for="team_id">Team:</label>
  <select class="form-control" name="team_id" />
    @foreach ($teams as $team)
    <option value="{{ $team->team_id }}"{{ isset($user) && $team->team_id === $user->team_id ? ' selected' : ($team->team_id === (int) old('team_id') ? ' selected' : '') }}>
      {{ $team->team_name }}
    </option>
    @endforeach
  <select>
  @endif

  @foreach ($roles as $role)
  <input class="form-control" type="checkbox" name="role_ids[]" value="{{ $role->role_id }}"{{ isset($user) && in_array($role->role_id, $user->role_ids) ? ' checked' : (null !== old('role_ids') && in_array($role->role_id, old('role_ids')) ? ' checked' : '') }} />{{ $role->role_name }}
  @endforeach
</div>
@endif

<input type="submit" name="submit" value="{{ $submitButtonValue }}" />