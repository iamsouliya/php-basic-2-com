<?php
    session_start();
    if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
        header('location: ../session-basic.php');
        exit();
    }
?>