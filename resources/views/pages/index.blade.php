@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }}
@stop

@section ('content')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/index.css?v=1.1') }}">
<!-- Begin Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="{{ action('PagesController@about') }}">
        {{ HTML::image('images/slideshow1.JPG', 'Project', ['height' => 100]) }}
      </a>
      <div class="carousel-caption">
        <h3>Who are we?</h3>
        <p>
          Click to read about our project, progress to date, and future
          plans.
        </p>
      </div>
    </div>

    <div class="item">
      <a href="{{ action('PagesController@members') }}">
        {{ HTML::image('images/slideshow2.JPG', 'Members', ['height' => 100]) }}
      </a>
      <div class="carousel-caption">
        <h3>Current Members</h3>
        <p>
          We have over 40 members working on our project, with
          students and faculty all over the Bay Area.
        </p>
      </div>
    </div>

    <div class="item">
      {{ HTML::image('images/website.jpg', 'Website', ['class' => 'clip', 'height' => 100]) }}
      <div class="carousel-caption">
        <h3>UNDER CONSTRUCTION</h3>
        <p>
          Please be patient as our Website Team is diligently working to
          improve the website.
        </p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- End Carousel -->

<!-- Begin Left Column -->
<div class="left-column">
  <p class="section-title">UPCOMING EVENTS</p><hr>
  <table class="table table-striped">
    <tbody>
      @foreach ($events as $event)
        <tr>
          <td>
            Title: {{ $event->title }}<br />
            Date: {{ $event->date }}<br />
            Location: {{ $event->location }}<br />
          </td>
        </tr>
      @endforeach
    <tbody>
  </table>

  <p class="section-title">ACKNOWLEDGEMENTS</p><hr>
  <div>
    This research has been supported by the Advanced Studies Laboratories
    in conjunction with Foothill College and the Innovation and
    Collaboration Student Group. Special thanks to Wenonah Vercoutere,
    Mike Oye, Russell Kirkman, and Robert Cormia for providing their
    gracious knowledge, wisdom, and guidance in support of this project.
  </div>
</div>
<!-- End Left Column -->

<!-- Begin Right Column -->
<div class="right-column">
  <p class="section-title">FEATURED PROJECTS</p><hr>
  <div>
    <p class="title">Visual Simulations Model - In Progress</p>
    <div class="center">
      <object data="simulation/index.html" width="500" height="300">
        <embed src="simulation/index.html" width="500" height="300"></embed>
        Error: Embedded data could not be displayed.
      </object>
      <b>Click <a href="simulation/index.html">here</a> to view full-screen
      model.</b>
      <br><br>
      The goal is to create an animation of protein-nanoscale interactions.
      The model will detail protein folding of proteins found in plants,
      and also show the chemical structure of these proteins when carbon
      nanostructures are attached. For questions and/or suggestions,
      please contact <a href="shariqshah@hostanalytics.com">Shariq Shah</a>.
    </div>
  </div>
  <p class="section-title">STEMinars</p><hr>
  <div>
    <table class="table table-striped">
      <tbody>
        @foreach ($steminars as $steminar)
          <tr>
            <td>
              {{ $steminar->title }} - {{ $steminar->date }}
              {{ $steminar->location }}
            </td>
          </tr>
          <tr>
            <td>
              {!! $steminar->body !!}
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- End Right Column -->
@stop