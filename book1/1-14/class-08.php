<?php
    // 인터페이스를 설정
    interface Logger
    {
        public function log(string $msg);
    }

    class Application
    {
        private $logger;

        // 반한 타입은 logger 입니다.
        public function getLogger(): Logger
        {
            return $this->logger;
        }

    	// 인자값으로 클래스를 입력을 받습니다.
    	public function setLogger(Logger $logger)
        {
        	$this->logger = $logger;
    	}
    }

    $app = new Application;

    // 인자값을 익명의 클래스로 만들어서 전달합니다.
    $app->setLogger(
        new class implements Logger {
    		public function log(string $msg)
            {
        	   echo $msg;
    		}
	   }
    );

    var_dump($app->getLogger());

?>