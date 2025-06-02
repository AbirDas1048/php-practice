<?php
if (class_exists('IntlTimeZone')) {
    $tz = \IntlTimeZone::createDefault();
    $timezoneId = $tz->getID();
    date_default_timezone_set($timezoneId);
}

$log_file_destination = "C:/xampp/php/logs/custom_log_file.txt";
$date = date("Y:m:d H:j:s");

if (is_dir(dirname($log_file_destination))) {
    error_log("{$date} Logging to custom file 3\n", 3, $log_file_destination);
    echo "Log written successfully.";
} else {
    echo "Log folder does not exist.";
}