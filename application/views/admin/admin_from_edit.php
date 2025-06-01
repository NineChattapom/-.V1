<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- sweet alert -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 
    



</head>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <img src="../img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="../img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
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


<div class="container-fluid">
    <hr class="m-0">
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary shadow-lg rounded-4">
                <div class="card-header bg-gradient-primary text-white text-center py-3 rounded-top-4">
                    <h4 class="mb-0">เเก้ไขข้อมูลนักเรียน</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('admin/editdata') ?>" method="post" class="form-horizontal">

                        <div class="form-group row">
                            <label for="ar_name" class="col-sm-3 col-form-label font-weight-bold text-primary">
                                ชื่อ-นามสกุล:
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="ar_name" name="ar_name" required class="form-control border-primary rounded-pill" placeholder="Enter name" value="<?php echo $rsedit->ar_name; ?>">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="ar_class" class="col-sm-3 col-form-label font-weight-bold text-primary">
                                ชั้นปี:
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="ar_class" name="ar_class" required class="form-control border-primary rounded-pill" placeholder="Enter class year" value="<?php echo $rsedit->ar_class; ?>">
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="pid" class="col-sm-3 col-form-label font-weight-bold text-primary">
                                สถานะ:
                            </label>
                            <div class="col-sm-9">
                                <select id="pid" name="pid" required class="form-control border-primary rounded-pill">
                                    <option value="">-- กรุณาเลือกสถานะ --</option>
                                    <option value="1" <?php echo ($rsedit->pid == '1') ? 'selected' : ''; ?>>หัวหน้าหมู่</option>
                                    <option value="2" <?php echo ($rsedit->pid == '2') ? 'selected' : ''; ?>>หัวหน้าหมวด</option>
                                    <option value="3" <?php echo ($rsedit->pid == '3') ? 'selected' : ''; ?>>หัวหน้ากองร้อย</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="ar_department" class="col-sm-3 col-form-label font-weight-bold text-primary">
                                เเผนก:
                            </label>
                            <div class="col-sm-9">
                                <input type="text" id="ar_department" name="ar_department" required class="form-control border-primary rounded-pill" placeholder="Enter department" value="<?php echo $rsedit->ar_department; ?>">
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <div class="col-sm-9 offset-sm-3 text-center">
                                <input type="hidden" name="ar_id" value="<?php echo $rsedit->ar_id; ?>">
                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                    <i class="fas fa-save"></i> Save
                                </button>
                                <a href="<?php echo base_url(); ?>" class="btn btn-secondary rounded-pill px-4">
                                    <i class="fas fa-arrow-left"></i> Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
<!-- SweetAlert2 -->
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

</html>