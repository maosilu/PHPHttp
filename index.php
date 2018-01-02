<?php
$title = $_POST['title'];
$content = $_POST['content'];

$link = mysqli_connect('localhost', 'root', '123456');
mysqli_select_db($link, 'test');
mysqli_set_charset($link, 'utf8');
$sql = "INSERT INTO message(title, content) VALUES('{$title}', '{$content}');";
mysqli_query($link, $sql);
mysqli_close($link);