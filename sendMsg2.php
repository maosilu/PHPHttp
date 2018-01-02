<?php
/**
使用cUrl模拟表单提交
*/
$postData = array(
	'title' => 'curl方式提交数据',
	'content' => 'curl方式提交数据的内容',
	'submit' => '提交',
);

$url = "http://localhost:8080/PHPHttp/index.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
echo $output;