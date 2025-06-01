<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin </title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="../plugins/fullcalendar/main.css">

  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">



</head>
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: rgb(101, 222, 101);">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link text-white">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link text-white">Contact</a>
    </li>
  </ul>


  <ul class="navbar-nav ml-auto">




    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>


  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <a href="index3.html" class="brand-link text-center">
    <img src="../img/logo-bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">ระบบจัดการกิจกรรม รด.</span>
  </a>


  <div class="sidebar">

    <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
      <div class="image">
        <img src="../img/logo-bg.png" class="img-circle elevation-2" alt="User Image">
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
            <i class="nav-icon fa fa-user-circle"></i>
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
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>เพิ่มข้อมูลกิจกรรม</h1>
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


              <form action="<?php echo base_url('admin/addingSubject') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2">ชื่อกิจกรรม</label>
                    <div class="col-sm-4">
                      <input type="text" name="s_name" id="s_name" class="form-control" required placeholder="ใส่ชื่อกิจกรรม">
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
<!-- /.content-wrapper -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->


<script>
  $(function() {

    $('#summernote').summernote()



  })
</script>
<!-- fullCalendar 2.2.5 -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/fullcalendar/main.js"></script>
<script>
  $(function() {


    function ini_events(ele) {
      ele.each(function() {


        var eventObject = {
          title: $.trim($(this).text())
        }

        $(this).data('eventObject', eventObject)


        $(this).draggable({
          zIndex: 1070,
          revert: true,
          revertDuration: 0
        })

      })
    }

    ini_events($('#external-events div.external-event'))


    var date = new Date()
    var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendar.Draggable;

    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');



    new Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
          backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
          borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
          textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
        };
      }
    });

    var calendar = new Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      themeSystem: 'bootstrap',

      events: [{
          title: 'All Day Event',
          start: new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor: '#f56954', //red
          allDay: true
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor: '#f39c12' //yellow
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          backgroundColor: '#0073b7', //Blue
          borderColor: '#0073b7' //Blue
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor: '#00c0ef' //Info (aqua)
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor: '#00a65a' //Success (green)
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'https://www.google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor: '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable: true,
      droppable: true,
      drop: function(info) {

        if (checkbox.checked) {

          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();



    var currColor = '#3c8dbc'

    $('#color-chooser > li > a').click(function(e) {
      e.preventDefault()

      currColor = $(this).css('color')

      $('#add-new-event').css({
        'background-color': currColor,
        'border-color': currColor
      })
    })
    $('#add-new-event').click(function(e) {
      e.preventDefault()

      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }


      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color': currColor,
        'color': '#fff'
      }).addClass('external-event')
      event.text(val)
      $('#external-events').prepend(event)


      ini_events(event)


      $('#new-event').val('')
    })
  })
</script>

<script src="dist/js/adminlte.js"></script>

<script src="dist/js/pages/dashboard.js"></script>


<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>