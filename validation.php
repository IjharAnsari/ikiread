<?php
    $email=$_GET['email'];
    include "db_config.php";
    
    $select="SELECT * FROM user WHERE email='$email'";
    $result=mysqli_query($con, $select);
    if($result){
        if(mysqli_num_rows($result)>0){
            $msg="User already exists";
        }else{
            $msg="";
        }
    }
   echo($msg);
?>