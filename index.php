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
            <a href="about.php"><img src="images/slideshow1.jpg" height="100" alt="Project"></a>
            <div class="carousel-caption">
                <h3>Who are we?</h3>
                <p>Click to read about our project, progress to date, and future plans.</p>
            </div>
        </div>

        <div class="item">
            <a href="members.php"><img src="images/slideshow2.jpg" height="100" alt="Members"></a>
            <div class="carousel-caption">
                <h3>Current Members</h3>
                <p>We have over 60 members working on our project, with students and faculty all over the Bay Area.</p>
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
            <td><span class="title">August 14, 2015 - Teaching Meeting 5pm-7pm</span><br>Program Room at Los Altos Library<br>Forum and Kakao Introduction with Shariq Shah</td>
        </tr>
        <tr>
            <td><span class="title">August 7, 2015 - Teaching Meeting 3:30pm-5:30pm</span><br>Meeting Room at Saratoga Library<br>Introduction to Nanotechnology with Margaret Ackroyd</td>
        </tr>
        <tr>
            <td><span class="title">August 5, 2015 - ASL poster event 2pm-4pm</span><br>Building 152, Room 171 at NASA Ames Research Park (Moffett Field)
        <tr>
            <td><span class="title">July 31, 2015 - Teaching Meeting 3pm-5pm</span><br>Meeting Room at Saratoga Library<br>Protein Folding and Physical Biomodeling with Dr. Promita Chakraborty</td>
        </tr>
        <tr>
            <td><span class="title">July 10, 2015 - Summer Social 1pm-3pm</span><br>Varian Park, Cupertino</td>
        </tr>   
        <tr>
            <td><span class="title">July 5, 2015 - Summer applications close</span></td>
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

    <p class="section-title">TEACHING MEETINGS</p><hr>
    <div class="teaching-meeting">
        <p class="title">Introduction to Nanotechnology - 8/7/2015</p>
        <img class="image-left" src="images/MargaretAckroyd.jpg"/>
        <div class="text-wrap-right">
            Margaret Ackroyd is a bioengineering major working towards a career in bio-nanotechnology research. <br>
            Bionanotechnology is a rapidly growing field that denotes research efforts tasked with exploring the relationships between nanoscience and biology;
            one such aspect would be biomimetic design on the nanoscale.<br><br>
            Margaret Ackroyd is currently a student at Foothill College. Margaret has dabbled in many areas of expertise, 
            some of which include design, medicine, business law, computer science, environmental stewardship, and entrepreneurship.
        </div>
    </div>
    <div class="teaching-meeting">
        <p class="title">Protein Folding and Physical Biomodeling - 7/31/2015</p>
        <img class="image-left" src="images/PromitaChakraborty.jpg"/>
        <div class="text-wrap-right">
            Dr. Promita Chakraborty is well versed in protein folding and is the exploring the new frontier of physical biomodeling.
            Physical biomodeling is a novel endeavor that intersects natural science, computational science, and precision physical modeling.
            She founded QuezyLab, which seeks to connect the macro-world to the nano-world. 
            <br><b>For more information:</b><br>
            QuezyLab: <a href="http://www.quezylab.com/">http://www.quezylab.com/</a><br>
            Peppytide & Peppy Molecules: <a href="http://www.peppytides.org/">http://www.peppytides.org/</a><br>
            Homepage: <a href="http://people.cs.vt.edu/~promita9/">http://people.cs.vt.edu/~promita9/</a>
        </div>
    </div>
</div>

<?php
    // Insert the page footer
    require_once('footer.php');
?>

