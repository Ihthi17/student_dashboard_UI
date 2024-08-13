<?php
include '../includes/header.php';
include '../includes/navbar.php';
include '../includes/sidebar.php';
?>



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">


<div class="container mt-5">
    <h2 class="mb-4">Check Your Results</h2>

    <!-- Form to enter index number -->
    <form id="resultCheckForm">
        <div class="row">
            <div class="col-md-6">
        <div class="mb-3">
            <label for="indexNumber" class="form-label">Index Number</label>
            <input type="text" id="indexNumber" class="form-control" placeholder="Enter your index number" required>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn-icegreen"><i class="fa fa-check"></i> Check Result</button>
    </form>

    


</div>
<br><br>
       <div class="card">
        <div class="card-header">
           Result List
        </div>
        <div class="card-body">
            <div class="table-responsive">
           <table class="table">
            <thead>
            <tr>
                
                    <th>#</th>
                    <th>Student ID</th>
                    <th>Student Index</th>
                    <th>Program</th>
                    <th>Course</th>
                    <th>Subject</th>
                    <th>Result</th>
                    <th>Action</th>
            </tr>
                </thead>
                <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><button class="btn btn-success"><i class="fa fa-download"></i> Download</button></td>
                    </tr>
                </tbody>
            </tr>
           </table>
             </div>
        </div>
       </div>
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