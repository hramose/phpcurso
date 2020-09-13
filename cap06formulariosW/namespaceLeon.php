<?php 
use Cosa\Animal\Carnivoro\carnivoro as leon;
//De esta forma leon se convierte en el valor completo de la clase y del namespace

$leon = new leon();

use Cosa\Animal\Carnivoro;

//Otra forma de acortar el espacio de nombres a Carnivoro

$carnivoro = new Carnivoro\carnivoro();