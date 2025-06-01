<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Military Students</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link href="../CSS/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/fontawesome.css">
  <link rel="stylesheet" href="../CSS/sty.css">
  <link rel="stylesheet" href="../CSS/owl.css">
  <link rel="stylesheet" href="../CSS/lightbox.css">


</head>

<body>
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <img src="../img/logo-bg.png" alt="">
      <a href="#"> Military Students<em> PTC</em></a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="<?php echo base_url('user'); ?>">หน้าหลัก</a></li>
        <li class=""><a href="<?php echo base_url(''); ?>login">เกี่ยวกับเรา</a>
          <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
          </ul>
        </li>
        <!-- <li><a href="<?php echo base_url(''); ?>login">LOG IN</a></li> -->

        <li><a href="#section6">ข้อมูลส่วนตัว</a></li>
        <li><a href="<?php echo base_url('auth/logout'); ?>" class="nav-icon fa fa-table">LOG OUT </a></li>
      </ul>
    </nav>
  </header>
  <div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="row justify-content-center w-100">
      <div class="col-lg-10 col-md-12">
        <div class="card shadow-lg border-0 rounded-lg">
          <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0">📋 รายการกิจกรรม</h3>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table id="example1x" class="table table-bordered table-hover">
                <thead class="thead-dark text-center">
                  <tr>
                    <th width="5%">No.</th>
                    <th width="55%">ชื่อวิชา</th>
                    <th width="10%">จำนวน นศ.</th>
                    <th width="20%">ลงทะเบียน</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rs as $row) { ?>
                    <tr>
                      <td class="text-center"><?= $row->s_id; ?></td>
                      <td><?= $row->s_name; ?></td>
                      <td class="text-center"><?= $row->totalstd; ?> คน</td>
                      <td class="text-center">
                        <a href="<?= base_url('subject_register/detail/' . $row->s_id); ?>" class="btn btn-success btn-sm">
                          <i class="fas fa-sign-in-alt"></i> รายละเอียด/ลงทะเบียน
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <style>
    .vh-100 {
      min-height: 100vh;
    }

    .card {
      border-radius: 15px;
    }

    .table-hover tbody tr:hover {
      background-color: #f8f9fa;
    }

    .btn-sm {
      font-size: 14px;
      padding: 5px 10px;
    }
  </style>




  <script src=".../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script src="../js/isotope.min.js"></script>
  <script src="../js/owl-carousel.js"></script>
  <script src="../js/lightbox.js"></script>
  <script src="../js/tabs.js"></script>
  <script src="../js/video.js"></script>
  <script src="../js/slick-slider.js"></script>
  <script src="../js/custom.js"></script>


</body>

</html>