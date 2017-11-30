<?php
	echo 'PHP connection';

	ignore_user_abort(true);
	set_time_limit(0);

	while(1) {

    	// 접속상태 실패
    	if(connection_status() != CONNECTION_NORMAL)
    	{
        	break;
    	}

    	// 10 초간 지연
    	sleep(10);
	}
?> 
