<?php

$articles = array();
foreach ($links as $link) {
    $dom = get_dom_parser($link);

    $body = $dom->find('div.view_content', 0)->innertext;
    $writer = $dom->find('span.member', 0)->plaintext;
    $title = $dom->find('div.view_title', 0)->plaintext;

    $articles[] = array(
        'link' => $link,
        'title' => $title,
        'body' => $body,
        'writer' => $writer,
    );

    $dom->clear();
}

