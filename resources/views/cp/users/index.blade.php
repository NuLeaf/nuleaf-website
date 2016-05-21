@extends('layouts.cp')

@section ('page_level_styles')
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
          Are you sure you want to delete <strong data-resource-key-text="fullname"></strong>?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger btn-submit btn-ok">Delete</button>
        </div>

      </div>
    </div>
  </div>
  <!-- END CONFIRMATION MODAL -->

  <!-- BEGIN DETAILS MODAL -->
  <div class="modal fade" id="details-modal" tablindex="-1" role="dialog" aria-labelledby="details-modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="details-modal-title">User Details</h4>
        </div>

        <div class="modal-body">
          @include ('cp.users._details')
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">
          Done</button>
        </div>

      </div>
    </div>
  </div>
  <!-- END DETAILS MODAL -->

  <!-- BEGIN POST MODAL -->
  <div class="modal fade" data-resource-type="User" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="post-modal-title" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" data-default-text="Create New User" data-resource-key-text="fullname" id="post-modal-title"></h4>
        </div>

        <div class="modal-body">
          @include ('cp.users._form')
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
        'users' => ''
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
      $sidebar_selected = 'users';
    ?>
  @endpush

  {{ csrf_field() }}

  <div class="container-fluid">
    
    <div class="row">

      <!-- BEGIN PAGINATION -->
      <div class="col-xs-8 col-md-8">
        {{ $users->render() }}
      </div>
      <!-- END PAGINATION -->
      
      <!-- BEGIN ADD USERS BUTTON -->
      <div class="add-resource-btn col-xs-3 col-xs-offset-1 col-md-1 col-md-offset-3 text-right">
        <a class="btn btn-circle btn-success" data-href-post="{{ action('UsersController@store') }}" data-backdrop="static" data-close="dblclick" data-target="#form-modal" data-toggle="modal" data-method="post" role="button">
          <i aria-label="Create New User" class="fa fa-plus"></i>
        </a>
      </div>
      <!-- END ADD USERS BUTTON -->

    </div>

    <!-- BEGIN USERS LIST -->
    @for ($i = 0; $i < count($users); ++$i)
      @if ($i % 4 === 0)
        <div class="row">
      @endif
      <div class="col-lg-3 col-sm-6 resource text-center user" data-close="dblclick" data-href-delete="{{ action('UsersController@destroy', $users[$i]) }}" data-href-patch="{{ action('UsersController@update', $users[$i]) }}" data-resource='{ "username":"{{ $users[$i]->username }}", "email":"{{ $users[$i]->email }}", "firstname":"{{ $users[$i]->firstname }}", "lastname":"{{ $users[$i]->lastname }}", "fullname":"{{ $users[$i]->fullname }}", "image1":"{{ $users[$i]->image1 }}", "image2":"{{ $users[$i]->image2 }}", "description":"{{ $users[$i]->description }}", "team_id":"{{ ($users[$i]->team) ? $users[$i]->team->team_id : 0 }}", "team_name":"{{ ($users[$i]->team) ? $users[$i]->team->team_name : '' }}", "role_ids[]":"{{ $users[$i]->roles->implode('role_id', ', ') }}", "roles_name":"{{ $users[$i]->roles->implode('role_name', ', ') }}" }'>
        <div class="user-profile">
          <a class="user-profile-photo">
            <img alt="User Profile Photo" class="center-block img-responsive img-thumbnail" src="{{ $users[$i]->image1 }}" />
          </a>
          <div class="user-profile-overlay">
            <div aria-label="Actions" class="btn-group" role="group">
              <a class="btn btn-default" data-target="#details-modal" data-toggle="modal" role="button">
                <i aria-label="Details" class="fa fa-list"></i>
              </a>

              <a class="btn btn-default" data-backdrop="static" data-target="#form-modal" data-toggle="modal" role="button">
                <i aria-label="Edit" class="fa fa-pencil-square-o"></i>
              </a>

              <a class="btn btn-warning" data-target="#confirm-modal" data-toggle="modal" role="button">
                <i aria-label="Delete" class="fa fa-trash"></i>
              </a>
            </div>
          </div>
        </div>
        <p class="user-description">{{ $users[$i]->fullname }}</p>
      </div>
      @if ($i % 4 === 3)
        </div>
      @endif
    @endfor
    <!-- END USERS LIST -->
    
  </div>
@stop

@section ('page_level_plugins')
  <script type="text/javascript" src="{{ URL::asset('js/modal-form.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/resource.js') }}"></script>
@stop