<?php
namespace App\Controllers;

use App\Models\Student;
use Faker\Factory; 

class HomeController {
    public function index() {
        // 1. Khởi tạo Faker ngay tại đây
        $faker = Factory::create('vi_VN');

        // 2. Lấy dữ liệu từ Model Student
        $sv = new Student();
        $studentInfo = $sv->getInfo();

        // 3. Biến này dùng để hiện tiêu đề (nếu cần)
        $message = "Chào mừng bạn đến với hệ thống MVC!";

        // 4. Gọi View - Lúc này View sẽ "thấy" được cả $faker và $studentInfo
        include __DIR__ . '/../../views/home.php';
    }
}