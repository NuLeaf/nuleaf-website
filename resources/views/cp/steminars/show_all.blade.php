@extends ('cp.steminars.layout')

@section ('title')
View All Steminars
@stop

@section ('page_title')
<h3 class="page-title"> View All Steminars </h3>
@stop

@section ('inner_content')
<div>
  <p class="center directions">
    Below is a list of all NuLEAF Technologies steminars. Use this page to edit
    and/or remove the steminars as needed.
  </p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Date</th>
        <th>Subject</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($steminars as $steminar)
        <tr>
          <td class="date">{{ date('F d, Y', strtotime($steminar->date)) }}</td>
          <td class="subject">{{ $steminar->title }}</td>
          <td class="location">{{ $steminar->location }}</td>
          <td class="action">
            <a href="{{ action('SteminarsController@edit', $steminar) }}">Edit</a> /
            <form id="delete-{{ $steminar->steminar_id }}" method="POST" action="{{ action('SteminarsController@destroy', $steminar) }}">
              <input name="_method" type="hidden" value="DELETE">
              {{ csrf_field() }}
                <a class="delete-steminar-btn" value="{{ $steminar->steminar_id }}" href="#">Delete</a>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <!-- Begin Pagination -->
  <div class="text-right">
    {{ $steminars->links() }}
  </div>
  <!-- End Pagination -->
</div>
@stop