<?php

namespace CloudStorage;

include "auto_load.php";

use CloudStorage\Mail\Mailer;
use CloudStorage\Scan\Scanner;

class Main
{
    public function __construct()
    {
        $mail = new Mailer();
        $mail->sendMail();

        $scan = new Scanner();
        $scan->scan();
    }
}

new Main();