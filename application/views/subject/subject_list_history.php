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


  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link text-center">
    <img src="../../img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
  </a>


  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="../../img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
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
  <!-- Content Header -->
  <section class="content-header text-center">
    <h1>ประวัติการเช็คชื่อการเข้ากิจกรรม</h1>
    <!-- <h4><i class="fa fa-user"></i> สวัสดีอาจารย์<?= $rsteacher->teacher_name; ?></h4> -->
  </section>

  <section class="content">
    <div class="d-flex justify-content-center">
      <div class="col-md-10">
        <div class="card shadow-lg">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">📚 วันเดือนปีที่มีการเช็คชื่อ</h4>
          </div>
          <div class="card-body">
            <div class="d-flex justify-content-end">
              <!-- <a class="btn btn-success mb-3" href="<?php echo base_url('admin/addSubjectForm'); ?>">
                <i class="fa fa-fw fa-plus-circle"></i> เพิ่มข้อมูล
              </a> -->
            </div>
            <div class="table-responsive">
              <table id="subjectTable" class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                  <tr>
                    <th>ว/ด/ป</th>
                    <th>ดูข้อมูล</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($rsdate as $row) { ?>
                    <tr>
                      <td><?= date('d/m/Y', strtotime($row->check_in_date)); ?></td>
                      <td><a href="<?php echo base_url('subject/checketailBydate/' . $row->check_in_date . '/' . $row->ref_s_id); ?>" target="_blank">ดูข้อมูล</a></td>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
  $(document).ready(function() {
    $('#subjectTable').DataTable({
      "paging": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "responsive": true,
      "language": {
        "lengthMenu": "แสดง _MENU_ รายการต่อหน้า",
        "zeroRecords": "ไม่พบข้อมูล",
        "info": "แสดงหน้า _PAGE_ จาก _PAGES_",
        "infoEmpty": "ไม่มีข้อมูล",
        "infoFiltered": "(กรองจากทั้งหมด _MAX_ รายการ)",
        "search": "ค้นหา:",
        "paginate": {
          "next": "ถัดไป",
          "previous": "ก่อนหน้า"
        }
      }
    });
  });
</script>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>