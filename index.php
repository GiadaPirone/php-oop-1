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
            public $durata;
            public $regista;

            public function __construct($titolo, $durata)
            {
                $this->titolo = $titolo;
                $this->durata = $durata;
            }

            
        }

        // istanzio oggetto di tipo Movie.
        $mioFilmPreferito = new Movie ("il Pianista Sull'Oceano", 3);

        echo "<h2>var dump scheda nuovo Movie</h2>";
        var_dump($mioFilmPreferito);
        


    ?>

    <!-- <h1>ciao</h1> -->
</body>
</html>