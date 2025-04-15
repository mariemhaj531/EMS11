<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <title>EMS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    </head>
<body>
@include('layouts.header')
<header>
    <h1>Bienvenu chez EMS</h1>
    <p>Nous offrons des services professionnels adaptés à vos besoins spécifiques.</p>
    <a href="/services" class="btn">Découvrez nos services</a>
</header>
<section class="section features">
    <div class="feature">
    <i class="fas fa-lightbulb"></i>
    <h2>Innovation</h2>
      <p>Nous apportons des solutions novatrices adaptées à vos besoins.</p>
    </div>
    <div class="feature">
    <i class="fas fa-lightbulb"></i>
      <h2>Digital</h2>
      <p>Transformez votre présence en ligne et boostez votre visibilité.</p>
    </div>
    <div class="feature">
    <i class="fas fa-lightbulb"></i>
      <h2>Croissance</h2>
      <p>Notre expertise vous aide à atteindre vos objectifs d'affaires.</p>
    </div>
  </section>
  <section class="section">
    <h2>Nos Réalisations</h2>
    <div class="realisations">
      <img src="{{ asset('images/Réalisation1.jpg') }}" alt="Réalisation 1">
      <img src="{{ asset('images/Réalisation2.jpg') }}" alt="Réalisation 2">
      <img src="{{ asset('images/Réalisation3.jpg') }}" alt="Réalisation 3">
    </div>
  </section>
  <section class="testimonials">
    <h2>Ce que disent nos clients</h2>
    <div class="testimonial-box">
        <img src="{{ asset('images/cl1.jpg') }}" alt="client 1">
      <p>"Une expérience incroyable! Service rapide et professionnel. Je suis ravi!"</p>
      <strong>Jean Dupont</strong><br>
      <em>Directeur Marketing</em>
    </div>
    <div class="testimonial-box">
    <img src="{{ asset('images/cl2.jpg') }}" alt="client 2">
      <p>"Un service exceptionnel, je suis ravi de l’impact que cela a eu sur notre entreprise!"</p>
      <strong>Daniel Martin</strong><br>
      <em>Directeur de Projet</em>
    </div>
    <div class="testimonial-box">
    <img src="{{ asset('images/cl3.jpg') }}" alt="client 3">
      <p>"Nous avons eu une expérience incroyable avec cette équipe! Très professionnel!"</p>
      <strong>Marie Durand</strong><br>
      <em>Chef d’entreprise</em>
    </div>
  </section>
  <div>
  <h2>Prêt à démarrer un projet ?</h2>
    <p>Nos services sont conçus pour vous aider à atteindre vos objectifs grâce à des solutions créatives et efficaces.</p>
    <a href="/contact" class="btn">Contactez-nous</a>
  </div> 
@include('layouts.footer')
</body>
</html>
