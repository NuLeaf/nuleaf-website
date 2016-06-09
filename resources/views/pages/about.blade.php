@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - About
@stop

@section ('content')
  <div>
    <p class="section-title">About</p><hr>
    <h4>TEAM OVERVIEW</h4>
    <p>
       NuLEAF Technologies is a student-led engineering research organization dedicated to interdisciplinary science, biomimicry, and sustainability. We create bio-inspired solutions for a renewable energy future while building practical skills in the next generation of sustainable engineers.<br><br>
       Our team is composed of students, professors, and industry professionals from all over Silicon Valley.  Educational backgrounds of our members range from high school to undergraduate to PhDs with 30 years in the industry.  Equally diverse are the members' areas of study, including computer science, materials engineering, biochemistry, genetics, mathematics, ecology, physics, chemistry and many more.<br><br>
       We have five research teams that work on two projects, the microbial fuel cell and cuticular solar cell.  Our three operational teams are focused on the logistical aspects of running NuLEAF, including running STEMinars, writing grants, and maintaining our website and forum.
    </p><br>
    <h4>RESEARCH OVERVIEW</h4>
    <p>
      NuLEAF’s original objective was to develop a biomimetic method to generate electricity from plants without relying on photosynthesis.  While this is still our final goal, our engineering interests and projects have grown to also encompass the broader topic of harnessing solar energy.<br><br>
      True to our original commitment to generate electricity from plants, development of the microbial fuel cell and synthetic biology branch of the cuticular solar cell project are ongoing.  While the microbial fuel cell relies on the plant’s photosynthetic rate, our synthetic biology team’s final product will not. Also under development is the larger cuticular solar cell project, which seeks to develop a synthetic multi-functional solar cell.<br><br>
      Compared to current developments of generating electricity from plants, NuLEAF uses bio-inspired techniques to harness higher levels of power with minimal biological impacts. In relation to conventional solar panels, NuLEAF has the potential to be cheaper, less toxic, and more efficient without constant maintenance.  Our research projects will provide knowledge to the fields of bioengineering, genomics, biomaterials, synthetic biology, and solar energy.
    </p><br>
       <h3 class="bold">Pillars</h3><hr>
       <p>Our pillars are the core values that NuLEAF embodies as an organization.  They help to guide and shape our research to maintain scientific integrity and excellence. </p>
        <p class="section-title">Bio-inspired</p>
        The natural world has been solving the same physical problems that mankind is faced with today for the last 3.8 billion years.  There is incredible, untapped knowledge is this immense wealth of  
        experience.  Each step forward should be grounded in a respect of our natural roots. Collaborating with nature will take us to innovative, more efficient technological heights. 

        <p class="section-title">Interdisciplinary</p>
        An interdisciplinary project involves reaching across different scientific fields to acknowledge the multi-faceted nature of the world around us.  Though vastly different, 
        we are all connected.  By extension, all scientific disciplines are connected.   The sooner we embrace this fact, the sooner we will be able to the produce the best technology 
        possible from a core of intellectual excellence.

        <p class="section-title">Sustainable</p>
        Living on a healthy planet is so fundamental it should be common sense.  To preserve nature’s wonders is to preserve our way of life.  Operating in a sustainable manner is currently a challenge that 
        can only be overcome with tenacity, integrity, and creativity.  Although difficult, adapting our technology to live in harmony with the natural world around us is truly the only logical course.  

        <p class="section-title">Education</p>
        A good team is continually growing and learning.  The better we make our team, the better our work will be, and member’s personal and professional growth is of paramount importance.  
        We aim to provide our members with access to numerous scientific resources, including STEMinars, so that they can develop skills valuable to their future careers.

        <p class="section-title">Community</p>
        This is an ambitious, difficult research project with high standards, and we want our members will look back fondly on the experience.  We will foster an atmosphere of 
        trust and positive communication with an incredibly diverse group of students.  This includes building a fun-loving, but serious, environment where young scientists come 
        together to solve wide-ranging scientific problems.<br><br><hr><br><br>
    <h4>PROGRESS TO DATE</h4>
    <p>
        The Hardware and Photobiology teams successfully wrote and negotiated a grant from the Scientific Learning Institute (SLI) to fund the microbial fuel cell project.  The have completed the experimental design phase and are beginning their experiments. For all students involved, this was the first time they had wrote or negotiated a grant and, for many, their first time designing an experiment.<br><br>
        The Liveware team originally began their research by examining materials and mechanisms in nature that generate electricity.  Once the Oriental hornet was discovered, they began an extensive on the electrical, thermal, and optical properties of the Oriental Hornet.  Now that these major functions have been identified, the Liveware team is currently designing experiments based on specific functions.<br><br>
        The IT team has successful created the first version of the website and forum.  The forum is a useful tool for NuLEAF team communication.  The managerial team has expanded the professional network of students with STEMinars, planned several events, and organized trips to conferences.  The newly formed grant writing team is beginning work on their first grant.<br><br>
        For more detailed information on team progress or information on upcoming plans please visit the <a href="{{ action('PagesController@teams') }}">Teams page.</a>
    </p><br>
    <h4>UPCOMING PLANS</h4>
    <p>
        Our team come from various scientific backgrounds, including biology, chemistry, psychology, kinesiology, animation, and computer science, to name a few.  The education of the students ranges from 
        lower division undergraduate to master programs.  The STEMinars, in which students, industry professionals, and established scientists give lectures, have begun.
    </p><br>

    <p class="section-title">How to Contribute</p><hr>
    <p>
        If you have questions about the application process, please visit our <a href="{{ action('PagesController@faq') }}">FAQ page</a>.<br>
        If you would like to volunteer as a STEMinar speaker or have resources and ideas you would like to add, please email to: <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a>.
    </p>
  </div>
@stop