<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataTables Example</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="content-wrapper">
    <section class="content-header">
      <h1 class="text-success">จัดการข้อมูลนักศึกษาวิชาทหาร</h1>
      <a href="<?php echo base_url('admin_table_insert'); ?>" class="btn btn-success">
        <i class="fas fa-user-plus"></i> เพิ่มข้อมูล
      </a>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card shadow-lg border-0">
          <div class="card-body">
            <table id="example1" class="table table-hover table-striped table-bordered text-center">
              <thead class="bg-success text-white">
                <tr>
                  <th width="5%">No.</th>
                  <th width="30%">ชื่อ-นามสกุล</th>
                  <th width="5%">ชั้นปี</th>
                  <th width="10%">สถานะ</th>
                  <th width="10%">แผนก</th>
                  <th width="10%">ดูประวัติ</th>
                  <th width="5%">แก้ไข</th>
                  <th width="5%">ลบ</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($query as $rs) { ?>
                <tr>
                  <td><?php echo $rs->ar_id; ?></td>
                  <td class="text-left"> <?php echo $rs->ar_name; ?> </td>
                  <td> <?php echo $rs->ar_class; ?> </td>
                  <td> <?php echo $rs->pname; ?> </td>
                  <td> <?php echo $rs->ar_department; ?> </td>
                  <td>
                      <a href="<?php echo base_url('admin/admin_person/' . $rs->ar_id); ?>" class="btn btn-success btn-sm">
                          <i class="fas fa-eye"></i> ดูข้อมูล
                      </a>
                  </td>
                  <td>
                    <a href="<?php echo base_url('admin_edit/') . $rs->ar_id; ?>" class="btn btn-success btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                  </td>
                  <td>
                  <a href="#" class="btn btn-danger btn-sm delete-btn" data-id="<?php echo $rs->ar_id; ?>">
                      <i class="fas fa-trash-alt"></i>
                    </a>

                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
</div>

<script>
  $(document).ready(function () {
    $('#example1').DataTable({
      language: {
        search: "ค้นหา:",
        lengthMenu: "แสดง _MENU_ รายการ",
        info: "แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ",
        paginate: {
          first: "หน้าแรก",
          last: "หน้าสุดท้าย",
          next: "ถัดไป",
          previous: "ก่อนหน้า"
        }
      }
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function () {
  $(".delete-btn").click(function (e) {
    e.preventDefault(); // ป้องกันการโหลดหน้าใหม่

    var deleteUrl = "<?php echo base_url('delete/'); ?>" + $(this).data("id");

    Swal.fire({
      title: "ยืนยันการลบ?",
      text: "คุณต้องการลบข้อมูลนี้หรือไม่?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#d33",
      cancelButtonColor: "#3085d6",
      confirmButtonText: "ลบ",
      cancelButtonText: "ยกเลิก"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = deleteUrl; // ลบข้อมูล
      }
    });
  });
});
</script>





</body>
</html>
