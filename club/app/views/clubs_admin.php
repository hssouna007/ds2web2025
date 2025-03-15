<!-- app/views/clubs_admin.php -->
<?php
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/Club.php';

$userModel = new User();
if (!isset($_SESSION['user_id']) || !$userModel->isAdmin($_SESSION['user_id'])) {
    header('Location:/club/index.php?action=login');
    exit;
}

$clubModel = new Club();
$clubs = $clubModel->getAllClubs();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les Clubs - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f4f4; }
        .crud-card { background: white; padding: 20px; border-radius: 10px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/club/index.php?action=clubs">Retour aux Clubs</a>
        </div>
    </nav>

    <div class="container py-5">
        <h1>Gestion des Clubs</h1>

        <!-- Create Club Form -->
        <div class="crud-card mb-4">
            <h3>Ajouter un Club</h3>
            <form action="/club/index.php?action=create_club" method="POST">
                <div class="mb-3">
                    <label>Nom</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Identité</label>
                    <textarea name="identity" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Date de Création</label>
                    <input type="date" name="creation_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Réseaux Sociaux</label>
                    <input type="text" name="social_media" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>

        <!-- Club List with CRUD -->
        <div class="crud-card">
            <h3>Liste des Clubs</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Identité</th>
                        <th>Date de Création</th>
                        <th>Réseaux Sociaux</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clubs as $club): ?>
                    <tr>
                        <td><?php echo $club['id']; ?></td>
                        <td><?php echo htmlspecialchars($club['name']); ?></td>
                        <td><?php echo htmlspecialchars($club['identity'] ?? ''); ?></td>
                        <td><?php echo $club['creation_date'] ?? ''; ?></td>
                        <td><?php echo htmlspecialchars($club['social_media'] ?? ''); ?></td>
                        <td>
                            <form action="/club/index.php?action=update_club" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $club['id']; ?>">
                                <input type="text" name="name" value="<?php echo htmlspecialchars($club['name']); ?>" required>
                                <textarea name="identity"><?php echo htmlspecialchars($club['identity'] ?? ''); ?></textarea>
                                <input type="date" name="creation_date" value="<?php echo $club['creation_date'] ?? ''; ?>">
                                <input type="text" name="social_media" value="<?php echo htmlspecialchars($club['social_media'] ?? ''); ?>">
                                <button type="submit" class="btn btn-warning btn-sm">Modifier</button>
                            </form>
                            <form action="/club/index.php?action=delete_club" method="POST" class="d-inline">
                                <input type="hidden" name="id" value="<?php echo $club['id']; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>