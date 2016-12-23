<?php
session_start();
?>
 

<!DOCTYPE html>
<html lang="ja">
<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>デート一覧 | Symply</title>   
  <link rel="shortcut icon" href="images/logo.jpg">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css">
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
   <section class="about_symply">
　　 <h2 class="heading">デート内容</h2>
     <div id="qa">
    <p class="txt"><center>現在開催中の趣味デート一覧になります。</center><br><br>
             興味のあるデートをクリックし、ご希望条件の入力をお願いします。<br><br>
           
            <center><table border=1 class="table">
             <tr bgcolor = #4B99B5>　　　　　　　
                <td colspan=2 align=center width=500 height=40 style="color:white">趣味デート一覧</td>　 
             </tr>　　　　　　 
             <tr>
                 <td align=center><a href="http://symply.jp/tennis.php"><img src="images/tennis_icon.png" align="left" class="icon">&nbsp;&nbsp;テニス</a></td>
                 <td align=center><a href="http://symply.jp/cooking.php"><img src="images/cooking_icon.png" align="left" class="icon">&nbsp;&nbsp;料理</a></td>
             </tr>　
             <tr>
                 <td align=center><a href="http://symply.jp/kansen_baseball.php"><img src="images/baseball_icon.png" align="left" class="icon">&nbsp;&nbsp;プロ野球観戦</a></td>
                 <td align=center><a href="http://symply.jp/kansen_soccer.php"><img src="images/soccer_icon.png" align="left" class="icon">&nbsp;&nbsp;Jリーグ観戦</a></td>
             </tr>　
             <tr>
                 <td align=center><a href="http://symply.jp/run.php"><img src="images/run_icon.png" align="left" class="icon">&nbsp;&nbsp;ランニング</a></td>
                 <td align=center><a href="http://symply.jp/golf.php"><img src="images/golf_icon.png" align="left" class="icon">&nbsp;&nbsp;ゴルフ</a></td>
             </tr>　
             </table></center>
              
<!--
        　　　<center><table border=1 class="table">
             <tr bgcolor = #4B99B5>　　　　　　　
                <td colspan=2 align=center width=500 height=40 style="color:white">きっかけデート一覧</td>　 
             </tr>　
             <tr>
                <td align=center height=40>プチ観光</td>
                <td align=center height=40>ボーリング</td>
             </tr>　
             <tr>
                <td align=center height=40>グルメ</td>
                <td align=center height=40>カラオケ</td>
             </tr>　
             <tr>
                <td align=center height=40>映画</td>
                <td align=center height=40>水族館</td>
             </tr>　
             <tr>
                <td align=center height=40>ウォーキング</td>
             </tr>
            </table></center>
-->
  
     </div>
  </section>
</body>


 
<!--#_=_を排除する-->
<script type="text/javascript">
if (window.location.hash && window.location.hash == '#_=_') {
  if (window.history && history.pushState) {
      window.history.pushState("", document.title, window.location.pathname);
  } else {
    // Prevent scrolling by storing the page's current scroll offset
    var scroll = {
        top: document.body.scrollTop,
      left: document.body.scrollLeft
    };
    window.location.hash = '';
    // Restore the scroll offset, should be flicker free
    document.body.scrollTop = scroll.top;
    document.body.scrollLeft = scroll.left;
  }
}
</script>
    
<?php
//header("Content-type: text/html; charset=utf-8");
 
//設定ファイル
require_once("config.php");
 
if (isset($_SESSION['facebook_access_token'])) {
	
	$accessToken = $_SESSION['facebook_access_token'];
 
	$fb->setDefaultAccessToken($accessToken);
	
	try {
		//取得するユーザ情報の指定
		$response = $fb->get('/me?fields=id,name,first_name,last_name,email,gender');
		$profile = $response->getGraphUser();
		
		//ユーザ画像取得
		$UserPicture = $fb->get('/me/picture?redirect=false&height=200');
		$picture = $UserPicture->getGraphUser();
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	
	$id=$profile['id'];
	$name=$profile['name'];
	$first_name=(isset($profile['first_name'])) ? $profile['first_name'] : '';
	$last_name=(isset($profile['last_name'])) ? $profile['last_name'] : '';
	$email=$profile['email'];
	$gender=(isset($profile['gender'])) ? $profile['gender'] : '';
	$picture_url = $picture['url'];
    
   
//	echo "<p>アクセストークン：".$accessToken."</p>";
//	echo "<p>ID：".$id."</p>";
//	echo "<p>名前：".$name."</p>";
//	echo "<p>性別：".$gender."</p>";
//	echo "<p>ファーストネーム：".$first_name."</p>";
//	echo "<p>ラストネーム：".$last_name."</p>";
//	echo "<p>メール：".$email."</p>";//ユーザが未公開・未設定の場合は表示されない
//	echo "<p><img src=".$picture_url."></p>";
	
	echo "<p><a href='logout.php'>ログアウト</a></p>";
 
}else{
	header('Location: index.php');
	exit();
}
?>
