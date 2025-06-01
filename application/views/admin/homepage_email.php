<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ส่งอีเมลแนบไฟล์</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h3 class="text-success mb-4">📧 ส่งอีเมลแนบไฟล์ถึงอาจารย์</h3>

    <form action="<?php echo base_url('email_controller/send'); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="to">อีเมลผู้รับ</label>
            <input type="email" name="to" class="form-control" placeholder="someone@example.com" required>
        </div>

        <div class="form-group">
            <label for="subject">หัวข้อ</label>
            <input type="text" name="subject" class="form-control" value="แจ้งเตือนจากระบบจัดการนักศึกษา" required>
        </div>

        <div class="form-group">
            <label for="message">ข้อความ</label>
            <textarea name="message" rows="5" class="form-control" required>เรียนอาจารย์ผู้ดูแล...</textarea>
        </div>

        <div class="form-group">
            <label for="attachment">แนบไฟล์ (PDF, JPG, PNG)</label>
            <input type="file" name="attachment" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success">📨 ส่งอีเมล</button>
    </form>
</div>
</body>
</html>
