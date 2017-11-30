<?php
    $search_html = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
    $search_url = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_ENCODED);

    echo "입력한 검색키워드는 $search_html 입니다.<br>";
    echo "<a href='?search=$search_url'>재검색</a>";
?>
