<?php
namespace App\Models;
use PDO;
use PDOException;

class BaseModel {
    protected $connect; // Đảm bảo dùng protected để lớp Student kế thừa được

    public function __construct() {
        try {
            // Thay đổi các thông số cho đúng với Database của bạn
            $host = "localhost";
            $dbname = "buoi2_php"; 
            $user = "root";
            $pass = "";
            
            $this->connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Lỗi kết nối: " . $e->getMessage());
        }
    }
}