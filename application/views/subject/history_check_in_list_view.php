<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../../../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link text-center">
    <img src="../../../img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
  </a>


  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="../../../img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">ครูสิงหา</a>
      </div>
    </div>


    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="<?php echo base_url(); ?>admin" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>หน้าหลัก</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="from.php" class="nav-link">
            <i class="nav-icon far fa-edit"></i>
            <p>ฟอร์ม</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?php echo base_url(); ?>calendar" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>ปฏิทินกิจกรรม</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="datatable.php" class="nav-link">
            <i class="nav-icon fa fa-table"></i>
            <p>ตาราง</p>
          </a>
        </li>


        <li class="nav-item">
          <a href="<?php echo base_url(); ?>admin_table" class="nav-link">
            <i class="nav-icon fa fa-user-circle"></i>
            <p>จัดการสมาชิก</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('subject/maincheck'); ?>" class="nav-link">
            <i class="nav-icon fa fa-check"></i>
            <p>เช็คกิจกรรม</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
            <i class="nav-icon far fa-share-square"></i>
            <p>ออกจากระบบ</p>
          </a>
        </li>
      </ul>
    </nav>

  </div>

</aside>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 text-center">
          <h1 class="text-primary font-weight-bold">
            📌 รายละเอียดการเช็คชื่อเข้ากิจกรรมออนไลน์ 📌
          </h1>
          <span class="text-danger">รายละเอียดการเช็คชื่อกิจกรรม: <?= $rssubject->s_name; ?></span></h4>
          <h4 class="text-muted">
            ว/ด/ป. <?= date('d/m/Y', strtotime($rsdate->check_in_date)); ?>
          </h4>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="card shadow-lg">


        <div class="card-body">
          <h4 class="mb-3"><i class="fa fa-list"></i> รายชื่อนักศึกษา</h4>
          <div class="table-responsive">
            <table id="example10" class="table table-bordered table-hover">
              <thead class="thead-dark text-center">
                <tr>
                  <th width="10%">รหัส นศ.</th>
                  <th width="60%">ชื่อ-สกุล</th>
                  <th width="15%">เข้าเรียน</th>
                  <th width="15%">ขาดเรียน</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($rsStd as $row) { ?>
                  <tr>
                    <td class="text-center"><?= $row->std_id; ?></td>
                    <td><?= $row->std_name; ?></td>
                    <td class="text-center">
                      <input type="radio" name="std_id[<?= $row->std_id; ?>]" value="1" required <?= $row->check_in_status == 1 ? 'checked' : ''; ?>>
                    </td>
                    <td class="text-center">
                      <input type="radio" name="std_id[<?= $row->std_id; ?>]" value="0" <?= $row->check_in_status == 0 ? 'checked' : ''; ?>>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>


          </form>
        </div>
      </div>
    </div>
  </section>
</div>


<style>
  .content-wrapper {
    background: #f8f9fa;
    padding-top: 20px;
  }

  .card {
    border-radius: 10px;
    border: none;
  }

  .table-hover tbody tr:hover {
    background-color: #f1f1f1;
  }

  .btn-lg {
    width: 200px;
  }
</style>