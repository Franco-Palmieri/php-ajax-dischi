<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        require_once __DIR__ . "/database/database.php";

        foreach($database as $detail){
            echo "<div> {$detail['title']} </div>";
        }

    ?>
</body>
</html>