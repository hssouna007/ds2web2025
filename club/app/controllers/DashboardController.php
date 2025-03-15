<?php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../../config/config.php';

class DashboardController {
    public function showDashboard() {
        // Debugging: Check if user is authenticated
        if (!$this->isAuthenticated()) {
            header("Location: " . BASE_URL . "index.php?action=login");
            exit();
        }
        require_once __DIR__ . '/../views/dashboard.php';
    }

    public function showClubsPage() {
        if (!$this->isAuthenticated()) {
           header("Location: " . BASE_URL . "index.php?action=login");
            exit();
        }
        require_once __DIR__ . '/../views/clubs.php';
    }

    public function showClubPage($clubName) {
        if (!$this->isAuthenticated()) {
            header("Location: " . BASE_URL . "index.php?action=login");
            exit();
        }

        $sanitizedClub = preg_replace('/[^a-zA-Z0-9_]/', '', $clubName);
        $viewPath = __DIR__ . '/../views/clubs/' . $sanitizedClub . '.php';

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            header("Location: " . BASE_URL . "index.php?action=clubs");
            exit();
        }
    }

    private function isAuthenticated() {
        // Debugging: Print session data
        echo "Session Data in DashboardController: ";
        print_r($_SESSION);
        echo "<br>";
    
        return isset($_SESSION['user_id']);
    }
}
?>