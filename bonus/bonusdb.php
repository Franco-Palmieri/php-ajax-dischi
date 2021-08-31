
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <nav></nav>
    <main>
        <div class="container">
            <div class="row">
                <?php 
                require_once __DIR__ . "./bonusapi.php";

                    $result = array_filter($database, function($value){
                        if($value['genre'] === 'Indie'){
                            echo "<div class='album'>
                                    <div class='foto-album'> <img src='{$value['poster']}'> </div>
                                    <div class='title'> <h1>{$value['title']}</h1> </div>
                                    <div class='description'>
                                        <span>{$value['author']}</span>
                                        <span>{$value['year']}</span>
                                        <span>{$value['genre']}</span>
                                    </div>
                                </div>";
                        };
                    });
                ?>
            </div>
        </div>
    </main>
    
</body>
</html>
