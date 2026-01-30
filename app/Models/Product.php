<?php
namespace App\Models;

class Product extends BaseModel {
    public function getAllProducts() {
        // Giả sử bảng của bạn tên là 'products'
        $sql = "SELECT * FROM products";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}