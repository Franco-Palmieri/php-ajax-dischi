<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

    <nav></nav>
    <main class="container">
        <div class="row">
            <?php
                require_once __DIR__ . "/database/database.php";

                foreach($database as $detail){
                    echo "<div class='cosa'> <div class='album'> {$detail['title']} </div> </div>";
                }
            ?>
        </div>        
            </main>
    
</body>
</html>