
<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
  <style>
        #calendar {
            margin: 20px auto;
            max-width: 90%;
            background-color: #ffffff;
            border-radius: 6px;
            box-shadow: 0 1px 2px #c3c3c3;

        }


/* announcement */

.announcements-bar {
  display: flex;
  background: #0190d0;
  background-image: linear-gradient(to right, #0190d0 10%, #009cde);
  font-size: 18pt;
  color: #fff;
  height: 50px;
}
.announcements-header {
  display: flex;
  justify-content: space-between;
  padding-top: 10px;
  padding-left: 20px;
  width: 100%;
}
.announcements-img {
  background-image: url("https://i.ibb.co/CWCMMyV/Announcements.png");
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  background-size: cover;
  width: 26px;
  height: 46px;
}
.announcements-icon {
  padding-right: 20px;
}
.announcements-body {
  border: 1px solid #ddd;
  color: #4a4a4a;
  background: #f8f8f8;
  font-size: 14px;
  font-weight: 500;
}
.announcements-list li {
  padding: 10px;
}
.announcements-list li:not(:last-child) {
  border-bottom: 1px solid #ddd;
}
.announcements-list .readmore {
  text-align: right;
}

    </style>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <div class="container mt-5">
    <!-- Dashboard Header -->


    <!-- Student Status, Upcoming Events, and Announcements -->
    <div class="row">
        <!-- Student Status -->
        <div class="col-md-6 mb-6">

                    <div class="card">
    <div class="card-header">
      <h3 class="card-title">Student Status</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>

      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="chart-responsive">
            <canvas id="pieChart" height="150"></canvas>
          </div>
          <!-- ./chart-responsive -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <ul class="chart-legend clearfix">
            <li><i class="far fa-circle text-danger"></i> Chrome</li>
            <li><i class="far fa-circle text-success"></i> IE</li>
            <li><i class="far fa-circle text-warning"></i> FireFox</li>
            <li><i class="far fa-circle text-info"></i> Safari</li>
            <li><i class="far fa-circle text-primary"></i> Opera</li>
            <li><i class="far fa-circle text-secondary"></i> Navigator</li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer p-0">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link">
            United States of America
            <span class="float-right text-danger">
              <i class="fas fa-arrow-down text-sm"></i> 12%</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            India
            <span class="float-right text-success">
              <i class="fas fa-arrow-up text-sm"></i> 4%
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            China
            <span class="float-right text-warning">
              <i class="fas fa-arrow-left text-sm"></i> 0%
            </span>
          </a>
        </li>
      </ul>
    </div>
    <!-- /.footer -->
  </div>
</div>
        <!-- Announcements -->
        <div class="col-md-6 mb-6">
            
                   <div class="announcements">
  <div class="announcements-bar">
    <div class="announcements-img"></div>
    <div class="announcements-header">
      <div class="announcements-title">Announcements</div>
      <div class="announcements-icon"><span class="glyphicon glyphicon glyphicon-bullhorn" aria-hidden="true"></span></div>
    </div>
  </div>
  <div class="announcements-body">
    <ul class="announcements-list list-unstyled">
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li><a href="#">Scheduled WestKM Maintenance</a></li>
      <li class="readmore"><a href="#">&gt;&gt;Read More Announcements...</a></li>
    </ul>
  </div>
</div>
                </div>
            </div>
       

        <!-- Events -->
<div class="row">
        <div class="col-md-12 mb-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                   Upcoming Events
                </div>
                <div class="card-body">
                        <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/script.php' ?>
 <!-- Script to initialize the pie chart -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Chrome', 'IE', 'FireFox', 'Safari', 'Opera', 'Navigator'],
                datasets: [{
                    data: [40, 20, 10, 15, 10, 5],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>
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