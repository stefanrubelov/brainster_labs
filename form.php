<?php 

$full_name = $_POST['full_name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$telephone_number = $_POST['telephone_number'];
$type_of_student = $_POST['type_of_student'];

if(!empty($full_name) || !empty($company_name) || !empty($email) || !empty($telephone_number) || !empty($type_of_student)) {

    $host = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'Brainster_Project01';
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    } else
        $SELECT = "SELECT email FROM main WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO main (full_name, company_name, email, telephone_number, type_of_student) VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssii", $full_name, $company_name, $email, $telephone_number, $type_of_student);
        $stmt->execute();
        
        readfile("requestSuccess.php");
        
        $stmt->close();
        $conn->close();
} else {
    echo "All fields are required!";
    die();
}
