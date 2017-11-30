<?php

	foreach(glob('*.exe') as $ent)
	{
    	if(is_dir($ent))
    	{
        	continue;
    	}

    	echo $ent . ' = (SHA1: ' . sha1_file($ent) . ')' . "<br>";
	}
?>
