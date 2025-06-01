<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>เพิ่มข้อมูลนักศึกษา</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Text Editors</li>
          </ol>
        </div>
      </div>
    </div>
  </section>


  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">

          <div class="card-body">
            <div class="card card-primary">


              <form action="<?php echo base_url('admin/adding') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2">ชื่อ-นามสกุล</label>
                    <div class="col-sm-4">
                      <input type="text" name="ar_name" id="ar_name" class="form-control" required placeholder="ใส่ชื่อ-นามสกุล">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label class="col-sm-2">ชั้นปี</label>
                    <div class="col-sm-4">
                      <input type="text" name="ar_class" id="ar_class" class="form-control" required placeholder="ใส่ชั้นปี">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2">สถานะ</label>
                    <div class="col-sm-4">
                      <select name="pid" id="pid" class="form-control" required>
                        <option value="">-- กรุณาเลือกสถานะ --</option>
                        <option value="1">หัวหน้าหมู่</option>
                        <option value="2">หัวหน้าหมวด</option>
                        <option value="3">หัวหน้ากองร้อย</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2">เเผนก</label>
                    <div class="col-sm-4">
                      <input type="text" name="ar_department" id="ar_department" class="form-control" required placeholder="ใส่เเผนก">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-4">

                      <button type="submit" class="btn btn-primary ">เพิ่มข้อมูล</button>
                      <a href="" class="btn btn-danger">ยกเลิก</a>
                    </div>
                  </div>
                </div>
            </div>


          </div>
          </form>
        </div>
      </div>

    </div>
</div>

</div>

</section>

</div>