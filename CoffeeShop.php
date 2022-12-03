<?php 

namespace App;

class CoffeeShop

{
 protected $products = [];

 public function addProducts($product =[])
 {
     
     $this→products = $product;
 

 }
 public function getProducts()
 {
     
     return $this→products
 }
 public function removeProduct($id)
{
  //logica para borrar producto

}

{
public function addTocart($id,$quantity)

}
//logica para agregar al carrito

public function getTotal()
{
    //logica para generar el total al pagar el carrito

}
 public function viewMenu()
 {
    $menu= '';
}

}