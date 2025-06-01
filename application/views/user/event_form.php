<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มลงทะเบียนเข้าร่วมกิจกรรม</title>
    <head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">


<title>Military Students</title>

<!-- Bootstrap core CSS -->
<link href="../../CSS/bootstrap.min.css" rel="stylesheet">


<!-- Font Awesome -->
<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../CSS/fontawesome.css">
<link rel="stylesheet" href="../../CSS/sty.css">
<link rel="stylesheet" href="../../CSS/owl.css">
<link rel="stylesheet" href="../../CSS/lightbox.css">

</head>

<body>


<!--header-->
<header class="main-header clearfix" role="header">
<div class="logo">
   <img src="../../img/logo-bg.png" alt=""> 
  <a href="#"> Military Students<em> PTC</em></a>
</div>
<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
<nav id="menu" class="main-nav" role="navigation">
  <ul class="main-menu">
    <li><a href="#section1">หน้าหลัก</a></li>
    <li class=""><a href="<?php echo base_url('');?>login">เกี่ยวกับเรา</a>
      <ul class="sub-menu">
        <li><a href="#section2">Who we are?</a></li>
        <li><a href="#section3">What we do?</a></li>
        <li><a href="#section3">How it works?</a></li>
        <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
      </ul>
    </li>
    <!-- <li><a href="<?php echo base_url('');?>login">LOG IN</a></li> -->
    <!-- <li><a href="#section5">Video</a></li> -->
    <li><a href="<?php echo base_url('');?>userprofile" class="external">ข้อมูลส่วนตัว</a></li>
    <li>
<a href="<?php echo base_url('auth/logout'); ?>" class="external">
    <i class="fas fa-sign-out-alt"></i> LOG OUT
</a>
</li>

  </ul>
</nav>
</header>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right,rgb(244, 244, 244),rgb(43, 155, 86));
            font-family: 'Prompt', sans-serif;
        }

        .container {
            margin-top: 150px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background:rgb(45, 195, 58);
            color: white;
            font-size: 1.2rem;
            text-align: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 10px;
            background: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">📋 ฟอร์มลงทะเบียนเข้าร่วมกิจกรรม</div>
                <div class="card-body">
                    <form action="<?php echo base_url('subject_register/register') ?>" method="post" enctype="multipart/form-data">

                        <?php echo validation_errors(); ?>  

                        <!-- รหัสนักศึกษา -->
                        <div class="mb-3">
                            <label class="form-label" for="std_code">📌 รหัสนักศึกษา</label>
                            <input class="form-control" name="std_code" id="std_code" type="text" placeholder="ใส่รหัสนักศึกษา" required>
                        </div>

                        <!-- ชื่อ-นามสกุล -->
                        <div class="mb-3">
                            <label class="form-label" for="std_name">👤 ชื่อ-นามสกุล</label>
                            <input class="form-control" name="std_name" id="std_name" type="text" placeholder="ใส่ชื่อ-นามสกุล" required>
                        </div>

                        <!-- เบอร์โทรศัพท์ -->
                        <div class="mb-3">
                            <label class="form-label" for="std_phone">📞 เบอร์โทรศัพท์</label>
                            <input class="form-control" name="std_phone" id="std_phone" type="text" placeholder="ใส่เบอร์โทรศัพท์" minlength="10" maxlength="10" required>
                        </div>

                        <!-- อีเมล -->
                        <div class="mb-3">
                            <label class="form-label" for="std_email">📧 อีเมล</label>
                            <input class="form-control" name="std_email" id="std_email" type="email" placeholder="ใส่อีเมล" required>
                        </div>

                        <!-- ซ่อนค่า s_id เพื่อส่งไปกับฟอร์ม -->
                        <input type="hidden" name="s_id" value="<?php echo $rssubject->s_id ?>">

                        <!-- ปุ่มลงทะเบียน -->
                        <button class="btn btn-primary" type="submit">✅ ลงทะเบียน</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
