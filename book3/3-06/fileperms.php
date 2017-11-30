<?php
    $permissions = fileperms("fileperms.php");
    echo "permissions = " . $permissions . "<br>";

    // Owner
    $info .= (($permissions & 0x0100) ? 'r' : '-');
    $info .= (($permissions & 0x0080) ? 'w' : '-');
    $info .= (($permissions & 0x0040) ?
            (($permissions & 0x0800) ? 's' : 'x' ) :
            (($permissions & 0x0800) ? 'S' : '-'));

    // Group
    $info .= (($permissions & 0x0020) ? 'r' : '-');
    $info .= (($permissions & 0x0010) ? 'w' : '-');
    $info .= (($permissions & 0x0008) ?
            (($permissions & 0x0400) ? 's' : 'x' ) :
            (($permissions & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($permissions & 0x0004) ? 'r' : '-');
    $info .= (($permissions & 0x0002) ? 'w' : '-');
    $info .= (($permissions & 0x0001) ?
            (($permissions & 0x0200) ? 't' : 'x' ) :
            (($permissions & 0x0200) ? 'T' : '-'));

    echo $info;
?>
