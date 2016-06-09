@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - Members
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/members.css') }}">
@stop

@section ('content')
  <div class="row">
      <!-- Project Leads -->
      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/RachelMajor1.jpg" onmouseover="this.src='images/portraits/RachelMajor2.jpg'" onmouseout="this.src='images/portraits/RachelMajor1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Rachel Major</p><p class="section-title team">Project Lead</p>
                  Rachel is the head super scientist and a proud nature nerd. She authored the original proposal. She has degrees in Biology, Chemistry, 
                  and Business from Drexel and Stanford University, and several years of experience in diverse research labs. She has also
                  worked at her university's writing center for three years.
                  <p class="contact"><a href="https://www.linkedin.com/pub/rachel-major/25/17/86b" target="_blank"><img src="images/linkedin.png"></a><a href="mailto:rachel.major@nuleaftech.com"><img src="images/email.png"></a></p>
              </div>
          </div>
      </div>

      <!-- Managerial -->

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/BrianaGardener1.jpg" onmouseover="this.src='images/portraits/BrianaGardener2.jpg'" onmouseout="this.src='images/portraits/BrianaGardener1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Briana Gardener</p><p class="section-title team">Managerial Team</p>
                  Briana is currently a Computer Science student at Foothill College. She enjoys climbing rocks, photographing, and playing the ukulele.
                  <p class="contact"><a href="https://www.linkedin.com/pub/briana-gardener/104/928/236" target="_blank"><img src="images/linkedin.png"></a></p>
              </div>
          </div>
      </div>


      <!-- IT -->
      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/NovaNg1.jpg" onmouseover="this.src='images/portraits/NovaNg2.jpg'" onmouseout="this.src='images/portraits/NovaNg1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Nova Ng</p><p class="section-title team">Information Technology Team</p>
                  Nova Ng is currently a student at UC Irvine, pursuing a Bachelor in Computer Science. She is interested in pursuing a field 
                  in UX/UI design and human computer interaction.
                  <p class="contact"><a href="https://www.linkedin.com/in/novang" target="_blank"><img src="images/linkedin.png"></a><a href="mailto:nova@nuleaftech.com"><img src="images/email.png"></a></p>
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/WolfgangStrack1.jpg" onmouseover="this.src='images/portraits/WolfgangStrack2.jpg'" onmouseout="this.src='images/portraits/WolfgangStrack1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Wolfgang C. Strack</p><p class="section-title team">Information Technology Team</p>
                  Wolfgang is currently a student attending both De Anza College and Ohlone Collge, studying Electrical Engineering and Computer Science.
                  He specializes in full stack web development, but also has interests in artificial intelligence, parallel computing, and cyber security.
                  <p class="contact"><a href="https://www.linkedin.com/in/wolfgangcstrack" target="_blank"><img src="images/linkedin.png"></a>
                  <a href="https://github.com/vulfgang" target="_blank"><img src="images/github.png"></a><a href="mailto:wolfgangcstrack@gmail.com"><img src="images/email.png"></a></p>
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/TuanPham1.jpg" onmouseover="this.src='images/portraits/TuanPham2.jpg'" onmouseout="this.src='images/portraits/TuanPham1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Tuan Pham</p><p class="section-title team">Information Technology Team</p>
                  Tuan is currently a student at both De Anza and Foothill College. He graduated from San Jose State University with a degree in Molecular Biology and hopes to pursue 
                  a Master in Computer Science.
                  <p class="contact"><a href="https://github.com/tuan91187dsf" target="_blank"><img src="images/github.png"></a></p>
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Charlie Tuttle</p><p class="section-title team">Information Technology Team</p>
                  Charlie is currently studying Computer Science at Foothill College.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Aashia Mehta</p><p class="section-title team">Information Technology Team</p>
                  Aashia is currently a Senior at Los Altos High School.
              </div>
          </div>
      </div>


      <!-- Grant Writing -->
      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/ShariqShah2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Katie Moran</p><p class="section-title team">Grant Writing Team</p>
                 
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Kriti Srivastava</p><p class="section-title team">Grant Writing Team</p>

              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Wilmer Fabian Licona</p><p class="section-title team">Grant Writing Team</p>

              </div>
          </div>
      </div>

      <!-- Liveware -->

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/RebeccaEliscu1.jpg" onmouseover="this.src='images/portraits/RebeccaEliscu2.jpg'" onmouseout="this.src='images/portraits/RebeccaEliscu1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Rebecca Eliscu</p><p class="section-title team">Liveware Team</p>
                  Rebecca is currently a student at Foothill College, hoping to pursue a major in Cognitive Science. In her free time, she enjoys photographing, 
                  biking, reading, and embroidering.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/AlessandroRupp1.jpg" onmouseover="this.src='images/portraits/AlessandroRupp2.jpg'" onmouseout="this.src='images/portraits/AlessandroRupp1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Alessandro Rupp</p><p class="section-title team">Liveware Team</p>
                  Alessandro is currently a Materials Science/Chemical Engineering student at Foothill College. He is passionate about chemistry and nanoscience. His hobbies include practicing soccer and playing loud music.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/ZealPanchal1.jpg" onmouseover="this.src='images/portraits/ZealPanchal2.jpg'" onmouseout="this.src='images/portraits/ZealPanchal1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Zeal Panchal</p><p class="section-title team">Liveware Team</p>
                  Zeal is currently studying at De Anza College. She graduated from Sardar Patel University with a degree in Genetics and hopes to pursue a Master in Genetics as well.
                  She has several years of laboratory experience.
                  <p class="contact"><a href="https://www.linkedin.com/in/zealpanchal39" target="_blank"><img src="images/linkedin.png"></a></p>
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/KristyNguyen1.jpg" onmouseover="this.src='images/portraits/KristyNguyen2.jpg'" onmouseout="this.src='images/portraits/KristyNguyen1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Kristy Nguyen</p><p class="section-title team">Liveware Team</p>
                  Kristy is currently a Biomedical Engineering major at Foothill College.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Anisha Palasamudrum</p><p class="section-title team">Liveware Team</p>
                  Anisha is currently a junior at Los Altos High School. She is interested in biochemistry and bioengineering. In her free time, she likes to paint and hang out with friends.
                  <p class="contact"><a href="https://www.linkedin.com/in/anisha-palasamudrum-91a913101" target="_blank"><img src="images/linkedin.png"></a></p>
              </div>
          </div>
      </div>


      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Geeta Verma</p><p class="section-title team">Liveware Team</p>
                 
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Ryan O'Neill</p><p class="section-title team">Liveware Team</p>
                 
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Latha</p><p class="section-title team">Liveware Team</p>
                 
              </div>
          </div>
      </div>


      <!-- Hardware -->

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/SunnyLee1.jpg" onmouseover="this.src='images/portraits/SunnyLee2.jpg'" onmouseout="this.src='images/portraits/SunnyLee1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Youngsun Lee</p><p class="section-title team">Hardware Team</p>
                 Youngsun is currently studying Biochemistry at De Anza College. 
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/DerekHsu1.jpg" onmouseover="this.src='images/portraits/DerekHsu2.jpg'" onmouseout="this.src='images/portraits/DerekHsu1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Derek Hsu</p><p class="section-title team">Hardware Team</p>
                  Derek is currenty studying Computer Science at Foothill College.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Tamoha Saha</p><p class="section-title team">Hardware Team</p>
                  Tamoha (Moe) is a junior at Los Altos High School and is interested in studying medical biology in college. She enjoys singing and baking, and her best friend is her dog.
                  <!--
                  <p class="contact"><a href="https://www.linkedin.com/in/zealpanchal39" target="_blank"><img src="images/linkedin.png"></a></p>
                  -->
              </div>
          </div>
      </div>


      <!-- Photobiology/Photochemistry -->
      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/ArielGarsh-Ochoa1.jpg" onmouseover="this.src='images/portraits/ArielGarsh-Ochoa2.jpg'" onmouseout="this.src='images/portraits/ArielGarsh-Ochoa1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Ariel Garsh-Ochoa</p><p class="section-title team">Photobiology/Photochemistry Team</p>
                  Ariel is currently studying Molecular Biology at Foothill College.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/YuliaZybina1.jpg" onmouseover="this.src='images/portraits/YuliaZybina2.jpg'" onmouseout="this.src='images/portraits/YuliaZybina1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Yulia Zybina</p><p class="section-title team">Photobiology/Photochemistry Team</p>
                  Yulia is currently a Molecular Biology student at Foothill College. In her free time, she likes to climb rock and practice martial arts.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Jay Uppuluri</p><p class="section-title team">Photobiology/Photochemistry Team</p>
                  Jay is currently a junior at Los Altos High School and is interested in all sciences. His hobbies include playing sports, watching TV, and doing cool chemical reactions. If life gave him lemonade, he would make lemons.
              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Kushal Jain</p><p class="section-title team">Photobiology/Photochemistry Team</p>

              </div>
          </div>
      </div>

      <div class="col-xs-6 col-md-3">
          <div class="thumbnail">
              <img class="graystyle" src="images/portraits/unknown1.jpg" onmouseover="this.src='images/portraits/unknown2.jpg'" onmouseout="this.src='images/portraits/unknown1.jpg'" alt="profile">
              <div class="description"><p class="section-title">Mitchell Williams</p><p class="section-title team">Photobiology/Photochemistry Team</p>
                  Jay is currently a junior at Los Altos High School and is interested in all sciences. His hobbies include playing sports, watching TV, and doing cool chemical reactions. If life gave him lemonade, he would make lemons.
              </div>
          </div>
      </div>



  </div>

  <div>
      <p class="bold center">NuLEAF Technologies has also recieved the hard work, time, and expertise of many <a href="{{ action('PagesController@past_members') }}">past team members</a>.</p>
      <p class="bold center">Interested in joining our team? Please visit our <a href="faq.php">FAQ</a> for more information on how to get involved in NuLEAF Technologies.</p>
  </div>
@stop

@section ('page_level_plugins')
<script type="text/javascript" src="{{ URL::asset('js/members.js') }}"></script>
@stop