<?php

$url = "https://api.mongohq.com/databases/psdisasters/collections/votes/documents?_apikey=n42n67rllodbn6nojgvo";
$ch = curl_init();

$data = json_encode(array("q" => array("post_id" => 2), "fields" => array("opt_1","opt_2","opt_3","opt_4"), "limit" => 1));

print_r($data);
echo '<br/>';
echo '<br/>';
echo '<br/>';

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_GETFIELDS, $data);

$result= curl_exec ($ch);
curl_close ($ch);
print_r($result);

?>