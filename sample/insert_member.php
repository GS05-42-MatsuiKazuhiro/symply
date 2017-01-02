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
$dating = implode(",", $_POST["dating"]);
$cooking = @implode(",", $_POST["cooking"]);
$run = @implode(",", $_POST["run"]);
$gurume = @implode(",", $_POST["gurume"]);
$trip = @implode(",", $_POST["trip"]);
$aqua = @implode(",", $_POST["aqua"]);
$karaoke = @implode(",", $_POST["karaoke"]);
$walking = @implode(",", $_POST["walking"]);
$movie = @implode(",", $_POST["movie"]);
$date = @implode(",", $_POST["date"]);
$lastname   = $_POST["lastname"];
$firstname = $_POST["firstname"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$zip31 = $_POST["zip31"];
$zip32 = $_POST["zip32"];
$pref31 = $_POST["pref31"];
$addr31  = $_POST["addr31"];
$college = $_POST["college"];
$email = $_POST["email"];
$email2 = $_POST["email2"];
$number = $_POST["number"];

//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=symply_db;charset=utf8;host=mysql606.db.sakura.ne.jp','symply','symply1015');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO member(id, dating, cooking, run, gurume, trip, aqua, karaoke, walking, movie, date, lastname, firstname, sex, age, zip31, zip32, pref31, addr31, college, email, email2, number, indate)VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :a13, :a14, :a15, :a16, :a17, :a18, :a19, :a20, :a21, :a22, sysdate())");
$stmt->bindValue(':a1', $dating, PDO::PARAM_STR);
$stmt->bindValue(':a2', $cooking, PDO::PARAM_STR);
$stmt->bindValue(':a3', $run, PDO::PARAM_STR);
$stmt->bindValue(':a4', $gurume, PDO::PARAM_STR);
$stmt->bindValue(':a5', $trip, PDO::PARAM_STR);
$stmt->bindValue(':a6', $aqua, PDO::PARAM_STR);
$stmt->bindValue(':a7', $karaoke, PDO::PARAM_STR);
$stmt->bindValue(':a8', $walking, PDO::PARAM_STR);
$stmt->bindValue(':a9', $movie, PDO::PARAM_STR);
$stmt->bindValue(':a10', $date, PDO::PARAM_STR);
$stmt->bindValue(':a11', $lastname, PDO::PARAM_STR);
$stmt->bindValue(':a12', $firstname, PDO::PARAM_STR);
$stmt->bindValue(':a13', $sex, PDO::PARAM_INT);
$stmt->bindValue(':a14', $age, PDO::PARAM_INT);
$stmt->bindValue(':a15', $zip31, PDO::PARAM_STR);
$stmt->bindValue(':a16', $zip32, PDO::PARAM_STR);
$stmt->bindValue(':a17', $pref31, PDO::PARAM_STR);
$stmt->bindValue(':a18', $addr31, PDO::PARAM_STR);
$stmt->bindValue(':a19', $college, PDO::PARAM_STR);
$stmt->bindValue(':a20', $email, PDO::PARAM_STR);
$stmt->bindValue(':a21', $email2, PDO::PARAM_STR);
$stmt->bindValue(':a22', $number, PDO::PARAM_STR);
$status = $stmt->execute();

    
//４．データ登録処理後
if (isset($_POST['lastname'])){
    $name = trim($_POST['lastname']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">姓が未入力です。<br><br></span>';
        echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
        echo '<span class="error">姓が未入力です。<br><br></span>';
        echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
  if (isset($_POST['firstname'])){
    $name = trim($_POST['firstname']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">名前が未入力です。<br><br></span>';
        echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
        echo '<span class="error">名前が未入力です。<br><br></span>';
        echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
  }
  
   if (isset($_POST['sex'])){
    $name = trim($_POST['sex']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
        echo '<span class="error">性別が未入力です。<br><br></span>';
        echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">性別が未入力です。<br><br></span>';
       echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
   if (isset($_POST['email'])){
    $name = trim($_POST['email']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
       echo '<span class="error">メールアドレスが未入力です。<br><br></span>';
       echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">メールアドレスが未入力です。<br><br></span>';
       echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
  }
    
   if (isset($_POST['email2'])){
    $name = trim($_POST['email2']);
    if ($name===""){
      // 空白のときエラー
      $isError = true;
       echo '<span class="error">メールアドレス（確認用）が未入力です。<br><br></span>';
       echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
    }
  } else {
    // 未設定のときエラー
    $isError = true;
       echo '<span class="error">メールアドレス（確認用）が未入力です。<br><br></span>';
       echo'<a href="member2.php"><input type="submit" value="戻る"><br><br></a>';
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
    
  <form method="POST" action="http://www.symply.jp">
    <input type="submit" value="TOPに戻る">
  </form>
  </div>
  </span>
<?php endif; ?>

</div>
</body>
</html>