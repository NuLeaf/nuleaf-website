@extends ('layouts.cp')

@section ('title')
  {{ trans('pages.main_title') }} - Manage Events
@stop

@section ('page_level_styles')
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/resource.css') }}">
@stop

@section ('page_modals')

  <!-- BEGIN CONFIRMATION MODAL -->
  <div class="modal fade" data-method="delete" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="delete-confirmation" aria-hidden="true">
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
          Are you sure you want to delete <strong data-resource-key-text="title"></strong>?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger btn-submit btn-ok">Delete</button>
        </div>

      </div>
    </div>
  </div>
  <!-- END CONFIRMATION MODAL -->

  <!-- BEGIN POST MODAL -->
  <div class="modal fade" data-resource-type="Event" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="form-modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" data-default-text="Create New Event" data-resource-key-text="title" id="form-modal-title"></h4>
        </div>

        <div class="modal-body">
          @include ('cp.events._form')
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-submit btn-success btn-ok"></button>
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
      <div class="col-xs-8 col-md-8">
        {{ $events->render() }}
      </div>
      <!-- END PAGINATION -->
      
      <!-- BEGIN ADD EVENT BUTTON -->
      <div class="add-resource-btn col-xs-3 col-xs-offset-1 col-md-1 col-md-offset-3 text-right">
        <a class="btn btn-circle btn-success" data-href-post="{{ action('EventsController@store') }}" data-backdrop="static" data-close="dblclick" data-target="#form-modal" data-toggle="modal" data-method="post" role="button">
          <i aria-label="Create New Event" class="fa fa-plus"></i>
        </a>
      </div>
      <!-- END ADD EVENT BUTTON -->

    </div>

    <!-- BEGIN EVENT LIST -->
    <ul class="list-group">
      @foreach ($events as $event)
        <li class="resource list-group-item peelable row" data-close="dblclick" data-href-delete="{{ action('EventsController@destroy', $event) }}" data-href-patch="{{ action('EventsController@update', $event) }}" data-resource='{ "title":"{{ htmlspecialchars(htmlspecialchars($event->title)) }}", "location":"{{ $event->location }}", "date":"{{ $event->date->format('m/d/Y h:i a') }}" }'>
          <div class="hidden-xs hidden-sm peel"></div>

          <div class="col-md-2 col-md-offset-1 col-md-push-9 text-right">
            <div aria-label="Actions" class="btn-group" role="group">

              <a class="btn btn-default" data-backdrop="static" data-target="#form-modal" data-toggle="modal" role="button">
                <i aria-label="Edit" class="fa fa-pencil-square-o"></i>
              </a>

              <a class="btn btn-warning" data-target="#confirm-modal" data-toggle="modal" role="button">
                <i aria-label="Delete" class="fa fa-trash"></i>
              </a>

            </div>
          </div>

          <div class="calendar hidden-xs hidden-sm col-md-1 col-md-pull-3">
            <span class="month">{{ $event->date->format('M') }}</span>
            <span class="day">{{ $event->date->day }}</span>
          </div>

          <div class="col-md-8 col-md-pull-3">
            <h4 class="event-title">{{ $event->title }}<br />
              <small>
                <span class="hidden-xs hidden-sm"> {{ $event->date->format('h:i A') }}</span>
                 at {{ $event->location }}
                <span class="visible-xs-inline visible-sm-inline"> on {{ $event->date->format('M d, Y h:i A') }}</span>
              </small>
            </h4>
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
  <script src="{{ URL::asset('js/jquery.inputmask.bundle.js') }}"></script>
  <script src="{{ URL::asset('js/inputmask.date.extensions.js') }}"></script>
  <script src="{{ URL::asset('js/modal-form.js') }}"></script>
  <script src="{{ URL::asset('js/resource.js') }}"></script>
@stop