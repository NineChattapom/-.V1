<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Profile</title>
</head>
<body>
<div class="container-xl px-4 mt-4">
  
    
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
       
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                <?php if (!empty($person->person_picture_path)) : ?>
                        <img src="<?php echo base_url($person->person_picture_path); ?>" alt="Profile Picture" class="img-thumbnail">
                    <?php else : ?>
                        <img src="<?php echo base_url('uploads/default.png'); ?>" alt="Default Picture" class="img-thumbnail">
                    <?php endif; ?>
                    <div class="small font-italic text-muted mb-4">Upload your profile picture</div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
         
            <div class="card mb-4">
                <div class="card-header">ข้อมูลส่วนตัว</div>
                <div class="card-body">
                
                    <?php foreach ($query as $row): ?>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>ชื่อ-นามสกุล:</strong></label>
                        <p><?php echo isset($row->person_name) ? $row->person_name : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>หมายเลขบัตรประชาชน:</strong></label>
                        <p><?php echo isset($row->person_card) ? $row->person_card : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>กรุ๊ปเลือด:</strong></label>
                        <p><?php echo isset($row->person_blood) ? $row->person_blood : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>เพศ:</strong></label>
                        <p><?php echo isset($row->person_gender) ? $row->person_gender : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>ชั้นปี:</strong></label>
                        <p><?php echo isset($row->person_level) ? $row->person_level : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>แผนก:</strong></label>
                        <p><?php echo isset($row->person_department) ? $row->person_department : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>อีเมล:</strong></label>
                        <p><?php echo isset($row->person_email) ? $row->person_email : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>เบอร์โทร:</strong></label>
                        <p><?php echo isset($row->person_phone) ? $row->person_phone : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>เบอร์โทรผู้ปกครอง:</strong></label>
                        <p><?php echo isset($row->person_phone_parent) ? $row->person_phone_parent : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <div class="mb-3">
                        <label class="small mb-1"><strong>วัน/เดือน/ปีเกิด:</strong></label>
                        <p><?php echo isset($row->person_date) ? $row->person_date : 'ไม่มีข้อมูล'; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
