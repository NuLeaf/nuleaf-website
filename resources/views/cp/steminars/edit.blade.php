@extends ('cp.steminars.layout')

@section ('title')
Edit Steminar
@stop

@section ('page_title')
<h3 class="page-title"> Edit Steminar: {{ $steminar->title }} </h3>
@stop

@section ('inner_content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to edit an Steminar. Click "Edit Steminar" to have
    the steminar changed on the
    <a href="{{ action('PagesController@index') }}">home page</a>
    and <a href="{{ action('SteminarsController@index') }}">steminars page</a>.
  </p>

  <div class="center">
    <form class="form-horizontal" method="POST" name="steminar-form" action="{{ action('SteminarsController@update', $steminar) }}">
      <input name="_method" type="hidden" value="PATCH">
      {{ csrf_field() }}
      @include ('cp.steminars._form', ['submitButtonValue' => 'Edit Steminar'])
   </form>
  </div>
</div>
@stop