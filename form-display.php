<?php
if (isset($_POST['sm'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // echo $username . ' ' . $password;
        echo "<div>Username: $username</div>";
        echo "<div>Password: $password</div>";
    }
}
