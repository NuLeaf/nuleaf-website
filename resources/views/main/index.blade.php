@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }}
@stop

@section ('page_level_styles')
<link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" type="text/css"/>
@stop

@section ('content')
<div class="main-block text-center" id="about-block">
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
</div>

<div class="container-fluid main-block text-center" id="pillars-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 inner-block">
        <div class="center-block pillar-img">
          <img class="img-responsive" src="{{ URL::asset('images/learn.png') }}" />
        </div>
        <h2 class="title">Learn</h2>
        <p>
          The first stage of the project is team formation.
          This project is committed to scientific excellence and to teaching young scientists through “STEMinars” and 
          real-world experience to help them gain confidence to develop both personally and professionally for their future careers.
        </p>
      </div>
      <div class="col-md-4 inner-block">
        <div class="center-block pillar-img">
          <img class="img-responsive" src="{{ URL::asset('images/research.png') }}" />
        </div>
        <h2 class="title">Research</h2>
        <p>
          Next is an extensive literature search. Our bio-inspired research strives to ensure the project’s commitment to healthy integration in the plant and ecosystem.
          In comparison to solar panels and other methods, this project has the potential to be cheaper, less toxic, and 
          more efficient by using natural materials and not requiring constant maintenance.
        </p>
      </div>
      <div class="col-md-4 inner-block">
        <div class="center-block pillar-img">
          <img class="img-responsive" src="{{ URL::asset('images/test.png') }}" />
        </div>
        <h2 class="title">Test</h2>
        <p>
          These steps lead towards our goal to create a generation of experimental design reports aimed to define proof of concept. 
          Teams will focus on the modeling of protein-nanostructure interactions, genetic engineering to create the optical coating and bioelectric network, 
          and conductive root wiring mesh and external power harvester development.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid main-block" id="projects-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 inner-block">
        <div class="thumbnail">
          <img src="{{ URL::asset('images/MFCTeam.png') }}" />
          <div class="caption">
            <h4>Microbial Fuel Cell</h4>
            <p>
              Improvement of the MFC device, which is an established mechanism of generating electricity from plants, by better understanding the role of symbiotic microbes and fungi and their effect on the photosynthetic efficiency of C4 plants.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 inner-block">
        <div class="thumbnail">
          <img src="{{ URL::asset('images/CSCTeam.png') }}" />
          <div class="caption">
            <h4>Cuticular Solar Cell</h4>
            <p>
              Recreate the thermal, electrical, and optical functions of the Oriental Hornet cuticle for a multi-functional solar cell. In parallel, the hornet’s genome will be studied for a synthetic biology approach.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 inner-block">
        <div class="thumbnail">
          <img src="{{ URL::asset('images/ITTeam.png') }}" />
          <div class="caption">
            <h4>Website and Forum</h4>
            <p>
              Continual improvement and maintenance of our website and forum for improved public presence and inter-team communication.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-right">
      <a class="btn btn-default btn-block-sm btn-sm text-uppercase" href="#" role="button">See more</a>
    </div>
  </div>
</div>

<div class="container-fluid main-block"  id="events-block">
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
</div>

<div class="container-fluid main-block text-center" id="involvement-block">
  <div class="overlay-img">
    <img src="{{ URL::asset('images/involvement.jpg') }}" />
  </div>
  <div class="overlay">
    <a class="btn" href="{{ action('MainController@faq') }}">Get Involved</a>
  </div>
</div>

<div class="container-fluid main-block" id="affiliations-block">
  <div class="container">
    <h2>Affiliations and Sponsors:</h2>
    <ul class="list-unstyled row text-center">
      <li class="affiliation col-md-4">
        <img src="{{ URL::asset('images/nasa.gif') }}">
      </li>
      <li class="affiliation col-md-4">
        <img src="{{ URL::asset('images/asl.png') }}">
      </li>
      <li class="affiliation col-md-4">
        <img src="{{ URL::asset('images/foothill.gif') }}">
      </li>
    </ul>
  </div>
</div>
@stop

@section ('page_level_plugins')
@stop