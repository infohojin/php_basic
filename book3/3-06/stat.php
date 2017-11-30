<?php
/* Get file stat */
$stat = stat('C:\php\php.exe');

/*
 * Print file access time, this is the same 
 * as calling fileatime()
 */
echo 'Access time: ' . $stat['atime'];

/*
 * Print file modification time, this is the 
 * same as calling filemtime()
 */
echo 'Modification time: ' . $stat['mtime'];

/* Print the device number */
echo 'Device number: ' . $stat['dev'];
?>
