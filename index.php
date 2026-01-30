<?php
require_once 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    (new HomeController())->index();
} elseif ($page === 'products') {
    // Nếu URL là index.php?page=products
    (new ProductController())->index();
} else {
    echo "<h1>404 - Not Found</h1>";
}