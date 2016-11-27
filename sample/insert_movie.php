<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>送信完了</title>
  <link href="css/thanks.css" rel="stylesheet">
</head>
<body>
<div>

<?php
//1. POSTデータ取得
$lastname   = $_POST["lastname"];
$firstname = $_POST["firstname"];
$sex   = $_POST["sex"];
$age = $_POST["age"];
$college  = $_POST["college"];
$email   = $_POST["email"];
$email2 = $_POST["email2"];
$title = implode(",", $_POST["title"]); 
$place  = $_POST["place"];

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=symply_db;charset=utf8;host=mysql606.db.sakura.ne.jp','symply','symply1015');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO movie(id, lastname, firstname, sex, age, college, email, email2, title, place, indate)VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, sysdate())");
$stmt->bindValue(':a1', $lastname, PDO::PARAM_STR);
$stmt->bindValue(':a2', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':a3', $sex, PDO::PARAM_INT);
$stmt->bindValue(':a4', $age, PDO::PARAM_INT);
$stmt->bindValue(':a5', $college, PDO::PARAM_STR);
$stmt->bindValue(':a6', $email, PDO::PARAM_STR);
$stmt->bindValue(':a7', $email2, PDO::PARAM_STR);
$stmt->bindValue(':a8', $title, PDO::PARAM_INT);
$stmt->bindValue(':a9', $place, PDO::PARAM_INT);
$status = $stmt->execute();

    
//４．データ登録処理後
if (isset($_POST['lastname'])){
    $name = trim($_POST['lastname']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">姓が未入力です。<br><br></span>';
        echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
        echo '<span class="error">姓が未入力です。<br><br></span>';
        echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
  if (isset($_POST['firstname'])){
    $name = trim($_POST['firstname']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">名前が未入力です。<br><br></span>';
        echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
        echo '<span class="error">名前が未入力です。<br><br></span>';
        echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
  }
  
   if (isset($_POST['sex'])){
    $name = trim($_POST['sex']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">性別が未入力です。<br><br></span>';
        echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">性別が未入力です。<br><br></span>';
       echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
   if (isset($_POST['email'])){
    $name = trim($_POST['email']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
       echo '<span class="error">メールアドレスが未入力です。<br><br></span>';
       echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">メールアドレスが未入力です。<br><br></span>';
       echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
   if (isset($_POST['email2'])){
    $name = trim($_POST['email2']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
       echo '<span class="error">メールアドレス（確認用）が未入力です。<br><br></span>';
       echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">メールアドレス（確認用）が未入力です。<br><br></span>';
       echo'<a href="movie.php"><input type="submit" value="戻る"><br><br></a>';
  }
?>

<!--
<?php if ($isError): ?>
   エラーがあったとき 
  <span class="error">未入力項目がございます。</span>
  <form method="POST" action="tennis.php">
    <input type="submit" value="戻る">
  </form>
<?php else: ?>
-->

<!-- エラーがなかったとき -->
  <span>
  <div id = "kihon">
  <h1>送信完了</h1>
    <p>ご希望条件の送信ありがとうございます。</p>
    <p>ご希望条件に沿った異性とのマッチングが完了次第、登録のメールアドレスにご連絡差し上げます。</p>
    <p>迅速な対応を心がけておりますが、条件次第によってはご連絡までお時間がかかる場合がございます。</p>
    <p>予めご了承ください。</p>
    
  <form method="POST" action="member.php">
    <input type="submit" value="デート一覧に戻る">
  </form>
  </div>
  </span>
<?php endif; ?>

</div>
</body>
</html>