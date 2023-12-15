<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World!</h1>
    <?php
    /**
     * This code snippet creates a file named "message.txt" in the "test-directory" directory.
     * It writes the content "Welcome to PHP" to the file 10 times, each on a new line.
     */

    $filePath = "test-directory\message.txt";
    $content = "Welcome to PHP 2";
    $file = fopen($filePath, "w");

    for($i = 0; $i < 10; $i++) {
        fwrite($file, $content . "\n");
    }
    fclose($file);
    echo "File created successfully <br>";

    // open file
    $file = fopen($filePath, "r");
    // read file
    while(!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);

    ?>
</body>

</html>