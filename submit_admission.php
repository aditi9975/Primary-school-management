<?php
include('includes/dbconnection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $parent_name = $_POST['parent_name'];
    $email = $_POST['email'];
    $student_name = $_POST['student_name'];
    $mobile_no = $_POST['mobile_no'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $admission_for = $_POST['admission_for'];

    try {
        $sql = "INSERT INTO admissions (parent_name, email, student_name, mobile_no, state, address, city, admission_for) 
                VALUES (:parent_name, :email, :student_name, :mobile_no, :state, :address, :city, :admission_for)";
        
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':parent_name', $parent_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':student_name', $student_name);
        $stmt->bindParam(':mobile_no', $mobile_no);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':admission_for', $admission_for);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Error: Could not insert data."]);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
