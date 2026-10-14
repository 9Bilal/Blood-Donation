<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, blood_group, phone_number, age, address, gender FROM donate_blood "; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Blood Group: " . $row["blood_group"] . "<br>";
        echo "Phone Number: " . $row["phone_number"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "Gender: " . $row["gender"] . "<br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>