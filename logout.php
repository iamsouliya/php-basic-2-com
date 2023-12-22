<?php
session_start();
// unset username and password only
unset($_SESSION['username']);
unset($_SESSION['password']);
// session_destroy();
header('location: session-basic.php');
exit();
?>