<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $x = 100;
        $d = getdate();
        echo "$x <br>";
        ?>

        <?php
        echo "$x <br>";
        ?>

        <?php
        print_r(date("y-M-D, h, H, s, T"));
        echo "<br>";
        echo $d['mday']."/";
        echo $d['mon']."/";
        echo $d['year'];
        ?>
    </div>
</body>

</html>