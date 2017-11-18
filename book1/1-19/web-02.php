<?php
	class JinyFiles {
		public function fileLoad($filename)
		{
    		if ($fp = fopen($filename, "r")){
     			if ($fp){
            		while (!feof ($fp)) $buffer .= fgets($fp, 4096);
            		fclose($fp);
            		return $buffer;
        		}
      		} else {
      			echo "파일을 읽어 올 수 없습니다.";
    		}
		}
	}
	
	$temp = new JinyFiles();
	echo $temp->fileLoad("./temp.htm");

?>