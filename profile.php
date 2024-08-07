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
        <div class="card-header">
            Student Profile
        </div>
        <div class="card-body">
            <form id="profileForm">
                <div class="form-group row">
                    <label for="studentName" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="studentName" value="John Doe" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studentEmail" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="studentEmail" value="john.doe@example.com" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studentPhone" class="col-sm-2 col-form-label">Phone:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="studentPhone" value="123-456-7890" readonly>
                    </div>
                </div>
                <button type="button" class="btn btn-primary" id="editBtn">Edit</button>
                <button type="button" class="btn btn-success d-none" id="saveBtn">Save</button>
                <button type="button" class="btn btn-secondary d-none" id="cancelBtn">Cancel</button>
            </form>
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

<script>
    $(document).ready(function() {
        $('#editBtn').on('click', function() {
            // Enable form fields for editing
            $('#profileForm input').prop('readonly', false);
            // Show save and cancel buttons, hide edit button
            $('#editBtn').addClass('d-none');
            $('#saveBtn').removeClass('d-none');
            $('#cancelBtn').removeClass('d-none');
        });

        $('#saveBtn').on('click', function() {
            // Normally, here you'd save the data to the server via AJAX
            alert('Changes saved!');
            // Disable form fields and reset buttons
            $('#profileForm input').prop('readonly', true);
            $('#editBtn').removeClass('d-none');
            $('#saveBtn').addClass('d-none');
            $('#cancelBtn').addClass('d-none');
        });

        $('#cancelBtn').on('click', function() {
            // Reset form fields to original values
            $('#profileForm')[0].reset();
            // Disable form fields and reset buttons
            $('#profileForm input').prop('readonly', true);
            $('#editBtn').removeClass('d-none');
            $('#saveBtn').addClass('d-none');
            $('#cancelBtn').addClass('d-none');
        });
    });
</script>
