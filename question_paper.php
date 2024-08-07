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
    <h2 class="mb-4">Download Question Papers</h2>

    <!-- Select Program -->
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

    <!-- Select Course -->
    <div class="mb-3">
        <label for="selectCourse" class="form-label">Select Course</label>
        <select id="selectCourse" class="form-select form-control">
            <option selected disabled>Choose a course</option>
            <option value="bsc-computer-science">B.Sc Computer Science</option>
            <option value="bsc-mathematics">B.Sc Mathematics</option>
            <option value="msc-physics">M.Sc Physics</option>
        </select>
    </div>

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

    <!-- Select Year or Semester -->
    <div class="mb-3">
        <label for="selectYear" class="form-label">Select Year</label>
        <select id="selectYear" class="form-select form-control">
            <option selected disabled>Choose a year/semester</option>
            <option value="year-1">1st Year</option>
            <option value="year-2">2nd Year</option>
            <option value="year-3">3rd Year</option>
           
            <!-- Add more options as needed -->
        </select>
    </div>
    

     <!-- Select Semester -->

    <div class="mb-3">
        <label for="selectYear" class="form-label">Select Semester</label>
        <select id="selectYear" class="form-select form-control">
        
            <option value="semester-1">Semester 1</option>
            <option value="semester-2">Semester 2</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    <!-- Download Button -->
    <div class="mt-4">
        <button type="submit" id="downloadQuestionPaper" class="btn btn-icegreen"><i class="fa-solid fa-download"></i> Download</button>
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

