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
  <link rel="stylesheet" href="dating.css">
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
 　<header class="header">     
      <h2 class="heading">デート一覧</h2>
   </header>
    <p id="text">現在開催中のデート一覧になります。</p>
    <p id="text">興味のあるデートをクリックし、ご希望条件の入力をお願いします(複数選択可)。</p>
   <section class="dating">
       <table>
<!--    <table border=1>-->
     <th>
      <div class="tennis_group">
        <a href="http://symply.jp/tennis.php"><img class="tennis_image" src="images/tennis.jpg" alt="">
            <p class="tennis_text">
              テニスデート<br>
              相手探しにピッタリ！気軽に楽しめるテニスデート<br>
            </p></a>
      </div>
     </th>
     <th><div class="cooking">
      <div class="cooking_group">
        <a href="http://symply.jp/cooking.php"><img class="cooking_image" src="images/cooking.jpg" alt="">
            <p class="cooking_text">
              料理デート<br>
              得意料理を一緒に作ろう！料理デート<br>
            </p></a>
      </div>
     </div></th>
     <tr><th><div class="kansen_baseball">
         <a href="http://symply.jp/kansen_baseball.php"><img class="kansen_baseball_image" src="images/kansen_baseball.jpg" alt="">
            <p class="kansen_baseball_text">
              プロ野球観戦デート<br>
            　ファン同士で熱く盛り上がれ！プロ野球観戦デート<br>
            </p></a>
     </div></th>
     <th><div class="kansen_soccer">
        <a href="http://symply.jp/kansen_soccer.php"><img class="kansen_soccer_image" src="images/kansen_soccer.jpg" alt="">
            <p class="kansen_soccer_text">
              Jリーグ観戦デート<br>
            　ユニフォームを着て熱くなれ！Jリーグ観戦デート<br>
            </p></a>
     </div></th>
     </tr>
     <tr><th><div class="trip">
        <a href="http://symply.jp/trip.php"><img class="trip_image" src="images/trip2.jpg" alt="">
            <p class="trip_text">
              プチ観光デート<br>
            　湘南・鎌倉・浅草・横浜中華街など、近場でプチ旅行デート<br></p>
            <p class="trip_text2">
              ※東京・神奈川・千葉・埼玉限定</p>
            </a>
     </div></th>
     <th><div class="bowling">
        <a href="http://symply.jp/bowling.php"><img class="bowling_image" src="images/bowling.jpg" alt="">
            <p class="bowling_text">
              ボーリングデート<br>
            　競い合うのも教わるのもOK！ボーリングデート<br>
            </p></a>
     </div></th>
     </tr>
     <tr><th><div class="gurume">
        <a href="http://symply.jp/gurume.php"><img class="gurume_image" src="images/gurume2.jpg" alt="">
            <p class="gurume_text">
              グルメデート<br>
            　1人では行きづらいレストランへ！グルメデート<br>
            </p></a>
     </div></th>
     <th><div class="karaoke">
        <a href="http://symply.jp/karaoke.php"><img class="karaoke_image" src="images/karaoke.jpg" alt="">
            <p class="karaoke_text">
              カラオケデート<br>
            　練習相手探し、一緒に盛り上がるのもあり！カラオケデート<br>
            </p></a>
     </div></th>
     </tr>
　　　<tr><th><div class="run">
        <a href="http://symply.jp/run.php"><img class="run_image" src="images/run.jpg" alt="">
            <p class="run_text">
              ランニングデート<br>
            　リフレッシュも兼ねて！ランニングデート<br>
            </p></a>
     </div></th>
     <th><div class="movie">
        <a href="http://symply.jp/movie.php"><img class="movie_image" src="images/movie.jpg" alt="">
            <p class="movie_text">
              映画デート<br>
            　流行りの作品を2人で見に行こう！映画デート<br>
            </p></a>
     </div></th>
     </tr>
     <tr><th><div class="drive">
        <a href="http://symply.jp/drive.php"><img class="drive_image" src="images/drive.jpg" alt="">
            <p class="drive_text">
              ドライブデート<br>
            　気分転換にちょっと遠出したい人たちへ！ドライブデート<br>
            </p></a>
     </div></th>
     <th><div class="golf">
        <a href="http://symply.jp/golf.php"><img class="golf_image" src="images/golf.jpg" alt="">
            <p class="golf_text">
              ゴルフデート<br>
            　シミュレーションゴルフや打ちっぱなしから！ゴルフデート<br>
            </p></a>
     </div></th>
     </tr>
    </table>
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
