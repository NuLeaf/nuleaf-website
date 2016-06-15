@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - FAQ
@stop

@section ('content')
<div class="container">
  <h1 class="page-title">Frequently Asked Questions</h1>
  <hr />
  <div class="page-content">
    <h2>What is NuLEAF Technologies?</h2>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Who are you?
    </h4>
    <p>
      We are a student-lead engineering research organization based out of Los Altos, CA with team members and mentors contributing from several universities and corporations in Silicon Valley.
      <br /><br />
      Our project is in connection with Foothill College, the Advanced Studies Laboratories (ASL), a partnership group with NASA Ames Research Center and UC Santa Cruz, the Scientific Learning Institute, and the Northern California Chapter of the American Vacuum Society (NCCAVS).  NuLEAF Tech is the largest project within its parent organization, the Innovation and Collaboration group. 
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Who are our members?
    </h4>
    <p>
      Our students range from high school, undergraduate, and graduate students coming from various scientific and educational backgrounds. To see who's on our team, please visit our <a href="{{ action('MainController@members') }}">Members Page</a>. Our mentors also include professors and industry professionals.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      What is your mission?
    </h4>
    <p>
      Our mission is to actively fight climate change by developing new clean and low-cost ways to harvest electricity while demonstrating the power and proliferation of bio-inspired design.  We also strive to create a proactive and hands-on learning environment for students to gain practical research and engineering skills to become the next generation of sustainable engineers.  Please visit our <a href="{{ action('MainController@about') }}">About page</a> for more information.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      How can I get in contact with NuLEAF Technologies?
    </h4>
    <p>
      Below are emails you can contact us through. Please choose the appropriate address to send your requests and questions to. If necessary, your email will be routed to the correct person and we will get back to you as soon as possible.
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
    </p>
    <hr />
    <h2>How can I join NuLEAF Technologies?</h2>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Who can participate?
    </h4>
    <p>
      <ul>
        <li type="square">High school students</li>
        <li type="square">Undergraduate students</li>
        <li type="square">Graduate students</li>
        <li type="square">Post doctoral students</li>
        <li type="square">Faculty members</li>
      </ul>
      (If you do not fit any of the categories above, but are still interested in participating. Please send an email explaining your circumstances.)
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      How do I apply?
    </h4>
    <p>
      You may apply to NuLEAF at any time, although there may not be openings on your desired team.  To apply, please fill out this <a href="https://docs.google.com/forms/d/1vVYPLhU0PC0r5jPbNMD7OjPsqtjhxopFstKAjZlZAss/viewform">Google form</a>.
      <br /> 
      After completion of this form, you must send your resume to <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a> otherwise your application will not be processed.
      <br />
      When your application is processed and if you are granted an interview, you will be interviewed by a member from your top ranking team(s) to determine your qualifications and compatibility. 
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      I am not a US citizen. Can I still apply?
    </h4>
    <p>
      Yes! Currently, many of our participants are from other countries. We hope to have a diverse group of students from different backgrounds. However, please be aware that due to government regulations there is an extended process to get into the ASL system when you are not a citizen or permanent resident of the U.S.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      What types of tasks will volunteers work on?
    </h4>
    <p>
      Please refer to our <a href="{{ action('MainController@teams') }}">Teams page</a> for more information.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      How long is the volunteering duration period?
    </h4>
    <p>
      The minimum volunteering period is six months, although exceptions can be made depending on student circumstances. There are evaluations every 3 months for returning volunteers.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Do I have to apply for each season to be considered a candidate?
    </h4>
    <p>
      No, you must fill out the quarterly evaluation for the managerial team. As long as you are contributing to your team (no excessive absences, producing a steady stream of work, etc), you are still on the NuLEAF team.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      When will I be notified if I am chosen to participate in the NuLEAF Technologies program?
    </h4>
    <p>
      Depending on the number of applicants, interviews may take one to three weeks to complete. Decisions will be made within two weeks of interviews.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Do I have to live near Foothill College or ASL to participate?
    </h4>
    <p>
      No. Although we highly recommend you be residing in the Bay Area, as this will make it much easier for you to commute to and from team meetings and STEMinars, it is not a requirement.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      Where are the meetings held?
    </h4>
    <p>
      Team meeting locations are to be decided by team leaders for the convenience of each team.  STEMinars will usually be held at Foothill College. There will usually be one team meeting and one STEMinar every week.
    </p>
    <br />
    <h4>
      <span class="glyphicon glyphicon-triangle-right"></span>
      What is the expected time commitment?
    </h4>
    <p>
      You are expected to attend each individual team meeting and on average dedicate 5-10 hours a week to NuLEAF. STEMinars are optionally but hightly recommended.
    </p>
    <br />
    <p class="text-center"><strong>
      Don't see your question here? Please email to: <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a> and we will get back to you as quickly as possible.
    </strong></p>
  </div>
</div>
@stop