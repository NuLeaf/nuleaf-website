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
    <p class="section-title">LATEST UPDATES</p><hr>
    <table class="table table-striped">
        <tr>
            <td><span class="title">November 27, 2015 - STEMinar 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">November 20, 2015 - Student Presentations 3pm-4:30pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">November 13, 2015 - STEMinar 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">November 13, 2015 - AVS Energy Storage and Conversion 12:30pm-4pm</span><br>Semi Global Headquarters Seminar Rooms 1 & 2<br>3081 Zanker Rd. San Jose, CA</td>
        </tr>
         <tr>
            <td><span class="title">November 6, 2015 - STEMinar 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">November 6, 2015 - ICG Projects Club Meeting 2pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">October 30, 2015 - STEMinar 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>                               
        <tr>
            <td><span class="title">October 23, 2015 - STEMinar 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">October 16, 2015 - Teaching Meeting 3pm-5pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">October 16, 2015 - ICG Projects Club Meeting 2pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">October 15, 2015 - ICG Projects Club Meeting 2pm</span><br>Room 4714 at Foothill College<br></td>
        </tr>
        <tr>
            <td><span class="title">October 9, 2015 - ICG Social 1pm-3pm</span><br>Room 4714 at Foothill Campus<br></td>
        </tr>
        <tr>
            <td><span class="title">October 2, 2015 - ICG Projects Club Meeting 2pm</span><br>Room 4714 at Foothill College<br></td>
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
    <p class="section-title">STEMinar</p><hr> 
    <div class="teaching-meeting">
        <p class="title">What is Biomimicry? - 11/13/2015</p>
        <img class="image-left" src="images/JeanetteLim.jpg" width="200" alt="profile"/>
        <div class="text-wrap-right">
            Jeanette Lim works at the Biomimicry Institute and is the AskNature Content Coordinator. Jeanette has a PhD in Biomechanics from Harvard University. She is passionate about education, the environment, and science and technology.<br><br>
            The topic of Jeanette’s talk will be “What is Biomimcry” with an emphasis on applications. Biomimcry seeks inspiration from nature to solve human design problems. 
            Nature has 3.8 billion years of R&D under its belt, and has created a wealth of knowledge and solutions. These solutions are elegant, brilliant, interdisciplinary, and sustainable.<br><br>
            The examples of biomimcry are everywhere – in the re-design of axial fans to model owl wings, the color-changing paint on plastics modeled after butterflies, water-soluble polymers from oyster shell growth, research towards a new type of battery inspired by virus proteins, and more!<br><br>
            The inspiration for the next game-changing technology could be right outside your window.
        </div>
    </div>  
    <div class="teaching-meeting">
        <p class="title">Zotero Introduction and Workshop - 10/6/2015</p>
        <img class="image-left" src="images/LisaSewell.jpg" width="200" alt="profile"/>
        <div class="text-wrap-right">
            This week we have the honor of hosting Lisa Sewell, a NASA Librarian! Her and Rachel will be hosting an Introduction to Zotero workshop. Some of you may remember the talk Lisa gave a couple of weeks ago about how to do a literature search.<br><br>
            Zotero is a free, open source reference management and organizational tool. It makes using and sorting your references extremely easy with a built-in browser icon, tabs for different categories of references, and an in-text citation tool!<br><br>
            It is extremely useful for NuLEAF Tech activities as well as general writing of school papers, because we all know sorting references can become an extreme headache.
            There is a bit of a learning curve with Zotero, so we will hold several workshops to help guide your usage.
        </div>
    </div>
</div>

<?php
    // Insert the page footer
    require_once('footer.php');
?>

