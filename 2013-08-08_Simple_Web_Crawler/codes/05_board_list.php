<?php

const URL = 'http://www.clien.net/cs2/bbs/board.php?bo_table=jirum';

$links = array();
$dom = get_dom_parser(URL); 
foreach ($dom->find('table td.post_subject a') as $elem) {
    $url_parts = parse_url($elem->href);
    $links[] = http_build_url(
        URL, 
        array(
            'query' => htmlspecialchars_decode($url_parts['query'])
        )
    );
}
$dom->clear();

