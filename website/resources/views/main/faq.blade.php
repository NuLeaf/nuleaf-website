@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - FAQ
@stop

@section ('content')
<div class="container">
  <h1 class="page-title theme-text">Frequently Asked Questions</h1>
  <hr />
  <div class="page-content">
    <h2 class="theme-text">What is NuLEAF Technologies?</h2>
    <br />
    <div class="panel-group" id="what-is-nuleaf-technologies" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-who-are-you">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#what-is-nuleaf-technologies" href="#who-are-you" aria-expanded="false" aria-controls="who-are-you">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Who are you?
            </a>
          </h4>
        </div>
        <div id="who-are-you" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-who-are-you">
          <div class="panel-body">
            We are an engineering research organization based out of Los Altos, CA with team members and mentors contributing from several universities and corporations in Silicon Valley.  
            <br /><br />
            Our project is allied by Foothill College, the Advanced Studies Laboratories (ASL) at NASA Ames, the Scientific Learning Institute, and the Northern California Chapter of the American Vacuum Society (NCCAVS).
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-who-are-our-members">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#what-is-nuleaf-technologies" href="#who-are-our-members" aria-expanded="false" aria-controls="who-are-our-members">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Who are our members?
            </a>
          </h4>
        </div>
        <div id="who-are-our-members" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-who-are-our-members">
          <div class="panel-body">
            Our members include high school, undergraduate, and graduate students, industry professionals, and professors coming from various scientific and educational backgrounds. To see who's on our team, please visit our <a href="{{ action('MainController@members') }}">Members</a> Page. 
            <br /><br />
            Please visit our <a href="{{ action('MainController@about') }}">About</a> page for more information.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-what-is-your-mission">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#what-is-nuleaf-technologies" href="#what-is-your-mission" aria-expanded="false" aria-controls="what-is-your-mission">
              <span class="glyphicon glyphicon-triangle-right"></span>
              What is your mission?
            </a>
          </h4>
        </div>
        <div id="what-is-your-mission" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-what-is-your-mission">
          <div class="panel-body">
            Our mission is to actively fight climate change by developing new clean and low-cost ways to harvest electricity while demonstrating the power and proliferation of bio-inspired design.  We also strive to create a proactive and hands-on learning environment for students to gain practical research and engineering skills to become the next generation of sustainable engineers.  Please visit our <a href="{{ action('MainController@about') }}">About page</a> for more information.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-contact-nuleaf">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#what-is-nuleaf-technologies" href="#contact-nuleaf" aria-expanded="false" aria-controls="contact-nuleaf">
              <span class="glyphicon glyphicon-triangle-right"></span>
              How can I get in contact with NuLEAF Technologies?
            </a>
          </h4>
        </div>
        <div id="contact-nuleaf" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-contact-nuleaf">
          <div class="panel-body">
            Below are emails you can contact us through.
            <ul>
              <li type="square">
                <strong>Rachel Major, Project Lead:</strong>
                <a href="rachel.major@nuleaftech.com">rachel.major@nuleaftech.com</a>
              </li>
              <li type="square">
                <strong>Managerial Team:</strong>
                <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <h2 class="theme-text">How can I join NuLEAF Technologies?</h2>
    <br />
    <div class="panel-group" id="how-can-i-join-nuleaf-technologies" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-who-can-participate">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#who-can-participate" aria-expanded="false" aria-controls="who-can-participate">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Who can participate?
            </a>
          </h4>
        </div>
        <div id="who-can-participate" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-who-can-participate">
          <div class="panel-body">
            <ul>
              <li type="square">High school students</li>
              <li type="square">Undergraduate students</li>
              <li type="square">Graduate students</li>
              <li type="square">Post doctoral students</li>
              <li type="square">Faculty members</li>
            </ul>
            If you do not fit any of the categories above, but are still interested in participating. Please send an email explaining your circumstances.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-how-do-i-apply">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#how-do-i-apply" aria-expanded="false" aria-controls="how-do-i-apply">
              <span class="glyphicon glyphicon-triangle-right"></span>
              How do I apply?
            </a>
          </h4>
        </div>
        <div id="how-do-i-apply" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-how-do-i-apply">
          <div class="panel-body">
            There are currently openings for our PMFC, social media, and grant writing teams. To apply, please fill out this <a href="https://docs.google.com/forms/d/1vVYPLhU0PC0r5jPbNMD7OjPsqtjhxopFstKAjZlZAss/viewform">Google form</a>
            <br />
            After completion of this form, send your resume to <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a> for your application to be processed.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-not-us-citizen">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#not-us-citizen" aria-expanded="false" aria-controls="not-us-citizen">
              <span class="glyphicon glyphicon-triangle-right"></span>
              I am not a US citizen. Can I still apply?
            </a>
          </h4>
        </div>
        <div id="not-us-citizen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-not-us-citizen">
          <div class="panel-body">   
            Yes! However, please be aware that due to government regulations there is an extended process to get into the ASL system when you are not a citizen or permanent resident of the U.S.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-type-of-tasks">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#type-of-tasks" aria-expanded="false" aria-controls="type-of-tasks">
              <span class="glyphicon glyphicon-triangle-right"></span>
              What types of tasks will volunteers work on?
            </a>
          </h4>
        </div>
        <div id="type-of-tasks" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-type-of-tasks">
          <div class="panel-body">
            Please refer to our <a href="{{ action('MainController@research') }}">Teams page</a> for more information.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-volunteer-duration">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#volunteer-duration" aria-expanded="false" aria-controls="volunteer-duration">
              <span class="glyphicon glyphicon-triangle-right"></span>
              How long is the volunteering duration period? 
            </a>
          </h4>
        </div>
        <div id="volunteer-duration" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-volunteer-duration">
          <div class="panel-body">
            The minimum volunteering period is six months, although exceptions can be made depending on student circumstances.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-reapplication-for-candidacy">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#reapplication-for-candidacy" aria-expanded="false" aria-controls="reapplication-for-candidacy">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Do I have to apply for each season to be considered a candidate?
            </a>
          </h4>
        </div>
        <div id="reapplication-for-candidacy" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-reapplication-for-candidacy">
          <div class="panel-body">
            No, you must fill out the quarterly evaluation for the managerial team. As long as you are contributing to your team (no excessive absences, producing a steady stream of work, etc), you are still on the NuLEAF team.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-notified-of-acceptance">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#notified-of-acceptance" aria-expanded="false" aria-controls="notified-of-acceptance">
              <span class="glyphicon glyphicon-triangle-right"></span>
              When will I be notified if I am chosen to participate in the NuLEAF Technologies program?
            </a>
          </h4>
        </div>
        <div id="notified-of-acceptance" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-notified-of-acceptance">
          <div class="panel-body">
            Depending on the number of applicants, interviews may take one to three weeks to complete. Decisions will be made within two weeks of interviews.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-local-to-apply">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#local-to-apply" aria-expanded="false" aria-controls="local-to-apply">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Do I have to live near Foothill College or ASL to participate?
            </a>
          </h4>
        </div>
        <div id="local-to-apply" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-local-to-apply">
          <div class="panel-body">
            No, although we discourage students from working remotely our members are from all over silicon valley.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-where-are-meetings">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#where-are-meetings" aria-expanded="false" aria-controls="where-are-meetings">
              <span class="glyphicon glyphicon-triangle-right"></span>
              Where are the meetings held?
            </a>
          </h4>
        </div>
        <div id="where-are-meetings" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-where-are-meetings">
          <div class="panel-body">
            Team meeting locations are to be decided by team leaders for the convenience of each team, but are typically held at Foothill College or ASL at NASA Ames.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-expected-commitments">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#expected-commitments" aria-expanded="false" aria-controls="expected-commitments">
              <span class="glyphicon glyphicon-triangle-right"></span>
              What is the expected time commitment?
            </a>
          </h4>
        </div>
        <div id="expected-commitments" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-expected-commitments">
          <div class="panel-body">
            You are expected to attend each individual team meeting and on average dedicate 5-10 hours a week to NuLEAF.
          </div>
        </div>
      </div>

      <!-- <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading-">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#how-can-i-join-nuleaf-technologies" href="#" aria-expanded="false" aria-controls="">
              <span class="glyphicon glyphicon-triangle-right"></span>
              
            </a>
          </h4>
        </div>
        <div id="" class="panel-collapse collapse" role="tabpanel" aria-labelledby="#heading-">
          <div class="panel-body">
            
          </div>
        </div>
      </div> -->
    </div>
    <br />
    <p class="text-center"><strong>
      Don't see your question here? Please email to: <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a> and we will get back to you as quickly as possible.
    </strong></p>
  </div>
</div>
@stop