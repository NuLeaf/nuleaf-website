<?php
    // Insert the page header
    //$page_title = 'Home';   
    require_once('header.php');

    // Insert page CSS
    echo '<link type="text/css" rel="stylesheet" href="css/index.css?v=1.1">';
?>
<!-- Slideshow -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <a href="about.php"><img src="images/slideshow1.JPG" height="100" alt="Project"></a>
            <div class="carousel-caption">
                <h3>Who are we?</h3>
                <p>Click to read about our project, progress to date, and future plans.</p>
            </div>
        </div>

        <div class="item">
            <a href="members.php"><img src="images/slideshow2.JPG" height="100" alt="Members"></a>
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
        This research has been supported by the Advanced Studies Laboratories in conjunction with Foothill College and the Innovation and Collaboration Student Group. 
        Special thanks to Wenonah Vercoutere, Mike Oye, Russell Kirkman, and Robert Cormia for providing their gracious knowledge, wisdom, and guidance in support of this project.
    </div>
</div>

<!-- Right column -->
<div class="right-column">

    <p class="section-title">FEATURED PROJECTS</p><hr>
    <div>
        <p class="title">Visual Simulations Model - In Progress</p>
        <div class="center">
            <object data="simulation/index.html" width="500" height="300"><embed src="imulation/index.html" width="500" height="300"></embed>Error: Embedded data could not be displayed.</object>
            <b>Click <a href="simulation/index.html">here</a> to view full-screen model.</b><br><br>
             The goal is to create an animation of protein-nanoscale interactions. The model will detail protein folding of
             proteins found in plants, and also show the chemical structure of these proteins when carbon               
             nanostructures are attached. For questions and/or suggestions, please contact <a href="shariqshah@hostanalytics.com">Shariq Shah</a>.
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

<?php
    // Insert the page footer
    require_once('footer.php');
?>

