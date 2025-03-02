<?php
//データを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$content = $_POST["content"];

$error = '';

if (strlen($name) < 1) {
    $error .= '名前が入力されていません<br>';
}
if (!filter_var(
    $email,
    FILTER_VALIDATE_EMAIL,
    FILTER_FLAG_EMAIL_UNICODE
)) {
    $error .= 'メールアドレスの形式が正しくありません<br>';
}

if ($error !== '') {
    echo $error;
    // exit;
}

echo '<hr>';
echo htmlspecialchars($name, ENT_QUOTES);

echo '<br>';
echo htmlspecialchars($email, ENT_QUOTES);

echo nl2br(htmlspecialchars($content, ENT_QUOTES));
