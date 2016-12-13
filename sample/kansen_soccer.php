<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>サッカー観戦デート | Symply</title>
<!--  <link href="css/bootstrap.min.css" rel="stylesheet">-->
  <style>div{padding: 10px;font-size:16px;}</style>
  <link rel="shortcut icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/form.css">    
<!--Google Analytics-->
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-88866224-1', 'auto');
          ga('send', 'pageview');

    　</script>
<!--Google Analytics-->
</head>
<body>
    
    <!-- Main[Start] -->
<form method="post" action="insert_kansen_soccer.php">
  <div class="jumbotron">
   <dl>
     <dt><label>姓</label></dt>
        <dd><input type="text" id="name" name = "lastname"></dd>
     <dt><label>名</label></dt>
        <dd><input type="text" id="name" name = "firstname"></dd>
     <dt><label>性別</label></dt>
        <dd><input type="radio" name="sex" value="1" checked>男性<input type="radio" name="sex" value="2">女性</dd>
        <dt><label>年齢</label></dt>
        <dd><select name="age">
   　　　<option>18歳</option>
        <option>19歳</option>
        <option>20歳</option>
        <option>21歳</option>
        <option>22歳</option>
        <option>23歳</option>
        <option>24歳</option>
        <option>25歳</option>
        <option>26歳</option>
        <option>27歳</option>
        <option>28歳</option>
        <option>29歳</option>
       </select></dd>
     <dt><label>大学名（男性のみ）</label></dt>
        <dd><input type="text" id="college" name="college"></dd>
     <dt><label>Email</label></dt>
        <dd><input type="text" id="email" size="35" name="email"></dd>
     <dt><label>Email（確認用）</label></dt>
        <dd><input type="text" id="email" size="35" name="email2"></dd>
       <dt><label>ファンクラブ</label></dt>
       <dd><select name="myclub">
        <option value="1">特になし</option>
        <option value="2">浦和レッドダイヤモンズ</option>
        <option value="3">川崎フロンターレ</option>
  　　　</select></dd>
       <dt><label>相手のクラブ（複数選択可）</label></dt>
       <dd>
        <input type="checkbox" value="1" name="desire[]" checked>希望なし<br>
        <input type="checkbox" value="2" name="desire[]" checked>浦和レッドダイヤモンズ<br>
        <input type="checkbox" value="3" name="desire[]" checked>川崎フロンターレ
  　　　</dd>
<!--
     <label>相手の年齢(複数選択可)：
        <input type="checkbox" name="q1" value="その1"> 希望なし
        <input type="checkbox" name="q1" value="その2"> ±3歳以内
        <input type="checkbox" name="q1" value="その3"> 18歳～24歳
        <input type="checkbox" name="q1" value="その4"> 25歳～29歳
        <input type="checkbox" name="q1" value="その4"> 30歳～34歳
  　　<br>
     </label>
-->
       <dt><label>観戦場所(複数選択可)</label></dt>
       <dd>
        <input type="checkbox" name="place[]" value="1" checked>（ファンクラブの）ホームスタジアムのみ<br>
        <input type="checkbox" name="place[]" value="2" checked>東京都（スポーツカフェ・バー）
　　　　</dd>

       <dt><p id="submit"><input type="submit" value="送信"></p></dt>
    </dl>
  </div>
</form>
<!-- Main[End] -->
