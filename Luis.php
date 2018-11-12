<?php
    class Hola{
    public $Nombre;
    public $Apellido;
    public $Cedula;
    function Escribir(){
        echo "El Nombre Es: ". $this->Nombre."<br>"."<br>";
        echo "El Apellido Es: ".$this->Apellido."<br>"."<br>";
        echo "La Cedula Es: ".$this->Cedula."<br>";
    }
    }
    $Hola1 = New Hola();

    $Hola1 ->Nombre="Luis";
    $Hola1 ->Apellido="Perdomo";
    $Hola1 ->Cedula="25.867.611";
    $Hola1 ->Escribir();
?>