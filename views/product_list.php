<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Danh sách sản phẩm từ Database</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listProducts as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= number_format($p['price']) ?> VNĐ</td>
                <td><?= $p['description'] ?? 'Không có' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p style="text-align:center;"><a href="index.php?page=home">Quay lại trang chủ</a></p>
</body>
</html>