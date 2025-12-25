<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>フォーム入力</h1>

    <div class="form-container">
        <form action="confirm.php" method="post">
            
            <div class="form-group">
                <label for="user_name">名前:</label>
                <input type="text" id="user_name" name="user_name">
            </div>

            <div class="form-group">
                <label for="user_age">年齢:</label>
                <input type="number" id="user_age" name="user_age">
            </div>

            <div class="form-group">
                <label for="user_tel">電話番号:</label>
                <input type="tel" id="user_tel" name="user_tel">
            </div>

            <div class="form-group">
                <label for="user_email">メールアドレス:</label>
                <input type="email" id="user_email" name="user_email">
            </div>

            <div class="form-group">
                <label for="user_address">住所:</label>
                <input type="text" id="user_address" name="user_address">
            </div>

            <div class="form-group">
                <label for="user_question">質問:</label>
                <input type="text" id="user_question" name="user_question">
            </div>

            <div class="form-group">
                <label for="user_gender">性別:</label>
                <select id="user_gender" name="user_gender">
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="button-area">
                <button type="submit" id="submit_btn" name="send">送信</button>
            </div>

        </form>
    </div>

</body>
</html>