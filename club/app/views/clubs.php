<!-- app/views/clubs.php -->
<?php
require_once __DIR__ . '/../models/User.php';

$userModel = new User();
$isAdmin = isset($_SESSION['user_id']) && $userModel->isAdmin($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs ESSECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('/club/assets/images/essect.jpg') center/cover fixed;
            color: #fff;
            min-height: 100vh;
        }
        
        .club-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        
        .club-card:hover {
            transform: translateY(-5px);
        }
        
        .club-logo {
            max-width: 100px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/club/index.php?action=dashboard">
                <i class="fas fa-arrow-left me-2"></i> Retour au tableau de bord
            </a>
            <?php if ($isAdmin): ?>
                <a href="/club/index.php?action=admin" class="btn btn-warning ms-auto">Gérer les Clubs</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="text-center mb-5">Nos Clubs</h1>

        <!-- Club 1: Infolab ESSECT -->
        <div class="club-card p-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="/club/assets/images/infolab-logo.png" alt="Infolab ESSECT Logo" class="club-logo">
                </div>
                <div class="col-md-9">
                    <h2>Infolab ESSECT</h2>
                    <p>
                        Infolab ESSECT est un club dédié à l'informatique et aux technologies de l'information. 
                        Il organise des ateliers, des compétitions de programmation, et des conférences pour 
                        promouvoir l'innovation technologique.
                    </p>
                    <a href="/club/index.php?action=infolab" class="btn btn-primary">En savoir plus</a>
                    <a href="/club/index.php?action=view_club&club=infolab" class="btn btn-info ms-2">Voir/Application</a>
                </div>
            </div>
        </div>

        <!-- Club 2: Fahmoulougia ESSECT -->
        <div class="club-card p-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="/club/assets/images/fahmoulougia-logo.jpg" alt="Fahmoulougia ESSECT Logo" class="club-logo">
                </div>
                <div class="col-md-9">
                    <h2>Fahmoulougia ESSECT</h2>
                    <p>
                        Fahmoulougia ESSECT est un club de débat et d'éloquence. Il vise à développer les compétences 
                        en communication et en argumentation des étudiants à travers des débats et des concours.
                    </p>
                    <a href="/club/index.php?action=fahmoulougia" class="btn btn-primary">En savoir plus</a>
                    <a href="/club/index.php?action=view_club&club=fahmoulougia" class="btn btn-info ms-2">Voir/Application</a>
                </div>
            </div>
        </div>

        <!-- Club 3: Enactus ESSECT -->
        <div class="club-card p-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="/club/assets/images/enactus-logo.png" alt="Enactus ESSECT Logo" class="club-logo">
                </div>
                <div class="col-md-9">
                    <h2>Enactus ESSECT</h2>
                    <p>
                        Enactus ESSECT est un club d'entrepreneuriat social. Il encourage les étudiants à développer 
                        des projets innovants qui ont un impact positif sur la société.
                    </p>
                    <a href="/club/index.php?action=enactus" class="btn btn-primary">En savoir plus</a>
                    <a href="/club/index.php?action=view_club&club=enactus" class="btn btn-info ms-2">Voir/Application</a>
                </div>
            </div>
        </div>

        <!-- Club 4: Club Radio ESSECT FM -->
        <div class="club-card p-4">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="/club/assets/images/radio-logo.png" alt="Club Radio ESSECT FM Logo" class="club-logo">
                </div>
                <div class="col-md-9">
                    <h2>Club Radio ESSECT FM</h2>
                    <p>
                        Club Radio ESSECT FM est la radio étudiante de l'ESSECT. Elle diffuse des émissions sur 
                        divers sujets, allant de la musique à l'actualité universitaire.
                    </p>
                    <a href="/club/index.php?action=radio" class="btn btn-outline-light">En savoir plus</a>
                    <a href="/club/index.php?action=view_club&club=radio" class="btn btn-info ms-2">Voir/Application</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>