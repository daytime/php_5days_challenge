<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form name="form1" method="post" action="confirm.php">
            <p><label>名前<input type="text" name="name" id="name" required></label></p>
            <p><label>メールアドレス<input type="text" name="email" id="email" required></label></p>
            <p><label>お問い合わせ内容<textarea name="contact" id="message" required></textarea></label></p>
            <p><input type="submit" value="データを送信する">確認</input></p>
    </main>
    
</body>
</html>