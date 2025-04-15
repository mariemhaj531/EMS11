<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>EMS</title>
</head>
<body>
@include('layouts.header')
<div class="contact-header">
    <h1>Contactez-Nous</h1>
    <p>Nous sommes là pour vous aider .Envoyer-nous un message , et nous reviendrons vers vous rapidement!</p>
</div>
    <main>
    @include('layouts.form')  
    </main>
    @include('layouts.footer')
</html>