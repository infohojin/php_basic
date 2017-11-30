<?php

	if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
		echo "File ". $_FILES['userfile']['name'] ." uploaded successfully.\n";
		echo "Displaying contents\n";
		readfile($_FILES['userfile']['tmp_name']);
	} else {
		echo "Possible file upload attack: ";
   		echo "filename '". $_FILES['userfile']['tmp_name'] . "'.";
	}

?>
