<?php
    // 당근 : carrot 의 스펠링을 잘 못 입력합니다.
    $input = 'carrrot';

    // 단어 데이터들.
    $words  = array('apple','pineapple','banana','orange',
                'radish','carrot','pea','bean','potato');

    $shortest = -1;

    // 입력한 단어를 비교합니다.
    foreach ($words as $word) {

        $lev = levenshtein($input, $word);

        // 입력한 단어가 일치할때
        if ($lev == 0) {

            // 일치한 단어 설정
            $closest = $word;
            $shortest = 0;

            // 단어가 일치하기 때문에, 반복문 종료
            break;
        }

        if ($lev <= $shortest || $shortest < 0) {
            $closest  = $word;
            $shortest = $lev;
        }
    }

    echo "입력단어: $input <br>";
    if ($shortest == 0) {
        echo "정확한 단어: $closest <br>";
    } else {
        echo "혹시 원하는 단어가 $closest 입니까? <br>";
    }

?> 
