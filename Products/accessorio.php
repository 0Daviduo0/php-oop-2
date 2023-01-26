<?php

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