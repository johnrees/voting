<?php

$url = "https://api.mongohq.com/databases/psdisasters/collections/votes/documents?_apikey=n42n67rllodbn6nojgvo";
$ch = curl_init();

$post = intval($_POST['post']);
$opt = "opt_" . $_POST['opt'];
$data = json_encode(array("criteria" => array("post_id" => $post), "object" => array("\$inc" => array($opt => 1)), "upsert" => true));

if (!in_array($opt, array("opt_1","opt_2","opt_3","opt_4"))) {
  // http_send_status(400);
  // die(print_r($data));
  die('error');
}


curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result= curl_exec ($ch);
curl_close ($ch);
print_r($result);

?>