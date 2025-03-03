<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="parents.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    <!-- Corrected link for Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <title>Parents</title>
</head>

<body>
<nav class="navbar navbar-expand-lg nav1">
    <div class="container-fluid">
      <h3 class="fon" style="color:white"> Nalanda</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li>
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="About.php">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Admission.php">Admission</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="parents.php">Parents</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="gallary.php">Gallery</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php#contactForm">Contact Us</a>
          </li>
          <!-- Login Button to Open Modal -->
          <li class="nav-item">
            <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
              <h6><i class="bi bi-person-circle"></i> Login</h6>
            </a>
          </li>
      </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap Modal for Login Selection -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Select Login Type</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          <p>Please select whether you want to log in as an Admin or User.</p>
          <a href="admin/login.php" class="btn btn-primary w-100 mb-2">Admin Login</a>
          <a href="user/login.php" class="btn btn-success w-100">User Login</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (if not included already) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- end of nav -->
    <div class="gallary1">
        Gallary<br>
        <img src="https://png.pngtree.com/png-vector/20220724/ourmid/pngtree-teacher-and-kids-with-gadgets-png-image_6062994.png"
            alt="">

    </div>
    <!-- gallary -->
    <h1 class="fon">Glimpse of our functions</h1>
    <div class="gallery" id="gallery">
        <!-- Add a placeholder div for each image -->
        <div class="placeholder"></div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const gallery = document.getElementById('gallery');
            const numImages = 17; // Number of images to display

            for (let i = 1; i <= numImages; i++) {
                const img = document.createElement('img');
                img.src = `images/img${i}.jpeg`; // Replace with the path to your images
                gallery.appendChild(img);
            }
        });

    </script>

    <!-- footer -->
    <div class="footer">
        <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
        <a href="https://www.twitter.com/"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a>
        <p>&copy; 2024 NALANDA Play School. All rights reserved.</p>
    </div>
</body>

</html>