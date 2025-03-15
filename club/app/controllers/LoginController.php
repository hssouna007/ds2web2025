<?php
// app/controllers/LoginController.php
require_once __DIR__ . '/../core/Database.php';  // Adjusted path
require_once __DIR__ . '/../models/User.php';   // Adjusted path
require_once __DIR__ . '/../../config/config.php'; // Corrected path to C:\wamp64\www\club\config\config.php

class LoginController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    // Display the login form
    public function showLoginForm() {
        // If the user is already authenticated, redirect to the dashboard
        if ($this->isAuthenticated()) {
            header("Location: " . BASE_URL . "index.php?action=dashboard");
            exit();
        }

        // Display the login form
        require_once __DIR__ . '/../views/auth/login.php';
    }


    // Process the login form submission
    public function processLogin() {
        // If the user is already authenticated, redirect to the dashboard
        if ($this->isAuthenticated()) {
            header("Location: " . BASE_URL . "index.php?action=dashboard");
            exit();
        }

        // Get form data
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password'] ?? '');

        // Validate email and password
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Please enter a valid email address.";
            require_once __DIR__ . '/../views/auth/login.php';
            return;
        }

        if (empty($email) || empty($password)) {
            $error = "Email and password are required.";
            require_once __DIR__ . '/../views/auth/login.php';
            return;
        }

        // Authenticate the user
        if ($this->authenticateUser($email, $password)) {
            // Set session variables
            $_SESSION['user_id'] = $this->user->getId($email); // Assuming your User model has a getId() method
            $_SESSION['email'] = $email;

            // Redirect to the dashboard
            header("Location: " . BASE_URL . "index.php?action=dashboard");
            exit();
        } else {
            // Authentication failed, show error message
            $error = "Invalid email or password.";
            require_once __DIR__ . '/../views/auth/login.php';
            return;
            }
        }
    
        // Authenticate the user (replace with your actual authentication logic)
        private function authenticateUser($email, $password) {
            // Use the User model to verify the user
            $user = $this->user->verifyUser($email, $password);
            return $user !== false;
        }
        public function logout() {
            // Clear session data
            session_unset();
            session_destroy();
    
            // Redirect to the login page
            header("Location: " . BASE_URL . "index.php?action=login");
            exit();
            
        }
    
        // Check if the user is authenticated
        private function isAuthenticated() {
            return isset($_SESSION['user_id']);
        }
    }

    // Authenticate the user (replace with your actual authentication logic)
    

    // Logout the user
    

?>