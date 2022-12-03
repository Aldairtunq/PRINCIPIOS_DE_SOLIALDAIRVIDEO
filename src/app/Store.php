<?php
namespace App;

class Store
{
    
var PaymentProcessor
     
    protected $paymentProcessor;

    
      param PaymentProcessor $paymentProcessor
     
    public function __construct(PaymentProcessor $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function purchase()
    {
        $this->paymentProcessor->pay();
    }
}