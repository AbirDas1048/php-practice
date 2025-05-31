<?php
echo ini_get("error_log");

if (class_exists('IntlTimeZone')) {
    $tz = \IntlTimeZone::createDefault();
    $timezoneId = $tz->getID();
    date_default_timezone_set($timezoneId);
}
$log_file_destination = "C:/xampp/php/logs/custom_log_file.txt";

if (is_dir(dirname($log_file_destination))) {
    error_log("Logging to custom file", 3, $log_file_destination);
    echo "Log written successfully.";
} else {
    echo "Log folder does not exist.";
}