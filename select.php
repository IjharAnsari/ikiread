<?php
    session_start();
?>
<?php
//including necessary files
include "db_config.php";
include "chapter.php";
$uni_id=$_SESSION['uni'];
$select="SELECT * FROM subject WHERE uni_id='$uni_id'";
$result=mysqli_query($con,$select);
if($result){
    if(mysqli_num_rows($result)>0){
        while($rows=mysqli_fetch_array($result)){
            $sub_id=$rows['sub_id'];
            $sId="_".$sub_id;
            $sIId="_".$sub_id."".$sub_id;
            echo '<div class="sub_head _head_color">
                <div id="'.$sId.'"class="heading">
                    <h4>'.$rows['sub_name'].'</h4>
                            
                    <span class="arrow_dwn">
                        <i class="material-icons" style="font-size: 30px; color:#666;">arrow_drop_down</i>
                    </span>
                </div>';
                echo '<div id="'.$sIId. '"class="inside_sub_head">';
                    $slt="SELECT * FROM chapter where sub_id='$sub_id'";
                
                    $chap_result=mysqli_query($con,$slt);
                    if($chap_result){
                        if(mysqli_num_rows($chap_result)>0){
                           echo '<ul>'; while($rws=mysqli_fetch_array($chap_result)){
                               $chap_id=$rws['chap_id'];
                               $cId=$sId."".$chap_id;
                                echo'<li id="'.$cId.'">'.' '.$rws['chap_name'].'
                                </li>';    
                            }
                            echo '</ul>'; 
                        }
                    }
                echo'</div>';
            echo'</div>';
            
        }
    }
}

?>

