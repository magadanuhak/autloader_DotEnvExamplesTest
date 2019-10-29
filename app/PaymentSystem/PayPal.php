<?php


namespace site\app\PaymentSystem;

use site\app\PaymentSystem\PaymentSystemInterface;

class PayPal implements PaymentSystemInterface{

    public function payment()
    {
        echo "Payed bu PayPal";
    }
}