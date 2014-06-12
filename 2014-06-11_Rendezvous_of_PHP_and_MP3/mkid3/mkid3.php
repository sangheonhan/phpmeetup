<?php

require 'vendor/autoload.php';

use Nette\Utils\Finder;

if ($argc != 2 || !isset($argv[1]) || !is_dir($argv[1])) {
    echo "Usage: $argv[0] <directory>\n\n";
    exit(1);
}

$id3 = new getID3();

foreach (Finder::findFiles('*.mp3')->from($argv[1]) as $file) {
    $id3->analyze($file);
    $pattern = '/^(\.\/)?
        (?<artist>[^\/]+)\/
        (?<album>[^\/]+)\/
        (?<disc>\d+)?-?
        (?<track>\d+)\s
        (?<title>[^\/]+)\.mp3$
        /x';
      
    if (preg_match($pattern, $file, $m)) {
        if (!isset($id3->info['tags']) || !isset($id3->info['tags']['id3v2'])) {
            $tags = array();
        } else {
            $tags = $id3->info['tags']['id3v2'];
        }

        $tagwriter = new getid3_writetags;
        $tagwriter->filename = $file;
        $tagwriter->tagformats = array('id3v2.3');
        $tagwriter->overwrite_tags = true;
        $tagwriter->tag_encoding = 'UTF-8'; 
        $tagwriter->remove_other_tags = true;

        $tags['artist'] = $tags['album'] = $tags['title'] = array();
        $tags['artist'][] = $m['artist'];
        $tags['album'][] = $m['album'];
        $tags['title'][] = $m['title'];
        
        if (isset($m['track'])) {
            $tags['track'] = array($m['track']);
        }
        if (isset($m['disc'])) {
            $tags['part_of_a_set'] = array($m['disc']);
        }

        $tagwriter->tag_data = $tags;

        if ($tagwriter->WriteTags() == false) { 
            echo "ERROR:\t".implode("\n", $tagwriter->errors).".\n";
        } else {
            echo "OK:\t{$file}\n";
        }
    }
}
