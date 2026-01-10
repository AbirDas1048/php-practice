<?php

interface Notifier
{
    public function notify(string $message): string;
}

class BasicNotifier implements Notifier
{
    public function notify(string $message): string
    {
        return "Send Message: {$message}";
    }
}

abstract class NotifierDecorator implements Notifier
{
    protected Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }
}

class EmailNotifier extends NotifierDecorator
{
    public function notify(string $message): string
    {
        return $this->notifier->notify($message) . " via Email\n";
    }
}

class SMSNotifier extends NotifierDecorator
{
    public function notify(string $message): string
    {
        return $this->notifier->notify($message) . " via SMS\n";
    }
}

$basicNotifier = new BasicNotifier();
$emailNotifier = new EmailNotifier($basicNotifier);
$smsNotifier = new SMSNotifier($basicNotifier);
$smsNotifier2 = new SMSNotifier($emailNotifier);

echo $basicNotifier->notify("Hello world via basic notifier\n");
echo $emailNotifier->notify("Hello world");
echo $smsNotifier->notify("Hello world");
echo PHP_EOL;
echo $smsNotifier2->notify("Hello world");

