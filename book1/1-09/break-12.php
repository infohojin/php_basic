 <?php
    $myfile = fopen("readme.txt", "r");
 
    while(1) {
        if(!feof($myfile)){
            echo fgets($myfile) . "<br>";
        } else {
            break;
        }  
    }
    fclose($myfile);
?>
