<?php

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