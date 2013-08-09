<?php

function get_dom_parser($url)
{
    $html = file_get_contents($url);
    $tidy = new Tidy();
    $dom = HtmlDomParser::str_get_html($tidy->repairString($html, array(), 'utf8'));

    return $dom;
}

