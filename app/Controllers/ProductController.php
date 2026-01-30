<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    public function index() {
        // 1. Lấy dữ liệu từ Model
        $model = new Product();
        $listProducts = $model->getAllProducts();

        // 2. Truyền dữ liệu sang View
        include __DIR__ . '/../../views/product_list.php';
    }
}