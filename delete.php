<?php

include 'admin.php';
if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql = "delete form `donate_blood` where id=  $id";
    $result=mysqli_query($con,$sql);
    if($result){
     //echo "Deleted successfully";
     header('location:campaign.php');
    }else{
        die(mysqli_error($con));
    }
    

}


?>