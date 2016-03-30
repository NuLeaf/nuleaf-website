@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - FAQ
@stop

@section ('content')
<div>
  <h3><b>What is NuLEAF Technologies?</b></h3><hr>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Who are you?
  </p>
  <p>
    We are a Foothill College project that is in connection with the
    Advanced Studies Laboratories (ASL), which is in partnership with
    NASA Ames Research Center and UC Santa Cruz.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Who is on the team?
  </p>
  <p>
    We have over 40 people working on our project, with students coming
    from various scientific and educational backgrounds. To see who's on
    our team, please visit our <a href="PagesController@members">Members Page</a>.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    What is your mission?
  </p>
  <p>
    Our mission is to research and produce a technique to harness higher
    levels of power with a process that is harmelssly integrated into the
    plant's biological system. The first objective is to create a carbon
    coating on the surface of the plane leaf capable of absorbing light
    outside of photosynthetically active radiation. The second objective
    is to generate electricity through the thermoelectric effect and to
    create a pathway for this electricity to an external power harvester.
    Please visit our <a href="{{ action('PagesController@about') }}">About page</a> for more
    information.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Why is this important?
  </p>
  <p>
    We want to help find a new clean and low-cost way to harvest energy.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    How can I get in contact with NuLEAF Technologies?
  </p>
  <p>
    Below are emails you can contact us through. Please choose the
    appropriate address to send your requests and questions to. Your
    email will be routed to the correct person and we will get back to
    you as soon as possible.
    <ul>
      <li type="square">
        <b>Rachel Major, Project Lead:</b>
        <a href="rachel.major@nuleaftech.com">rachel.major@nuleaftech.com</a>
      </li>
      <li type="square">
        <b>Managerial Team:</b>
        <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a></li>
      <li type="square">
        <b>Readware Teams:</b>
        <a href="readware@nuleaftech.com">readware@nuleaftech.com</a>
      </li>
      <li type="square">
        <b>Hardware Teams:</b>
        <a href="hardware@nuleaftech.com">hardware@nuleaftech.com</a>
      </li>
      <li type="square">
        <b>Liveware Teams:</b>
        <a href="liveware@nuleaftech.com">liveware@nuleaftech.com</a>
      </li>
      <li type="square">
        <b>Software Teams:</b>
        <a href="software@nuleaftech.com">software@nuleaftech.com</a>
      </li>
    </ul>
  </p>

  <h3><b>How can I join NuLEAF Technologies?</b></h3><hr>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Who can participate?
  </p>
  <p>
    <ul>
        <li type="square">Undergraduate students</li>
        <li type="square">Graduate students</li>
        <li type="square">Post doctoral students</li>
        <li type="square">Faculty members</li>
    </ul>
    (If you do not fit any of the categories above, but are still
    interested in participating. Please send an email explaining your
    circumstances.)
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    How do I apply?
  </p>
  <p>
    Application details will be released near the beginning of each
    season. Interviews will be conducted several weeks after. If you
    would like to be notified for when applications open, please send
    an email to
    <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a>
    with the subject line "NuLEAF Application Notification".
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    I am not a US citizen. Can I still apply?
  </p>
  <p>
    Yes! Currently, many of our participants are from other countries.
    We hope to have a diverse group of students from different
    backgrounds. However, please be aware that you may or may not be
    placed in your desired group. Due to government regulations, certain
    groups that need access to specific resources will require that all
    its team members be US citizens.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    What types of tasks will volunteers work on?
  </p>
  <p>
    Please refer to our <a href="{{ action('PagesController@teams') }}">Teams page</a>. You will be
    assigned to be work in one of the teams.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    How long is the volunteering duration period?
  </p>
  <p>
    The minimum volunteering period is one season (~3 months). However,
    you are welcome to volunteer as long as you like. Be mindful that
    there will be reevaluation periods at the beginning of each season
    for returning volunteers.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Do I have to apply for each season to be considered a candidate?
  </p>
  <p>
    No. You can simply send us an email letting us know you would like to
    continue to volunteer.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    When will I be notified if I am chosen to participate in the NuLEAF
    Technologies program?
  </p>
  <p>
    Depending on the number of applicants, interviews may take one to
    three weeks to complete. Decisions will be made within two weeks of
    interviews.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Do I have to live near Foothill College or ASL to participate?
  </p>
  <p>
    No. Although, we highly recommend you be residing in the Bay Area,
    as this will make it much easier for you to commute to and from
    Team Meetings and STEMinars.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    Where are the meetings held?
  </p>
  <p>
    Team Meeting locations are to be decided by Team Leaders, whereas,
    STEMinar will usually be held at Foothill College. There will usually
    be one Team Meeting and one STEMinar every week.
  </p>

  <p class="section-title">
    <span class="glyphicon glyphicon-triangle-right"></span>
    What is the expected time commitment?
  </p>
  <p>
    You are expected to attend every Team Meeting and STEMinar. You can
    expect to dedicate 5-10 hours a week. We will be taking surveys at
    the beginning of each season and try to schedule the meetings around
    the participants' summer schedule.
  </p>
</div>

<p class="center bold">
  Don't see your question here? Please email to:
  <a href="mailto:contact@nuleaftech.com">contact@nuleaftech.com</a> and
  we will try to get back to you as quickly as possible.
</p>
@stop