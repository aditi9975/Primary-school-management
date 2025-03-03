<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admission.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    <!-- Corrected link for Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


    <title>About</title>
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
    <div class="about1">
        About us<br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJWamsFTrlVW93IyJK-zSm4sSscsQ2wAVGqoTw_Jc-e9a7qFfyGUkiSKowa57VNqkKEk&usqp=CAU"
            alt="">
        <!-- <img src="https://cdn1.vectorstock.com/i/1000x1000/10/35/teachers-group-portrait-isolated-man-and-woman-vector-27671035.jpg" alt=""> -->
    </div>
    <div class="about2">
        Welcome to Nalanda, where young minds blossom and futures are nurtured!<br><br>

        At Nalanda, we believe in fostering a love for learning that lasts a lifetime.
        Our primary school is a vibrant community where each child is celebrated for their unique talents and abilities.
        With a dedicated team of educators and staff, we strive to create a supportive environment where students feel
        valued, challenged, and inspired to reach their full potential.<br><br>

        Our curriculum is carefully designed to provide a well-rounded education that encompasses not only
        academic excellence but also personal growth, creativity, and social development.
        Through engaging lessons, hands-on activities, and enriching experiences, we aim to ignite curiosity, spark
        imagination, and instill a lifelong passion for learning.<br><br>

        We understand the importance of individualized attention and small class sizes, allowing our experienced
        teachers to tailor their instruction
        to meet the diverse needs of every student. Whether it's exploring the wonders of science, delving into the
        world of literature, or discovering
        new talents in the arts, each child is encouraged to explore, discover, and grow in a safe and nurturing
        environment.<br><br>

        Beyond the classroom, we offer a wide range of extracurricular activities, clubs, and events that complement our
        academic program and provide
        students with opportunities to explore their interests, develop new skills, and build lasting
        friendships.<br><br>

        At Nalanda, we are more than just a school; we are a community committed to empowering young learners to become
        compassionate, confident, and responsible individuals who will make a positive difference in the world. We
        invite you to
        join us on this exciting journey of discovery and learning!<br>
    </div>

    </div>

    <div class="about3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSARhxS4SVMLOzrOyf5jia13HlER-awuBMTRrBNl8ril8QDCuVWSprJtb43kDnonzczvjo&usqp=CAU"
            alt="">
        <div>
            <h3 class="fon">Class Room</h3>
            A classroom is one of the important parts of the school, as most of the learning happens here. In the
            classroom, little toddlers sing rhymes, narrate stories, play fun activities, use speak-o-pen, etc. with
            their teachers.
        </div>
        <img src="https://www.amity.edu/ais/aisv1/assets/images/2017-18/infrastructure/classrooms/aisv1_0010.jpg"
            alt="">
    </div>

    <!-- section cards -->
    <div class="about4">
        <div>
            <h4>Baby show</h4>
            <img src="https://www.Bachpanglobal.com/wp-content/uploads/2019/07/annual-function-ni.jpg" alt=""><br><br>
            <p>Baby Show is an open event that invites the participation of all the babies from
                the age group of 0-3 years. The little babies showcase their best of talents in the baby s
                how and get exciting prizes. The baby show is organized to connect the outside world with
                Nalandaites and foster a relationship with for a brighter future ahead.</p>
        </div>
        <div>
            <h4>Annual Function</h4>
            <img src="https://www.Bachpanglobal.com/wp-content/uploads/2019/07/baby-show-ni.jpg" alt=""><br><br>
            <p>Annual Function is a rejuvenating activity for our young toddlers, their parents, and teachers.
                Every school under our shelter organizes an annual event following the themes provided by the
                registered office. Annual function involves the participation of all the toddlers in one or the
                other way in order to portray the talent of the young kids</p>
        </div>
        <div>
            <h4>Spoarts Day</h4>
            <img src="https://www.Bachpanglobal.com/wp-content/uploads/2019/07/sports-day2-ni.jpg" alt=""><br><br>
            <p>Developing the skills that matter is what we focus on
                during the learning years of our Nalandaites. Nalanda organizes
                sports day to connect children with the physical activities, its importance, and fun to uphold
                various games. Sports day also includes the involvement of parents along with their kids to help
                them cherish a good bond together.</p>
        </div>
        <div>
            <h4>Outdoor Visit</h4>
            <img src="https://www.Bachpanglobal.com/wp-content/uploads/2019/07/out-door1-ni.jpg" alt=""><br><br>
            <p>Taking children out for a visit, excursion or picnic are an integral part of Nalanda learning.
                We arrange for visits to parks, gardens, museums, monuments etc. to help children learn from the outer
                environment and start recognizing things. Also, to instill a feeling of brotherhood, there are small
                visits arranged to nearby places of worship.</p>
        </div>
    </div>

    <!-- map section -->
    <div class="about5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6434.3689225111675!2d77.3163625978273!3d19.17973320107546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd1d6fbe138ad81%3A0x9e88bbe86ec52250!2z4KSP4KSuLuCknOClgC7gpI_gpK4uIOCkheCkreCkv-Ckr-CkvuCkguCkpOCljeCksOCkv-CkleClgCDgpK7gpLngpL7gpLXgpL_gpKbgpY3gpK_gpL7gpLLgpK8!5e0!3m2!1smr!2sin!4v1696595406558!5m2!1smr!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
    </div><br>

    <!-- section 6 boxes -->
    <div class="about6">
        <div id="outer1">
            <div class="box" id="box1">
                <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>FOR COMPLAINS</h3><br>
                <p>CALL:9811437000<br>
                    franchise@NAlandaglobal.com</p>
            </div>
        </div>

        <div id="outer2">
        <div class="box" id="box2">
            <div class="icon"><i class="fas fa-paint-brush"></i></div>
            <h3>FOR ADMISSION</h3><br>
                <p>CALL:7290047000<br>
                    admissions@Nalanda.com</p>
        </div>
    </div>

    <div id="outer3">
        <div class="box" id="box3">
            <div class="icon"><i class="fas fa-music"></i></div>
            <h3>CONTACT US</h3><br>
            <p>CALL:011-35106666/7777<br>
                response@Nalanda.com</p>
        </div>
    </div>

    <div id="outer4">
        <div class="box" id="box4">
            <div class="icon"><i class="fas fa-futbol"></i></div>
            <h3>OUR LOCATION</h3><br>
                <p>9988/B-1,S.K<br>
                     Tower,Sarai Rohilla New Rohtak Rd,Nanded-11078</p>
        </div>
    </div>

    </div>

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