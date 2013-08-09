<?php

const FEED_TITLE = '클리앙 알뜰구매 게시판';
const FEED_DESCRIPTION = '클리앙 알뜰구매 게시판을 RSS로 변환';

$feed = new Feed();

$channel = new Channel();
$channel->title(FEED_TITLE)
    ->description(FEED_DESCRIPTION)
    ->url(URL)
    ->appendTo($feed);

foreach ($articles as $article) {
    $item = new Item();
    $item->title($article['title'])
        ->description($article['body'])
        ->url($article['link'])
        ->appendTo($channel);
}

echo $feed;

