<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infolab ESSEC Tunis - Bienvenue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #2c1b4d; /* Dark purple background inspired by your images */
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #2c1b4d !important;
        }
        .navbar-brand {
            color: #ffffff !important;
        }
        .boutton {
            text-align: center;
            margin-top: 20px;
        }
        .container {
            max-width: 1200px;
        }
        .section-title {
            color: #d1a9f0; /* Light purple for headers */
            margin-bottom: 20px;
            border-bottom: 2px solid #d1a9f0;
            padding-bottom: 10px;
        }
        .team-card, .event-card {
            background-color: #3f2a5f; /* Slightly lighter purple for cards */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .team-card img, .event-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .btn-purple {
            background-color: #d1a9f0;
            color: #2c1b4d;
            border: none;
        }
        .btn-purple:hover {
            background-color: #b57edc;
            color: #ffffff;
        }
        .social-links a {
            color: #d1a9f0;
            margin: 0 10px;
            font-size: 1.5rem;
        }
        .social-links a:hover {
            color: #b57edc;
        }
        .video-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/club/index.php?action=clubs">
                <i class="fas fa-arrow-left me-2"></i> Retour aux clubs
            </a>
        </div>
        
    </nav>
    <nav class="boutton">
        <div>
            <!-- Use absolute path to ensure correct routing -->
            <a href="/club/index.php?action=apply&club_id=1" class="btn btn-purple">S'inscrire</a>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Club Introduction -->
        <h1 class="text-center mb-5" style="color: #d1a9f0;">Bienvenue chez Infolab ESSEC Tunis</h1>
        <p class="text-center mb-5">
            Infolab ESSEC Tunis est un club universitaire dédié à l'innovation, à la technologie et au développement personnel. Nous offrons des opportunités pour explorer, apprendre et grandir à travers des événements, des ateliers et des collaborations avec des leaders technologiques comme Google. Rejoignez notre communauté pour débloquer votre potentiel et tracer votre chemin vers le succès !
        </p>

        <!-- Team Section -->
        <h2 class="section-title">Notre Équipe Dirigeante</h2>
        <div class="row">
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/nour_cherni.jpg" alt="Nour Cherni" class="img-fluid">
                <h5>Nour Cherni</h5>
                <p>Présidente</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/saif_bouali.jpg" alt="Saif Bouali" class="img-fluid">
                <h5>Saif Bouali</h5>
                <p>Vice-Président</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/amenallah_robanna.jpg" alt="Amenallah Robanna" class="img-fluid">
                <h5>Amenallah Robanna</h5>
                <p>Responsable RH</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/khadija_majdoub.jpg" alt="Khadija Majdoub" class="img-fluid">
                <h5>Khadija Majdoub</h5>
                <p>Trésorière</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/yasmine_ben_sta.jpg" alt="Yasmine Ben Sta" class="img-fluid">
                <h5>Yasmine Ben Sta</h5>
                <p>Secrétaire Générale</p>
            </div>
           
        </div>

        <!-- Creative Chiefs Section (Optional, based on your images) -->
        <h2 class="section-title mt-5">Nos Chefs Créatifs</h2>
        <div class="row">
            <div class="col-md-4 team-card">
                <img src="/club/assets/images/wassim_jha.jpg" alt="Wassim Jha" class="img-fluid">
                <h5>Wassim Jha</h5>
                <p>Chef Département Communication</p>
            </div>
            <div class="col-md-4 team-card">
                <img src="/club/assets/images/iheb_baccar.jpg" alt="Iheb Baccar" class="img-fluid">
                <h5>Iheb Baccar</h5>
                <p>Chef Département Événements</p>
            </div>
            <div class="col-md-4 team-card">
                <img src="/club/assets/images/maha_noureddine.jpg" alt="Maha Noureddine" class="img-fluid">
                <h5>Maha Noureddine</h5>
                <p>Chef Département Design</p>
            </div>
        </div>

        <!-- Events Section -->
        <h2 class="section-title mt-5">Nos Événements</h2>
        <div class="row">
            <div class="col-md-6 event-card">
                <h4>Google Offered Programs</h4>
                <p>
                    Prêt à débloquer le pouvoir de Google ⁉️ Découvrez le potentiel de Google 😉 et portez vos compétences au niveau supérieur ! Rejoignez-nous à l’événement « Google Offered Programs » 🫵🏻 où nous plongerons dans la diversité des opportunités offertes par Google 📈. 
                    <br><br>
                    <strong>Date :</strong> 28 février 2024<br>
                    <strong>Heure :</strong> 13:30 PM<br>
                    <strong>Lieu :</strong> Amphi 2<br>
                    <strong>Entrée :</strong> Gratuite<br>
                    <a href="/club/index.php?action=apply()" class="btn btn-purple mt-3" target="_blank">S’inscrire maintenant</a>
                </p>
            </div>
            <!-- Add more event cards here if needed -->
        </div>

        <!-- Video Section -->
        <!-- Video Section (Local MP4) -->
        <div class="video-container mt-5">
            <h3 class="section-title"><i class="fas fa-video me-2"></i>Notre Vidéo de Présentation</h3>
            <video controls>
                <source src="/club/assets/images/pubinfo.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>

        <!-- Social Media Links -->
        <div class="text-center mt-5 social-links">
            <h3>Suivez-nous sur :</h3>
            <a href="https://www.facebook.com/profile.php?id=100086193647142&locale=fr_FR" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/infolab_essect/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>