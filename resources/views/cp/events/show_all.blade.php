@extends ('cp.events.layout')

@section ('title')
View All Events
@stop

@section ('page_title')
<h3 class="page-title"> View All Events </h3>
@stop

@section ('inner_content')
<div>
  <p class="center directions">
    Below is a list of all NuLEAF Technologies events. Use this page to edit
    and/or remove the events as needed.
  </p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($events as $event)
        <tr>
          <td class="date">{{ date('F d, Y', strtotime($event->date)) }}</td>
          <td class="subject">{{ $event->title }}</td>
          <td class="location">{{ $event->location }}</td>
          <td class="action">
            <a href="{{ action('EventsController@edit', $event) }}">Edit</a> /
            <form id="delete-{{ $event->event_id }}" method="POST" action="{{ action('EventsController@destroy', $event) }}">
              <input name="_method" type="hidden" value="DELETE">
              {{ csrf_field() }}
                <a class="delete-event-btn" value="{{ $event->event_id }}" href="#">Delete</a>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Begin Pagination -->
  <div class="text-right">
    {{ $events->links() }}
  </div>
  <!-- End Pagination -->
</div>
@stop