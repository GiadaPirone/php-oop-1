<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Movie{
            public $titolo;
            public $cast;

            public function durataFilm($ora){
                if ($ora > 2){
                    echo "Il film durerà più di due ore!"
                }
            }
        }

        $durata = new Movie();
        $durata -> durataFilm(2);


        $regista = new movie();


    ?>
</body>
</html>