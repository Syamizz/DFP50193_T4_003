<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003</title>
</head>

<body>
    <?php
    $dir = "image";

    // Sort in ascending order - this is default
    $a = scandir($dir);

    // Sort in descending order
    foreach ($a as $value) {
        echo "<a href='image/$value'>$value</a><br>";
      }

    ?>
</body>

</html>