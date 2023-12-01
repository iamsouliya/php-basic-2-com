<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework by 02 Souliya Thammavong</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        button {
            width: 50px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            /* 10 columns with equal width */
            gap: 5px;

        }

        .child {
            border: 1px solid #ddd;
            /* Border for each grid item */
            padding: 10px;
            /* Padding for better visibility */
            text-align: center;
            /* Center-align content */
        }
    </style>
</head>

<body>
    <main>

        <div id="homework1">
            <h3>Homework 1</h3>
            <form method="GET">
                <label for="long">
                    Long:
                    <input type="number" name="long" id="long" step=".01" min="0" max="999999" />
                </label>
                <label for="width">
                    Width:
                    <input type="number" name="width" id="width" step=".01" min="0" max="999999" />
                </label>
                <button type="submit">go</button>
            </form>
            <div>
                <?php
                if (@$_GET["long"] > 0 && $_GET["width"]) {
                    @$l = $_GET["long"];
                    @$w = $_GET["width"];
                    $result;
                    if ($l > 0 && $w > 0) {
                        $result = (float)$l * (float)$w;
                        echo "<span>Area of square is: $result</span>";
                    } else {
                        echo "Please input all field";
                    }
                }
                ?>
            </div>
        </div>
        <hr>
        <div id="homework2">
            <h3>Homework 2</h3>
            <form method="GET">
                <label for="x-value">
                    x:
                    <input type="number" name="x-value" id="x-value" step=".01" min="0" max="999999" />
                </label>
                <label for="y-value">
                    y:
                    <input type="number" name="y-value" id="y-value" step=".01" min="0" max="999999" />
                </label>
                <button type="submit">go</button>
            </form>
            <div>
                <?php
                if (@$_GET["x-value"] > 0 && $_GET["y-value"]) {
                    @$x = $_GET["x-value"];
                    @$y = $_GET["y-value"];
                    $res;
                    if ($x > 0 && $y > 0) {
                        if ($x > $y) {
                            $res = (float)$x - (float)$y;
                            echo "<span>Result: $res</span>";
                        } else {
                            $res = (float)$x + (float)$y;
                            echo "<span>Result: $res</span>";
                        }
                    } else {
                        echo "Please input all field";
                    }
                }
                ?>
            </div>
        </div>
        <hr>
        <div id="homework3">
            <h3>Homework 3</h3>
            <form method="GET">
                <label for="a">
                    a:
                    <input type="number" name="a" id="a" min="-999999" max="999999" />
                </label>
                <label for="b">
                    b:
                    <input type="number" name="b" id="b" min="-999999" max="999999" />
                </label>
                <label for="c">
                    c:
                    <input type="number" name="c" id="c" min="-999999" max="999999" />
                </label>
                <button type="submit">Cal</button>
            </form>
            <div>
                <?php
                function solveQuadraticEquation($a, $b, $c)
                {
                    $delta = $b * $b - 4 * $a * $c;

                    if ($delta > 0) {
                        $root1 = (-$b + sqrt($delta)) / (2 * $a);
                        $root2 = (-$b - sqrt($delta)) / (2 * $a);
                        return array($root1, $root2);
                    } elseif ($delta == 0) {
                        $root = -$b / (2 * $a);
                        return array($root);
                    } else {
                        return array();
                    }
                }
                if (@isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c'])) {
                    @$a = $_GET["a"];
                    @$b = $_GET["b"];
                    @$c = $_GET["c"];
                    $solutions = solveQuadraticEquation($a, $b, $c);
                    if (count($solutions) === 0) {
                        echo "No Result.";
                    } else if (count($solutions) === 1) {
                        echo "The solutions are: <br>";
                        foreach ($solutions as $idx => $value) {
                            echo "X1=X2=$value <br>";
                        }
                    } else {
                        echo "The solutions are: <br>";
                        foreach ($solutions as $idx => $value) {
                            echo "X$idx: $value <br>";
                        }
                    }
                }
                ?>
            </div>
        </div>
        <hr>
        <h3>Homework 4</h3>
        <section class="wrapper">
            <?php
            for ($i = 2; $i <= 10; $i++) {
                echo "<article class='child'>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "$i x $j = " . ($i * $j) . "<br>";
                }
                echo "</article>";
            }
            ?>
        </section>
        <hr>
        <div>
            <h3>Homework 5</h3>
            <?php

            // Define the number of rows and columns
            $rows = 5;
            $cols = 5;

            $matrix = array();

            for ($i = 0; $i < $rows; $i++) {
                $row = array();

                for ($j = 0; $j < $cols; $j++) {
                    $row[] = ($i + 1) * ($j + 1);
                }

                $row = array_slice($row, 0, $cols);

                $matrix[] = $row;
            }

            echo '<table border="1">';
            foreach ($matrix as $index => $row) {
                echo '<tr>';
                foreach ($row as $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            ?>
        </div>
    </main>
</body>

</html>