<?php

$url = "https://swapi.dev/api/people/?page=2";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST,  "GET");

$result = json_decode(curl_exec($curl));
echo"<pre>";
var_dump($result);
echo"</pre>";
?>