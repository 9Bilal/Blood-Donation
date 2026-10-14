
<?php 
include 'connect.php';
if(isset($_POST['submit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $blood_group = $_POST["blood_group"];
    $phone_number = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $sql="INSERT INTO `donate_blood` (`name`, `email`, `blood_group`, `phone_number`, 
    `age`, `gender`, `address`) VALUES ('$name', '$email', '$blood_group', '$phone_number',
    '$age', '$gender', '$address');";
    $result=mysqli_query($con,$sql);
    if($result){
       echo " Submit successfully";
      
    }else{
        die(mysqli_error($con));
    }
}



?>



<html>
    <head>
        <title>Donation</title>
        <style>
            .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 700px;
  margin-left: 21%;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
        </style>
    </head>
    <body>
        <div class="container my-5">
        <form method ="post">

<div class="row">
  <div class="col-50">
    <center><h1>Donation</h1></center>
    <label for="fname"><i class="fa fa-user"></i> Full Name:</label>
<input type="text" placeholder="Enter your Full Name" name="name" autocomplete="off" >

<label for="email"><i class="fa fa-envelope"></i> Email:</label>
<input type="text" placeholder="yourname@example.com" name="email" autocomplete="off">

<label for="blood_group"><i class="fa fa-envelope"></i> Blood Group:</label>
<input type="text" placeholder="Enter your Blood Group" name="blood_group" autocomplete="off" >

<label for="phone"><i class="fa fa-Phone"></i> Phone:</label>
<input type="text" placeholder="Enter your Phone Number" name="phone" autocomplete="off" >

<label for="age"><i class="fa fa-calendar"></i> Age:</label>
<input type="text" placeholder="Enter your Age" name="age" autocomplete="off" >

<label for="gender"><i class="fa fa-venus-mars"></i> Gender:</label>
<select name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
</select>

<label for="address"><i class="fa fa-home"></i> Address:</label>
<input type="text" placeholder="Enter your Address" name="address" autocomplete="off" >

    </div>
  </div>
</div>
  

<button type="submit" class="btn" name="submit">Continue </button>
</form>
 </div>
        
      
    </body>
</html>