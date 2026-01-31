<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Danh sách Sinh viên</h2>
        <a href="index.php?page=student-add" class="btn btn-success">+ Thêm mới</a>
    </div>
    <table class="table table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Họ tên</th><th>Mã SV</th><th>Email</th><th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $s): ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= htmlspecialchars($s['fullname']) ?></td>
                <td><?= htmlspecialchars($s['student_code']) ?></td>
                <td><?= htmlspecialchars($s['email']) ?></td>
                <td>
                    <a href="index.php?page=student-detail&id=<?= $s['id'] ?>" class="btn btn-info btn-sm">Xem</a>
                    <a href="index.php?page=student-edit&id=<?= $s['id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="index.php?page=student-delete&id=<?= $s['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>