@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - Members
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/members.css') }}">
@stop

@section ('content')
<div class="container">
  <h1 class="page-title theme-text">Members</h1>
  <hr />
  <div class="page-content">
    <div class="row">

      <!-- Project Leads -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/RachelMajor1.jpg') }}" onmouseover="this.src='images/portraits/RachelMajor2.jpg'" onmouseout="this.src='images/portraits/RachelMajor1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Rachel Major<br /><small><em>Project Lead</em></small></h4>
            Rachel is the head super scientist and a proud nature nerd. She authored the original proposal. She has degrees in Biology, Chemistry, 
            and Business from Drexel and Stanford University, and several years of experience in diverse research labs. She has also
            worked at her university's writing center for three years.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/pub/rachel-major/25/17/86b" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
              <a href="mailto:rachel.major@nuleaftech.com">
                <img src="{{ URL::asset('images/icons/email.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <!-- Managerial -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/BrianaGardener1.jpg') }}" onmouseover="this.src='images/portraits/BrianaGardener2.jpg'" onmouseout="this.src='images/portraits/BrianaGardener1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Briana Gardener<br /><small><em>Managerial Team</em></small></h4>
            Briana is currently a Computer Science student at Foothill College. She enjoys climbing rocks, photographing, and playing the ukulele.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/pub/briana-gardener/104/928/236" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>

      <!-- IT -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/NovaNg1.jpg') }}" onmouseover="this.src='images/portraits/NovaNg2.jpg'" onmouseout="this.src='images/portraits/NovaNg1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Nova Ng<br /><small><em>Information Technology Team</em></small></h4>
            Nova Ng is currently a student at UC Irvine, pursuing a Bachelor in Computer Science. She is interested in pursuing a field 
            in UX/UI design and human computer interaction.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/novang" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
              <a href="mailto:nova@nuleaftech.com">
                <img src="{{ URL::asset('images/icons/email.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/WolfgangStrack1.jpg') }}" onmouseover="this.src='images/portraits/WolfgangStrack2.jpg'" onmouseout="this.src='images/portraits/WolfgangStrack1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Wolfgang C. Strack<br /><small><em>Information Technology Team</em></small></h4>
            Wolfgang is currently a student attending both De Anza College and Ohlone Collge, studying Electrical Engineering and Computer Science.
            He specializes in full stack web development, but also has interests in artificial intelligence, parallel computing, and cyber security.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/wolfgangcstrack" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
              <a href="https://github.com/vulfgang" target="_blank">
                <img src="{{ URL::asset('images/icons/github.png') }}">
              </a>
              <a href="mailto:wolfgangcstrack@gmail.com">
                <img src="{{ URL::asset('images/icons/email.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/TuanPham1.jpg') }}" onmouseover="this.src='images/portraits/TuanPham2.jpg'" onmouseout="this.src='images/portraits/TuanPham1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Tuan Pham<br /><small><em>Information Technology Team</em></small></h4>
            Tuan graduated from San Jose State University with a degree in Molecular Biology and is currently pursuing a Masters in Software Engineering. He is passionate about developing software that will change the world.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/ttpham0111" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
              <a href="https://github.com/tuan91187dsf" target="_blank">
                <img src="{{ URL::asset('images/icons/github.png') }}">
              </a>
              <a href="mailto:ttpham0111@gmail.com">
                <img src="{{ URL::asset('images/icons/email.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Charlie Tuttle<br /><small><em>Information Technology Team</em></small></h4>
            Charlie is currently studying Computer Science at Foothill College.
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Aashia Mehta<br /><small><em>Information Technology Team</em></small></h4>
            Aashia is currently a Senior at Los Altos High School.
          </div>
        </div>
      </div>

      <!-- Grant Writing -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Katie Moran<br /><small><em>Grant Writing Team</em></small></h4>
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Kriti Srivastava<br /><small><em>Grant Writing Team</em></small></h4>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Wilmer Fabian Licona<br /><small><em>Grant Writing Team</em></small></h4>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>
      
      <!-- Liveware -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/RebeccaEliscu1.jpg') }}" onmouseover="this.src='images/portraits/RebeccaEliscu2.jpg'" onmouseout="this.src='images/portraits/RebeccaEliscu1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Rebecca Eliscu<br /><small><em>Liveware Team</em></small></h4>
            Rebecca is currently a student at Foothill College, hoping to pursue a major in Cognitive Science. In her free time, she enjoys photographing, 
            biking, reading, and embroidering.
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/AlessandroRupp1.jpg') }}" onmouseover="this.src='images/portraits/AlessandroRupp2.jpg'" onmouseout="this.src='images/portraits/AlessandroRupp1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Alessandro Rupp<br /><small><em>Liveware Team</em></small></h4>
            Alessandro is currently a Materials Science/Chemical Engineering student at Foothill College. He is passionate about chemistry and nanoscience. His hobbies include practicing soccer and playing loud music.
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/ZealPanchal1.jpg') }}" onmouseover="this.src='images/portraits/ZealPanchal2.jpg'" onmouseout="this.src='images/portraits/ZealPanchal1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Zeal Panchal<br /><small><em>Liveware Team</em></small></h4>
            Zeal is currently studying at De Anza College. She graduated from Sardar Patel University with a degree in Genetics and hopes to pursue a Master in Genetics as well.
            She has several years of laboratory experience.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/zealpanchal39" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/KristyNguyen1.jpg') }}" onmouseover="this.src='images/portraits/KristyNguyen2.jpg'" onmouseout="this.src='images/portraits/KristyNguyen1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Kristy Nguyen<br /><small><em>Liveware Team</em></small></h4>
            Kristy is currently a Biomedical Engineering major at Foothill College.
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Anisha Palasamudrum<br /><small><em>Liveware Team</em></small></h4>
            Anisha is currently a junior at Los Altos High School. She is interested in biochemistry and bioengineering. In her free time, she likes to paint and hang out with friends.
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/anisha-palasamudrum-91a913101" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Geeta Verma<br /><small><em>Liveware Team</em></small></h4>
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Ryan O'Neill<br /><small><em>Liveware Team</em></small></h4>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Latha<br /><small><em>Liveware Team</em></small></h4>
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>

      <!-- Hardware -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/SunnyLee1.jpg') }}" onmouseover="this.src='images/portraits/SunnyLee2.jpg'" onmouseout="this.src='images/portraits/SunnyLee1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Youngsun Lee<br /><small><em>Hardware Team</em></small></h4>
            Youngsun is currently studying Biochemistry at De Anza College. 
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/DerekHsu1.jpg') }}" onmouseover="this.src='images/portraits/DerekHsu2.jpg'" onmouseout="this.src='images/portraits/DerekHsu1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Derek Hsu<br /><small><em>Hardware Team</em></small></h4>
            Derek is currenty studying Computer Science at Foothill College.
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Tamoha Saha<br /><small><em>Hardware Team</em></small></h4>
            Tamoha (Moe) is a junior at Los Altos High School and is interested in studying medical biology in college. She enjoys singing and baking, and her best friend is her dog.
            <!--
            <br /><br />
            <p class="contacts">
              <a href="https://www.linkedin.com/in/zealpanchal39" target="_blank">
                <img src="{{ URL::asset('images/icons/linkedin.png') }}">
              </a>
            </p>
            -->
          </div>
        </div>
      </div>

      <!-- Photobiology/Photochemistry -->
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/ArielGarsh-Ochoa1.jpg') }}" onmouseover="this.src='images/portraits/ArielGarsh-Ochoa2.jpg'" onmouseout="this.src='images/portraits/ArielGarsh-Ochoa1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Ariel Garsh-Ochoa<br /><small><em>Photobiology/Photochemistry Team</em></small></h4>
            Ariel is currently studying Molecular Biology at Foothill College.
          </div>
        </div>
      </div>

      <div class="clearfix visible-xs-block visible-sm-block"></div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/YuliaZybina1.jpg') }}" onmouseover="this.src='images/portraits/YuliaZybina2.jpg'" onmouseout="this.src='images/portraits/YuliaZybina1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Yulia Zybina<br /><small><em>Photobiology/Photochemistry Team</em></small></h4>
            Yulia is currently a Molecular Biology student at Foothill College. In her free time, she likes to climb rock and practice martial arts.
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Jay Uppuluri<br /><small><em>Photobiology/Photochemistry Team</em></small></h4>
            Jay is currently a junior at Los Altos High School and is interested in all sciences. His hobbies include playing sports, watching TV, and doing cool chemical reactions. If life gave him lemonade, he would make lemons.
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Kushal Jain<br /><small><em>Photobiology/Photochemistry Team</em></small></h4>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-md-3 member-profile">
        <div class="thumbnail text-center">
          <img src="{{ URL::asset('images/portraits/unknown1.jpg') }}" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
          <div class="caption">
            <h4 class="theme-text">Mitchell Williams<br /><small><em>Photobiology/Photochemistry Team</em></small></h4>
            Jay is currently a junior at Los Altos High School and is interested in all sciences. His hobbies include playing sports, watching TV, and doing cool chemical reactions. If life gave him lemonade, he would make lemons.
          </div>
        </div>
      </div>
    </div> <!-- END .ROW -->

    <div>
      <p class="text-center"><strong>
        NuLEAF Technologies has also recieved the hard work, time, and expertise of many <a href="{{ action('MainController@past_members') }}">past team members</a>.
      </strong></p>
      <p class="text-center"><strong>
        Interested in joining our team? Please visit our <a href="{{ action('MainController@faq') }}">FAQ</a> for more information on how to get involved in NuLEAF Technologies.
      </strong></p>
    </div>

  </div> <!-- END .PAGE-CONTENT -->
</div> <!-- END .CONTAINER -->
@stop

@section ('page_level_plugins')
@stop