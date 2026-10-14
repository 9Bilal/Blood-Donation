<?php
    // connect to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "bank";

  // Create connection
  $conn = mysqli_connect( $servername , $username , $password , $database);
  if(!$conn)
  {
    die("Couldn't connect.");
  }

  if(isset($_POST["donate"]))
  {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $blood_group = $_POST["blood-group"];
    $phone_number = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $sql = "INSERT INTO `donate_blood` (`name`, `email`, `blood_group`, `phone_number`, 
           `age`, `gender`, `address`) VALUES ('$name', '$email', '$blood_group', '$phone_number',
           '$age', '$gender', '$address');";
    $result = mysqli_query($conn , $sql);

    if($result)
    {
      echo "Your data is saved successfully..";
    }
    else
    {
      echo "An error occured while saving data, try again...";
    }

  }

?>