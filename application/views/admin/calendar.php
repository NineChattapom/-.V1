<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="plugins/fullcalendar/main.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<style>
  body.dark-mode {
  background-color: #1e1e2f !important;
  color: #f0f0f0;
}

body.dark-mode .card {
  background-color: #2c2c3e;
  color: #fff;
}

body.dark-mode .external-event {
  color: #fff !important;
}

body.dark-mode .form-control,
body.dark-mode .form-check-label {
  background-color: #444;
  color: #fff;
}

body.dark-mode .btn-primary {
  background-color: #375a7f;
  border-color: #375a7f;
}
</style>
</head>
<div class="text-right p-2">
  <button id="toggle-theme" class="btn btn-secondary btn-sm">
    <i class="fas fa-adjust"></i> เปลี่ยนธีม
  </button>
</div>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">

              </div>
            </div>
          </div>

          <div class="col-md-7">
            <div class="card card-primary">
              <div class="card-body p-0">

                <div id="calendar"></div>
                <div id="external-events">
                  <div class="external-event bg-success">เทคนิคคอมพิวเตอร์</div>
                  <div class="external-event bg-warning">ช่างไฟฟ้า</div>
                  <div class="external-event bg-info">ช่างกล</div>
                  <div class="external-event bg-primary">ช่างก่อสร้าง</div>
                  <div class="external-event bg-danger">ช่างสำรวจ</div>
                  <div class="external-event bg-primary">ช่างสถาปัตยกรรม</div>
                  <div class="external-event bg-success">ช่างยนต์</div>
                  <div class="checkbox">
                    <label for="drop-remove">
                      <input type="checkbox" id="drop-remove">
                      remove after drop
                    </label>
                  </div>
                </div>
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                  <ul class="fc-color-picker" id="color-chooser">
                    <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                    <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                  </ul>
                </div>
                <div class="modal fade" id="viewEventModal" tabindex="-1" role="dialog" aria-labelledby="viewEventModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewEventModalLabel">รายละเอียดกิจกรรม</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 id="viewEventTitle"></h5>
        <p><strong>วันที่:</strong> <span id="viewEventDate"></span></p>
        <p><strong>รายละเอียด:</strong> <span id="viewEventDescription"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>
                <div class="input-group">
                  <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                  <div class="input-group-append">
                    <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                  </div>

                </div>
                
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>

  </div>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery UI -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- fullCalendar 2.2.5 -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/fullcalendar/main.js"></script>

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
        locale: 'th',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        themeSystem: 'bootstrap',
        events: [{
            
            
            backgroundColor: '#f56954',
            borderColor: '#f56954',
            allDay: true
          },

        ],
        editable: true,
        droppable: true,
        drop: function(info) {
          if (checkbox.checked) {
            info.draggedEl.parentNode.removeChild(info.draggedEl);
          }
        },
      eventClick: function(info) {
  $('#viewEventTitle').text(info.event.title);
  $('#viewEventDate').text(moment(info.event.start).format('YYYY-MM-DD HH:mm'));
  $('#viewEventDescription').text(info.event.extendedProps.description || 'ไม่มีรายละเอียด');
  $('#viewEventModal').modal('show');
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
  <script>
    // ตรวจสอบธีมที่เคยเลือกไว้
if (localStorage.getItem('theme') === 'dark') {
  document.body.classList.add('dark-mode');
}

$('#toggle-theme').click(function () {
  $('body').toggleClass('dark-mode');

  // เก็บค่าธีมไว้ใน localStorage
  if ($('body').hasClass('dark-mode')) {
    localStorage.setItem('theme', 'dark');
  } else {
    localStorage.setItem('theme', 'light');
  }
});

  </script>
</body>

</html>