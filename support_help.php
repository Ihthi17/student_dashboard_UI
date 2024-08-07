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
    <h2 class="mb-4">Support & Help</h2>
    
    
    
    <!-- Contact Support Form -->
    <h4>Contact Support</h4>
    <form>
        <div class="mb-3">
            <label for="supportEmail" class="form-label">Your Email Address</label>
            <input type="email" class="form-control" id="supportEmail" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="supportMessage" class="form-label">Your Message</label>
            <textarea class="form-control" id="supportMessage" rows="4" placeholder="Describe your issue or question" required></textarea>
        </div>
        <button type="submit" class="btn btn-icegreen"> <i class="fa-regular fa-paper-plane"></i> Send Message</button>
    </form>

    <!-- Additional Resources -->
    <div class="mt-4">
        <h4>Additional Resources</h4>
        <ul class="list-group">
            <li class="list-group-item"><a href="#">Help Center</a></li>
            <li class="list-group-item"><a href="#">User Guide</a></li>
            <li class="list-group-item"><a href="#">Contact Admin</a></li>
        </ul>
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