
<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>

  
 

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
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    Student Status
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Enrolled Courses: 5</li>
                        <li class="list-group-item">Current GPA: 3.8</li>
                        <li class="list-group-item">Attendance: 95%</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Upcoming Events
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Orientation: Aug 15, 2024</li>
                        <li class="list-group-item">Midterm Exams: Sep 10-15, 2024</li>
                        <li class="list-group-item">Sports Day: Oct 5, 2024</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Announcements -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    Announcements
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">New Library Timings</li>
                        <li class="list-group-item">Submission Deadline Extended</li>
                        <li class="list-group-item">Annual Tech Fest Registration Open</li>
                    </ul>
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
