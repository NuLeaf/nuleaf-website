@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - Teams
@stop

@section('content')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/teams.css?v=1.1') }}">
<script type="text/javascript" src="{{ URL::asset('js/teams.js') }}"></script>

<div>
  <div class="center bold" style="color:red">
    Hovers do not work on Firefox. Please view on another browser. We
    apologize for any inconvenience. Our IT Team is on their way to fix
    this.
  </div>

  <h3 class="bold" id="map-directions">
    Hover over numbers for team descriptions.
  </h3>

  <center>
    {{ HTML::image('images/teams.jpg', 'Teams', ['id' => 'map-image', 'width' => '1050', 'usemap' => '#map']) }}
  </center>

  <map id="team-map" name="team-map">
    <area shape="circle" coords="25,25,25" title="readware" href="" tabindex="0">
    <area shape="circle" coords="25,25,25" title="liveware-coating" href="" tabindex="1">
    <area shape="circle" coords="25,25,25" title="liveware-network" href="" tabindex="2">
    <area shape="circle" coords="25,25,25" title="hardware" href="" tabindex="3">
    <area shape="circle" coords="25,25,25" title="software" href="" tabindex="4">
  </map>

  <div id="readware" class="tiptext">
    <p>
      <span class="bold">Photobiology/Photochemistry Team</span>
      - ensure system does not interfere with plant's photosynthetic
      pathway
    </p>
    <p>
      <span class="bold">Biomimicry and Bio-inspired Team</span>
      - continual research to adhere to bio-inspired principles
    </p>
    <p>
      <span class="bold">Sustainability and Healthy Integration Team</span>
      - promote a healthy ecosystem and plant
    </p>
  </div>

  <div id="liveware-coating" class="tiptext">
    <p>
      <span class="bold">Genetic Engineering Team</span>
      - mechanism to generate usable nanostructures biologically
    </p>
  </div>

  <div id="liveware-network" class="tiptext">
    <p>
      <span class="bold">Structural Team</span>
      - ideal structure and back-up alternatives other than nanotechnology
    </p>
  </div>

  <div id="hardware" class="tiptext">
    <p>
      <span class="bold">Root Wiring Mesh Team</span>
      - conductive material in soil linking plant to power harvester
    </p>
    <p>
      <span class="bold">External Power Harvester Team</span>
      - stores and supplies energy to make it accessible to consumer
    </p>
  </div>

  <div id="software" class="tiptext">
    <p>
      <span class="bold">Information Technology Team</span>
      - public interface as well as central team communication hub
    </p>
    <p>
      <span class="bold">Nano-Simulations Team</span>
      - creates an animation of protein-nanoscale interactions
    </p>
    <p>
      <span class="bold">Patent Search Team</span>
      - gain inspiration from previous inventions and technology
    </p>
  </div>

  <h3 class="bold">Pillars</h3><hr>
  <p class="section-title">Bio-inspired</p>
  The natural world has been solving the same physical problems that
  mankind is faced with today for the last 3.8 billion years. There is
  incredible, untapped knowledge is this immense wealth of experience.
  Each step forward should be grounded in a respect of our natural roots.
  Collaborating with nature will take us to innovative, more efficient
  technological heights. 

  <p class="section-title">Interdisciplinary</p>
  An interdisciplinary project involves reaching across different
  scientific fields to acknowledge the multi-faceted nature of the world
  around us.  Though vastly different, we are all connected. By extension,
  all scientific disciplines are connected.   The sooner we embrace this
  fact, the sooner we will be able to the produce the best technology
  possible from a core of intellectual excellence.

  <p class="section-title">Sustainable</p>
  Living on a healthy planet is so fundamental it should be common sense.
  To preserve nature’s wonders is to preserve our way of life. Operating
  in a sustainable manner is currently a challenge that can only be
  overcome with tenacity, integrity, and creativity. Although difficult,
  adapting our technology to live in harmony with the natural world around
  us is truly the only logical course.  

  <p class="section-title">Education</p>
  A good team is continually growing and learning. The better we make our
  team, the better our work will be, and member’s personal and professional
  growth is of paramount importance. We aim to provide our members with
  access to numerous scientific resources, including STEMinars, so that
  they can develop skills valuable to their future careers.

  <p class="section-title">Community</p>
  This is an ambitious, difficult research project with high standards, and
  we want our members will look back fondly on the experience. We will
  foster an atmosphere of trust and positive communication with an
  incredibly diverse group of students.  This includes building a
  fun-loving, but serious, environment where young scientists come together
  to solve wide-ranging scientific problems. 
</div>
@stop