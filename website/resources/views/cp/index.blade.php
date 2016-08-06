@extends ('layouts.cp')

@section ('title')
  {{ trans('pages.main_title') }} - Dashboard
@stop

@section ('page_level_styles')
@stop

@section ('page_modals')
@stop


@section ('breadcrumb')
  @push ('breadcrumb')
    <?php
      $breadcrumbs = [
        'dashboard' => ''
      ];
    ?>
  @endpush
@stop

@section ('page_title')
  <h3>Dashboard</h3>
@stop

@section ('content')
  @push ('sidebar-select')
    <?php
      $sidebar_selected = 'dashboard';
    ?>
  @endpush

<div>
  <h5>Welcome {{ Auth::user()->firstname }}.</h5>
</div>
@stop

@section ('page_level_plugins')
@stop