<?php
// app/core/Database.php
class Database {
    private $host = 'localhost';
    private $db_name = 'university_clubs';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect() {
        if ($this->conn !== null) {
            return $this->conn; // Return existing connection if already established
        }

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log error in a production environment instead of echoing
            echo "Connection Error: " . $e->getMessage();
            return null;
        }
        return $this->conn;
    }
}
?>