<?php

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