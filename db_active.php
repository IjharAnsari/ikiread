<?php
    include "db_config.php";
    //include "ikiread.php";
    include "select.php";
    $sql=new Database;
    $db=$sql->connect();

    //for selecting product

    $select=new SELECTSUB($db);
    $select->slt();

?>