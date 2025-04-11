<head>
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<div class="contact-wrapper">
<div class="contact-container">
<form action="#" method="POST">
    @csrf
    <h2>Formulaire de Contact</h2>
    <label for="name">Nom</label><br/>
    <input type="text" id="name" name="name" required placeholder="Votre nom"><br/>
    <label for="email">Email</label><br/>
    <input type="email" id="email" name="email" required placeholder="Votre email"><br/>
    <label for="message">Message</label><br/>
    <textarea id="message" name="message" required placeholder="Votre message"></textarea><br/>
    <button type="submit">Contactez-nous</button>
</form>
</div>
</div>
