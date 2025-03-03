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
    <div>
        <div id="img1">
            <h1 class="fon" style="color: aliceblue; font-size: 100px;text-align:center;">
                Parents<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Support</h1>
        </div>
        <br>

        <!-- cards -->
        <!-- satrting of flip cards -->
        <div class="card2">
            <br>
            <h2 style="text-align: center; color: aliceblue;"> Value Chain</h2>
            <br>
            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQJjRpDcJODf1RwLGrqi4oAoGngK9DFw6kR0J18sM_kkxHccJZr">
                        High Priority for safety
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        Safety is our prime concern and we ensure that every flower in our garden blossoms beautifully
                        without any worries.
                    </div>
                </div>
            </div>


            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP-EymLZHiaDMv_NRc2HZdUFl8yJzV5VtTc6t1lWD5hEE0MFjm">
                        Parents Control
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        We indulge parents in the daily activities as well as school functions
                        to make them inch closer to their child. It makes our little toddlers feel better.
                    </div>
                </div>
            </div>

            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRL69qcOra5LLVW4D-X3BUKdG_5ldhCkqVfER6mTLpO8A27m4Oq">
                        Tech Savvy Pupils
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        We nourish technology with the right approach to help children excel in the technical friendly
                        surroundings at such a tender age.
                    </div>
                </div>
            </div>

            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcR7q4LOotSWZJMVb_mER7Ugt2rAlPOWUQHG9hK0of1g-rc5dCKh">
                        Friendship
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        We provide the first friend to your child that is, a teacher to help him/her connect and share
                        their
                        views openly with everyone.
                    </div>
                </div>
            </div>
            <br>
            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQwnNJKsyPrsTO3ktJ_6x-EEmN0ljXcoieAv3AGTrFKNCEF79x2">
                        understanding Responsibility
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        We help a child in taking small responsibilities such as packing bags, collecting stuff, keeping
                        toys
                        in place to help them sense their duties from time to time
                    </div>
                </div>
            </div>

            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img src="https://www.svgrepo.com/show/416996/clean-hand-handwashing.svg">
                        Home Work
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        We provide homework task to children to recall all that has been
                        done in the classroom and revisit the learning of the day.
                    </div>
                </div>
            </div>

            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://img.freepik.com/premium-vector/toy-blocks-children-isolated-flat-vector-illustration_687327-564.jpg?w=740">
                        Class
                    </div>
                    <div class="flip-card-back" style="padding:30px;">
                        The Classwork targets on learning rather than writing or reading.
                        This helps a child to understand the content before penning it down.
                    </div>
                </div>
            </div>

            <div class="flip-container">
                <div class="flip-card">
                    <div class="flip-card-front">
                        <img
                            src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR8eND1TvyV8jeZD7v_V0sVi-Fvf-P7GGg3LOkhNTurBQ8wkwtD">
                        Nutrition Snack at school
                    </div>
                    <div class="flip-card-back" style="padding: 30px;">
                        Snacks provided in our school satisfies the nutritional content required by a child's body.
                        We make it tasty, fun and yet healthy in every manner.
                    </div>
                </div>
            </div>

        </div>
        <!-- end of flipcards -->
        <br>
        <h1 class="fon">What Do’s & Dont’s for Child Development</h1><br>
        <div class="image">
            <div class="image-overlay">
                <br>
                <div class="toggle-box">
                    <div class="toggle-header">
                        <h2>Heading</h2>
                        <button class="toggle-btn">+</button>
                    </div>
                    <div class="toggle-content">
                        <p>This is the content that will be toggled.</p>
                    </div>
                </div>

                <br>
                <div class="toggle-box">
                    <div class="toggle-header">
                        <h2>Heading</h2>
                        <button class="toggle-btn">+</button>
                    </div>
                    <div class="toggle-content">
                        <p>This is the content that will be toggled.</p>
                    </div>
                </div>

                <br>
                <div class="toggle-box">
                    <div class="toggle-header">
                        <h2>Heading</h2>
                        <button class="toggle-btn">+</button>
                    </div>
                    <div class="toggle-content">
                        <p>This is the content that will be toggled.</p>
                    </div>
                </div>


            </div>

        </div>
        <hr>
        <!-- end of dos and donts -->

        <h1 class="fon" style="color:lawngreen;">Parents Review</h1>
        <br>
        <div class="container">
            <div class="row">
                <div class="review-box">
                    <h1><i class="bi bi-person-circle icon1"></i> Namita Moma</h1>
                    <div class="review-content">
                        <p>&ldquo;My twin daughters have completed their preschooling from this school and are excited
                            to go
                            ahead with their studies. They’ve gained a lot of things from this platform. Both of my
                            girls constantly
                            keep talking to everyone about their preschool. I personally recommend this school to every
                            preschooler’s mum.&rdquor;</p>
                    </div>
                </div>
                <br>
                <div class="review-box">
                    <h1><i class="bi bi-person-circle icon1"></i> Shivani Jain</h1>
                    <div class="review-content">
                        <p>&ldquo;My toddler was very fussy about the idea of going to Kindergarten. It’s just been a
                            month that I’ve enrolled
                            him in Nalanda preschool, and now he is enthusiastically engaged in every activity and
                            program followed in school.
                            I am very glad to see this change in him. Thanks to Nalanda Montessori.&rdquor;</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="review-box">
                    <h1><i class="bi bi-person-circle icon1"></i> Tanya Mehta</h1>
                    <div class="review-content">
                        <p>&ldquo;I had a really fruitful experience by enrolling three of my kids in such a warm and
                            loving environment.
                            It is the sole hard work and sheer determination of the makers and the mentors that they’re
                            constantly upgrading
                            the learning pattern for Montessori kids. Wishing Nalanda preschool a continuous
                            success.&rdquor;</p>
                    </div>
                </div>
                <br>
                <div class="review-box">
                    <h1><i class="bi bi-person-circle icon1"></i> Ramdas Gupta</h1>
                    <div class="review-content">
                        <p>&ldquo;It’s really amazing to know that this preschool is using the latest technology in such
                            a productive manner
                            and making our kids learn in the best way possible. We are glad that our kids are using
                            technology in the right
                            manner at such a young age. Good luck to the play school!&rdquor;</p>
                    </div>
                </div>
                <br>
                <div class="review-box">

                    <h1><i class="bi bi-person-circle icon1"></i> Write Your Review</h1>

                    <div class="review-content">
                        <textarea placeholder="Write your review..."></textarea>
                    </div>
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


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const toggleBtn = document.querySelector('.toggle-btn');
                const toggleContent = document.querySelector('.toggle-content');

                toggleBtn.addEventListener('click', function () {
                    toggleContent.classList.toggle('active');
                    if (toggleBtn.textContent === '+') {
                        toggleBtn.textContent = '-';
                    } else {
                        toggleBtn.textContent = '+';
                    }
                });
            });

        </script>
</body>

</html>