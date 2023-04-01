<?php
// Definir a URL para a API da NASA
$url = "https://api.nasa.gov/planetary/apod?api_key=oiHpM7ULKs5FzKP3Wr5zn1OgQcdyNlwCcoFS5Wog";

// Inicializar o cURL
$ch = curl_init();

// Definir as opções do cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executar a solicitação GET
$result = curl_exec($ch);

// Encerrar o cURL
curl_close($ch);

// Imprimir o resultado
echo $result;
?>
