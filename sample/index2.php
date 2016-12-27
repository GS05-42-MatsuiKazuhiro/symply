<?php
session_start();
?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Facebookログイン | Symply</title>
<!--  <link rel="stylesheet" href="css/reset.css">-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/logo.jpg">
  <script src="jquery-3.1.1.min.js"></script> 
</head>
<body>
<!--Header-->
  <header class="header">
    <div id="header_navi">
        <div id="header_logo">
            <div id="toggle"><a class="header_pic"><center><img src ="images/symply.png" width="110px"></center></a></div>
                <ul id="menu" class="">
                <li style="display:inline"><a href="index.html" class="header_pic"><img src ="images/symply.png" width="180px"></a></li>
                <li style="display:inline"><a class ="home" href="index.html">&nbsp;&nbsp;&nbsp;HOME&nbsp;</a></li>
                <li style="display:inline"><a class ="home" href="http://symply.jp/column/">|&nbsp;&nbsp;Symplyコラム&nbsp;</a></li>
                <li style="display:inline"><a class ="home" href="http://symply.jp/index2.php">|&nbsp;&nbsp;Facebookで登録/ログイン&nbsp;</a></li>
                </ul>
        </div>
    </div>
      <script>
              $(function(){
          $("#toggle").click(function(){
            $("#menu").slideToggle();
            return false;
          });
          $(window).resize(function(){
            var win = $(window).width();
            var p = 480;
            if(win > p){
              $("#menu").show();
            } else {
              $("#menu").hide();
            }
          });
        });
      </script>
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
</header>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
    
<?php 
ini_set("display_errors", On);
error_reporting(E_ALL);
?>

    <?php
//header("Content-type: text/html; charset=utf-8");
 
//設定ファイル
require_once("config.php");
 
$helper = $fb->getRedirectLoginHelper();
 
//オプションによって認証画面の文言が変わる
//$permissions = ['email', 'user_likes','user_posts']; あなたの公開プロフィール、メールアドレス、タイムライン投稿、いいね！。
//$permissions = ['email', 'user_likes']; あなたの公開プロフィール、メールアドレス、いいね！。
//$permissions = ['email', 'user_posts'];あなたのタイムライン投稿。
//$permissions = ['email','user_friends'];あなたの公開プロフィール、友達リスト、メールアドレス。
//$permissions = ['email'];あなたの公開プロフィール、メールアドレス。
//あなたの公開プロフィール。
$permissions = [];
$loginUrl = $helper->getLoginUrl('http://symply.jp/callback.php', $permissions);
 
echo '<a href="' . $loginUrl . '"><img src="images/facebook_login.png" alt="facebookログイン" class="facebook"></a>';

?>

<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
    
<footer class="footer">
    Symply © 2016 
  </footer>
  <script src="lib/placeholders.min.js"></script>

</body>
</html>


