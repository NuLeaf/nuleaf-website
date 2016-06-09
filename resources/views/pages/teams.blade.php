@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - Teams
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/teams.css') }}">
@stop

@section('content')
<div>

    <br><p class="section-title">ORIGINAL PROPOSAL</p>
    The original proposal was to use genetic engineering to develop a coating on plants leaves to absorb light not used in photosynthesis and create electricity.  The objective of this project was to be biologically harmless and not rely on photosynthesis.  While this is still our long-term goal, the project has been broken down into several smaller projects.
    <center><img src="images/originalProposal.jpg" width="500" alt="original"></center>
    <br><br>


    <hr><p class="section-title">MICROBIAL FUEL CELL (MFC)</p>
    A microbial fuel cell is an established renewable energy device that was invented in 2010.  It is currently the only commercially viable method of generating electricity from plants, and is a product of companies such as Plant-E and Bioo.  A microbial fuel cell is a device that converts solar energy into bio electricity through syntrophy between the plant and the microbes in the soil.  The two teams responsible for creation the microbial fuel cell are the Hardware and Photobiology teams.<br><br>
    The Hardware team’s objective is to create a device to harvest the free electrons in the soil using graphite discs, copper wire, plasti-dip, and polyanaline powder.   The Photobiology team’s objective is to culture symbiotic microbes and fungi, grow them in different combinations with different C4 plants, and compare photosynthetic efficiency to improve the output of the microbial fuel cell.  Increasing the photosynthetic efficiency through a better understanding of this symbiotic relationship is what makes NuLEAF’s MFC project unique.
    <center><img src="images/MFCTeam.png" width="500" alt="original"></center>
    <br><br>


    <p class="section-title">CUTICULAR SOLAR CELL (CSC)</p>
    <i>Vespa orientalis</i> is a middle eastern wasp that is the only known organism in the animal kingdom that can convert light to electricity.  Researchers at Tel Aviv University have completed over thirty years of research on the hornet and found that the hornet’s yellow cuticle is responsible for this mechanism.  The cuticle’s properties include a photovoltaic molecule, light trapping/anti-reflectivity and semiconducting effects, and the abilities to store charge and convert waste heat to electricity.  The Liveware team is responsible for this project.<br><br>
    The objective of the Liveware team is to recreate the various properties of the cuticle separately in vitro and later combine them to create a multifunctional solar cell.  Current experiments focus on exploring the electrical, thermal, and optical properties of chitin and optical modeling of the upper layers of the cuticle.  In parallel, the genome of the hornet will be sequenced and studied to recreate the solar cell via synthetic biology and eventually placed in plant.
    <center><img src="images/CSCTeam.png" width="500" alt="original"></center> 
    <br><br>

    <p class="section-title">WEBSITE AND FORUM</p>
    The IT Team houses back-end developers, front-end developers, full-stack developers, and graphic designers.They are responsible for building and maintaining NuLEAF's web presence.This includes the external website which is used for outreach, marketing, and grant-applying purposes. Another task is the internal website which is used to facilitate communication across the different teams and within a team itself. It is also the central hub for NuLEAF's resources and research progress. For the two websites, the team works to maintain the necessary server and databases, ensuring security, reliability, and organization. In addition, the IT Team takes care of NuLEAF's social media sites.
    <center><img src="images/ITTeam.png" width="500" alt="original"></center>
    <br><br>

    <p class="section-title">GRANT WRITING AND MANAGERIAL TEAMS</p>
    The managerial team overseas NuLEAF’s operations and keeps the organization running smoothly.  They post weekly announcements with general news and upcoming events, including STEMinars, social gatherings, and conferences.  The newly formed grant writing team is drafting a basic description of NuLEAF while looking for suitable grants to help our research teams to progress.
    <center><img src="images/banner.jpg" width="500" alt="original"></center>
    <br><br>

    <p class="section-title">UPCOMING PLANS</p>
     By creating a “real science real learning” environment for our students, we are constantly seeking to improve our research and educational experience.  The managerial team continues to plan STEMinars, social events, and send students information on professional conferences and symposiums.  The grant writing team has begun the draft of their first grant and hope to submit it by the end of the summer to continue to fund the MFC and CSC teams.  The IT team is coming to the completion of the second version of the website.<br><br>The Hardware and Photobiology teams are expected to begin planting within the next several weeks and building their first prototype to be completed in the following months.  The three experimental design projects of the Liveware team aim to be completed by the end of the summer while in parallel seeking out sources of funding to begin their experiments.
</div>
@stop

@section ('page_level_plugins')
<script type="text/javascript" src="{{ URL::asset('js/teams.js') }}"></script>
@stop