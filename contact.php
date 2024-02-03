<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "userContactinfo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['usermessage'];

$sql = "INSERT INTO contactForm (fullname, email, usermessage) VALUES ('$fullname', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
