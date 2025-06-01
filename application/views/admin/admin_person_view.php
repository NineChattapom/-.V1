<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดนักศึกษา</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #198754;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }
        .table-label {
            font-weight: bold;
            color: #495057;
            width: 40%;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ข้อมูลนักศึกษาวิชาทหาร</h1>
    <table class="table">
        <tr>
            <td class="table-label">ชื่อ-นามสกุล:</td>
            <td><?php echo $person->person_name; ?></td>
        </tr>
        <tr>
            <td class="table-label">หมายเลขบัตรประชาชน:</td>
            <td><?php echo $person->person_card; ?></td>
        </tr>
        <tr>
            <td class="table-label">กรุ๊ปเลือด:</td>
            <td><?php echo $person->person_blood ?: '-'; ?></td>
        </tr>
        <tr>
            <td class="table-label">เพศ:</td>
            <td><?php echo ($person->person_gender == 'male') ? 'ชาย' : 'หญิง'; ?></td>
        </tr>
        <tr>
            <td class="table-label">ชั้นปี:</td>
            <td><?php echo $person->person_level; ?></td>
        </tr>
        <tr>
            <td class="table-label">แผนก:</td>
            <td><?php echo $person->person_department; ?></td>
        </tr>
        <tr>
            <td class="table-label">อีเมล:</td>
            <td><?php echo $person->person_email; ?></td>
        </tr>
        <tr>
            <td class="table-label">เบอร์โทรศัพท์:</td>
            <td><?php echo $person->person_phone; ?></td>
        </tr>
        <tr>
            <td class="table-label">วัน/เดือน/ปี เกิด:</td>
            <td><?php echo date("d/m/Y", strtotime($person->person_date)); ?></td>
        </tr>
    </table>
    <div class="text-center mt-4">
        <a href="<?php echo base_url('admin_table'); ?>" class="btn btn-secondary">กลับ</a>
    </div>
</div>

</body>
</html>
