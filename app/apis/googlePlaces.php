<?php

if (count($argv) != 3 or $argv[1] != "--object") {
    print "chyba argumentu";
    exit(1);
}

$obj = $argv[2];

print $obj. "\n";

$url = 'https://maps.googleapis.com/maps/api/place/textsearch/xml?query=' . $obj . '+in+Brno&key=AIzaSyDfotL66FGoibMafL-c8oNk8joyFtpcc6U';

$xml = simplexml_load_file($url);

print_r($xml);

echo "\n\n\n";
echo $xml->next_page_token;



$url = "https://maps.googleapis.com/maps/api/place/textsearch/xml?pagetoken=" .$xml->next_page_token. "&key=AIzaSyDfotL66FGoibMafL-c8oNk8joyFtpcc6U";

echo "\n\n\n". $url . "\n\n\n";

$xml = simplexml_load_file($url);
print_r($xml);
