<?php
echo ini_get("error_log");

if (class_exists('IntlTimeZone')) {
    $tz = \IntlTimeZone::createDefault();
    $timezoneId = $tz->getID();
    date_default_timezone_set($timezoneId);
}
error_log("This is an error message 4");

