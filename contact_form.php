<?php
include('includes/dbconnection.php');

if (!isset($dbh)) {
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_form (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: Could not insert data."]);
    }
}
?>
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

</head>
<body>
<div class="container">
<div class="card3">
  <div class="card-box3">
    <h1>About Nalanda Play School</h1>
    <p>Nalanda play school instils a spirit of joy and fervour in children for learning new things and outshine in the 
    competitive world. Being one of the most renowned nursery schools, Nalanda has all that a growing toddler needs
    to complete his early education!</p>
    <ul>
      <li> Unique teaching methodologies</li>
      <li>Technical pre school curriculum</li>
      <li>Fosters holistic development</li>
      <li> Creative in-house pedagogy</li>
    </ul>
    <br><br>
    <div>
      <ul>
        <li> Apply for admission</li>
        <li>Admission process</li>
        <li>Admission FAQ</li>
        <li> Programs</li>
        <li>About us</li>
        <li>Contact us</li>
        <li>Careers</li>
       
      </ul>
    </div>
  </div>

  <div class="card-box3">
    <h1>Contact Form</h1>
    <form id="contactForm">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br><br>

<label for="phone">Phone:</label>
<input type="tel" id="phone" name="phone"><br><br>

<label for="message">Message:</label>
<textarea id="message" name="message" required></textarea><br><br>

<input type="submit" value="Send Message">
</form>

<!-- Success message box -->
<div id="successMessage" style="display: none; background: green; color: white; padding: 10px; text-align: center; margin-top: 10px;">
Message sent successfully!
</div>

  </div>
</div>

</div>
</body>
</html>

