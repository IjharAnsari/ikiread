<?php
    include "db_config.php";

    $select_uni="SELECT * FROM university";
    $uni_result=mysqli_query($con, $select_uni);
    if($uni_result){
        if(mysqli_num_rows($uni_result)>0){
            while($urows=mysqli_fetch_array($uni_result)){
                echo '<option class="ab" value="'.$urows['uni_id'].'">'.$urows['uni_name'].'</option>';
            }
        }
    }
?>