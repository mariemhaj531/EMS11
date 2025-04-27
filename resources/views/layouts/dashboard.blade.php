<!-- <div class="container">
<h1>Bienvenue sur le vrai Dashboard </h1>
<p>Vous êtes connecté en tant qu'administrateur.</p>
</div> -->
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0 bg-dark text-white">
            <div class="sidebar">
                <h4 class="text-center py-4">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-house-door"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-graph-up"></i> Statistiques
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-person"></i> Utilisateurs
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="bi bi-gear"></i> Paramètres
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Tableau de bord</h1>
            </div>

            <!-- Statistiques -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3 shadow-sm">
                        <div class="card-header">Total Utilisateurs</div>
                        <div class="card-body">
                            <h5 class="card-title">1,250</h5>
                            <p class="card-text">Nombre d'utilisateurs actifs sur la plateforme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3 shadow-sm">
                        <div class="card-header">Ventes du mois</div>
                        <div class="card-body">
                            <h5 class="card-title">3,450</h5>
                            <p class="card-text">Ventes réalisées au cours du mois actuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3 shadow-sm">
                        <div class="card-header">Nouveaux messages</div>
                        <div class="card-body">
                            <h5 class="card-title">150</h5>
                            <p class="card-text">Nombre de nouveaux messages reçus aujourd'hui.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graphiques -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header">Graphique des Ventes</div>
                        <div class="card-body">
                        <canvas id="userActivityChart" style="height: 300px;"></canvas>
                        <!-- Intégrer un graphique ici avec Chart.js ou autre bibliothèque -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header">Activité des utilisateurs</div>
                        <div class="card-body">
                            <div id="userActivityChart" style="height: 300px;">
                                <!-- Intégrer un graphique ici avec Chart.js ou autre bibliothèque -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
