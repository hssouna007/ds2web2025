<?php
// app/models/Application.php
require_once __DIR__ . '/../core/Database.php';

class Application {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
        if ($this->db === null) {
            throw new Exception("Database connection failed.");
        }
    }

    /**
     * Submit a new application for a club
     * @param int $userId The ID of the user applying
     * @param int $clubId The ID of the club being applied to
     * @param string $cvPath The file path of the uploaded CV
     * @return bool Returns true on success, false on failure
     */
    public function submitApplication($userId, $clubId, $cvPath) {
        try {
            $query = "INSERT INTO applications (user_id, club_id, cv_path, status, applied_at) 
                      VALUES (:user_id, :club_id, :cv_path, 'pending', NOW())";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':club_id', $clubId, PDO::PARAM_INT);
            $stmt->bindParam(':cv_path', $cvPath, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error submitting application: " . $e->getMessage();
            return false;
        }
    }

    /**
     * Get all applications for a specific user
     * @param int $userId The ID of the user
     * @return array Array of applications or empty array if none found
     */
    public function getApplicationsByUser($userId) {
        try {
            $query = "SELECT a.*, c.name AS club_name 
                      FROM applications a 
                      JOIN clubs c ON a.club_id = c.id 
                      WHERE a.user_id = :user_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching applications: " . $e->getMessage();
            return [];
        }
    }

    /**
     * Check if a user has already applied to a club
     * @param int $userId The ID of the user
     * @param int $clubId The ID of the club
     * @return bool True if application exists, false otherwise
     */
    public function hasApplied($userId, $clubId) {
        try {
            $query = "SELECT COUNT(*) FROM applications 
                      WHERE user_id = :user_id AND club_id = :club_id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $stmt->bindParam(':club_id', $clubId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            echo "Error checking application: " . $e->getMessage();
            return false;
        }
    }

    /**
     * Get all pending applications for admin review
     * @return array Array of pending applications with user and club details
     */
    public function getPendingApplications() {
        try {
            $query = "SELECT a.id, a.user_id, a.club_id, a.cv_path, a.status, a.applied_at, 
                             u.username, u.email, c.name AS club_name 
                      FROM applications a
                      JOIN users u ON a.user_id = u.id
                      JOIN clubs c ON a.club_id = c.id
                      WHERE a.status = 'pending'";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching pending applications: " . $e->getMessage();
            return [];
        }
    }

    /**
     * Get all accepted members for club display
     * @return array Array of accepted members with user and club details
     */
    public function getAcceptedMembers() {
        try {
            $query = "SELECT a.user_id, a.club_id, a.approved_at, u.username, u.email, c.name AS club_name
                      FROM applications a
                      JOIN users u ON a.user_id = u.id
                      JOIN clubs c ON a.club_id = c.id
                      WHERE a.status = 'approved'";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error fetching accepted members: " . $e->getMessage();
            return [];
        }
    }

    /**
     * Update the status of an application (approve or reject)
     * @param int $id The ID of the application
     * @param string $status The new status ('approved' or 'rejected')
     * @return bool True on success, false on failure
     */
    public function updateStatus($id, $status) {
        try {
            $query = "UPDATE applications 
                      SET status = :status";
            if ($status === 'approved') {
                $query .= ", approved_at = NOW()";
            }
            $query .= " WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':status', $status, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Error updating application status: " . $e->getMessage();
            return false;
        }
    }
}