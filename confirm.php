<?php
//echo "--- デバッグ開始 ---<br>";
//echo "届いた名前: " . $_POST['user_name'] . "<br>";
//echo "届いた年齢: " . $_POST['user_age'] . "<br>";
//echo "届いた電話番号: " . $_POST['user_tel'] . "<br>";
//echo "届いたメールアドレス: " . $_POST['user_email'] . "<br>";
//echo "届いた住所: " . $_POST['user_address'] . "<br>";
//echo "届いた質問: " . $_POST['user_name'] . "<br>";
//echo "--- デバッグ終了 ---<br><br>";

$name = $_POST['user_name'] ?? '';
$age  = $_POST['user_age'] ?? '';
$phone   = $_POST['user_tel'] ?? '';      
$email   = $_POST['user_email'] ?? '';    
$address = $_POST['user_address'] ?? '';  
$question = $_POST['user_question'] ?? '';
$gender  = $_POST['user_gender'] ?? '';   

$errors = [];

if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Zー々]+$/u", $name)) {
    $errors[] = "名前はひらがな、カタカナ、漢字、英字のみ使用可能です。（現在の入力値: $name）";
}

if (!is_numeric($age) || $age < 0 || $age > 150) {
    $errors[] = "年齢は0～150の間で入力してください。（現在の入力値: $age）";
}

if (!preg_match("/^[0-9-]+$/", $phone)) {
    $errors[] = "電話番号は数字とハイフンのみで入力してください。";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "メールアドレスの形式が正しくありません。";
}

if (empty($address)) {
    $errors[] = "住所を入力してください。";
}

if (count($errors) > 0) {
    echo "<h1>エラーが発生しました</h1>";
    foreach ($errors as $err) {
        echo "<p style='color:red;'>$err</p>";
    }
    echo '<a href="form.php">戻る</a>';
} else {
    echo "<h1>入力内容確認</h1>"; 

    echo "<p>名前： " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>年齢： " . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>電話番号： " . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>メールアドレス： " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>住所： " . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>質問： " . htmlspecialchars($question, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>性別： " . htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') . "</p>";
}
?>