<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link text-center">
        <img src="img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
    </a>


    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
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
                    <a href="<?php echo base_url(); ?>Email_controller/home" class="nav-link">
                        <i class="nav-icon far fa-edit"></i>
                        <p>ขออนุญัติ</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>calendar" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>ปฏิทินกิจกรรม</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="<?php echo base_url();?>spin_random" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>สุ่มกิจกรรม</p>
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
                        <p>เซ็คกิจกรรม</p>
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