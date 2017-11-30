<?php
    $email = "infohojin@naver.com";
    $exp = "^[a-z\'0-9]+([._-][a-z\'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";

    if(eregi($exp,$email)) {
        $emailAddr = explode("@",$email);
        if(checkdnsrr($emailAddr[1],"MX")) {
            echo "DNS 레코드 확인";
        } else {
            echo "DNS 레코드 확인불가";
        }

    } else {
      echo "이메일 형식이 아닙니다.";
    }

?>
