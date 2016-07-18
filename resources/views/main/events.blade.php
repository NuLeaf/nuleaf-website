@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - Events
@stop

@section ('page_level_styles')
@stop

@section ('content')
<div class="container">
  <div id="steminars">
    <h2 class="theme-text">STEMinars<br /><small>Educational seminars focused on STEM topics</small></h2>
    
    <div class="container-fluid">
      <div class="panel-group" id="steminar-list" role="tablist" aria-multiselectable="true">
        @foreach ($steminars as $steminar)
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="heading-steminar{{ $steminar->steminar_id }}">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#steminar-list" href="#steminar{{ $steminar->steminar_id }}" aria-expanded="false" aria-controls="steminar{{ $steminar->steminar_id }}">
                {{ $steminar->title }}
              </a>
            </h4>
          </div>
          <div id="steminar{{ $steminar->steminar_id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-steminar{{ $steminar->steminar_id }}">
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="thumbnail">
                    <img src="{{ $steminar->image }}" />
                    <div class="caption text-center">
                      {{ $steminar->date->format('m/d/y h:i A') }}
                    </div>
                  </div>
                </div>
                <div class="col-sm-9">
                  <span>
                    {!! $steminar->body !!}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  
  <div id="events">
    <h2 class="theme-text">General Events<br /><small>Conferences, Symposiums, and Social Events</small></h2>
    
    <div class="container-fluid">
      <div class="panel-group" id="event-list-2016" role="tablist" aria-multiselectable="true">
        @for ($y = $events->first()->date->year; $y >= $events->last()->date->year; --$y)
        <h4>
          {{ $y }}
          <span class="badge">
            {{ count($year_events = $events->filter(function($event) use ($y)
              {
                return $event->date->year === $y;
              }))
            }}
          </span>
        </h4>
          @for ($m = $year_events->first()->date->month; $m >= $year_events->last()->date->month; --$m)
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-event-{{ $y }}-{{ $m }}">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#event-list-{{ $y }}" href="#event-{{ $y }}-{{ $m }}" aria-expanded="false" aria-controls="event-{{ $y }}-{{ $m }}">{{ DateTime::createFromFormat('!m', $m)->format('F') }}</a>
                <span class="badge">
                  {{ count($month_events = $year_events->filter(function($event) use ($m)
                   {
                      return $event->date->month === $m;
                    }))
                  }}
                </span>
              </h4>
            </div>
            <div id="event-{{ $y }}-{{ $m }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-event-{{ $y }}-{{ $m }}">
              <div class="panel-body">
                <ul>
                  @foreach ($month_events as $event)
                  <li>{{ $event->title }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          @endfor
        <br />
        @endfor
      </div>
    </div>
  </div>
@stop

@section ('page_level_plugins')
@stop