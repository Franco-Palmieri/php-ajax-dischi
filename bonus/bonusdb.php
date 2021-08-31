<?php
$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'genre' => 'Rock',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'genre' => 'Pop',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'genre' => 'Rock',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'genre' => 'Jazz',
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'genre' => 'Metal',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'genre' => 'Rock',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg'
    ],
    [
        'title' => 'Aida',
        'author' => 'Rino Gaetano',
        'year' => 1977,
        'genre' => 'Pop',
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/715SzAD8-oL._AC_SY450_.jpg'
    ],
    [
        'title' => 'Polaroid',
        'author' => 'Carl Brave',
        'year' => 2017,
        'genre' => 'Indie',
        'poster' => 'https://rockitecn.nohup.it/dbimg/articoli/28853.jpg'
    ],
    [
        'title' => 'Ok',
        'author' => 'Gazzelle',
        'year' => 2021,
        'genre' => 'Indie',
        'poster' => 'https://upload.wikimedia.org/wikipedia/it/f/fe/GazzelleOK1.jpg'
    ],
    [
        'title' => 'Ultima notte',
        'author' => 'Ariete',
        'year' => 2021,
        'genre' => 'Indie',
        'poster' => 'https://cdn.radiozeta.it/Song/400x400/ariete-l-ultima-notte-kj4aw.jpg'
    ],
];
?>

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
                $result = array_filter($database, function($value){
                    if($value['genre'] === 'Indie'){
                        echo "<div class='album'>
                                <div class='foto-album'> <img src='{$value['poster']}'> </div>
                                <div class='title'> <h1>{$value['title']}</h1> </div>
                                <div class='description'>
                                    <span>{$value['author']}</span>
                                    <span>{$value['year']}</span>
                                </div>
                            </div>";;
                    };
                });
            ?>
            </div>
        </div>
    </main>
    
</body>
</html>
