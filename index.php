<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Souliya</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <main class='mx-auto max-w-7xl px-4 sm:px-6 lg:px-8'>
    <?php
    $fullname = 'Souliya';
    $test = array('10' => 1, 2, '7' => 3, 4, 'asd' => 5);
    $test2 = array('10' => 1, 2, '7' => 3, 4, 5);
    $test3 = array_merge($test, $test2);

    foreach ($test3 as $index => $value) {
      echo "<div>
      $index => $value
      </div>";
    };
    ?>
    <h1 class="text-3xl bg-red-500 p-2">This is from HTML</h1>
    <span>
      <?php
      $a = 5;
      echo $a++; // print $a(5) krn jung buak 1 khao pai sa nun $a = 6
      echo ++$a; // buak 1 khao $a = 6 lung jark nun jung print $a = 7
      echo $a--; // print $a(7) krn jung lop sa nun $a = 6
      echo --$a; // lop 1 kup $a(6) sa nun $a = 5

      // echo "$++a <br>";
      // echo "$a-- <br>";
      // echo "$--a <br>";
      ?>
    </span>
  </main>
</body>

</html>