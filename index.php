<?php
require_once 'vendor/autoload.php';

use App\Controllers\StudentController;

$ctr = new StudentController();
$page = $_GET['page'] ?? 'student-list';

switch ($page) {
    case 'student-list': $ctr->index(); break;
    case 'student-detail': $ctr->show(); break;
    case 'student-add': $ctr->create(); break;
    case 'student-store': $ctr->store(); break;
    case 'student-edit': $ctr->edit(); break;
    case 'student-update': $ctr->update(); break;
    case 'student-delete': $ctr->destroy(); break;
    default: echo "Trang không tồn tại!"; break;
}