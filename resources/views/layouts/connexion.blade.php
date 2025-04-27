<head>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EMS</title>
</head>

@include('layouts.header')

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <div class="logo-background">
                <img src="{{ asset('images/logo.png') }}" alt="Logo EMS">
            </div>
            <form class="login" id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="email" class="login__input" placeholder="Email" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="button login__submit" id="connexion">
                    <span class="button__text">Connexion</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>

            <div class="social-login">
                <h3>Se connecter via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>

@include('layouts.footer')

<script>
// document.getElementById('loginForm').addEventListener('submit', async (event) => {
//     event.preventDefault();  

//     const email = document.querySelector('input[name="email"]').value;
//     const password = document.querySelector('input[name="password"]').value;

//     const data = {
//         email: email,
//         password: password
//     };

//     try {
//         const response = await fetch("{{ route('login') }}", {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify(data)
//         });

//         const result = await response.json();

//         if (response.ok) {
//             // Connexion réussie, redirection vers l'URL de destination
//             window.location.href = result.redirectUrl || '/dashboard'; // Ajoute une redirection par défaut si aucun URL n'est fourni
//         } else {
//             // Affiche une erreur si la connexion échoue
//             alert(result.message || 'Identifiants incorrects.');
//         }

//     } catch (error) {
//         console.error('Erreur lors de l\'envoi :', error);
//         alert('Une erreur s\'est produite. Veuillez réessayer.');
//     }
// });
// connexion.js

document.querySelector('#loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche l'envoi classique du formulaire

    fetch('/connexion', {
        method: 'POST',
        body: new FormData(event.target), // Utilise le formulaire actuel
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erreur lors de la connexion');
        }
        return response.json(); 
    })
    .then(data => {
        if (data.redirect) {
            window.location.href = data.redirect; // Redirection vers le tableau de bord
        } else {
            console.error('Erreur dans la réponse:', data);
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
    });
});

</script>
