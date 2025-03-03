<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center">
        <a class="navbar-brand brand-logo" href="dashboard.php">
            <strong style="color: white;">SMS</strong>
        </a>
    </div>

    <?php
    $uid = $_SESSION['sturecmsuid'];
    $sql = "SELECT StudentName, StudentEmail, Image FROM tblstudent WHERE ID=:uid";
    $query = $dbh->prepare($sql);
    $query->bindParam(':uid', $uid, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);

    // Check if profile image exists, otherwise use default
    if (!empty($result->Image) && file_exists("../admin/images/" . $result->Image)) {
        $profilePic = "../admin/images/" . $result->Image;
    } else {
        $profilePic = "images/faces/face8.jpg"; // Default image
    }
    ?>

    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
        <h5 class="mb-0 font-weight-medium d-none d-lg-flex">
            <?php echo htmlentities($result->StudentName); ?> Welcome to dashboard!
        </h5>
        <ul class="navbar-nav navbar-nav-right ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle ml-2" src="<?php echo htmlentities($profilePic); ?>" alt="Profile image">
                    <span class="font-weight-normal"><?php echo htmlentities($result->StudentName); ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <!-- Ensure the profile image is displayed properly -->
                        <img class="img-fluid rounded-circle mb-2" style="width: 80px; height: 80px; object-fit: cover;" 
                             src="<?php echo htmlentities($profilePic); ?>" alt="Profile image">
                        <p class="mb-1 mt-3"><?php echo htmlentities($result->StudentName); ?></p>
                        <p class="font-weight-light text-muted mb-0"><?php echo htmlentities($result->StudentEmail); ?></p>
                    </div>
                    <a class="dropdown-item" href="student-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                    <a class="dropdown-item" href="change-password.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Change Password</a>
                    <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
