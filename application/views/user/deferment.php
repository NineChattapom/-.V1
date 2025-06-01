<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แบบฟอร์มผ่อนผันการเกณฑ์ทหาร</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: 'Sarabun', sans-serif;
      background-color: #f4f4f4;
    }
    .countdown {
      font-size: 1.5rem;
      font-weight: bold;
      color: red;
    }
  </style>
</head>
<body>
<div class="container mt-5 mb-5 bg-white p-4 shadow rounded">
  <h2 class="text-center mb-4">แบบฟอร์มผ่อนผันการเกณฑ์ทหาร</h2>

  <div class="text-center mb-4">
    <div>📅 เหลือเวลาในการยื่นคำร้อง:</div>
    <div id="countdown" class="countdown"></div>
  </div>

  <form action="<?= base_url('submit_defer') ?>" method="post" enctype="multipart/form-data">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>ชื่อ - สกุล</label>
        <input type="text" name="fullname" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label>เลขบัตรประชาชน</label>
        <input type="text" name="citizen_id" class="form-control" required>
      </div>
    </div>
    <div class="form-group">
      <label>ที่อยู่</label>
      <textarea name="address" class="form-control" rows="2" required></textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>เบอร์โทรศัพท์</label>
        <input type="text" name="phone" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label>อีเมล</label>
        <input type="email" name="email" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label>เหตุผลที่ขอผ่อนผัน</label>
      <select name="reason" class="form-control" required>
        <option value="">-- กรุณาเลือก --</option>
        <option value="เรียนอยู่">เรียนอยู่</option>
        <option value="มีเหตุจำเป็นทางครอบครัว">มีเหตุจำเป็นทางครอบครัว</option>
        <option value="อื่น ๆ">อื่น ๆ</option>
      </select>
    </div>
    <div class="form-group">
      <label>สถานศึกษา / ที่ทำงาน</label>
      <input type="text" name="institute" class="form-control">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>ปีที่ต้องการผ่อนผัน</label>
        <input type="text" name="defer_year" class="form-control" placeholder="เช่น 2568">
      </div>
      <div class="form-group col-md-6">
        <label>ปีที่เคยผ่อนผัน (ถ้ามี)</label>
        <input type="text" name="past_defer" class="form-control">
      </div>
    </div>

    <h5 class="mt-4">📎 เอกสารประกอบ</h5>
    <div class="form-group">
      <label>หนังสือรับรองการศึกษา (PDF/JPG)</label>
      <input type="file" name="doc_cert" class="form-control-file" required>
    </div>
    <div class="form-group">
      <label>สำเนาบัตรประชาชน</label>
      <input type="file" name="doc_idcard" class="form-control-file">
    </div>
    <div class="form-group">
      <label>สำเนาทะเบียนบ้าน</label>
      <input type="file" name="doc_home" class="form-control-file">
    </div>

    <div class="form-group mt-4">
      <label>ยืนยันตัวตน</label>
      <input type="text" name="captcha" class="form-control" placeholder="กรุณาพิมพ์ 1234 เพื่อยืนยัน" required>
    </div>

    <button type="submit" class="btn btn-success btn-block">📤 ส่งคำร้อง</button>
  </form>

  <hr>

  <h5 class="mt-4">📄 ตัวอย่างแบบฟอร์ม</h5>
  <ul>
    <li><a href="img/ผ่อนผันทหาร.pdf" target="_blank">แบบคำร้องขอผ่อนผัน (PDF)</a></li>
    <li><a href="img/ผ่อนผันทหาร.pdf" target="_blank">ตัวอย่างหนังสือรับรองจากสถานศึกษา</a></li>
  </ul>

  <hr>

  <h5 class="mt-4">📞 ช่องทางติดต่อ</h5>
  <p>โทรศัพท์: 02-123-4567<br>อีเมล: defer@army.go.th</p>
  <p>Line Official: <a href="#">@deferarmy</a></p>
</div>

<script>
  // นับถอยหลังสู่วันหมดเขต
  const countdownEl = document.getElementById('countdown');
  const deadline = new Date('2025-10-28T23:59:59').getTime();

  setInterval(() => {
    const now = new Date().getTime();
    const distance = deadline - now;

    if (distance < 0) {
      countdownEl.innerText = 'หมดเขตรับสมัครแล้ว';
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdownEl.innerText = `${days} วัน ${hours} ชม. ${minutes} นาที ${seconds} วิ`;
  }, 1000);
</script>

</body>
</html>