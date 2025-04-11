<head>
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>
<footer class="bg-light py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer-section">
                <h3>Navigation</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">À Propos</a></li>
                    <li><a href="#">Contact</a></li>     
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-section">
            <h3>Contactez-Nous</h3>
            <ul class="contact-info">
        <li>
            <i class="fas fa-envelope"></i> 
            <a href="mailto:E1M1S@proton.me">E1M1S@proton.me</a>
        </li>
        <li>
            <i class="fas fa-phone"></i> 
            <a href="tel:+33744855324">+33 744855324</a>
        </li>
        <li>
            <i class="fas fa-map-marker-alt"></i> 
            <a href="#">164 Quai Louis Blériot, 75016 Paris, France</a>
        </li>
    </ul>
</div>

            <div class="col-md-3 col-sm-6 footer-section">
                <h3>Newsletter</h3>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control mb-2" placeholder="Votre email">
                    <button type="submit" class="btn  w-100">S'abonner</button>
                </form>
                @if(session('success'))
                <div class="alert alert-success mt-3">
                {{ session('success') }}
                </div>
                @endif
            </div>
            <div class="col-md-3 col-sm-6 footer-section">
                <h3>Suivez-nous</h3>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="https://facebook.com" class="text-primary fs-4" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://instagram.com" class="text-danger fs-4" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://linkedin.com" class="text-info fs-4" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p class="text-center mt-3">&copy; 2025 [EMS]. Tous droits réservés.</p>
</footer>


