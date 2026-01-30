<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $connect;

    public function __construct() {
        try {
            // Thay đổi 'ten_database' bằng tên DB Lab 2 của bạn
            $host = "localhost";
            $dbname = "ten_database_lab2"; 
            $username = "root";
            $password = "";

            $this->connect = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $username,
                $password
            );
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Lỗi kết nối: " . $e->getMessage();
        }
    }
}