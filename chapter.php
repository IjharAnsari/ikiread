<?php
    $chap="SELECT * FROM chapter where sub_id='$sub_id'";
    $chap_result=mysqli_query($con, $chap);
    if($chap_result){
        if(mysqli_num_rows($chap_result)>0){
            echo "<ul>";
            while($chap_rows=mysqli_fetch_array($chap_result)){
                echo'<li>
                     '.$chap_rows['chap_name'].'
                </li>';
            }
            echo "</ul>";
        }
    }
    
?>