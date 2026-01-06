<?php
interface PaymentGateway
{
    public function pay($amount);
}
class Bkash implements PaymentGateway{
    public function pay($amount): void
    {
        echo "Amount Paid via Bkash: {$amount}\n";
    }
}

class Nagad{
    public function makePayment($amount): void
    {
        echo "Amount Paid via Nagad: {$amount}\n";
    }
}

class NagadAdapter implements PaymentGateway{
    private $nagad;
    public function __construct(Nagad $nagad){
        $this->nagad = $nagad;
    }
    public function pay($amount): void
    {
        $this->nagad->makePayment($amount);
    }
}

class ProcessPayment{
    private $gateway;
    public function __construct(PaymentGateway $gateway){
        $this->gateway = $gateway;
    }

    public function purchaseProduct($amount): void
    {
        $this->gateway->pay($amount);
    }
}

$bk = new Bkash();
$ng = new Nagad();

$ngAdpt = new NagadAdapter($ng);

$processPayment1 = new ProcessPayment($ngAdpt);
$processPayment1->purchaseProduct(100);

$processPayment2 = new ProcessPayment($bk);
$processPayment2->purchaseProduct(200);