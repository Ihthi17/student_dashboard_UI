<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>
<style>
     #calendar {
            margin: 20px auto;
            max-width: 90%;
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 1px 2px #c3c3c3;

        }
</style>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

 <div class="container mt-5">
    <h2 class="mb-4">Events Calander</h2>
       <div id="calendar"></div>


    </div>
  </div>



  <?php include '../includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include '../includes/script.php' ?>

<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: false,
            events: [
                {
                    title: 'All Day Event',
                    start: '2024-08-01'
                },
                {
                    title: 'Long Event',
                    start: '2024-08-07',
                    end: '2024-08-10'
                },
                {
                    title: 'Conference',
                    start: '2024-08-11',
                    end: '2024-08-13'
                },
                {
                    title: 'Meeting',
                    start: '2024-08-12T10:30:00',
                    end: '2024-08-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2024-08-12T12:00:00'
                }
            ]
        });
    });
</script>