<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$addressLine1 = $_POST['addressLine1'];
$addressLine2 = $_POST['addressLine2'];
$city = $_POST['city'];
$state = $_POST['state'];

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO register (first_name, last_name, email, phone_number, dob, gender, address_line_1, address_line_2, city, state)
VALUES ('$firstName', '$lastName', '$email', '$phoneNumber', '$dob', '$gender', '$addressLine1', '$addressLine2', '$city', '$state')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
