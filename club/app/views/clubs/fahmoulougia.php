<!-- fahmoulougia.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahmoulougia ESSEC Tunis - Bienvenue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #e6f0fa; /* Light blue background */
            color: #333333; /* Dark gray for text contrast */
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .navbar {
            background-color: #e6f0fa !important;
        }
        .boutton {
            text-align: center;
            margin-top: 20px;
        }
        .navbar-brand {
            color: #333333 !important;
        }
        .container {
            max-width: 1200px;
        }
        .section-title {
            color: #0052CC; /* Vibrant blue for headers */
            margin-bottom: 20px;
            border-bottom: 2px solid #FFC107; /* Yellow border */
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
            border: 3px solid #FFC107; /* Yellow border for images */
        }
        .btn-blue {
            background-color: #0052CC; /* Blue button */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
        }
        .btn-blue:hover {
            background-color: #003d99; /* Darker blue on hover */
            color: #ffffff;
        }
        .social-links a {
            color: #0052CC; /* Blue icons */
            margin: 0 15px;
            font-size: 1.8rem;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #FFC107; /* Yellow on hover */
        }
        .video-container video {
            display: block; /* Ensures no inline spacing issues */
            margin: 0 auto; /* Centers the video horizontally */
            max-width: 100%; /* Responsive width */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Optional: Adds rounded corners */
            box-shadow: 0 2px 5px rgba(0,0,0,0.1); /* Optional: Adds a subtle shadow */
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
    <div><a href="<?php echo BASE_URL; ?>index.php?action=apply&club_id=2" class="btn btn-primary">S'inscrire</a></div>
    </nav>

    <div class="container py-5">
        <!-- Club Introduction -->
        <h1 class="text-center mb-5" style="color: #0052CC;">Bienvenue chez Fahmoulougia ESSEC Tunis</h1>
        <p class="text-center mb-5">
            <strong>Intro</strong><br>
            La page officielle du club Fahmologia ESSEC Tunis.<br>
            فهمت البحث ؟<br><br>
            <strong>Page · Organisation à but non lucratif</strong><br>
            📞 23 436 656<br>
            📧 <a href="mailto:fahmologiaessect@gmail.com">fahmologiaessect@gmail.com</a><br>
            🌐 <a href="https://fahmologia.essect" target="_blank">fahmologia.essect</a><br>
            📸 <a href="https://fahmologiaessect" target="_blank">fahmologiaessect</a><br>
            Fahmologia ESSECT فهمولوجيا
        </p>

        <!-- Team Section -->
        <h2 class="section-title">Notre Équipe Dirigeante</h2>
        <div class="row">
            <!-- Placeholder for team members -->
            <h2 class="section-title">Bureau Exécutif</h2>
        <div class="row">
            <!-- Placeholder for team members -->
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/oumaima_ben_nasr.jpg" alt="Team Member" class="img-fluid">
                <h5>Oumaima ben nasr</h5>
                <p>Coordinatrice</p>
            </div>
            <!-- Add more team members as needed -->
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/eya_bediafi.jpg" alt="Team Member" class="img-fluid">
                <h5>eya bediafi</h5>
                <p>Responsable RH</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/ikram_bouali.jpg" alt="Team Member" class="img-fluid">
                <h5>Ikram bouali</h5>
                <p>Responsable Evenementielle</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/kousay_bejaoui.jpg" alt="Team Member" class="img-fluid">
                <h5>Koussay Bejaoui</h5>
                <p>Responsable Dkika start-up</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/montasar_ghanmi.jpg" alt="Team Member" class="img-fluid">
                <h5>Montassar ghanmi</h5>
                <p>Responsable Communication</p>
            </div>

            <!-- Add more team members as needed -->
        </div>

        <!-- Events Section -->
        <h2 class="section-title mt-5">Nos Événements</h2>
        <div class="row">
            <div class="col-md-6 event-card">
                <h4>Méga Camp Multidisciplinaire Hackathon</h4>
                <p>
                    🌟 Fahmologia ESSECT est fier de faire partie des clubs organisateurs du Méga Camp Multidisciplinaire Hackathon ! 🌟<br>
                    Organisé pour la première fois au Centre Culturel et Sportif de l’Université de Tunis par INJAZ Tunisia et le Pôle Étudiant Entrepreneur de l’Université de Tunis (PEE), cet événement immersif et dynamique rassemblera étudiants et jeunes professionnels pour deux jours d'innovation et de créativité, les 29 et 30 novembre 2024. 🚀💡<br><br>
                    Ce hackathon est une occasion unique pour tous les participants de développer leurs compétences en leadership, pensée critique, et travail d’équipe dans une ambiance entrepreneuriale stimulante. À la fin, les équipes présenteront leurs solutions devant un jury d’experts lors d’une session de pitching. 🗣️✨<br><br>
                    Nous vous encourageons à vous inscrire et à prendre part à cette expérience inédite ! Ensemble, créons, innoverons, et contribuons au développement d’idées qui feront la différence. 🤝<br><br>
                    <strong>Date :</strong> 29-30 novembre 2024<br>
                    <strong>Lieu :</strong> Centre Culturel et Sportif de l’Université de Tunis<br>
                    <strong>Date limite d'inscription :</strong> Dimanche 24 novembre 2024 à minuit<br>
                    <a href="https://docs.google.com/.../1FAIpQLScPvw4XyBz.../viewform..." class="btn btn-blue mt-3" target="_blank">Inscrivez-vous ici</a><br><br>
                    #FahmologiaESSECT #Hackathon #Entrepreneuriat #Innovation #Créativité #UniversitéDeTunis #INJAZTunisia #PEE
                </p>
                
            </div>
            </div>
            <div class="video-container mt-5">
            <h3 class="section-title"><i class="fas fa-video me-2"></i>Notre Vidéo de Présentation</h3>
            <video controls>
                <source src="/club/assets/images/famouv.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
        </div>

        <!-- Social Media Links -->
        <div class="text-center mt-5 social-links">
            <h3>Suivez-nous sur :</h3>
            <a href="https://www.facebook.com/fahmologiaessect" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/fahmologiaessect/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>