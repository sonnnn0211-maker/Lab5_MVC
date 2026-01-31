<?php
namespace App\Controllers;
use App\Models\Student;

class StudentController {
    protected $model;

    public function __construct() {
        $this->model = new Student();
    }

    public function index() {
        $students = $this->model->all();
        include dirname(__DIR__, 2) . '/views/student-list.php';
    }

    public function show() {
        $id = $_GET['id'] ?? 0;
        $student = $this->model->find($id);
        if (!$student) die("Không tìm thấy sinh viên!");
        include dirname(__DIR__, 2) . '/views/student-detail.php';
    }

    public function create() {
        include dirname(__DIR__, 2) . '/views/student-add.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = ['fullname' => $_POST['fullname'], 'student_code' => $_POST['student_code'], 'email' => $_POST['email']];
            if ($this->model->insert($data)) header("Location: index.php?page=student-list");
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? 0;
        $student = $this->model->find($id);
        include dirname(__DIR__, 2) . '/views/student-edit.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'] ?? 0;
            $data = ['fullname' => $_POST['fullname'], 'student_code' => $_POST['student_code'], 'email' => $_POST['email']];
            if ($this->model->update($id, $data)) header("Location: index.php?page=student-list");
        }
    }

    public function destroy() {
        $id = $_GET['id'] ?? 0;
        $this->model->delete($id);
        header("Location: index.php?page=student-list");
    }
}