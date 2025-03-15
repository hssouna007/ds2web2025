<!-- app/views/dashboard.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSECT - Tableau de bord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.18), rgba(0,0,0,0.7)), 
                        url('/club/assets/images/essect.jpg') center/cover fixed;
            color: #fff;
            min-height: 100vh;
        }
        
        .info-card {
            background: rgba(30, 19, 19, 0.83);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            transition: transform 0.3s;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
        }
        
        .nav-tabs .nav-link {
            color: #fff;
            border: none;
        }
        
        .nav-tabs .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border-bottom: 3px solid #0d6efd;
        }
        
        .logo-container {
    text-align: center;
    padding: 2rem 0;
}

.essect-logo {
    max-width: 200px; /* Adjust the size as needed */
    filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.5)); /* Optional: Adds a shadow effect */
}
        .card-body h5,
        .card-body p,
        .accordion-body ul li,
        .list-group-item {
            color: #fff !important;
        .essect-logo {
            max-width: 200px;
            filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.5));
            
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-university"></i> ESSECT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                
                    <li class="nav-item">
                        <a class="nav-link" href="#history">Histoire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#diplomas">Diplômes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="/club/index.php?action=logout" class="btn btn-outline-danger ms-2">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <!-- School Logo -->
        <div class="logo-container">
    <img src="/club/assets/images/logo.png" alt="ESSECT Logo" class="essect-logo">
    <div class="mt-3">
        <a href="/club/index.php?action=clubs" class="btn btn-primary btn-lg">
            <i class="fas fa-users me-2"></i> Découvrez nos clubs
        </a>
    </div>
    </div>

        <!-- Main Content -->
        <div class="row g-4">
            <!-- History Section -->
            <div class="col-lg-8">
                <div class="info-card p-4 mb-4" id="history">
                    <h2 class="mb-4"><i class="fas fa-landmark me-2"></i>Histoire de l'ESSECT</h2>
                    <p class="lead">
                        L'École Supérieure des Sciences Économiques et Commerciales de Tunis (ESSECT) est une institution 
                        académique prestigieuse fondée en 1987. Située sur le campus de l'Université de La Manouba, 
                        l'ESSECT se distingue par son excellence dans les domaines de l'économie et du commerce.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card bg-transparent border-light mb-3">
                                <div class="card-body">
                                    <h5><i class="fas fa-trophy me-2"></i>Classement</h5>
                                    <p>Classée 9ème meilleure école de commerce africaine (Jeune Afrique 2011)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-transparent border-light">
                                <div class="card-body">
                                    <h5><i class="fas fa-globe me-2"></i>International</h5>
                                    <p>Partenaire du programme d'échanges Erasmus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Info -->
            <div class="col-lg-4">
                <div class="info-card p-4 mb-4">
                    <h4 class="mb-3"><i class="fas fa-info-circle me-2"></i>Informations Rapides</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent text-white">
                            <strong>Fondation:</strong> 1987
                        </li>
                        <li class="list-group-item bg-transparent text-white">
                            <strong>Directeur:</strong> Kamel Naoui
                        </li>
                        <li class="list-group-item bg-transparent text-white">
                            <strong>Langues:</strong> Arabe, Français, Anglais
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Diplomas Section -->
        <div class="info-card p-4 mb-4" id="diplomas">
            <h3 class="mb-4"><i class="fas fa-graduation-cap me-2"></i>Programmes Académiques</h3>
            <div class="accordion" id="diplomasAccordion">
                <!-- License Programs -->
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header">
                        <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#licenses">
                            Licences
                        </button>
                    </h2>
                    <div id="licenses" class="accordion-collapse collapse show" data-bs-parent="#diplomasAccordion">
                        <div class="accordion-body">
                            <ul>
                                <li>Licence Fondamentale en Gestion</li>
                                <li>Licence Appliquée en Économie</li>
                                <li>Licence en Informatique de Gestion</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Master Programs -->
                <div class="accordion-item bg-transparent">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#masters">
                            Masters
                        </button>
                    </h2>
                    <div id="masters" class="accordion-collapse collapse" data-bs-parent="#diplomasAccordion">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Masters de Recherche</h5>
                                    <ul>
                                        <li>Gestion des Organisations</li>
                                        <li>Économie et Finance</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5>Masters Professionnels</h5>
                                    <ul>
                                        <li>Marketing Digital</li>
                                        <li>Finance d'Entreprise</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="info-card p-4" id="contact">
            <h3 class="mb-4"><i class="fas fa-address-book me-2"></i>Contact</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-transparent border-light mb-3">
                        <div class="card-body">
                            <h5><i class="fas fa-map-marker-alt me-2"></i>Adresse</h5>
                            <p>Université de La Manouba<br>La Manouba, Tunisie</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border-light mb-3">
                        <div class="card-body">
                            <h5><i class="fas fa-envelope me-2"></i>Email</h5>
                            <p>contact@essect.tn</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-transparent border-light">
                        <div class="card-body">
                            <h5><i class="fas fa-phone me-2"></i>Téléphone</h5>
                            <p>+216 71 000 000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Activate scrollspy
        const scrollSpy = new bootstrap.ScrollSpy(document.body, {
            target: '#navbarNav'
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        </script>
        </body>
        </html>
       