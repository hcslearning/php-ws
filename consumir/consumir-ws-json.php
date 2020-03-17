<?php

$apikey = $argv[1];
echo "Conectando con la API KEY $apikey";

// conectando 
$formato = 'json'; // json|xml
$anno = '2018';
$url = "https://api.sbif.cl/api-sbifv3/recursos_api/utm/{$anno}?apikey={$apikey}&formato=$formato";

$data = file_get_contents($url);
$o = json_decode($data);

print_r($o);

