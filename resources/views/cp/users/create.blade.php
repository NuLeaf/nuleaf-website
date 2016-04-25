@extends ('layouts.cp')

@section ('title')
@stop

@section ('page_breadcrumb')
@stop

@section ('page_title')
@stop

@section ('content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to create a new user.
  </p>

  <div class="center">
    <form class="form-horizontal" method="POST" name="user-form" action="{{ action('UsersController@store') }}">
      {{ csrf_field() }}
      @include ('cp.acp.users._form', ['submitButtonValue' => 'Create User'])
   </form>
  </div>
</div>
@stop