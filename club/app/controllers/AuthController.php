<?php
// app/controllers/AuthController.php
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../../config/config.php';
class AuthController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    // Show the registration form
    public function showRegisterForm() {
        require_once __DIR__ . '/../views/auth/register.php';
    }

    // Handle registration form submission
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            // Validate inputs
            if (empty($username) || empty($email) || empty($password)) {
                $error = "All fields are required.";
                require_once __DIR__ . '/../views/auth/register.php';
                return;
            }

            // Check if the email is already registered
            if ($this->user->findUserByEmail($email)) {
                $error = "Email already exists.";
                require_once __DIR__ . '/../views/auth/register.php';
                return;
            }

            // Register the user (default role is 'student')
            if ($this->user->register($username, $password, $email, 'student')) {
                // Session already started in index.php, so no session_start() here
                $_SESSION['user_id'] = $this->user->getLastInsertId();
                $_SESSION['email'] = $email;
                $_SESSION['role'] = 'student'; // Default role for new users
                header("Location: /club/index.php?action=dashboard");
                exit();
            } else {
                $error = "Registration failed.";
                require_once __DIR__ . '/../views/auth/register.php';
            }
        } else {
            $this->showRegisterForm(); // Explicitly handle GET requests
        }
    }
}
?>