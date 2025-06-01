<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- fullCalendar -->
 <link rel="stylesheet" href="../../plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    
  <!-- sweet alert -->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">  
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <img src="../../img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="../../img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">ครูสิงหา</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Home Link -->
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>admin" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>หน้าหลัก</p>
                    </a>
                </li>

                <!-- Form Link -->
                <li class="nav-item">
                    <a href="from.php" class="nav-link">
                        <i class="nav-icon far fa-edit"></i>
                        <p>ฟอร์ม</p>
                    </a>
                </li>

                <!-- Calendar Link -->
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>calendar" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>ปฏิทินกิจกรรม</p>
                    </a>
                </li>

                <!-- Table Link -->
                <li class="nav-item">
                    <a href="datatable.php" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>ตาราง</p>
                    </a>
                </li>

                <!-- Member Management -->
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>admin_table" class="nav-link">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>จัดการสมาชิก</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('subject/maincheck'); ?>" class="nav-link">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>เซ็คกิจกรรม</p>
                    </a>
                </li>

                <!-- Logout -->
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
  <section class="content-header text-center">
    <h1>📌 ระบบเช็คชื่อเข้ากิจกรรมออนไลน์ 📌</h1>
    <h4><i class="fa fa-user"></i> สวัสดีอาจารย์ <?= $rsteacher->teacher_name; ?> | 
    <span class="text-danger">คุณกำลังเช็คชื่อกิจกรรม: <?= $rssubject->s_name; ?></span></h4>
  </section>

  <section class="content">
    <div class="container">
      <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
          <h4 class="mb-0">📜 รายชื่อนักศึกษา</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('subject/saveCheckIn');?>" method="post">
            <div class="table-responsive">
              <table id="studentTable" class="table table-striped table-hover text-center">
                <thead class="thead-dark">
                  <tr>
                    <th>รหัส นศ.</th>
                    <th>ชื่อ-สกุล</th>
                    <th>เข้ากิจกรรม</th>
                    <th>ขาด</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rsStd as $row) { ?>
                  <tr>
                    <td><?= $row->std_id; ?></td>
                    <td><?= $row->std_name; ?></td>
                    <td><input type="radio" name="std_id[<?= $row->std_id; ?>]" value="1" required></td>
                    <td><input type="radio" name="std_id[<?= $row->std_id; ?>]" value="0"></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="text-right mt-3">
              <input type="hidden" name="s_id" value="<?= $rssubject->s_id; ?>">
              <input type="hidden" name="teacher_id" value="<?=$rsteacher->teacher_id;?>">
              <button type="submit" class="btn btn-lg btn-success px-4">💾 บันทึก</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- /.content-wrapper -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        event.preventDefault(); // ป้องกันการ submit ทันที

        Swal.fire({
            title: "บันทึกข้อมูล?",
            text: "คุณต้องการบันทึกข้อมูลนี้หรือไม่?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#28a745",
            cancelButtonColor: "#d33",
            confirmButtonText: "บันทึก",
            cancelButtonText: "ยกเลิก"
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // เมื่อกดบันทึกให้ submit form
            }
        });
    });
});
</script>
