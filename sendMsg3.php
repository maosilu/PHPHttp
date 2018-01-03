<?php
/**
socket方式提交表单
*/
$postData = array(
	'title' => 'socket方式提交表单',
	'content' => 'socket方式提交表单内容',
	'submit' => '提交',
);
$postData = http_build_query($postData);

$fp = fsockopen("localhost", 8080, $errno, $error, 5);
$request = "POST http://localhost:8080/PHPHttp/index.php HTTP/1.1\r\n";
$request .= "Host:localhost\r\n";
$request .= "Content-type:application/x-www-form-urlencoded\r\n";
$request .= "Content-length:".strlen($postData)."\r\n\r\n";
$request .= $postData;

fwrite($fp, $request);
while(!feof($fp)){
	echo fgets($fp, 1024);
}

fclose($fp);