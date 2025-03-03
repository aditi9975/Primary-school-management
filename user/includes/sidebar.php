<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
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
                    <img class="img-xs rounded-circle" src="<?php echo htmlentities($profilePic); ?>" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name"><?php echo htmlentities($result->StudentName); ?></p>
                    <p class="designation"><?php echo htmlentities($result->StudentEmail); ?></p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="view-notice.php">
                <span class="menu-title">View Notice</span>
                <i class="icon-doc menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="homework.php">
                <span class="menu-title">View Homework</span>
                <i class="icon-book-open menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
