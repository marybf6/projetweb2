<?php


    if(session_id() == '') {
        session_start();
    }
    if(isset($_SESSION['email'])){
        $s = true;
    }else{
        session_destroy();
        header('location:index.php');
    }
?>