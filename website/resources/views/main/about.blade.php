@extends ('layouts.main')

@section ('title')
{{ trans('pages.main_title') }} - About
@stop

@section ('content')
<div class="container">
  <h1 class="page-title theme-text">About</h1>
  <hr />
  <div class="page-content">
    <h3 class="text-uppercase theme-text">Mission</h3>
    <p>
      We seek to actively fight climate change by looking to nature for inspiration in developing new clean, accessible, and low-cost energy methods. Our plant microbial fuel cell and cuticular solar cell project help bring biology into the forefront of renewable energy engineering.
    </p>
    <h3 class="text-uppercase theme-text">Vision</h3>
    <p>
      We seek to show the power and proliferation of bioinspired design to create disruptively innovative technology in all industries. We reach beyond conventional biological sciences to show that biology and a respect for nature should be at the forefront of all modern technology - particularly sustainable technology - and is a necessity in fighting climate change.
    </p>
    <p>
      We envision a future where biomaterials are an integral part of materials engineering in a wide breadth of fields. Nature’s manufacturing process are low temperature, low pressure, and have minimal toxins while fulfilling amazingly diverse functions. With our interdisciplinary approach, we will integrate nature, materials, and engineering for a sustainable future of technology.
    </p>
    <h3 class="text-uppercase theme-text">Team Overview</h3>
    <p>
      NuLEAF Technologies is an engineering organization dedicated to interdisciplinary science, biomimicry, and sustainability. We create bio-inspewable energy with minimal ecological impacts. 
    </p>
    <p>
      Our team is composed of students, professors, and industry professionals from all over Silicon Valley. Team members come from a variety of scholarly backgrounds including economics, computer science, materials engineering, ecology, biochemistry, genetics, mathematics, ecology, physics, chemistry and many more. 
    </p>
    <p>
      Our two research projects are the plant microbial fuel cell and bioinspired solar cell. Our website is created and maintained by our IT members. The grant writing team assists in finding funding opportunities. 
    </p>
    <h3 class="text-uppercase theme-text">Projects Overview</h3>
    <p>
      Our plant microbial fuel cell (PMFC) looks to the symbiosis between bacteria and plants in wetland ecosystems to generate electricity and filter waste water. PMFCs are established technologies, but we are the first to propose the use of a symbiotic relationship to create a self-contained ecosystem within the PMFC. In addition, the research we will do on PMFC electrodes will help to promote the use of more sustainable materials in PMFCs. This project will help to legitimize MFCs as a new method of renewable energy and will help fund the solar cell project.
    </p>
    <p>
      Our solar cell project takes inspiration from the Oriental Hornet, a photovoltaic wasp. This wasp’s exoskeleton, or cuticle, is made of chitin, a biodegradable biopolymer. The layers of the cuticle act as a solar cell, which demonstrates an increase in voltage with an increase in temperature and is 40-60% efficient. Commercially available solar cells are 12-13% efficient, have a decrease in voltage with an increase in temperature, and are made with toxic materials or manufacturing methods. These three characteristics of the Oriental Hornet address major challenges in the solar cell industry and will create a new type of organic solar cell. 
    </p>
    <h3 class="text-uppercase theme-text">Research Overview</h3>
    <p>
      NuLEAF’s original objective was to develop a biomimetic method to generate electricity from plants without relying on photosynthesis. While this is still our final goal, our engineering interests and projects have grown to also encompass the broader topic of harnessing solar energy.
      <br /><br />
      True to our original commitment to generate electricity from plants, development of the microbial fuel cell and synthetic biology branch of the cuticular solar cell project are ongoing. While the microbial fuel cell relies on the plant’s photosynthetic rate, our synthetic biology team’s final product will not. Also under development is the larger cuticular solar cell project, which seeks to develop a synthetic multi-functional solar cell.
      <br /><br />
      Compared to current developments of generating electricity from plants, NuLEAF uses bio-inspired techniques to harness higher levels of power with minimal biological impacts. In relation to conventional solar panels, NuLEAF has the potential to be cheaper, less toxic, and more efficient without constant maintenance. Our research projects will provide knowledge to the fields of bioengineering, genomics, biomaterials, synthetic biology, and solar energy.
    </p>
    <h3 class="text-uppercase theme-text">Pillars</h3>
    <p>
      Our pillars are the core values that NuLEAF embodies as an organization. They help to guide and shape our research to maintain scientific integrity and excellence.
    </p>
    <h4>Bio-inspired</h4>
    <p>
      The natural world has been solving the same physical problems that mankind is faced with today for the last 3.8 billion years. There is incredible, untapped knowledge is this immense wealth of experience. Each step forward should be grounded in a respect of our natural roots. Collaborating with nature will take us to innovative, more efficient technological heights.
    </p>
    <h4>Interdisciplinary</h4>
    <p>
      An interdisciplinary project involves reaching across different scientific fields to acknowledge the multi-faceted nature of the world around us. Though vastly different, we are all connected. By extension, all scientific disciplines are connected. The sooner we embrace this fact, the sooner we will be able to the produce the best technology possible from a core of intellectual excellence.
    </p>
    <h4>Sustainable</h4>
    <p>
      Living on a healthy planet is so fundamental it should be common sense. To preserve nature’s wonders is to preserve our way of life. Operating in a sustainable manner is currently a challenge that can only be overcome with tenacity, integrity, and creativity. Although difficult, adapting our technology to live in harmony with the natural world around us is truly the only logical course.
    </p>
    <h3 class="text-uppercase theme-text">Progress to Date</h3>
    <p>  
      Nuleaf Tech began when Rachel received an internship at ASL at NASA Ames and reached out to students at nearby colleges and universities to create a research team. She was surprised when over 150 people applied, all eager to begin bioinspired work. It was obvious that this intense student enthusiasm should not go to waste and Nuleaf Tech was born.
    </p>
    <p>  
      From somewhat chaotic beginnings, Nuleaf began as an education organization helping students to teach themselves comprehensive research methods from funding to experimental execution. Today, we step into the startup space, bringing with us pioneering technology that have the potential to change the landscape of sustainable industry. We are opening the hearts and minds of students and professionals alike to the exciting potential of looking to nature for inspiration. 
    </p>
    <p>  
      You can find out more about our research team’s progress on the <a href="{{ action('MainController@research') }}">research page</a>, but other teams that help to support us are the IT and grant writing teams. The IT team has successful created the second version of the website and are continuing to improve the design for the third version. The grant writing team assisted the PMFC team in their Experiment.com work and are continuing work on their first grant. 
    </p>
    <h3 class="text-uppercase theme-text">Upcoming Plans</h3>
    <p>
      Our team come from various scientific backgrounds, including biology, chemistry, psychology, kinesiology, animation, and computer science, to name a few. The education of the students ranges from lower division undergraduate to master programs. The STEMinars, in which students, industry professionals, and established scientists give lectures, have begun.
    </p>
  </div>
</div>
@stop