<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <main>
        <?php
        echo "<table border='1'>";
        for ($i = 0; $i < 10; $i++) {
            # code...
            echo "<tr>";
            for ($j = 0; $j < 10; $j++) {
                # code...
                echo "<td>test</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </main>
</body>

</html>