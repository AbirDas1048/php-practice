<?php
/**
 * Only Date
 */

echo date_default_timezone_get() . PHP_EOL; // Europe/Berlin
echo date('T') . PHP_EOL; // CEST
echo date('d/m/y') . PHP_EOL; // 22/07/24
echo date('d-m-y') . PHP_EOL; // 22-07-24
echo date('d/m/Y') . PHP_EOL; // 22/07/2024
echo date('d.m.Y') . PHP_EOL; // 22.07.2024
echo date('d/M/Y') . PHP_EOL; // 22/Jul/2024
echo date('D/M/Y') . PHP_EOL; // Mon/Jul/2024
echo date('dS F Y') . PHP_EOL; // 22nd July 2024
echo date('d/m/y', time()+24*60*60) . PHP_EOL; // 23/07/24
echo date('d/m/y', time()-24*60*60) . PHP_EOL; // 21/07/24

/**
 * Only Time
 */

echo time() . PHP_EOL; // 1721663053
echo date('h:i:s') . PHP_EOL; // 05:46:03
echo date('h:i:s A') . PHP_EOL; // 05:52:17 PM
echo date('h:i:s a') . PHP_EOL; // 05:52:17 pm
echo date('H:i:s') . PHP_EOL; // 17:46:03


