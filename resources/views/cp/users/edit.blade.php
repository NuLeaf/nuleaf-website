@extends ('layouts.cp')

@section ('title')
@stop

@section ('page_title')
@stop

@section ('content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to change properties of the existing user.
  </p>

  <div class="center">
    <form class="form-horizontal" method="POST" name="user-form" action="{{ action('UsersController@update', $user) }}">
      <input name="_method" type="hidden" value="PATCH">
      {{ csrf_field() }}
      @include ('cp.acp.users._form', ['submitButtonValue' => 'Edit User'])
   </form>
  </div>
</div>
@stop