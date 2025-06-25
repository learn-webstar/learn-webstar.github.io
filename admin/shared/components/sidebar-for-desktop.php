<div class="col-auto d-none d-md-block">
    <div class="row">
        <!-- Sidebar -->
        <div class="card border-0 sidebar mx-2 p-2" style="width: 220px;">
            <!-- Logo -->
            <div class="d-flex justify-content-center">
                <img src="shared/assets/img/webstar-logo-blue.png" class="img-fluid pt-5 pb-5 px-3" width="180px;">
            </div>

            <!-- Navigation -->
            <ul class="nav flex-column">

                <li
                    class="nav-item my-1 d-flex align-items-center gap-2 m-3 my-1 p-2 rounded-3 <?php echo ($activePage == 'dashboard') ? 'selected-box' : ''; ?>">
                    <img src="shared/assets/img/dashboard<?php echo ($activePage == 'dashboard') ? '-w' : ''; ?>.png" class="img-fluid" style="width: 30px; height: 30px;">
                    <a class="nav-link text-dark p-0 <?php echo ($activePage == 'dashboard') ? 'selected' : ''; ?>"
                        href="index.php">Dashboard</a>
                </li>

                <li
                    class="nav-item my-1 d-flex align-items-center gap-2 m-3 my-1 p-2 rounded-3 <?php echo ($activePage == 'course') ? 'selected-box' : ''; ?>">
                    <img src="shared/assets/img/courses<?php echo ($activePage == 'course') ? '-w' : ''; ?>.png" class="img-fluid" style="width: 30px; height: 30px;">
                    <a class="nav-link text-dark p-0 <?php echo ($activePage == 'course') ? 'selected' : ''; ?>"
                        href="course.php">Courses</a>
                </li>

                <li
                    class="nav-item my-1 d-flex align-items-center gap-2 m-3 my-1 p-2 rounded-3 <?php echo ($activePage == 'feedback') ? 'selected-box' : ''; ?>">
                    <img src="shared/assets/img/explore<?php echo ($activePage == 'feedback') ? '-w' : ''; ?>.png" class="img-fluid" style="width: 30px; height: 30px;">
                    <a class="nav-link text-dark p-0 <?php echo ($activePage == 'feedback') ? 'selected' : ''; ?>"
                        href="feedback.php">Feedback</a>
                </li>

                <li
                    class="nav-item my-1 d-flex align-items-center gap-2 m-3 my-1 p-2 rounded-3 <?php echo ($activePage == 'list') ? 'selected-box' : ''; ?>">
                    <img src="shared/assets/img/view_list<?php echo ($activePage == 'list') ? '-w' : ''; ?>.png" class="img-fluid" style="width: 30px; height: 30px;">
                    <a class="nav-link text-dark p-0 <?php echo ($activePage == 'list') ? 'selected' : ''; ?>"
                        href="userslist.php">Users List</a>
                </li>
            </ul>


            <div class="dropdown mt-auto p-4" style="font-family: var(--Bold); letter-spacing: -1px;">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-dark"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/181800261?s=96&v=4" alt="" width="32" height="32"
                        class="rounded-circle me-2">
                    <strong class="text-dark">james</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-end text-small shadow">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="login.php">Sign out</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>