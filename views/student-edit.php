<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <div class="card shadow w-50 mx-auto">
            <div class="card-header bg-warning text-dark fw-bold">
                <h5 class="mb-0">CẬP NHẬT THÔNG TIN SINH VIÊN</h5>
            </div>
            <div class="card-body">
                <form action="index.php?page=student-update&id=<?= $student['id'] ?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Họ tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" 
                               value="<?= htmlspecialchars($student['fullname']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mã sinh viên</label>
                        <input type="text" name="student_code" class="form-control" 
                               value="<?= htmlspecialchars($student['student_code']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" 
                               value="<?= htmlspecialchars($student['email']) ?>" required>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <a href="index.php?page=student-list" class="btn btn-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-warning px-4 fw-bold">Cập nhật dữ liệu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>