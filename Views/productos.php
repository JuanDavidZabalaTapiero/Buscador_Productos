<?php
require_once('../Controllers/showInfo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $text = $_GET["text"];

    showProductos($text);
    ?>
</body>

</html>