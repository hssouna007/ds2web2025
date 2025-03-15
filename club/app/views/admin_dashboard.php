<!-- app/views/admin_dashboard.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Gestion des Clubs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; font-family: Arial, sans-serif; }
        .container { margin-top: 20px; }
        .card { margin-bottom: 20px; }
        .table { background-color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Tableau de bord Admin</h1>
<!-- Right after <div class="container"> -->

        <!-- Pending Applications Section -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Nouvelles Candidatures</h3>
            </div>
            <div class="card-body">
                <?php if (empty($applications)): ?>
                    <p class="text-muted">Aucune candidature en attente.</p>
                <?php else: ?>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Club</th>
                                <th>CV</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($applications as $app): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($app['id']); ?></td>
                                    <td><?php echo htmlspecialchars($app['username']); ?></td>
                                    <td><?php echo htmlspecialchars($app['email']); ?></td>
                                    <td><?php echo htmlspecialchars($app['club_name']); ?></td>
                                    <td><a href="<?php echo BASE_URL; ?>uploads/cvs/<?php echo htmlspecialchars($app['cv_path']); ?>" target="_blank">Voir CV</a></td>
                                    <td><?php echo htmlspecialchars($app['applied_at']); ?></td>
                                    <td>
                                        <a href="<?php echo BASE_URL; ?>index.php?action=approve_application&id=<?php echo $app['id']; ?>" class="btn btn-success btn-sm">Accepter</a>
                                        <a href="<?php echo BASE_URL; ?>index.php?action=reject_application&id=<?php echo $app['id']; ?>" class="btn btn-danger btn-sm">Rejeter</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>

        <!-- Accepted Club Members Section -->
        <div class="card">
            <div class="card-header bg-info text-white">
                <h3 class="card-title">Membres Acceptés par Club</h3>
            </div>
            <div class="card-body">
                <?php
                $clubs = ['Infolab' => 1, 'Enactus' => 3, 'Radio' => 4, 'Fahmoulougia' => 2];
                foreach ($clubs as $clubName => $clubId):
                    $members = array_filter($acceptedMembers, fn($m) => $m['club_id'] == $clubId);
                ?>
                    <h4><?php echo htmlspecialchars($clubName); ?></h4>
                    <?php if (empty($members)): ?>
                        <p class="text-muted">Aucun membre accepté pour ce club.</p>
                    <?php else: ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Date d'acceptation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($members as $member): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($member['user_id']); ?></td>
                                        <td><?php echo htmlspecialchars($member['username']); ?></td>
                                        <td><?php echo htmlspecialchars($member['email']); ?></td>
                                        <td><?php echo htmlspecialchars($member['approved_at']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>