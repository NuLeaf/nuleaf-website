@extends ('cp.events.layout')

@section ('title')
Create New Event
@stop

@section ('page_title')
<h3 class="page-title"> Create New Event </h3>
@stop

@section ('inner_content')
<div>
  <p id="errors">
    @include ('errors.list')
  </p>

  <p class="center directions">
    Please use this form to fill out an Event. Click "Add Event" to have
    your event posted on the
    <a href="{{ action('PagesController@index') }}">home page</a>
    and <a href="{{ action('EventsController@showAll') }}">events page</a>.
  </p>

  <div class="center">
    <form method="POST" name="event-form" action="{{ action('EventsController@store') }}">
      {{ csrf_field() }}
      @include ('cp.events._form', ['submitButtonValue' => 'Add Event'])
   </form>
  </div>
</div>
@stop

@section ('module_level_plugins')
<script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/events.js') }}"></script>
@stop