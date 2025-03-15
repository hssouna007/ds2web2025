<!-- enactus.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enactus ESSEC Tunis - Bienvenue</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #fff3cd; /* Light yellow background */
            color: #333333; /* Dark gray for text contrast */
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .navbar {
            background-color: #fff3cd !important;
        }
        .navbar-brand {
            color: #333333 !important;
        }
        .boutton {
            text-align: center;
            margin-top: 20px;
        }
        .container {
            max-width: 1200px;
        }
        .section-title {
            color: #ffc107; /* Bright yellow for headers */
            margin-bottom: 20px;
            border-bottom: 2px solid #ffc107;
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
            border: 3px solid #ffc107;
        }
        .btn-yellow {
            background-color: #ffc107;
            color: #333333;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
        }
        .btn-yellow:hover {
            background-color: #e0a800;
            color: #ffffff;
        }
        .social-links a {
            color: #ffc107;
            margin: 0 15px;
            font-size: 1.8rem;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #e0a800;
        }
        .video-container {
            margin-top: 40px;
            margin-bottom: 20px;
            padding: 50px; 
            
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
    <div><a href="<?php echo BASE_URL; ?>index.php?action=apply&club_id=3" class="btn btn-primary">S'inscrire</a></div>
    </nav>    
    <div class="container py-5">
        <!-- Club Introduction -->
        <h1 class="text-center mb-5" style="color: #ffc107;">Bienvenue chez Enactus ESSEC Tunis</h1>
        <p class="text-center mb-5">
            Enactus ESSEC Tunis est une organisation étudiante qui utilise l'entrepreneuriat pour créer un impact positif. Nous développons des projets innovants pour répondre aux défis sociaux et environnementaux tout en favorisant le développement personnel et professionnel de nos membres.<br>
            <strong>Enactus team from Tunisia 🇹🇳</strong><br>
            ᴡᴇ ꜱᴇᴇ • ᴡᴇ ᴀᴄᴛ • ᴡᴇ ᴄʜᴀɴɢᴇ • ᴡᴇ ᴀʀᴇ ᴇɴᴀᴄᴛᴜꜱ ᴇꜱꜱᴇᴄᴛ<br>
            🥉 Finalist National Champion 🏆 2022/2021/2020<br>
            📍 Av. Ali Trad, Tunis<br>
            📞 58 470 045<br>
            📧 <a href="mailto:enactus.essect.monfleury@gmail.com">enactus.essect.monfleury@gmail.com</a>
        </p>

        <!-- Team Section -->
        <h2 class="section-title">Executive BOARD 2025</h2>
        <div class="row">
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/rayen_souli.jpg" alt="Rayen Souli" class="img-fluid">
                <h5>Rayen Souli</h5>
                <p>Président</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/fedi_hamdi.jpg" alt="Fedi Hamdi" class="img-fluid">
                <h5>Fedi Hamdi</h5>
                <p>Vice-Président</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/ameni_wannen.jpg" alt="Ameni Wannen" class="img-fluid">
                <h5>Ameni Wannen</h5>
                <p>Secrétaire Générale</p>
            </div>
            <div class="col-md-3 team-card">
                <img src="/club/assets/images/mouhib_ben_hassen.jpg" alt="Mouhib Ben Hassen" class="img-fluid">
                <h5>Mouhib Ben Hassen</h5>
                <p>Marketing Manager</p>
            </div>
            <div class="col-md-4 team-card">
                <img src="/club/assets/images/Sou.jpg" alt="Souhail Ben Chaabane" class="img-fluid">
                <h5>Souhail Ben Chaabane</h5>
                <p>Chef Projet</p>
            </div>
            <div class="col-md-4 team-card">
                <img src="/club/assets/images/alia_ben.jpg" alt="Alia Ben Geudeiche" class="img-fluid">
                <h5>Alia Ben Geudeiche</h5>
                <p>Responsable RH</p>
            </div>
        </div>

        <!-- Events Section -->
        <h2 class="section-title mt-5">Nos Événements</h2>
        <div class="row">
            <div class="col-md-6 event-card">
                <h4>Semaine Mondiale de l'Entrepreneuriat 2024</h4>
                <p>
                    Célébrez la Semaine mondiale de l'entrepreneuriat avec Enactus ESSECT ! Rejoignez-nous pour des sessions inspirantes mettant en vedette des experts du secteur : <br>
                    <strong>Ali Jardek</strong> : Créateur de contenu numérique 🎮<br>
                    <strong>Ramzi Saoud</strong> : Analyste & Trader 📊<br>
                    <strong>Wassim Mzoughi</strong> : Créateur de contenu et conférencier 🎤<br>
                    Connectez-vous, apprenez et laissez-vous inspirer par les idées des meilleurs professionnels. Unissons-nous pour promouvoir l'innovation et embrasser l'esprit d'entreprise ! 🚀💡<br><br>
                    <strong>Date :</strong> Mercredi 20 novembre 2024<br>
                    <strong>Heure :</strong> 12:00<br>
                    <strong>Lieu :</strong> Amphi 2, ESSECT<br>
                    <strong>Entrée :</strong> Gratuite<br>
                    <a href="#" class="btn btn-yellow mt-3" target="_blank">Plus d'infos bientôt</a><br><br>
                    #EnactusESSECT #GEW2024 #Entrepreneurship #Innovation #Inspiration
                </p>
            </div>
            <div class="video-container mt-5">
            <h3 class="section-title"><i class="fas fa-video me-2"></i>Notre Vidéo de Présentation</h3>
            <video controls>
                <source src="/club/assets/images/enactusv.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture de vidéos.
            </video>
        </div>
        </div>

        <!-- Social Media Links -->
        <div class="text-center mt-5 social-links">
            <h3>Suivez-nous sur :</h3>
            <a href="https://www.facebook.com/enactusessectunis?locale=fr_FR" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/enactors.essect/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>