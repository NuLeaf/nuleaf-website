<div class="form-group form-group-sm">
  <label for="image1">Image 1</label>
  <input class="form-control" id="image1" name="image1" placeholder="Image URL" type="text" />
  <span class="error-message" data-input="#image1"></span>
</div>
<div class="form-group form-group-sm">
  <label for="image2">Image 2</label>
  <input class="form-control" id="image2" name="image2" placeholder="Image URL" type="text" />
  <span class="error-message" data-input="#image2"></span>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="firstname">First Name</label>
      <input class="form-control" id="firstname" name="firstname" placeholder="First Name" type="text" />
      <span class="error-message" data-input="#firstname"></span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="lastname">Last Name</label>
      <input class="form-control" id="lastname" name="lastname" placeholder="Last Name" type="text" />
      <span class="error-message" data-input="#lastname"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="username">Username</label>
      <input class="form-control" id="username" name="username" placeholder="Username" type="text" />
      <span class="error-message" data-input="#username"></span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="email">Email</label>
      <input class="form-control" id="email" name="email" placeholder="Email" type="text" />
      <span class="error-message" data-input="#email"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="password">Password</label>
      <input class="form-control" data-confirm="#password_confirmation" id="password" name="password" placeholder="Password" type="password" />
      <span class="error-message" data-input="#password"></span>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group form-group-sm">
      <label for="password_confirmation">Confirm Password</label>
      <input class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirmation" type="password" />
    </div>
  </div>
</div>
<div class="form-group">
  <label for="team_id">Team</label>
  <div class="input-group input-group-sm">
    <span class="input-group-btn">
      <button class="btn btn-success slider" data-slide="#team-input-slide" data-toggle-icon='&lt;span&gt;&lt;i aria-label="Pick a Team" class="fa fa-list"&gt;&lt;/i&gt;&lt;/span&gt;' type="button">
        <span><i aria-label="Create New Team" class="fa fa-plus"></i></span>
      </button>
    </span>
    <div class="slideable" id="team-input-slide">
      <div class="slide-in">
        <select class="form-control input-sm select-default-first" id="team_id" name="team_id" required>
          <option value="">--Select a Team--</option>
          @foreach ($teams as $team)
            <option value="{{ $team->team_id }}">{{ $team->team_name }}</option>
          @endforeach
        </select>
      </div>
      <div class="slide-out" style="display: none">
        <input class="form-control input-sm" id="team_name" name="team_name" placeholder="Team Name" type="text" />
        <div style="clear: both;"></div>
      </div>
    </div>
  </div>
  <span class="error-message" data-input="#team_id"></span>
  <span class="error-message" data-input="#team_name"></span>
</div>
<div class="form-group form-group-sm">
  <label for="role_ids">Roles</label>
  <select class="form-control" id="role_ids" multiple name="role_ids[]">
    @foreach ($roles as $role)
      <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
    @endforeach
  </select>
  <span class="error-message" data-input="#role_ids"></span>
</div>
<div class="form-group form-group-sm">
  <label for="description">Description</label>
  <textarea class="form-control" data-default-text="" data-resource-key-text="description" id="description" name="description" placeholder="Description" rows="7"></textarea>
  <span class="error-message" data-input="#description"></span>
</div>