<style>
.active-dark {
    background-color: #343a40 !important; 
    color: #f8f9fa !important;
    border-radius: 50%;
}



/* Optional: Hover effect */
.active-dark:hover {
    background-color: #fff !important; /* Slightly darker background on hover */
    color: #343a40 !important; /* Pure white text on hover */
}

</style>


<!-- Main Sidebar Container -->
  <aside style="background: #c70039;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assests/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block text-light">user Name</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">
    <a href="index.php" class="nav-link active-dark">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-graduate text-light"></i>
              <p class="text-light">
               Student
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="c_password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              
              
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap text-light"></i>
              <p class="text-light">
               Academic
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="course.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="subject.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="exam_schedule.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Exam Schedule</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="result_check.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Result Check</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="class_schedule.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Schedule</p>
                </a>
              </li>
               
              <li class="nav-item">
                <a href="attandence_view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attandance View</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assignment_view.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assignment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments text-light"></i>
              <p class="text-light">
                Communication
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="notice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Announcement</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="discussion_board.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Discussion Board</p>
                </a>
              </li>
              
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit text-light"></i>
              <p class="text-light">
                Resources 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="study_materials.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Study material </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="question_paper.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Question papers </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="e_books.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E books</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-line text-light"></i>
              <p class="text-light">
               Activities
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="carriculam_activities.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cariculam Activities </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="event_calander.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event calendar</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-gear text-light"></i>
              <p class="text-light">
               Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="support_help.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support & Help</p>
                </a>
              </li>
             </ul>
          </li>
          </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>