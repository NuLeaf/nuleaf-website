@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }}
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
@stop

@section ('content')
<!-- Slideshow -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <a href="{{ action('PagesController@about') }}"><img src="images/slideshow1.JPG" height="100" alt="Project"></a>
            <div class="carousel-caption">
                <h3>Who are we?</h3>
                <p>Click to read about our project, progress to date, and future plans.</p>
            </div>
        </div>

        <div class="item">
            <a href="{{ action('PagesController@members') }}"><img src="images/slideshow2.JPG" height="100" alt="Members"></a>
            <div class="carousel-caption">
                <h3>Current Members</h3>
                <p>We have over 40 members working on our project, with students and faculty all over the Bay Area.</p>
            </div>
        </div>

        <div class="item">
            <img class="clip" src="images/website.jpg" height="100" alt="Website">
            <div class="carousel-caption">
                <h3>UNDER CONSTRUCTION</h3>
                <p>Please be patient as our Website Team is diligently working to improve the website.</p>
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

<!-- Left column -->
<div class="left-column">
    <p class="section-title">EVENTS</p><hr>
    <table class="table table-striped">
        <tr>
            <td><span class="title">July 12, 2016 - Semicon West </span><br>Meet at SEMI Institute in San Jose, Shuttle to Mascone Center in San Francisco<br></td>
        </tr>
        <tr>
            <td><span class="title">June 6, 2016 - The Human Library 10am-3pm</span><br>Foothill College Library<br></td>
        </tr>
        <tr>
            <td><span class="title">June 3, 2016 - Physics Olympics 2-4pm</span><br>PSEC Quad<br></td>
        </tr>
        <tr>
            <td><span class="title">June 3, 2016 - STEM Student-Professor Lunch 12-2pm </span><br>Hearthside Lounge, Foothill Campus<br></td>
        </tr>
         <tr>
            <td><span class="title">May 27, 2016 - Bio-Curious, "Biohacking and Climate Change” - 7pm </span></td>
        </tr>
        <tr>
            <td><span class="title">May 27, 2016 - STEMinar - Silke, "Digital Photonic Production with Lasers – Bits to Photons to Atoms" 2-4pm</span><br>Room 4715, Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">May 20, 2016 - STEMinar - Jean-Phillipe (JP) Lavoie, "Lasers in Material Processing" 12-1pm</span><br>Room 4716, Foothill Campus<br></td>
        </tr>                               
        <tr>
            <td><span class="title">May 17, 2016 - IEEE Symposium: Nanotechnology in Biosystems, Medicine, and Health 8:30-5:45pm</span><br>Texas Instruments Auditorium, Santa Clara CA<br></td>
        </tr>
        <tr>
            <td><span class="title">May 13, 2016 - STEMinar - Frank Osterloh, "Artificial Photosynthesis with Inorganic Materials" 12-1:30pm</span><br>Room 4716, Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">May 13, 2016 - Autodesk Workshop at Foothill 1-4pm</span><br>Room 4223, Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">April 29, 2016 - STEMinar - Victoria Armigo, "Open Sesame: The Story of Seeds" 12-2pm</span><br>Room 4716, Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">May 22, 2016 - Earth Day NASA AMES Event 1-4pm</span><br>NASA Ames Sustainability Base<br></td>
        </tr>
        <tr>
            <td><span class="title">May 20, 2016 - Club Day at Foothill 12-1pm</span><br>Library Quad on the Foothill Campus<br></td>
        </tr>     
    </table>

    <p class="section-title">ACKNOWLEDGEMENTS</p><hr>
    <div>
        This research has been supported by the Advanced Studies Laboratories (ASL) at NASA Ames, Foothill College, the Innovation and Collaboration Group, the Northern California Chapter of the American Vacuum Society, and the Scientific Learning Institute (SLI).  Special thanks to Wenonah Vercoutere, Mike Oye, Russell Kirkman, Robert Cormia, Chris Venture, Frank Cascarano, Geeta Verma, Latha Ramasamy, and Sherman Lee for providing their gracious knowledge, wisdom, and guidance in support of this project. <br><br>Our largest thanks goes, as always, to the amazing NuLEAF team members.  Thank you for your passion and perseverance - we could never have done it without you and we will continue to do great things alongside you.
    </div>
</div>

<!-- Right column -->
<div class="right-column">

    <p class="section-title">FEATURED PROJECTS</p><hr>
    <div>
        <p class="title">Microbial Fuel Cell</p>
        <div class="center">
            <img src="images/MFCTeam.png" width="300" alt="MFC Team"/><br>
            Improvement of the MFC device, which is an established mechanism of generating electricity from plants, by better understanding the role of symbiotic microbes and fungi and their effect on the photosynthetic efficiency of C4 plants.
        </div>
         <p class="title">Cuticular Solar Cell</p>
        <div class="center">
            <img src="images/CSCTeam.png" width="300" alt="CSC Team"/><br>
            Recreate the thermal, electrical, and optical functions of the Oriental Hornet cuticle for a multi-functional solar cell.  In parallel, the hornet’s genome will be studied for a synthetic biology approach. 
        </div>
         <p class="title">Website and Forum</p>
        <div class="center">
            <img src="images/ITTeam.png" width="300" alt="IT Team"/><br>
            Continual improvement and maintenance of our website and forum for improved public presence and inter-team communication.
        </div>
    </div>

    <p class="section-title">STEMinars</p><hr> 
    <div class="teaching-meeting">
        <p class="title">Digital Photonic Production with Lasers – Bits to Photons to Atoms - 5/27/16</p>
        <img class="image-left" src="images/Silke.jpg" width="200" alt="profile"/>
        <div class="text-wrap-right">
          Silke received a Ph.D. in mechanical engineering from the Technical University in Aachen. She started her career in lasers at Fraunhofer Institute for Laser Technology in Aachen, and has held engineering and marketing positions working with high power laser diodes and fiber lasers. Today, she has 25 years of experience with industrial lasers and their applications and is currently the general manager of DirectPhotonics, Inc. <br><br>After a short intro into the generation of laser light, the talk will describe how to use light as a tool to generate parts in a way that’s very different from standard manufacturing processes. The laser offers highest power density, highest speed, highest precision, non-contact processing with best controllability. Photonic production is applicable to a wide variety of fields from biomedical and medical to aeronautic and automotive components. 
        </div>
    </div>

    <div class="teaching-meeting">
        <p class="title">Lasers in Material Processing - 5/20/16</p>
        <img class="image-left" src="images/JeanPhilippeLavoie.jpg" width="200" alt="profile"/>
        <div class="text-wrap-right">
            Jean-Philippe (JP) Lavoie earned his Ph.D in Physics from Laval University in 2010. JP joined Coherent as a new product introduction engineer and is now a senior laser applications engineer. JP's work primarily focuses on utilizing high-power fiber, CO2, and diode pumped lasers. <br><br>A basic description of the working principle of a laser and its beam characteristics will be presented along with an overview of the most commonly used laser types in materials processing. Several laser materials processing examples will be presented in hot markets such as microelectronics, transportation and medical. 
        </div>
    </div>
</div>
@stop