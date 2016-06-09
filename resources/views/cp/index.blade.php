@extends('layouts.cp')

@section('title')
  {{ trans('pages.main_title') }} - Control Panel
@endsection

@section('page_title')
  <h3>Dashboard</h3>
@endsection

@section('breadcrumb')
  @push ('breadcrumb')
    <?php
      $breadcrumbs = [
        'dashboard' => ''
      ];
    ?>
  @endpush
@endsection

@section('content')
  @push ('sidebar-select')
    <?php
      $sidebar_selected = 'dashboard';
    ?>
  @endpush

<div>
  <h5> UNDER CONSTRUCTION </h5>
</div>
@endsection
