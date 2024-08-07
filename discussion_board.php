<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/sidebar.php';
?>
<style>
        .discussion-board {
            margin-top: 20px;
        }
        .discussion-post {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            padding: 15px;
            background-color: #f9f9f9;
        }
        .post-header {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .post-body {
            margin-bottom: 10px;
        }
        .post-footer {
            font-size: 0.9em;
            color: #555;
        }
        .reply-box {
            margin-top: 20px;
        }
    </style>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">


<div class="container">
    <h2 class="text-center my-4">Discussion Board</h2>
    
    <div class="discussion-board">
        <!-- Discussion Post Example -->
        <div class="discussion-post">
            <div class="post-header">
                <span>Posted by John Doe</span> - <span>Subject: Midterm Exams</span>
            </div>
            <div class="post-body">
                I wanted to ask if anyone has any tips for studying for the upcoming midterms. Also, what are the most important topics to focus on?
            </div>
            <div class="post-footer">
                Posted on August 5, 2024 - <i class="fas fa-reply"></i> Reply
            </div>
        </div>

        <div class="discussion-post">
            <div class="post-header">
                <span>Posted by Jane Smith</span> - <span>Subject: Group Project</span>
            </div>
            <div class="post-body">
                Has anyone decided on a topic for the group project? Let's discuss potential ideas here so we can finalize it soon.
            </div>
            <div class="post-footer">
                Posted on August 4, 2024 - <i class="fas fa-reply"></i> Reply
            </div>
        </div>
    </div>

    <!-- Reply Box -->
    <div class="reply-box">
        <h4>Post a New Discussion</h4>
        <form>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Discussion</button>
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