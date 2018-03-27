<?php

    include "db_config.php";
    $queId=$_REQUEST['qId'];
    $queId=mysqli_real_escape_string($con,$queId);

    $select_que="SELECT * FROM question WHERE chap_id='$queId'";

    //querying result
    $que_result=mysqli_query($con, $select_que);
    if($que_result){
        if(mysqli_num_rows($que_result)>0){
            while($qrows=mysqli_fetch_array($que_result)){
                echo '<div class="questions_card">
                    <div class="question">
                        <p>'.$qrows['questions'].'</p>        
                    </div>
                    <div class="question_down_icon">
                        <p>More&nbsp;
                            <i class="fa fa-angle-double-right"></i>
                        </p>
                                    
                    </div>
                </div>';
            }
        }
    }
    
?>