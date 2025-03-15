<?php
// app/models/Club.php
require_once __DIR__ . '/../core/Database.php';

class Club {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllClubs() {
        $query = "SELECT * FROM clubs";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createClub($name, $identity, $creationDate, $socialMedia) {
        $query = "INSERT INTO clubs (name, identity, creation_date, social_media) 
                  VALUES (:name, :identity, :creation_date, :social_media)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':identity', $identity);
        $stmt->bindParam(':creation_date', $creationDate);
        $stmt->bindParam(':social_media', $socialMedia);
        return $stmt->execute();
    }

    public function updateClub($id, $name, $identity, $creationDate, $socialMedia) {
        $query = "UPDATE clubs SET name = :name, identity = :identity, 
                  creation_date = :creation_date, social_media = :social_media 
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':identity', $identity);
        $stmt->bindParam(':creation_date', $creationDate);
        $stmt->bindParam(':social_media', $socialMedia);
        return $stmt->execute();
    }

    public function deleteClub($id) {
        $query = "DELETE FROM clubs WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>