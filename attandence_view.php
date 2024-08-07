<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

<div class="card">
        <div class="card-header bg-primary text-white">
            Attendance Summary
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024-08-01</td>
                            <td>Mathematics</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <tr>
                            <td>2024-08-01</td>
                            <td>English</td>
                            <td><span class="badge badge-danger">Absent</span></td>
                        </tr>
                        <tr>
                            <td>2024-08-02</td>
                            <td>Physics</td>
                            <td><span class="badge badge-success">Present</span></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header bg-success text-white">
            Attendance Statistics
        </div>
        <div class="card-body">
            <p><strong>Total Classes Attended:</strong> 18</p>
            <p><strong>Total Classes Missed:</strong> 2</p>
            <p><strong>Attendance Percentage:</strong> 90%</p>
        </div>
    </div>

</div>


    </div>
  </div>



  <?php include 'includes/footer.php';?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/script.php' ?>