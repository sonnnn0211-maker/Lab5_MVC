<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Giao diện MVC</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; background-color: #f4f4f9; }
        .container { display: flex; gap: 20px; }
        .card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; width: 350px; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; }
        strong { color: #e67e22; }
    </style>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <div class="container">
        <div class="card">
            <h2>Dữ liệu giả (Faker)</h2>
            <p><strong>Họ tên:</strong> <?php echo $faker->name; ?></p>
            <p><strong>Địa chỉ:</strong> <?php echo $faker->address; ?></p>
            <p><strong>Email:</strong> <?php echo $faker->email; ?></p>
            <button onclick="window.location.reload();">Tải lại (F5)</button>
        </div>

        <div class="card">
            <h2>Dữ liệu từ Model</h2>
            <p><strong>Kết quả:</strong> <?php echo $studentInfo; ?></p>
        </div>
    </div>
</body>
</html>