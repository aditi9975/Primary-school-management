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


  <title>Admission</title>
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
    
    </div>
    <br>
    <h1 class="fon">Apply for Admission</h1>

    <br>
<form action="submit_admission.php" method="post" id="admission">
  <h2>Admission Inquiry Form</h2>

  <div class="form-grid">
    <div class="col">
      <label for="parent_name"></label>
      <input type="text" id="parent_name" name="parent_name" required placeholder="Parent's Name">
    </div>
    <div class="col">
      <label for="email"></label>
      <input type="email" id="email" name="email" required placeholder="Email ID">
    </div>
    <div class="col">
      <label for="student_name"></label>
      <input type="text" id="student_name" name="student_name" required  placeholder="Student's Name">
    </div>
    <div class="col">
      <label for="mobile_no"></label>
      <input type="tel" id="mobile_no" name="mobile_no" pattern="[0-9]{10}" required placeholder="Mobile Number">
    </div>
    <div class="col">
      <label for="state"></label>
      <input type="text" id="state" name="state" required placeholder="State">
    </div>
    <div class="col">
      <label for="address"></label>
      <textarea id="address" name="address" rows="4" required placeholder="Address"></textarea>

    </div>
    <div class="col">
      <label for="city"></label>
      <input type="text" id="city" name="city" required placeholder="City:">
    </div>
    <div class="col">
      <label for="admission_for"></label>
      <select id="admission_for" name="admission_for" required>
        <option value="LKG">LKG</option>
        <option value="UKG">UKG</option>
        <option value="Nursery">Nursery</option>
      </select>
    </div>
  </div>
  <input type="submit" value="Submit" style="width: 150px; padding: 8px;height: 40px;">
</form>
<div id="successMessage" class="alert alert-success mt-3" style="display: none;">Admission inquiry submitted successfully!</div>
</div>
    <hr>
  </div>
  

  <div class="card1">
    <br>
    <h2>Make your children’s life special by enrolling them<br>
      in our Nalanda Play School</h2>
  </div>

  <div class="card2">
    <div class="card-text">
      <p>
        Nalanda provides a safe & nurturing environment for your children. 
        This is very essential to tap their latest potential and bring them to the fore. 
        Children are not like empty bins to be stuffed with information. 
        They are like soft sponges and we enable them to develop an explorative and curious bent of mind to absorb 
        meaningful knowledge and become well-adjusted, inquisitive, perceptive, bright and interactive children,
        ready for formal schooling. At Nalanda, we just kindle the spark of curiosity in the already bright child
        that yours is so that he/she sparkles forever in future.
      </p>
    </div>
    <div class="circles-container">
      <div class="row">
        <div class="circle" id="circle1">Develop <br>Social Skills<br><h1><i class="bi bi-person-fill"></i></h1></div>
        <div class="circle" id="circle2">Respect For<br> others<br><h1><i class="bi bi-book"></i></h1></div>
        <div class="circle" id="circle3">Emotional Skills<br><h1><i class="bi bi-pencil"></i></h1></div>
      </div>
      <div class="row">
        <div class="circle" id="circle4">Language <br>Proficiency<br><h1><i class="bi bi-trophy"></i></h1></div>
        <div class="circle" id="circle5">Group Activities<br><h1><i class="bi bi-shield"></i></h1></div>
        <div class="circle" id="circle6">Mentorship<br><h1><i class="bi bi-file-bar-graph"></h1></i></div>
      </div>
    </div>
  </div>
<br><hr>
  <!-- Section 3 Admission process -->
  <div class="card3">
 <h2> Admission Process at Nalanda Play School</h2>
  <br>
  <p>
    Nalanda is an open platform for every kid to grow, nurture and prosper in the cycle of life. Childhood is the most crucial stage for every human, and this fact makes it very important to stroke the mind of a kid in the right direction in various aspects of life.<br><br>

    Nalanda provides a safe and nurturing environment for your children. This is very essential to tap their latest potential and bring them to the fore. 
    Children are like soft sponges and we enable them to develop an explorative and curious bent to absorb meaningful knowledge and become well -adjusted, inquisitive, perceptive, bright and interactive children, ready for formal schooling.<br><br>
    
    At Nalanda, we kindle the spark of curiosity in the already bright child that is yours is so that he/she sparkles forever in future.
     Nalanda playschool is always connected to the idea that childhood is a time for kids to prosper in the recreational skills and develop a search behavior to dwell into different streams. 
     Our preschool platform provides an open arena for children to indulge in the recreational activities by doing things on their own.<br><br>
    
    In our playschool, we are not only providing a technology-based learning but also blending the western culture with the Indian values system. This promotes the feeling of modernity along with strengthening the connection of children to their native roots.<br><br>
    
    We portray a visual form of learning that is easy to grasp and retain at every level. All the programs under our umbrella are provided using best of technical equipment and a memorable learning experience.<br>
  </p>
  
  <i>“We promise to cherish your little flower with a happy school going experience with every visit. “</i>
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
    const circles = document.querySelectorAll('.circle');

circles.forEach(circle => {
  circle.addEventListener('click', () => {
    circle.classList.toggle('clicked');
  });
});

  </script>


<script>
document.getElementById("admission").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form from submitting the default way

    var formData = new FormData(this);

    fetch("submit_admission.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) 
    .then(data => {
        if (data.status === "success") {
            // Show success message
            var successMessage = document.getElementById("successMessage");
            successMessage.style.display = "block";
            
            // Hide message after 3 seconds
            setTimeout(() => {
                successMessage.style.display = "none";
            }, 3000);

            // Clear the form fields
            document.getElementById("contactForm").reset();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
</script>
</body>
</html>