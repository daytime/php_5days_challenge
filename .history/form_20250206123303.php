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
            <label for="email">メールアドレス<input type="text" name="email" id="email" required></label>
            <label for="message">お問い合わせ内容</label>
            <textarea name="message" id="message" required></textarea>
            <button type="submit">確認</button>
    </main>
    
</body>
</html>