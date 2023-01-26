<?php

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