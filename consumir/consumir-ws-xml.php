<?php

$apikey = $argv[3];
echo "Conectando con la API KEY $apikey";

// conectando 
$formato = 'xml'; // json|xml
$anno = $argv[1];
$mes = $argv[2];
$fecha = new Datetime("last day of $anno-$mes");
$ultimoDia = $fecha->format('d');
$url = "https://api.sbif.cl/api-sbifv3/recursos_api/uf/$anno/$mes/dias/$ultimoDia?apikey=$apikey&formato=$formato";

$data = file_get_contents($url);
$o = new SimpleXMLElement($data);

echo "Unidad de Fomento (UF) \n\n";
print_r($o);

