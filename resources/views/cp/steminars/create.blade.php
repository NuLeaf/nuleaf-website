@extends ('cp.steminars.layout')

@section ('title')
Create New Steminar
@stop

@section ('page_title')
<h3 class="page-title"> Create New Steminar </h3>
@stop

@section ('inner_content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to fill out an Steminar. Click "Add Steminar" to have
    your steminar posted on the
    <a href="{{ action('PagesController@index') }}">home page</a>
    and <a href="{{ action('SteminarsController@showAll') }}">steminars page</a>.
  </p>

  <div class="center">
    <form method="POST" name="steminar-form" action="{{ action('SteminarsController@store') }}">
      {{ csrf_field() }}
      @include ('cp.steminars._form', ['submitButtonValue' => 'Add Steminar'])
   </form>
  </div>
</div>
@stop