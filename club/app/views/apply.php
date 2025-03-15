<?php
// Assurez-vous que les variables $clubId, $error et $success sont disponibles depuis le contrôleur
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidature au club</title>
    <!-- Bootstrap CSS pour un style rapide -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">S'inscrire au club</h2>

        <!-- Affichage des messages d'erreur ou de succès -->
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <!-- Formulaire de candidature -->
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Club sélectionné :</label>
                <?php
                // Liste statique des clubs pour correspondre au club_id
                $clubs = [
                    1 => 'Infolab',
                    2 => 'Fahmoulougia',
                    3 => 'Enactus',
                    4 => 'Radio'
                ];
                $clubName = isset($clubs[$clubId]) ? $clubs[$clubId] : 'Club inconnu';
                ?>
                <input type="text" class="form-control" value="<?php echo htmlspecialchars($clubName); ?>" readonly>
                <input type="hidden" name="club_id" value="<?php echo htmlspecialchars($clubId); ?>">
            </div>

            <div class="mb-3">
                <label for="cv" class="form-label">Télécharger votre CV (PDF/Word, max 5 Mo) :</label>
                <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Envoyer la candidature</button>
        </form>

        <div class="text-center mt-3">
            <a href="<?php echo BASE_URL; ?>index.php?action=clubs" class="btn btn-secondary">Retour aux clubs</a>
        </div>
    </div>

    <!-- Bootstrap JS (optionnel, pour les composants interactifs) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>