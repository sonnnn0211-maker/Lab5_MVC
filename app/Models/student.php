<?php
namespace App\Models;
use PDO;

class Student extends BaseModel {
    protected $table = 'students';

    public function __construct() {
        parent::__construct(); // Kích hoạt kết nối từ BaseModel
    }

    public function all() {
        $sql = "SELECT * FROM {$this->table} ORDER BY id DESC";
        return $this->connect->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $sql = "INSERT INTO {$this->table} (fullname, student_code, email) VALUES (:fullname, :student_code, :email)";
        return $this->connect->prepare($sql)->execute($data);
    }

    public function update($id, $data) {
        $sql = "UPDATE {$this->table} SET fullname = :fullname, student_code = :student_code, email = :email WHERE id = :id";
        $data['id'] = $id;
        return $this->connect->prepare($sql)->execute($data);
    }

    public function delete($id) {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        return $this->connect->prepare($sql)->execute(['id' => $id]);
    }
}