@extends ('layouts.cp')

@section ('page_level_styles')
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/resource.css') }}">
@stop

@section ('page_modals')

  <!-- BEGIN CONFIRMATION MODAL -->
  <div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="delete-confirmation" aria-hidden="true">
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
  <div class="modal fade" data-ckeditor="body" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="post-modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="post-modal-title">
          </h4>
        </div>

        <div class="modal-body">
          @include ('cp.steminars._form')
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
        'steminars' => ''
      ];
    ?>
  @endpush
@stop

@section ('title')
  {{ trans('pages.main_title') }} - Manage Steminars
@stop

@section ('page_title')
@stop

@section ('content')
  @push ('sidebar-select')
    <?php
      $sidebar_selected = 'steminars';
    ?>
  @endpush

  {{ csrf_field() }}

  <div class="container-fluid">
    
    <div class="row">

      <!-- BEGIN PAGINATION -->
      <div class="col-xs-8 col-md-8">
        {{ $steminars->render() }}
      </div>
      <!-- END PAGINATION -->
      
      <!-- BEGIN ADD STEMINAR BUTTON -->
      <div class="add-resource-btn col-xs-3 col-xs-offset-1 col-md-1 col-md-offset-3 text-right">
        <a class="btn btn-circle btn-success" data-href="{{ action('SteminarsController@store') }}" data-backdrop="static" data-close="dblclick" data-resource-title='Steminar' data-target="#form-modal" data-toggle="modal" data-method="post" role="button">
          <i aria-label="Create New Steminar" class="fa fa-plus"></i>
        </a>
      </div>
      <!-- END ADD STEMINAR BUTTON -->

    </div>

    <!-- BEGIN STEMINAR LIST -->
    <ul class="list-group">
      @foreach ($steminars as $steminar)
        <li class="list-group-item peelable">
          <div class="hidden-xs hidden-sm peel"></div>
          <div class="row">
            <div class="col-xs-7">
              <h4>{{ $steminar->title }}</h4>
            </div>
            <div class="col-xs-5 text-right">
              <div aria-label="Actions" class="btn-group" role="group">

                <a class="btn btn-default" data-href="{{ action('SteminarsController@update', $steminar) }}" data-backdrop="static" data-close="dblclick" data-resource='{ "title":"{{ htmlspecialchars(htmlspecialchars($steminar->title)) }}", "location":"{{ $steminar->location }}", "date":"{{ $steminar->date->format('m/d/Y h:i a') }}", "body":"{{ htmlspecialchars(htmlspecialchars($steminar->body)) }}" }' data-resource-title="Steminar" data-form="modal" data-method="patch" data-target="#form-modal" data-toggle="modal" role="button">
                  <i aria-label="Edit" class="fa fa-pencil-square-o"></i>
                </a>

                <a class="btn btn-warning" data-resource='{ "title":"{{ $steminar->title }}" }' data-form="modal" data-href="{{ action('SteminarsController@destroy', $steminar) }}" data-method="delete" data-target="#confirm-modal" data-toggle="modal" href="#" role="button">
                  <i aria-label="Delete" class="fa fa-trash"></i>
                </a>

              </div>
            </div>
          </div>
          <div class="row">
            <p class="col-xs-12">
              <strong class="">Location:</strong> {{ $steminar->location }}<br />
              <strong>Date:</strong> {{ $steminar->date->format('M d, Y h:i A') }}
            </p>
          </div>
          <div class="row">
            <div class="col-xs-12 steminar-body-wrapper">
              <div class="steminar-body">
                {!! $steminar->body !!}
              </div>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
    <!-- END STEMINAR LIST -->

  </div>
@stop

@section ('page_level_plugins')
  <script type="text/javascript" src="{{ URL::asset('js/ckeditor/ckeditor.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.inputmask.bundle.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/inputmask.date.extensions.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/modal-form.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/resource.js') }}"></script>
@stop