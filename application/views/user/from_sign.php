<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile Form</title>
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/fontawesome.css">
    <link rel="stylesheet" href="CSS/sty.css">
    <link rel="stylesheet" href="CSS/owl.css">
    <link rel="stylesheet" href="CSS/lightbox.css">

</head>

<body>
    <div class="container-xl px-4 mt-4">


        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">

                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">

                        <img id="profilePreview" class="img-account-profile rounded-circle mb-2" src="<?php echo base_url('uploads/default.png'); ?>" alt="Profile Picture" width="150">


                        <input type="file" class="form-control" name="person_picture" id="person_picture" accept="image/png, image/jpeg">


                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">

                <div class="card mb-4">
                    <br>
                    <br>
                    <div class="card-header">ฟอร์มสมัครนักศึกษาวิชาทหาร</div>
                    <div class="card-body">
                        <form id="profileForm" method="post" action="<?php echo base_url('user/adding_person'); ?>" enctype="multipart/form-data">


                            <div class="mb-3">
                                <label class="small mb-1" for="person_name">ชื่อ-นามสกุล</label>
                                <input class="form-control" name="person_name" id="person_name" type="text" placeholder="ใส่ชื่อนามสกุล">
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_card">หมายเลขบัตรประชาชน</label>
                                    <input class="form-control" name="person_card" id="person_card" type="text" placeholder="ใส่หมายเลขบัตรประชาชน">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_blood">กรุ๊ปเลือด</label>
                                    <input class="form-control" name="person_blood" id="person_blood" type="text" placeholder="ใส่กรุ๊ปเลือด">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_gender">เพศ</label>
                                    <select class="form-control" name="person_gender" id="person_gender">
                                        <option value="male">ชาย</option>
                                        <option value="female">หญิง</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_level">ชั้นปี</label>
                                    <select class="form-control" name="person_level" id="person_level">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_department">แผนก</label>
                                    <select class="form-control" name="person_department" id="person_department">
                                        <option value="เทคนิคคอมพิวเตอร์">เทคนิคคอมพิวเตอร์</option>
                                        <option value="ช่างไฟฟ้า">ช่างไฟฟ้า</option>
                                        <option value="ช่างกล">ช่างกล</option>
                                        <option value="ช่างก่อสร้าง">ช่างก่อสร้าง</option>
                                        <option value="ช่างสำรวจ">ช่างสำรวจ</option>
                                        <option value="ช่างสถาปัตยกรรม">ช่างสถาปัตยกรรม</option>
                                        <option value="ช่างยนต์">ช่างยนต์</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="person_email">อีเมล</label>
                                <input class="form-control" name="person_email" id="person_email" type="email" placeholder="ใส่อีเมล">
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_phone">ใส่เบอร์โทร</label>
                                    <input class="form-control" name="person_phone" id="person_phone" type="tel" placeholder="ใส่เบอร์โทรศัพท์">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="person_date">วัน/เดือน/ปีเกิด</label>
                                    <input class="form-control" name="person_date" id="person_date" type="date" placeholder="เลือกวัน/เดือน/ปีเกิด">
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">บันทึกข้อมูล</button>
                        </form>
                        <hr>
                        <div id="output" class="mt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("person_picture").addEventListener("change", function(event) {
            let reader = new FileReader();
            reader.onload = function() {
                let output = document.getElementById("profilePreview");
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>



</body>

</html>