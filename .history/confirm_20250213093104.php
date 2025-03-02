<?php
//データを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$content = $_POST["content"];

$error = '';

if (strlen($name) < 1) {
    $error .= '名前が入力されていません<br>';
}
if 