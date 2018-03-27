<?php
    session_start();
?>
<?php
    include "db_config.php";
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $email=mysqli_real_escape_string($con,$email);
    $pass=mysqli_real_escape_string($con,$pass);
    $pass=md5($pass);
    echo $email;
    echo $pass;
    $fname1="";
    $login_select="SELECT * FROM user WHERE email='$email' and pass='$pass'";
    $login_result=mysqli_query($con, $login_select);
    if($login_result===false){
        
                echo "user doesn't exist";   
                //$fname1=$rows['fname'];
            
    }else{
            $count=mysqli_num_rows($login_result);
            if($count==1){
                while($rows=mysqli_fetch_array($login_result)){
                    $_SESSION['fname']=$rows['fname'];
                    $_SESSION['uni']=$rows['uni_id'];
                }
                header("location:ikiread.php");
            }else{
                echo "user doesn't exist";
            }
        }
?>