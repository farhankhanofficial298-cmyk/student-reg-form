<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "student_db1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name   = $_POST['name'] ?? '';
    $email  = $_POST['email'] ?? '';
    $course = $_POST['course'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $dob = $_POST['dob'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';


    if (!empty($name) && !empty($email) && !empty($course) && !empty($gender) && !empty($dob)  && !empty($phone)  && !empty($address)         ) {
        $sql = "INSERT INTO students (name, email, course, gender, dob, phone, address)
        VALUES ('$name', '$email', '$course', '$gender', '$dob', '$phone', '$address')";


        if ($conn->query($sql) === TRUE) {
            echo "New student registered successfully! <br>";
            echo "<a href='view.php'>View Students</a>";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Please fill all fields!";
    }
}

$conn->close();
?>