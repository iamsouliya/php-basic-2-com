<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition and loop</title>
</head>

<body>
    <form method="GET">
        <label for="score">
            <span>Score:</span>
            <input type="text" name="<?php echo "name" ?>" id="score">
        </label>
        <button type="submit">Grading</button>
        <hr>
    </form>
    <?php
    if (@$_GET["score"] != "") {
        @$scr = $_GET["score"];
        if ($scr > 100) echo "Please check your score again";
        elseif ($scr > 90) {
            echo "A";
        } elseif ($scr > 80) {
            echo "B+";
        } elseif ($scr > 70) {
            echo "B";
        } elseif ($scr > 60) {
            echo "C+";
        } elseif ($scr > 50) {
            echo "C";
        } elseif ($scr > 40) {
            echo "D";
        } elseif ($scr > 30) {
            echo "D+";
        } else {
            echo "F";
        }
    }
    ?>
    <!-- foreach -->
    <div>
    <?php
        $a = array(1, 2, 3, 4, 5, 6);
        foreach($a as $idx => $value){
            echo $idx." => ". $value."<br>";
        }
    ?>
    </div>
</body>

</html>