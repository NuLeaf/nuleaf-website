@extends ('layouts.pages')

@section ('title')
{{ trans('pages.main_title') }} - Members
@stop

@section ('page_level_styles')
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/members.css') }}">
@stop

@section ('content')
<div>
  <!-- Project Leads -->
  <div class="col-md-3 center"><p class="section-title">Margaret Ackroyd</p><p class="section-title team">Project Lead<br>5/2015 - 10/2015</p></div>
  <!-- Managerial -->
  <div class="col-md-3 center"><p class="section-title">Miki Rai</p><p class="section-title team">Managerial Team<br>7/2015 - 7/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Vaidehi Kaushal</p><p class="section-title team">Managerial Team <!-- <br><!--7/2015 - 7/2015 --> </p></div>
  <!-- IT -->
  <div class="col-md-3 center"><p class="section-title">Samuel Arnold</p><p class="section-title team">IT Team<br>7/2015 - 8/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Jon Nozik</p><p class="section-title team">IT Team<br>7/2015 - 8/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Ekaterina Tcavera</p><p class="section-title team">IT Team<br>7/2015 - 8/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Hadia Amin</p><p class="section-title team">IT Team<br>7/2015 - 3/2016</p></div>
  <!-- Nano-Simulations -->
  <div class="col-md-3 center"><p class="section-title">Alibek Danyalov</p><p class="section-title team">Nano-Simulations Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Ryan Saitta</p><p class="section-title team">Nano-Simulations Team<br>7/2015 - 12/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Matthew Valli</p><p class="section-title team">Nano-Simulations Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <!-- Database -->
  <div class="col-md-3 center"><p class="section-title">Rich Hoggan</p><p class="section-title team">Database Team<br>7/2015 - 7/2015</p></div>
  <!-- GE Bionetwork -->
  <div class="col-md-3 center"><p class="section-title">Melody R. Cardona</p><p class="section-title team">Genetic Engineering Team<br>7/2015 - 8/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Gabe Hargis</p><p class="section-title team">Genetic Engineering Team<br>7/2015 - 7/2015</p></div>
  <!-- GE Coating -->
  <div class="col-md-3 center"><p class="section-title">Aditi Cherian</p><p class="section-title team">Genetic Engineering Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Trang Tran</p><p class="section-title team">Genetic Engineering Team<br>7/2015 - 9/2015</p></div>
  <!-- GE -->
  <div class="col-md-3 center"><p class="section-title">Ramya Padmanabhuni</p><p class="section-title team">Genetic Engineering Team<br>9/2015 - 10/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Barry Weickhart</p><p class="section-title team">Genetic Engineering Team <!-- <br>9/2015 - 10/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Chase Johnson</p><p class="section-title team">Genetic Engineering Team <!-- <br>9/2015 - 10/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Ramya Padmanabhuni</p><p class="section-title team">Genetic Engineering Team <!-- <br>9/2015 - 10/2015 --> </p></div>
  <!-- Structural Bionetwork -->
  <div class="col-md-3 center"><p class="section-title">Hashim Chaudhry</p><p class="section-title team">Structural Team<br>7/2015 - 9/2015</p></div>
  <!-- Structural Coating -->
  <div class="col-md-3 center"><p class="section-title">Thomas Olivia</p><p class="section-title team">Structural Team<br>7/2015 - 8/2015</p></div>
  <!-- Structural -->
  <div class="col-md-3 center"><p class="section-title">Pauldeen Davejan</p><p class="section-title team">Structural Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Allison Inanoria</p><p class="section-title team">Structural Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Stan Bode</p><p class="section-title team">Structural Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Joseph Lim</p><p class="section-title team">Structural Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <!-- Root Wiring Mesh -->
  <div class="col-md-3 center"><p class="section-title">Ryan Phelps</p><p class="section-title team">Root Wiring Mesh and External Harvester Team<br>7/2015 - 7/2015</p></div> 
  <div class="col-md-3 center"><p class="section-title">Charlotte Franc</p><p class="section-title team">Root Wiring Mesh and External Harvester Team<br>7/2015 - 10/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Anna Cabot</p><p class="section-title team">Root Wiring Mesh and External Harvester Team<br>7/2015 - 8/2015</p></div>
  <!-- External Power Harvester -->
  <div class="col-md-3 center"><p class="section-title">Manveer Saini</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team<br>7/2015 - 9/2015</p></div>
  <!-- Root Wiring Mesh and External Harvester -->
  <div class="col-md-3 center"><p class="section-title">Spencer Thompson</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Jonathan Chen</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Youngon Lee</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Harold Hall</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Charlotte Franc</p><p class="section-title team">Root Wiring Mesh and External Power Harvester Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <!-- Photobiology/ Photochemistry -->
  <div class="col-md-3 center"><p class="section-title">Brandon Peterson</p><p class="section-title team">Photobiology/ Photochemistry Team<br>7/2015 - 7/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Rachel Kiefer</p><p class="section-title team">Photobiology/ Photochemistry Team <!-- <br>7/2015 - 7/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Karl Muonio</p><p class="section-title team">Photobiology/ Photochemistry Team <!-- <br>7/2015 - 7/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">Sohail Naderpour</p><p class="section-title team">Photobiology/ Photochemistry Team <!-- <br>7/2015 - 7/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">David Kim</p><p class="section-title team">Photobiology/ Photochemistry Team <!-- <br>7/2015 - 7/2015 --> </p></div>
    <!-- Patent Technology -->
  <div class="col-md-3 center"><p class="section-title">Apurwa Mishra</p><p class="section-title team">Patent Technology Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Hoang Giang Ho Nguyen</p><p class="section-title team">Patent Technology Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Eshita Mathur</p><p class="section-title team">Patent Technology Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Aiden Jung</p><p class="section-title team">Patent Technology Team<br>7/2015 - 10/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Eric Chang</p><p class="section-title team">Patent Technology Team<br>7/2015 - 7/2015</p></div>
  <!-- Healthy Integration and Sustainability -->
  <div class="col-md-3 center"><p class="section-title">Ruchita Patel</p><p class="section-title team">Bio-inspired and Sustainability Team<br>7/2015 - 9/2015</p></div>
  <!-- Biomimetics and Bio-inspired-->
  <div class="col-md-3 center"><p class="section-title">Charles Willitis</p><p class="section-title team">Bio-inspired and Sustainability Team<br>7/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Nicole Cheng</p><p class="section-title team">Bio-inspired and Sustainability Team<br>7/2015 - 9/2015</p></div>
  <!-- Bio-inspired and Sustainability -->
  <div class="col-md-3 center"><p class="section-title">Kedar Pradhan</p><p class="section-title team">Bio-inspired and Sustainability Team <!-- <br>7/2015 - 9/2015 --> </p></div>
  <div class="col-md-3 center"><p class="section-title">John Kevin Dayao</p><p class="section-title team">Bio-inspired and Sustainability Team<br>6/2015 - 9/2015</p></div>
  <div class="col-md-3 center"><p class="section-title">Zohal Sarwary</p><p class="section-title team">Bio-inspired and Sustainability Team <!-- <br>7/2015 - 9/2015 --> </p></div>
</div>
@stop