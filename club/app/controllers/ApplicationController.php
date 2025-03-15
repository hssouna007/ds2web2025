<?php
// app/controllers/ApplicationController.php
require_once __DIR__ . '/../models/Application.php';
require_once __DIR__ . '/../../config/config.php'; // Pour BASE_URL

class ApplicationController {
    private $applicationModel;

    public function __construct() {
        $this->applicationModel = new Application();
    }

    public function apply() {
        // Session is already started in index.php, so no need for session_start() here

        // Check if the user is logged in and is a student
    

        // Get club ID from URL
        $clubId = filter_input(INPUT_GET, 'club_id', FILTER_VALIDATE_INT);
        if (!$clubId) {
            echo "Club invalide.";
            return;
        }

        $userId = $_SESSION['user_id'];
        $error = null;
        $success = null;

        // Handle form submission (if POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../uploads/cvs/';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileName = uniqid($userId . '_') . '_' . basename($_FILES['cv']['name']);
                $cvPath = $uploadDir . $fileName;
                $allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
                $maxSize = 5 * 1024 * 1024; // 5MB

                if (!in_array($_FILES['cv']['type'], $allowedTypes)) {
                    $error = "Seuls les fichiers PDF ou Word sont autorisés.";
                } elseif ($_FILES['cv']['size'] > $maxSize) {
                    $error = "La taille du fichier ne doit pas dépasser 5 Mo.";
                } elseif (move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath)) {
                    if ($this->applicationModel->submitApplication($userId, $clubId, $fileName)) {
                        $success = "Candidature soumise avec succès !";
                    } else {
                        $error = "Échec de la soumission de la candidature.";
                        unlink($cvPath);
                    }
                } else {
                    $error = "Erreur lors de l'upload du CV.";
                }
            } else {
                $error = "Le CV est requis.";
            }
        }

        // Load the apply.php view (form display)
        $viewPath = __DIR__ . '/../views/apply.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            error_log("Apply view not found at: $viewPath");
            echo "Erreur : Formulaire de candidature introuvable.";
        }
    }
}