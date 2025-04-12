<head>
<link rel="stylesheet" href="{{ asset('css/apropos.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

</head>
@include('layouts.header')

<section class="apropos">
    <h1>A Propos EMS</h1>
    <p>Chez EMS,nous nous engageons à offrir des services de conseil stratégiques et innovants pour aider les entreprises à atteindre leurs objectifs.Notre équipe d'experts travaile avec passion et engagement pour transformer vos défis en oppotunités. </p>
    <img src="{{ asset('images/apropos.jpg') }}" alt="image">
</section>
<section class="chosirems">
    <h2>Pourquoi choisir EMS</h3>
    <p>Grace à notre savoir-faire, nous proposons des solutions pratiques,performantes et rentables afin d'accompagner nos clients dans le développement de leurs projets et la gestion de leurs affaires. </p>
   </section>
   <section class="services">
    <h2>Nos services</h3>
    <div class="services-container">
    <div class="service">
      <h3>Conseil en gestion et stratégie</h3>
      <p>Aide à la structuration et optimisation des processus d'affaires,gestion de projets , analyse stratéqique, et accompagnement dans le développement d'entreprise.
      </p>
    </div>
    <div class="service">
      <h3>Conseil financier, comptable et administratif</h3>
      <p>Expertise dans la gestion financière, comptabilité,audits internes, et optimisation des démarches administratives.</p>
    </div>
    <div class="service">
      <h3>Soutien aux entreprises</h3>
      <p>Accompagnement des entreprises dans la recherche de solutions adaptée à leurs besoins, gestion de projets dans le respect des délais et des budgets. </p>
    </div>
    <img src="{{ asset('images/service.jpg') }}"  class="service-img" alt="image">
    </div>
    </section>
    
@include('layouts.footer')
