<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Genere{
            public $nome;
            
            public function __construct($nome,)
            {
                $this->nome = $nome;
            }
        }
        class Movie{
            public $titolo;
            public $cast;
            public $durata;
            public $regista = "Fellini";

            public function __construct($titolo, $durata)
            {
                $this->titolo = $titolo;
                $this->durata = $durata;
            }


            public function getInfo() {
                return "durata film:" . $this->durata ." ore "."titolo:". $this->titolo;

            }

        }

        // istanzio oggetto di tipo Movie.
        $mioFilmPreferito = new Movie ("il Pianista Sull'Oceano", 3);
        echo $mioFilmPreferito -> getInfo();

        $nuovaUscita = new Movie ("l'avvocato del Diavolo", 2 , );
        
        echo "<h2>var dump scheda nuovo Movie</h2>";
        var_dump($mioFilmPreferito);

        $horror = new Genere("horror");


    ?>

    <!-- <h1>ciao</h1> -->
</body>
</html>