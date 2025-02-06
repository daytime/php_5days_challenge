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
            <p><label for="name">お名前</label></p>
            <input type="text" name="name" id="name" required>
            <label for="email">メールアドレス</label>
            <input type="email" name="email" id="email" required>
            <label for="message">お問い合わせ内容</label>
            <textarea name="message" id="message" required></textarea>
            <button type="submit">確認</button>
    </main>
    
</body>
</html>