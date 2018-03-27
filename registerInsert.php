
<?php
    include "db_config.php";
    //securing first name
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $university=$_POST['university'];
    $fname=mysqli_real_escape_string($con,$fname);
    $lname=mysqli_real_escape_string($con,$lname);
    $email=mysqli_real_escape_string($con,$email);
    $pass=mysqli_real_escape_string($con,$pass);
    $pass=md5($pass);
    $university=mysqli_real_escape_string($con,$university);
    
    /*$tbl_name='user';*/
    
    //insert data into user table

    $insert_user="INSERT INTO user (fname,lname,email,pass,uni_id) VALUES('$fname','$lname','$email','$pass','$university')";
    $insert_result=mysqli_query($con,$insert_user);
    if($insert_result===false){
        echo "Insertion is successful".mysqli_error();
    }else{
        echo "Insertion is failed";
    }
    mysqli_close($con);
    
?>
