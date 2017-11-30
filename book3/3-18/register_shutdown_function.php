<?php
	function shutdown() {
		// 스크립트가 완료되기 전에 마지막 작업을 수행 할 수 있습니다.
    	echo 'Script executed with success', PHP_EOL;
	}

	register_shutdown_function('shutdown');
?>
