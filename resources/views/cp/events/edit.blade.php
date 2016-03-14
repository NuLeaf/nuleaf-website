@extends ('cp.events.layout')

@section ('title')
Edit Event
@stop

@section ('page_title')
<h3 class="page-title"> Edit Event: {{ $event->title }} </h3>
@stop

@section ('inner_content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to edit an Event. Click "Edit Event" to have
    the event changed on the
    <a href="{{ action('PagesController@index') }}">home page</a>
    and <a href="{{ action('EventsController@showAll') }}">events page</a>.
  </p>

  <div class="center">
    <form class="form-horizontal" method="POST" name="event-form" action="{{ action('EventsController@update', $event) }}">
      <input name="_method" type="hidden" value="PATCH">
      {{ csrf_field() }}
      @include ('cp.events._form', ['submitButtonValue' => 'Edit Event'])
   </form>
  </div>
</div>
@stop