<?php

abstract class PaymentStatusService
{
    public abstract function getStatus($payment_id);
}

class CreditCardPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return 'success';
    }
}

class SonaliPaymentStatus extends PaymentStatusService
{
    public function getStatus($payment_id)
    {
        return ['status' => 'success'];
    }
}

$payment_status = new CreditCardPaymentStatus();
$payment_status->getStatus(1);


$payment_status = new SonaliPaymentStatus();
$payment_status->getStatus(1);
// Here the LSP violates !!!