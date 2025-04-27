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
document.querySelector('#loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); 

    // Get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Create FormData object from the form
    const formData = new FormData(event.target);

    // Add CSRF token to FormData
    formData.append('_token', csrfToken);

    // Send AJAX request to backend
    fetch('/connexion', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.redirect) {
            window.location.href = data.redirect;
        } else {
            alert('Erreur lors de la connexion, identifiants invalides.');
        }
    })
    .catch(error => {
        console.error('Erreur:', error);
        alert('Une erreur s\'est produite lors de la connexion.');
    });
});
</script>
