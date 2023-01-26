<?php

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
    public function getArrayGiochi() {

        $str = "";
        foreach ($this -> giochi as $gioco) {
            $str .= $gioco;
        }

    }

    public function getArrayCucce() {

        $str = "";
        foreach ($this -> cucce as $cuccia) {
            $str .= $cuccia;
        }

    }

    public function getArrayAbbigliamento() {

        $str = "";
        foreach ($this -> abbigliamento as $vestito) {
            $str .= $vestito;
        }

    }

    public function getArrayAccessori() {

        $str = "";
        foreach ($this -> accessori as $accessorio) {
            $str .= $accessorio;
        }

    }

    public function getArrayCibo() {

        $str = "";
        foreach ($this -> cibo as $cibo) {
            $str .= $cibo;
        }

    }

public function getProducts() {

    $giochi = $this->giochi;
    $cucce = $this->cucce;
    $abbigliamento = $this->abbigliamento;
    $accessori = $this->accessori;
    $cibo = $this->cibo;

return

    "<div>" .
    var_dump($giochi) .
    //$this -> getArrayGiochi() .
    "<br> _______________________ <br>" .
    var_dump($cucce) .
    //$this -> getArrayCucce() .
    "<br> _______________________ <br>" .
    var_dump($abbigliamento) .
    //$this -> getArrayAbbigliamento() .
    "<br> _______________________ <br>" .
    var_dump($accessori) .
    //$this -> getArrayAccessori() .
    "<br> _______________________ <br>" .
    var_dump($cibo) .
    //$this -> getArrayCibo() .
    "<br> __________________________________________<br>" .
    "</div>";
    
    
}

}