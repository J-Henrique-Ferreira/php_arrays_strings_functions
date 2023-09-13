<?php
require_once "arrays.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php na web</title>
</head>
<body>
    <header>
        <h1>Hello world</h1>
    </header>
    <body>
        <ul>
            <?php foreach ($lista as $item) {
            ?>
                <li><?= $item ?></li>
            <?php } ?>
        </ul>
    </body>
</body>
</html>