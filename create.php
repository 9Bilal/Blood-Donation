<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "John Doe";
$email = "john@example.com";
$bloodGroup = "O+";
$phoneNumber = "123-456-7890";
$age = 30;
$address = "123 Main St, City";
$gender = "Male";

$sql = "INSERT INTO donate_blood (name, email, blood_group, phone_number, age, address, gender) VALUES ('$name', '$email', '$bloodGroup', '$phoneNumber', $age, '$address', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>