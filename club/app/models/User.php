<?php
// app/models/User.php
require_once __DIR__ . '/../core/Database.php';

class User {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        if ($this->db === null) {
            throw new Exception("Database connection failed.");
        }
    }

    /**
     * Register a new user
     * @param string $username The username
     * @param string $password The password (will be hashed)
     * @param string $email The email address
     * @param string $role The role (default: 'student')
     * @return bool True on success, false on failure
     */
    public function register($username, $password, $email, $role = 'student') {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (username, password, email, role) 
                      VALUES (:username, :password, :email, :role)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':role', $role, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error registering user: " . $e->getMessage();
            return false;
        }
    }

    /**
     * Verify user credentials
     * @param string $email The email address
     * @param string $password The password to verify
     * @return array|false User data on success, false on failure
     */
    public function verifyUser($email, $password) {
        try {
            $query = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
            return false;
        } catch (PDOException $e) {
            echo "Error verifying user: " . $e->getMessage();
            return false;
        }
    }

    /**
     * Get last inserted ID
     * @return string The last inserted ID
     */
    public function getLastInsertId() {
        return $this->db->lastInsertId();
    }

    /**
     * Check if a user already exists by email
     * @param string $email The email address
     * @return array|false User data if found, false otherwise
     */
    public function findUserByEmail($email) {
        try {
            $query = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error finding user by email: " . $e->getMessage();
            return false;
        }
    }

    /**
     * Get user role by ID
     * @param int $userId The user ID
     * @return string|null The role, or null if not found
     */
    public function getUserRole($userId) {
        try {
            $query = "SELECT role FROM users WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ? $result['role'] : null;
        } catch (PDOException $e) {
            echo "Error fetching user role: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Check if user is admin
     * @param int $userId The user ID
     * @return bool True if admin, false otherwise
     */
    public function isAdmin($userId) {
        return $this->getUserRole($userId) === 'admin';
    }

    /**
     * Get user ID by email
     * @param string $email The email address
     * @return int|null The user ID, or null if not found
     */
    public function getId($email) {
        try {
            $query = "SELECT id FROM users WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ? $result['id'] : null;
        } catch (PDOException $e) {
            echo "Error fetching user ID: " . $e->getMessage();
            return null;
        }
    }

    /**
     * Get all users (for admin dashboard)
     * @return array Array of all users
     */
    public function getAllUsers() {
        try {
            $query = "SELECT id, username, email, role FROM users";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching all users: " . $e->getMessage();
            return [];
        }
    }

    /**
     * Delete a user (for admin dashboard)
     * @param int $userId The user ID
     * @return bool True on success, false on failure
     */
    public function deleteUser($userId) {
        try {
            $query = "DELETE FROM users WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error deleting user: " . $e->getMessage();
            return false;
        }
    }
}