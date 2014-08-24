<?php
require_once('Curl.php');
use \Curl\Curl;

function httpmsg($code)
{
$curl = new Curl();
$curl->get('http://fellwell5.lima-city.de/httpcodes/api.php', array(
    'code' => $code,
));
$json = $curl->response;
$json = json_decode($json,true);
return($json["msg"]);
}

function httpmean($code)
{
$curl = new Curl();
$curl->get('http://fellwell5.lima-city.de/httpcodes/api.php', array(
    'code' => $code,
));
$json = $curl->response;
$json = json_decode($json,true);
return($json["mean"]);
}