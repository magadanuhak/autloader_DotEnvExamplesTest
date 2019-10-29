<?php


namespace site\app;
use site\app\PaymentSystem\PaymentSystemInterface;

class PaymentService
{
    public function payment(PaymentSystemInterface $paymentSystem){
        $paymentSystem->payment();
    }

}