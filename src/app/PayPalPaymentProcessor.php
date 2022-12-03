<?php

namespace App;

use PayPal\PayPalApi;

class PayPalPaymentProcessor implements PaymentProcessor
{
    
      var PayPalApi
     
    protected $payPalApi;

 
    param PayPalApi $payPalApi
     
    public function __construct(PayPalApi $payPalApi)
    {
        $this->payPalApi = $payPalApi;
    }
    
      return void
     
    public function pay()
    {
        $this->payPalApi->chargeCustomer();
    }
}