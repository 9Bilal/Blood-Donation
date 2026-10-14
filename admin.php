<head>
        <title>admin</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
</head>
<body>

<div class="container">
        <button class="btn btn-primary my-5">
            <a href="campaign.html" class="text-light">                
            Add User</a></button>
    </div>
    
    <table class="table">


  <thead>
    <tr>

      <th scope="col">Ful_Name</th>
      <th scope="col">Email</th>
      <th scope="col">Blood Group</th>
       <th scope="col">Phone</th> 
      <th scope="col">age</th>
      <th scope="col">gender</th>
      <th scope="col">address</th>
      
    </tr>
  </thead>
  <tbody>


  
  <?php   
  
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bank";

// Create connection
$conn = mysqli_connect( $servername , $username , $password , $database);

  $sql="SELECT * FROM `donate_blood`";
  $result=mysqli_query($conn, $sql);
  if($result){
   while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    $blood_group=$row['blood_group'];
    // $phone_number=$row['Phone_number'];
    $age=$row['age'];
    $gender=$row['gender'];
    $address=$row['address'];
    echo ' <tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$blood_group.'</td>
    
    <td>'.$age.'</td>
    <td>'.$gender.'</td>
    <td>'.$address.'</td>
    <td>
    
    
    <button class="btn btn-primary"><a href="update.php " class="text-light">Udate</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid= '.$id.' " class="text-light">Delete</a></button>
    </td>
    </tr>';


    
   }
  }
  ?>

</body>
   
</html>