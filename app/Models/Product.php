<?php
namespace App\Models;

use PDO; 

class Product extends BaseModel {
    public function all() {
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}