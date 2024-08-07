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
                    <i class="fas fa-tasks"></i> Assignments
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Assignment Title</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Math Homework</td>
                                <td>August 10, 2024</td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-sm btn-success"><i class="fas fa-upload"></i> Submit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Science Project</td>
                                <td>August 15, 2024</td>
                                <td><span class="badge badge-danger">Overdue</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-sm btn-success"><i class="fas fa-upload"></i> Submit</a>
                                </td>
                            </tr>
                            <tr>
                                <td>History Essay</td>
                                <td>August 20, 2024</td>
                                <td><span class="badge badge-success">Submitted</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> View</a>
                                    <a href="#" class="btn btn-sm btn-secondary disabled"><i class="fas fa-upload"></i> Submit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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