<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="home.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <link href="style.css" rel="stylesheet">
  <!-- Corrected link for Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">


  <title>Home</title>
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
              <a class="nav-link active" aria-current="page" href="#contactForm">Contact Us</a>
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
   
  <div>
    <div id="img1">

    </div>
    <br>
    <h1 class="fon">Fun Creates learning</h1>


    <hr>

    <div class="cards ">
      <div class="card-box" style="background-color:#e06263;">
        <br>
        <h3>SPEAK-O-KIT</h3>
        Speak-o-kit, more commonly known as, a set of talking books & talking pen is a
        learning tool which was introduced for the very first time by Nalanda. It aims to inculcate self
        reliance, self learning & greater retention power amongst students. It is 100% mapped with the school
        curriculum.
      </div>
      <div class="card-box" style="background-color:#794f37;">
        <br>
        <h3>ROBOTIME</h3>
       <p>Robotics develops critical thinking & moreover it's a favorite activity for kids at Nalanda.
        It polishes a child's thinking skills & parents are sure to observe how brilliantly
        their child learns to assemble blocks in the Robotime Kit. Level wise kits are specialized as
        per child's learning needs.</p>
      </div>
      <div class="card-box" style="background-color:#e06263;">
        <br>
        <h3>SMART CLASSES</h3>
        Smart Classes are must for new age education wherein children should know how to understand concepts
        through learning tools. It is important that a teacher portrays the academic content on-screen which w
        ill awaken all their senses to domains of new learning experience.
      </div>
      <div class="card-box" style="background-color:#794f37;">
        <h3>VIRTUAL REALITY</h3>
        At Nalanda, children under the age group of 2 to 5 years learn through live examples, virtually.
        This is enchanting indeed! Traveling to places sitting in a classroom is possible with the VR head gears.
        The 3D viewing & the practicality associated to theoretical places make concepts easy to understand.
      </div>
    </div>
    <h1 class="fon">Nalanda Play School</h1>
    <hr>
    <!-- End of cards -->
   
    <div>
     <div class="wrapper">
      <img id="img2" src="https://st.depositphotos.com/1000137/2646/i/450/depositphotos_26460023-stock-photo-group-of-cute-little-prescool.jpg">
      <div class="text-box">

      <p><br> Starting from 2004, Nalanda has completed almost 19 years of successful
        years in education segment and have over 1200 operating play schools across India.
        From Kashmir in the north to Kanyakumari in the south Nalanda have established branches
        in Nepal and Bangladesh. Nalanda: A place where eminence in learning is felt. The amazing
        part of this kind of learning is that this power and fun in learning is felt both by parents and the kids.
        They foresee a Nalanda which is not just in learning numbers and alphabets but far beyond that.
        Technology which has seeped deep in the Nalandaites is a gift which will be cherished for long.
        Why not moms and dads wouldn’t want to join a preschool and live childhood, THE Nalanda WAY!</p>
      </div>
     </div>
    </div>
  </div>
  <br>
  <br>
       <!-- satrting of flip cards -->
    <div class="card2">
      <br>
      <h2 style="text-align: center; color: aliceblue;">Nalanda Play School Value Chain</h2>
      <br>
      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQJjRpDcJODf1RwLGrqi4oAoGngK9DFw6kR0J18sM_kkxHccJZr">
          Health Checkup
         </div>
         <div class="flip-card-back">
          We organize regular health check-up camps for providing a 
          healthy playschool environment to the little ones.
         </div>
        </div>
      </div>


      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP-EymLZHiaDMv_NRc2HZdUFl8yJzV5VtTc6t1lWD5hEE0MFjm">
          Montessori toys
         </div>
         <div class="flip-card-back">
          Our curriculum includes learning through Montessori toys, 
          to develop the fine motor skills in a child.
         </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRL69qcOra5LLVW4D-X3BUKdG_5ldhCkqVfER6mTLpO8A27m4Oq">
          MOdular furniture
         </div>
         <div class="flip-card-back">
          Use of German-enabled technology helps us to create the masterpieces of modular
           furniture for our preschools.
         </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR7q4LOotSWZJMVb_mER7Ugt2rAlPOWUQHG9hK0of1g-rc5dCKh">
          PLay Way Methods
         </div>
         <div class="flip-card-back">
          We focus on developing a child holistically using play-way methods and do not enforce
           learning through books only.
         </div>
        </div>
      </div>
          <br>
      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQwnNJKsyPrsTO3ktJ_6x-EEmN0ljXcoieAv3AGTrFKNCEF79x2">
         After School Fun
         </div>
         <div class="flip-card-back">
          Our programs such as Saturday Club and Activity Junction helps in engaging children in the
           after-school liveliness.
         </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://www.svgrepo.com/show/416996/clean-hand-handwashing.svg">
          prioritizing Hygiene
         </div>
         <div class="flip-card-back">
          We worship the place of learning and thus, maintaining hygiene around the school is always on our priority list.
         </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://img.freepik.com/premium-vector/toy-blocks-children-isolated-flat-vector-illustration_687327-564.jpg?w=740">
          Teaching Aids
         </div>
         <div class="flip-card-back">
          Our specialized teaching aids help in imparting the lessons with efficiency and 
          effectiveness for better retention.
         </div>
        </div>
      </div>

      <div class="flip-container">
        <div class="flip-card">
         <div class="flip-card-front">
          <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR8eND1TvyV8jeZD7v_V0sVi-Fvf-P7GGg3LOkhNTurBQ8wkwtD">
        Nalanda Academy
         </div>
         <div class="flip-card-back">
          Nalanda Academy is running NTT courses for teachers looking forward 
           joining tiny tots by profession.
         </div>
        </div>
      </div>
      
    </div>
 

    <!-- end of flipcards -->
    <?php include_once('contact_form.php');?>


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
