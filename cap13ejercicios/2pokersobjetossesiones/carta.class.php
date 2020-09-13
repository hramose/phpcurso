<?php

class carta {
   
    private $palo;
    private $numero;
    private $comodin = FALSE;
    private $numerocarta;


       public function __construct() {
        $this->cambiarCarta();
       }


       public function cambiarCarta()
       {
        $this->setNumerocarta(rand (1,54));
        if ($this->getNumerocarta() <= 13)
        {
            //oros
            $this->setPalo("oros");
            $this->setNumero($this->getNumerocarta());
        }
        elseif($this->getNumerocarta()<=26)
        {
            //copas
            $this->setPalo("copas");
            $this->setNumero($this->getNumerocarta()-13);
        }
        elseif($this->getNumerocarta()<=39)
        {
            //bastos
            $this->setPalo("bastos");
            $this->setNumero($this->getNumerocarta()-26);
        }
        elseif($this->getNumerocarta()<=52)
        {
            //espadas
            $this->setPalo("espadas");
            $this->setNumero($this->getNumerocarta()-39);
        }
        else
        {
            //comodin
            $this->setComodin(TRUE);
        }

       }
    public function setPalo(string $palo){
        $this->titulo = $palo;
    }

    public function getPalo(){
        return $this->palo;
    }


    public function setNumero(int $numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setComodin($comodin){
        $this->comodin = $comodin;
    }

    public function getNumerocarta(){
        return $this->numerocarta;
    }
    
    public function setNumerocarta(int $numerocarta){
        $this->numerocarta = $numerocarta;
    }

    
    public function __destruct() {
        echo 'Destroying: ';
    }
}

?>