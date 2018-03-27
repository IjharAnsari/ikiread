<?php
    $SERVER='localhost';
    $USER='root';
    $PASS='';
    $DB='ikiread';

    $con=mysqli_connect("$SERVER", "$USER", "$PASS", "$DB");
    If($con===false){
        die("Error in connecting to databases");
    }
?>