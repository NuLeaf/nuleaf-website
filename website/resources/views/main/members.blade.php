@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - Members
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/members.css') }}">
@stop

@section ('content')
<div class="container">
  <h1 class="page-title theme-text">Members</h1>
  <hr />
  <div class="page-content">
    <div class="row">
    @foreach ($users as $i=>$user)
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset($user->image1) }}" onmouseover="this.src='{{ $user->image2 }}'" onmouseout="this.src='{{ $user->image1 }}'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">{{ $user->fullname }}<br /><small><em>{{ $user->team->team_name }}</em></small></h4>
            {{ $user->description }}
            <br /><br />
            <p class="contacts">
              <a href="mailto:{{ $user->email }}">
                <img src="{{ URL::asset('images/icons/email.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>
      
    @if ($i != 0 && $i%4 == 0)
      <div class="clearfix"></div>
    @elseif ($i != 0 && $i%2 == 0)
      <div class="clearfix visible-xs-block visible-sm-block"></div>
    @endif
    @endforeach
    </div>
    <div>
      <p class="text-center"><strong>
        NuLEAF Technologies has also recieved the hard work, time, and expertise of many <a href="{{ action('MainController@past_members') }}">past team members</a>.
      </strong></p>
      <p class="text-center"><strong>
        Interested in joining our team? Please visit our <a href="{{ action('MainController@faq') }}">FAQ</a> for more information on how to get involved in NuLEAF Technologies.
      </strong></p>
    </div>

  </div> <!-- END .PAGE-CONTENT -->
</div> <!-- END .CONTAINER -->
@stop

@section ('page_level_plugins')
@stop