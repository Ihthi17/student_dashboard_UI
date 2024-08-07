<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>

   


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">

<div class="container mt-5">
    <h2 class="mb-4">Download Study Materials</h2>
           <table class="table">
    <!-- Select Program -->
     <tr>
        <td>
            <form action="">
    <div class="mb-3">
        <label for="selectProgram" class="form-label">Select Program</label>
        <select id="selectProgram" class="form-select form-control">
            <option selected disabled>Choose a program</option>
            <option value="undergraduate">Undergraduate</option>
            <option value="postgraduate">Postgraduate</option>
            <option value="diploma">Diploma</option>
        </select>
    </div>
      </td>
     </tr>
     <tr>
        <td>
    <!-- Select Course -->
    <div class="mb-3">
        <label for="selectCourse" class="form-label">Select Course</label>
        <select id="selectCourse" class="form-select form-control">
            <option selected disabled>Choose a course</option>
            <option value="bsc-computer-science">B.Sc Computer Science</option>
            <option value="bsc-mathematics">B.Sc Mathematics</option>
            <option value="msc-physics">M.Sc Physics</option>
            <!-- Add more courses as needed -->
        </select>
    </div>
         </td>
     </tr>
     <tr>
        <td>
    <!-- Select Subject -->
    <div class="mb-3">
        <label for="selectSubject" class="form-label">Select Subject</label>
        <select id="selectSubject" class="form-select form-control">
            <option selected disabled>Choose a subject</option>
            <option value="algebra">Algebra</option>
            <option value="mechanics">Mechanics</option>
            <option value="organic-chemistry">Organic Chemistry</option>
            <!-- Add more subjects as needed -->
        </select>
    </div>
             </td>
     </tr>
           </table>
    <!-- Download Button -->
    <div class="mt-4">
        <button type="submit" id="downloadMaterial" class="btn btn-icegreen"><i class="fa-solid fa-download"></i> Download</button>
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

