<div class="container py-5">
    <div class="card w-50 mx-auto border-info shadow">
        <div class="card-header bg-info text-white">Thông tin chi tiết</div>
        <div class="card-body">
            <p><strong>ID:</strong> <?= $student['id'] ?></p>
            <p><strong>Họ tên:</strong> <?= htmlspecialchars($student['name'] ?? $student['fullname']) ?></p>
              <p><strong>Mã SV:</strong> <?= htmlspecialchars($student['student_code'] ?? $student['student_code']) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($student['email']) ?></p>
            <a href="index.php?page=student-list" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>