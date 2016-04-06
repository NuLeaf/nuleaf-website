@extends ('layouts.cp')

@section ('page_level_styles')
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/events.css?v=1.1') }}">
@stop

@section ('page_modals')

  <!-- BEGIN CONFIRMATION MODAL -->
  <div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="delete-confirmation" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="delete-confirmation">
            Delete Confirmation
          </h4>
        </div>

        <div class="modal-body">
            Are you sure you want to delete <strong id="modal-event-title"></strong>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger btn-ok">Delete</button>
        </div>

      </div>
    </div>
  </div>
  <!-- END CONFIRMATION MODAL -->

  <!-- BEGIN POST MODAL -->
  <div class="modal fade" id="post-event-modal" tabindex="-1" role="dialog" aria-labelledby="post-event-modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="post-event-modal-title">
          </h4>
        </div>

        <div class="modal-body">
          @include ('cp.events._form')
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success btn-ok"></button>
            <p id="errors">
            </p>
        </div>        
      </div>
    </div>
  </div>
  <!-- END POST MODAL -->
@stop

@section ('breadcrumb')
  @push ('breadcrumb')
    <?php
      $breadcrumbs = [
        'dashboard' => action('MembersController@index'),
        'events'    => ''
      ];
    ?>
  @endpush
@stop

@section ('title')
  {{ trans('pages.main_title') }} - Manage Events
@stop

@section ('page_title')
@stop

@section ('content')
  @push ('sidebar-select')
    <?php
      $sidebar_selected = 'events';
    ?>
  @endpush

  {{ csrf_field() }}

  <div class="container-fluid">
    
    <div class="row">

      <!-- BEGIN PAGINATION -->
      <div class="col-xs-8">
        {{ $events->render() }}
      </div>
      <!-- END PAGINATION -->
      
      <!-- BEGIN ADD EVENT BUTTON -->
      <div class="col-xs-1 col-xs-offset-3 event-add-btn pull-right">
        <a class="btn btn-circle btn-success" data-href="{{ action('EventsController@store') }}" data-backdrop="static" data-target="#post-event-modal" data-toggle="modal" data-method="post" role="button">
          <i aria-label="Create New Event" class="fa fa-plus"></i>
        </a>
      </div>
      <!-- END ADD EVENT BUTTON -->

    </div>

    <!-- BEGIN EVENT LIST -->
    <ul class="list-group">
      @foreach ($events as $event)
        <li class="list-group-item row">

          <div class="col-md-1 event-date">
            <span class="day">{{ $event->date->day }}</span>
            <span class="month">{{ $event->date->format('M') }}</span>
            <span class="time
              @if ($event->date->hour > 20 && $event->date->hour < 4)
                dark
              @elseif ($event->date->hour < 7)
                dawn
              @elseif ($event->date->hour < 18)
                light
              @else
                dusk
              @endif
            ">
              {{ $event->date->format('h:i') }}
            </span>
          </div>

          <div class="col-md-8">
            <h4 class="event-title">{{ $event->title }}<small> at {{ $event->location }}</small></h4>
          </div>

          <div class="col-md-2 col-md-offset-1 text-right">
            <div aria-label="Actions" class="btn-group" role="group">

              <a class="btn btn-default" data-href="{{ action('EventsController@update', $event) }}" data-backdrop="static" data-event="{{ $event }}" data-method="patch" data-target="#post-event-modal" data-toggle="modal" role="button">
                <i aria-label="Edit" class="fa fa-pencil-square-o"></i>
              </a>

              <a class="btn btn-warning" data-event="{ title:{{ $event->title }} }" data-href="{{ action('EventsController@destroy', $event) }}" data-method="delete" data-target="#confirm-delete-modal" data-toggle="modal" href="#" role="button">
                <i aria-label="Delete" class="fa fa-trash"></i>
              </a>

            </div>
          </div>

        </li>
      @endforeach
    </ul>
    <!-- END EVENT LIST -->

  </div>
@stop

@section ('page_level_plugins')
  <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
  <script src="{{ URL::asset('js/events.js') }}"></script>
@stop