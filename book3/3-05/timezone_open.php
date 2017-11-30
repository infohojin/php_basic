<?php
// Error handling by catching exceptions
$timezones = array('Europe/London', 'Mars/Phobos', 'Jupiter/Europa');

foreach ($timezones as $tz) {
    try {
        $mars = new DateTimeZone($tz);
    } catch(Exception $e) {
        echo $e->getMessage() . '<br />';
    }
}
?>
