<?php
/**
使用PHP模拟表单提交
*/
$postData = array(
	'title' => '我是file_get_contents构造的数据',
	'content' => '我是file_get_contents构造的数据内容',
	'submit' => '提交',
);
$postData = http_build_query($postData);

$opts = array(
	'http' => array(
		'method' => 'POST',
		'header' => "Host:localhost\r\n".
		"Content-type:application/x-www-form-urlencoded\r\n".
		"Content-length:".strlen($postData)."\r\n",
		'content' => $postData,
	),
);

$context = stream_context_create($opts);
file_get_contents("http://localhost:8080/PHPHttp/index.php", false, $context);