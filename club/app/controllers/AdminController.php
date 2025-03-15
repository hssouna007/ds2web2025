<?php
// app/controllers/AdminController.php
require_once __DIR__ . '/../models/Club.php';
require_once __DIR__ . '/../../config/config.php';

class AdminController {
    private $clubModel;

    public function __construct() {
        // Debugging: Print session data
        echo "Session Data in AdminController: ";
        print_r($_SESSION);
        echo "<br>";

        // Check if the user is authenticated and is an admin
        require_once __DIR__ . '/../models/User.php';
        $userModel = new User();

        if (!isset($_SESSION['user_id']) || !$userModel->isAdmin($_SESSION['user_id'])) {
            // Redirect to the login page if the user is not authenticated or is not an admin
            header('Location: ' . BASE_URL . 'index.php?action=login');
            exit;
        }

        // Initialize the Club model
        $this->clubModel = new Club();
    }

    /*public function showAdminDashboard() {
        $clubs = $this->clubModel->getAllClubs();
        require_once __DIR__ . '/../views/clubs_admin.php';
    }*/

    public function createClub() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $identity = $_POST['identity'];
            $creationDate = $_POST['creation_date'];
            $socialMedia = $_POST['social_media'];
            if ($this->clubModel->createClub($name, $identity, $creationDate, $socialMedia)) {
                header('Location: ' . BASE_URL . 'index.php?action=admin');
                exit;
            }
        }
    }

    public function updateClub() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $identity = $_POST['identity'];
            $creationDate = $_POST['creation_date'];
            $socialMedia = $_POST['social_media'];
            if ($this->clubModel->updateClub($id, $name, $identity, $creationDate, $socialMedia)) {
                header('Location: ' . BASE_URL . 'index.php?action=admin');
                exit;
            }
        }
    }

    public function deleteClub() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            if ($this->clubModel->deleteClub($id)) {
                header('Location: ' . BASE_URL . 'index.php?action=admin');
                exit;
            }
        }
    }
}
?>