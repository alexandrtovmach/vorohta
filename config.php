<?php
/**
* Set the server timezone
* see: http://us3.php.net/manual/en/timezones.php
 */
date_default_timezone_set("Europe/Kiev");

/**
 * Set everything to UTF-8
 */
setlocale(LC_ALL, 'uk_UA.utf-8');

header("Content-Type:text/html;charset=utf-8");