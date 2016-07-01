@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }}
@stop

@section ('page_level_styles')
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section ('content')
<div class="container-fluid wide-block">
  <img class="img-responsive center-block hidden-xs" src="{{ URL::asset('images/logo2.png') }}" />
  <img class="img-responsive center-block visible-xs-block" src="{{ URL::asset('images/banner.jpg') }}" />
</div>

<!-- <div class="container-fluid wide-block text-center" id="about-block">
  <div class="container">
    <h1>What is NuLEAF Technologies?</h1>
    <p class="lead">
      Harness higher levels of power with minimal ecological impact
    </p>
    <p>
      This project proposes a technique that will not rely on photosynthesis and will be harmlessly integrated into the plant’s biological system and surrounding environment. 
      This research hinges upon nanogenetics and the use of the plant’s own carbon storage or other biological pathways to create the nanoparticles of the coating and bioelectric network.
    </p>
  </div>
</div> -->

<div class="container-fluid wide-block text-center" id="pillars-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 square-block">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/learn.png') }}" />
        </div>
        <h2 class="title">Education<br /><small>We are the next generation of sustainable engineers.</small></h2>
      </div>
      <div class="col-md-4 square-padding">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/research.png') }}" />
        </div>
        <h2 class="title">Interdisciplinary<br /><small>Embracing life's connectivity for the best possible technology.</small></h2>
      </div>
      <div class="col-md-4 square-padding">
        <div class="center-block">
          <img class="square-img-sm" src="{{ URL::asset('images/icons/test.png') }}" />
        </div>
        <h2 class="title">Bioinspired<br /><small>Learning from nature for a renewable energy future.</small></h2>
      </div>
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-sm btn-sm text-uppercase" href="{{ action('MainController@about') }}" role="button">See more</a>
    </div>
  </div>
</div>

<div class="container-fluid wide-block">
  <div class="container">
    <h2>Projects</h2>
    <div class="row">
      <div class="col-md-4 square-padding">
        <div class="thumbnail">
          <img class="rect-img-sm" src="{{ URL::asset('images/projects/MFCTeam.png') }}" />
          <div class="caption text-center">
            <h4>Microbial Fuel Cell</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 square-padding">
        <div class="thumbnail">
          <img class="rect-img-sm" src="{{ URL::asset('images/projects/CSCTeam.png') }}" />
          <div class="caption text-center">
            <h4>Cuticular Solar Cell</h4>
          </div>
        </div>
      </div>
      <div class="col-md-4 square-padding">
        <div class="thumbnail">
          <img class="rect-img-sm" src="{{ URL::asset('images/projects/ITTeam.png') }}" />
          <div class="caption text-center">
            <h4>Website and Forum</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-sm btn-sm text-uppercase" href="{{ action('MainController@teams') }}" role="button">See more</a>
    </div>
  </div>
</div>

<div class="container-fluid wide-block">
  <div class="container">
    <h2>Steminars</h2>
    <div class="row">
      @foreach ($steminars as $steminar)
      <div class="col-md-4 square-padding">
        <div class="thumbnail">
          <img src="{{ $steminar->image }}" />
          <div class="caption text-center">
            <h4>{{ $steminar->host }}<br /><small>{{ $steminar->title }}</small></h4>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-sm btn-sm text-uppercase" href="{{-- {{ action('MainController@events') }} --}}" role="button">See more</a>
    </div>
  </div>
</div>

<!-- <div class="container-fluid wide-block"  id="events-block">
  <div class="container">
    <h4>Events</h4>
    <ol class="list-unstyled row">
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">12</div>
              <div class="text-uppercase">July 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Semicon West
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">6</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              The Human Library 10AM-3PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">3</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Physics Olympics 2PM-4PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">3</div>
              <div class="text-uppercase">June 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              STEM Student-Professor Lunch 12PM-2PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">27</div>
              <div class="text-uppercase">May 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Bio-Curious, "Biohacking and Climate Change" 7PM
            </div>
          </div>
        </a>
      </li>
      <li class="col-md-6 event">
        <a href="#">
          <div class="row">
            <div class="col-xs-4 date text-center">
              <div class="day">27</div>
              <div class="text-uppercase">May 2016</div>
            </div>
            <div class="col-xs-8 event-title">
              Steminar - Silke: "Digital Photonic Production with Lasers - Bits to Photons to Atoms" 2PM-4PM
            </div>
          </div>
        </a>
      </li>
    </ol>
    <div class="text-right">
      <a class="btn btn-default btn-block-sm text-uppercase" href="#" role="button">Full Schedule</a>
    </div>
  </div>
</div> -->

<div class="container-fluid wide-block text-center" id="involvement-block">
  <div class="overlay-img wide-md">
    <img src="{{ URL::asset('images/bg/leaf_wide.jpg') }}" />
  </div>
  <div class="overlay">
    <a class="btn" href="{{ action('MainController@faq') }}">Get Involved</a>
  </div>
</div>

<div class="container-fluid wide-block" id="affiliations-block">
  <div class="container">
    <h2>Supporters and Student Universities</h2>
    <ul class="list-unstyled row text-center">
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/ames.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/asl.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/avs.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/deanza.jpg') }}">
      </li>

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/drexel.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/foothill_owls.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/iitk.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/iitm.jpg') }}">
      </li>      

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/sardar_patel_uni.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/scu_broncos.png') }}">
      </li>

      <li class="clearfix visible-sm-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/sjsu.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/stanford.png') }}">
      </li>

      <li class="clearfix visible-sm-block visible-md-block"></li>

      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/uc.png') }}">
      </li>
      <li class="affiliation col-md-3 col-sm-6 col-xs-12">
        <img class="img-responsive center-block" src="{{ URL::asset('images/affiliations/ucsc_slugs.png') }}">
      </li>
    </ul>
  </div>
</div>

<div class="container-fluid wide-block" id="acknowledgements-block">
  <div class="container">
    <h2>Acknowledgements</h2>
    <p>
      This research has been supported by the Advanced Studies Laboratories (ASL) at NASA Ames, Foothill College, the Innovation and Collaboration Group, the Northern California Chapter of the American Vacuum Society, and the Scientific Learning Institute (SLI).  Special thanks to Wenonah Vercoutere, Mike Oye, Russell Kirkman, Robert Cormia, Chris Venture, Frank Cascarano, Geeta Verma, Latha Ramasamy, and Sherman Lee for providing their gracious knowledge, wisdom, and guidance in support of this project.
      <br /><br />
      Our largest thanks goes, as always, to the amazing NuLEAF team members.  Thank you for your passion and perseverance - we could never have done it without you and we will continue to do great things alongside you.
    </p>
  </div>
</div>
@stop

@section ('page_level_plugins')
@stop