<?php


class mano {
   
    private $cartas;
    

       public function __construct() {
    
       }


       public function setCartas($array){
        $this->cartas = $array;
    }

    public function getCartas(){
        return $this->cartas;
    }

       public function iniciar()
{
       //Creamos una nueva mano de cartas
$carta1 = new carta();
$carta2 = new carta();
$carta3 = new carta();
$carta4 = new carta();
$carta5 = new carta();
do
{


if ($carta1->getNumerocarta() == $carta2->getNumerocarta() )
{
    //Alguna de las cartas son iguales cambiamos una
    $carta2->cambiarCarta();
    $sinrepes=FALSE;
    
}
elseif($carta1->getNumerocarta() == $carta3->getNumerocarta())
{
        //Alguna de las cartas son iguales cambiamos una
        $carta3->cambiarCarta();
        $sinrepes=FALSE;    
    
}
elseif($carta1->getNumerocarta() == $carta4->getNumerocarta())
{
        //Alguna de las cartas son iguales cambiamos una
        $carta4->cambiarCarta();
        $sinrepes=FALSE;    
    
}
elseif($carta1->getNumerocarta() == $carta5->getNumerocarta())
{
        //Alguna de las cartas son iguales cambiamos una
        $carta5->cambiarCarta();
        $sinrepes=FALSE;    
    
}
else
{
    $this->cartas = array($carta1,$carta2,$carta3,$carta4,$carta5);
    $sinrepes=TRUE; 
    
break;
}
   
    
}while($sinrepes==TRUE);
}





public function cambiar(int $numero)
{

    if ($numero==1)
    {    
    $this->cartas[0]->cambiarCarta();
    }
    elseif($numero==2)
    {    
        $this->cartas[1]->cambiarCarta();
    }
    elseif($numero==3)
    {    
        $this->cartas[2]->cambiarCarta();
    }
    elseif($numero==4)
    {    
        $this->cartas[3]->cambiarCarta();
    }
    elseif($numero==5)
    {    
        $this->cartas[4]->cambiarCarta();
    }
    else
    {
        return FALSE;
    }
    


    do
{

//aqui siempre debe de cambiarse la escogida por eso tenemos $numero!=x

if($this->cartas[$numero-1]->getNumerocarta == $this->cartas[0]->getNumerocarta &&  $numero != 1 )
{
     //Alguna de las cartas son iguales cambiamos una
   $this->cartas[$numero-1]->cambiarCarta();
   $sinrepes=FALSE;
    
}
elseif($this->cartas[$numero-1]->getNumerocarta == $this->cartas[1]->getNumerocarta && $numero != 2 )
{
   //Alguna de las cartas son iguales cambiamos una
   $this->cartas[$numero-1]->cambiarCarta();
   $sinrepes=FALSE;
   
}
elseif($this->cartas[$numero-1]->getNumerocarta == $this->cartas[2]->getNumerocarta && $numero != 3)
{
   //Alguna de las cartas son iguales cambiamos una
   $this->cartas[$numero-1]->cambiarCarta();
   $sinrepes=FALSE;
   
}
elseif($this->cartas[$numero-1]->getNumerocarta == $this->cartas[3]->getNumerocarta && $numero != 4)
{
   //Alguna de las cartas son iguales cambiamos una
   $this->cartas[$numero-1]->cambiarCarta();
   $sinrepes=FALSE;
   
}
elseif($this->cartas[$numero-1]->getNumerocarta == $this->cartas[4]->getNumerocarta && $numero != 5)
{
   //Alguna de las cartas son iguales cambiamos una
   $this->cartas[$numero-1]->cambiarCarta();
   $sinrepes=FALSE;
   
}
else
{
    
    $sinrepes=TRUE;
break;
}

}while($sinrepes==TRUE);//Fin del While
}//Fin funciion

public function mostrar()
{
    print_r($this->getCartas());
}


public function valor()
{
    //Esta funcion es demasiado complicada no merece la pena hacerla.
    //if ($this->cartas[0]->getNumerocarta()==10 and $this->cartas[1]->getNumerocarta()==11 and $this->cartas[2]->getNumerocarta()==12 and $this->cartas[3]->getNumerocarta()==13 and $this->cartas[4]->getNumerocarta()==1)
    //{
    //   if($this->cartas[1]->getNumerocarta()==10 and $this->cartas[2]->getNumerocarta()==11 and $this->cartas[3]->getNumerocarta()==12
    //}
    //Escalera real()
    //repoker
    //Escalera de color
    //Poker
    //Full
    //Color
    //Escalera
    //Trio
    //Doble pareja
    //Pareja
    //Carta más alta    
    
}






















    public function __destruct() {
        echo 'Destroying: ';
    }
}

?>