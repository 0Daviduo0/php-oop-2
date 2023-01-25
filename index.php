<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce: Prodotti per animali</title>
</head>

<?php

    class Gioco {

        public $articolo;
        public $descrizione;
        
        public function __construct($articolo, $descrizione) {

            $this -> articolo = $articolo;
            $this -> descrizione = $descrizione;

        }

        public function getGioco(){

            $articolo = $this->articolo;
            $descrizione = $this->descrizione;

        return

            "<br>" . "<h3>" . $articolo . "</h3>" .
            "<p>" . $descrizione . "</p>" .
            "<p> ----------------------------------- </p>";
            
        }

    }

    class Cuccia {

        public $articolo;   
        public $dimensione;
        public $descrizione;
        
        public function __construct($articolo, $dimensione, $descrizione) {

            $this -> articolo = $articolo;
        $this->dimensione = $dimensione;
            $this -> descrizione = $descrizione;

        }

        public function getCuccia(){

            $articolo = $this->articolo;
            $dimensione = $this->dimensione;
            $descrizione = $this->descrizione;

        return

            "<br>" . "<h3>" . $articolo . " - " . $dimensione . "</h3>" .
            "<p>" . $descrizione . "</p>" .
            "<p> ----------------------------------- </p>";
            
        }

    }

    class Vestito {

        public $articolo;
        public $taglia;
        public $descrizione;
        
        public function __construct($articolo, $taglia, $descrizione) {

            $this -> articolo = $articolo;
            $this -> taglia = $taglia;
            $this -> descrizione = $descrizione;

        }

        public function getVestito(){
            
            $articolo = $this->articolo;
            $taglia = $this->taglia;
            $descrizione = $this->descrizione;

        return

            "<br>" . "<h3>" . $articolo . " -" . $taglia . "</h3>" .
            "<p>" . $descrizione . "</p>" .
            "<p> ----------------------------------- </p>";
            
        }

    }

    class Accessorio {

        public $articolo;
        public $descrizione;
        
        public function __construct($articolo, $descrizione) {

            $this -> articolo = $articolo;
            $this -> descrizione = $descrizione;

        }

        public function getAccessorio(){
            
            $articolo = $this->articolo;
            $descrizione = $this->descrizione;

        return

            "<br>" . "<h3>" . $articolo . "</h3>" .
            "<p>" . $descrizione . "</p>" .
            "<p> ----------------------------------- </p>";
            
        }

    }

    class Cibo {

        public $articolo;
        public $flavor;
        public $descrizione;
        
        public function __construct($articolo, $flavor, $descrizione) {

            $this -> articolo = $articolo;
            $this->flavor = $flavor;
            $this -> descrizione = $descrizione;

        }

        public function getCibo(){
            
            $articolo = $this->articolo;
            $flavor = $this->flavor;
            $descrizione = $this->descrizione;

        return

            "<br>" . "<h3>" . $articolo . " - " . $flavor . "</h3>" .
            "<p>" . $descrizione . "</p>" .
            "<p> ----------------------------------- </p>";
            
        }

    }


    class Dogs {

        public array $giochi;
        public array $cucce;
        public array $abbigliamento;
        public array $accessori;
        public array $cibo;

        public function __construct(array $giochi, array $cucce, array $abbigliamento, array $accessori, array $cibo){

            $this -> giochi = $giochi;
            $this -> cucce = $cucce;
            $this -> abbigliamento = $abbigliamento;
            $this -> accessori = $accessori;
            $this -> cibo = $cibo;
        }

        public function getProducts() {

            $giochi = $this->giochi;
            $cucce = $this->cucce;
            $abbigliamento = $this->abbigliamento;
            $accessori = $this->accessori;
            $cibo = $this->cibo;

        return
            "<div>" .
            $giochi .
            "<br> _______________________ <br>" .
            $cucce .
            "<br> _______________________ <br>" .
            $abbigliamento .
            "<br> _______________________ <br>" .
            $accessori .
            "<br> _______________________ <br>" .
            $cibo .
            "<br> __________________________________________<br>"; 
            
        }

    }

    /*
    class Cats extends Dogs {

    }
    */

// Variabili

//Giochi
$gioco1 = new Gioco("Pallina", "Oggetto di forma sferica che rimbalza, di piccole dimensioni");
$gioco2 = new Gioco("Corda", "Oggetto di forma allungata, con la possibilità fare nodi con esso, perfetto per morderlo");
$gioco3 = new Gioco("Peluche", "Pupazzo, di varie forme, morbido e perfetto per tenere compagnia");

//Cucce e trasportini
$cuccia1 = new Cuccia("Cuccia: possibili crolli ©", "piccola", "Tieni al riparo il tuo animale domestico con questa cuccia di piccole dimensioni");
$cuccia2 = new Cuccia("Cuccia: dovrebbe reggere ©", "media","Tieni al riparo il tuo animale domestico con questa cuccia di medie dimensioni");
$cuccia2 = new Cuccia("Cuccia: villa con piscina ©", "grande", "Tieni al riparo il tuo animale domestico con questa cuccia di grandi dimensioni");
$trasportino1 = new Cuccia("Trasportino: ci sta quì dentro? ©", "piccola", "Tieni al riparo il tuo animale domestico con questa cuccia di piccole dimensioni");
$trasportino2 = new Cuccia("Trasportino: dovrebbe starci ©", "media", "Tieni al riparo il tuo animale domestico con questa cuccia di piccole dimensioni");
$trasportino3 = new Cuccia("Trasportino: ce ne stanno due! ©", "grande", "Tieni al riparo il tuo animale domestico con questa cuccia di piccole dimensioni");

//Vestiario
$maglione1 = new Vestito("Maglione", "S", "Maglione per animali di piccola taglia");
$maglione2 = new Vestito("Maglione", "M", "Maglione per animali di media stazza");
$maglione3 = new Vestito("Maglione", "L", "Maglione per animali di grandi dimensioni");
$maglione4 = new Vestito("Maglione", "XL", "Maglione per animali EnormiOmmioddio");
$cappotto1 = new Vestito("Cappotto impermeabile", "S", "Cappotto per animali di piccola taglia");
$cappotto2 = new Vestito("Cappotto impermeabile", "M", "Cappotto per animali di media stazza");
$cappotto3 = new Vestito("Cappotto impermeabile", "L", "Cappotto per animali di grandi dimensioni");
$cappotto4 = new Vestito("Cappotto impermeabile", "XL", "Cappotto per animali EnormiOmmioddio");
$maglietta1 = new Vestito("Maglietta", "S", "Maglietta per animali di piccola taglia");
$maglietta1 = new Vestito("Maglietta", "M", "Maglietta per animali di media stazza");
$maglietta1 = new Vestito("Maglietta", "L", "Maglietta per animali di grandi dimensioni");
$maglietta1 = new Vestito("Maglietta", "XL", "Maglietta per animali EnormiOmmioddio");
$tutu1 = new Vestito("Tutù", "S", "Tutù per animali di piccola taglia");
$tutu1 = new Vestito("Tutù", "M", "Tutù per animali di media stazza");
$tutu1 = new Vestito("Tutù", "L", "Tutù per animali di grandi dimensioni");
$tutu1 = new Vestito("Tutù", "XL", "Tutù per animali EnormiOmmioddio");

//Accessori
$accessorio1 = new Accessorio("Collare", "Per non far fuggire il TUO animale domestico");
$accessorio2 = new Accessorio("Ciotola", "Per mettere il cibo e nutrire il tuo animale domestico");
$accessorio3 = new Accessorio("Erba gatta", "Un po' di droga per il tuo gatto");

//Cibi
$ciboCrock1 = new Cibo("Crocchette", "al Manzo", "Crecchette al flavor di Manzo");
$ciboCrock2 = new Cibo("Crocchette", "al Pollo", "Crecchette al flavor di Pollo");
$ciboCrock3 = new Cibo("Crocchette", "alle Carote", "Crecchette al flavor di Carote");
$ciboCan1 = new Cibo("Cibo in scatola", "al Manzo", "Cibo in scatola al flavor di Manzo");
$ciboCan2 = new Cibo("Cibo in scatola", "al Pollo", "Cibo in scatola al flavor di Pollo");
$ciboCan3 = new Cibo("Cibo in scatola", "alle Carote", "Cibo in scatola al flavor di Carote");







?>

<body>

    

</body>
</html>