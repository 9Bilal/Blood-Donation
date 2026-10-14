<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `donate_blood` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Ful_Name'];
$email=$row['Email'];
$blood_group=$row['Blood_Group'];
$phone=$row['Phone'];
$age=$row['Age'];
$gender=$row['Gender'];
$address=$row['Address'];

if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $blood_group = $_POST["blood_group"];
    $phone_number = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $sql="UPDATE `donate_blood` SET Ful_Name='$name',Email='$email',blood_group='$blood_group',
    phone_number='phone_number',age='$age',gender='$gender' ,address='$address' WHERE id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
       
       header('location:admin.php');
    }else{
        die(mysqli_error($con));
    }
}



?>

        
      
    </body>
</html>