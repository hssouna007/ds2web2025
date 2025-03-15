<!-- radio.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSECT FM Club Radio - Bienvenue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #006400, #800080); /* Gradient from green to purple */
            color: #333333; /* Dark gray for text contrast */
            font-family: 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(to right, #006400, #800080) !important;
        }
        .boutton {
            text-align: center;
            margin-top: 20px;
        }
        .navbar-brand {
            color: #ffffff !important; /* White text for contrast on gradient */
        }
        .container {
            max-width: 1200px;
            color: #333333; /* Dark gray for text contrast */
        }
        .section-title {
            color: #ffffff; /* White for headers to stand out on gradient */
            margin-bottom: 20px;
            border-bottom: 2px solid #ffffff; /* White border */
            padding-bottom: 10px;
            font-weight: 600;
        }
        .team-card, .event-card {
            background-color: #ffffff; /* White for cards */
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .team-card:hover, .event-card:hover {
            transform: translateY(-5px);
        }
        .team-card img, .event-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #ffffff; /* White border for images */
        }
        .btn-purple {
            background-color: #800080; /* Purple button */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
        }
        .btn-purple:hover {
            background-color: #660066; /* Darker purple on hover */
            color: #ffffff;
        }
        .social-links a {
            color: #ffffff; /* White icons */
            margin: 0 15px;
            font-size: 1.8rem;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #006400; /* Green on hover */
        }
        .video-container {
            margin-top: 40px;
            text-align: center; /* Center the video horizontally */
        }
        .video-container video {
            display: block; /* Ensures no inline spacing issues */
            margin: 0 auto; /* Centers the video horizontally */
            max-width: 100%; /* Responsive width */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Adds rounded corners */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Optional: Adds a subtle shadow */
        }
        .text-center {
            color: aliceblue;
        }
       
    </style>

</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/club/index.php?action=clubs">
                <i class="fas fa-arrow-left me-2"></i> Retour aux clubs
            </a>
        </div>
    </nav>
    <nav class="boutton">
    <div><a href="<?php echo BASE_URL; ?>index.php?action=apply&club_id=4" class="btn btn-primary">S'inscrire</a></div>
    </nav>

    <div class="container py-5">
        <!-- Club Introduction -->
        <h1 class="text-center mb-5" style="color: #ffffff;">Bienvenue chez ESSECT FM Club Radio</h1>
        <p class="text-center mb-5">
            ESSECT FM Club Radio est le cœur battant de la musique et des discussions à ESSECT. Nous offrons une plateforme pour les talents émergents, diffusons des émissions captivantes et connectons la communauté à travers les ondes. Rejoignez-nous pour une expérience radiophonique unique !
        </p>

        <!-- Team Section -->
        <h2 class="section-title">Notre Équipe Dirigeante</h2>
        <div class="row">
            <!-- Placeholder for team members -->
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/oucema_abd.jpg" alt="Team Member" class="img-fluid">
                <h5>Oucema Abdekader</h5>
                <p>Président</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/Mohamedali_Adouni.jpg" alt="Team Member" class="img-fluid">
                <h5>Mohamedali Adouni</h5>
                <p>Exécutif</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/elyes.jpg" alt="Team Member" class="img-fluid">
                <h5>Elyes Hachicha</h5>
                <p>Vice-président</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/thabet_fatma.jpg" alt="Team Member" class="img-fluid">
                <h5>thabet fatma</h5>
                <p>Secrétaire Générale</p>
            </div>
            <!-- Add more team members as needed -->
        </div>

        <!-- Events Section -->
        <h2 class="section-title mt-5">Nos Événements</h2>
        <div class="row">
            <div class="col-md-6 event-card">
                <h4>Événement Radio ESSECT FM</h4>
                <p>
                    Rejoignez-nous pour notre prochain événement radiophonique en direct, mettant en vedette des invités spéciaux et des sessions en direct ! 
                    <br><br>
                    <strong>Date :</strong> À venir<br>
                    <strong>Heure :</strong> À confirmer<br>
                    <strong>Lieu :</strong> ESSECT Tunis<br>
                    <strong>Entrée :</strong> Gratuite<br>
                    <a href="#" class="btn btn-purple mt-3" target="_blank">Plus d'infos bientôt</a>
                </p>
            </div>
        </div>

        <!-- Video Section -->
        <div class="video-container mt-5">
            <h3 class="section-title"><i class="fas fa-video me-2"></i>Notre Vidéo de Présentation</h3>
            <video controls>
                <source src="/club/assets/images/radio.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>

        <!-- Social Media Links -->
        <div class="text-center mt-5 social-links">
            <h3>Suivez-nous sur :</h3>
            <a href="#" target="_blank"><i class="https://www.facebook.com/profile.php?id=61572903947925&locale=fr_FR"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="https://www.instagram.com/club_radio_essect_fm?fbclid=IwY2xjawI8rPFleHRuA2FlbQIxMAABHTy5ojETi-l4gMQ775rog_Mx1G3-4jjt9ZsX40eI20GgYMiCsrQa5Odxug_aem_xIdGrrtMYJ7-vp0_Sa2JrQ"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>