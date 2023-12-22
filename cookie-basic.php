<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>
        hello world
    </h1>
    <?php
        setcookie('name', 'value 1000', time() + 60, '/');
        if (isset($_COOKIE['name'])){
            echo $_COOKIE['name'];
        }
    ?>
</body>
</html>