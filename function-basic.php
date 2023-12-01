<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental function in php</title>
</head>

<body>
    <main>
        <?php

        // function that no have argument
        function writeMsg()
        {
            echo "<div>Hello World without params</div>";
        }


        // function that has argument with default
        function greeting($text = "Hello World!")
        {
            echo "<div>$text</div>";
        }

        // function that has argument
        function greeting2($text)
        {
            echo "<div>$text</div>";
        }

        writeMsg();
        greeting();
        greeting2("Hello");
        ?>
    </main>
</body>

</html>