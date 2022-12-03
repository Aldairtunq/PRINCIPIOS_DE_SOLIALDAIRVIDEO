<?php

//el obbejtivo  del suijeto es insertar figuras geometricas en los orificios que contiene alos lados
//al tratar  de insertar una figura en el orificio  tnemos dops posibles resultados 
// 1 .entro verdadero
// 2 .no entro  falso
// para saber si una figura  entra en el orificio,requerimos saber dos cosas
//1. el area de la figura que quremos insertar 
//2. el area del orificio  donde queremos insertar las figuras

class Shape_0
{
   protected $areas = [];

    public function insert (Shape $shape,$hole) : bool
    {
        
        if(!is_a($shape,Shape::class)){
            trow new Exception;
        }

        return $shape→area() < $this→areas [$shole]; 

       
    }
}


abstract class Shape
 {

 
 abstract public function area(string $param): float ;

}
 
class Circle
{
    public function area(string $param):float;
    {
        return M_PI* 5 *2;
    }

}

class Square
{
   public function area ()
   {
     return 5*5;
   }

}