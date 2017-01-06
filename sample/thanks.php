<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>送信完了 | Symply </title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/thanks.css">
  <link rel="shortcut icon" href="images/logo.jpg">
  <script src="jquery-3.1.1.min.js"></script> 
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
  <div id = "kihon">
    <h1>送信完了</h1>
    <p>ご希望条件の送信ありがとうございます。</p>
    <p>ご希望条件に沿った異性とのマッチングが完了次第、登録のメールアドレスにご連絡差し上げます。</p>
    <p>迅速な対応を心がけておりますが、条件次第によってはご連絡までお時間がかかる場合がございます。</p>
    <p>予めご了承ください。</p>
    

<?php
if (isset($_SESSION['facebook_access_token'])) {
	try {
				
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
	
	echo "<centre><p><a href='index.php'>ログアウト</a></p></center>";
 
}
?>
</div>

<!-- Twitter universal website tag code -->
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','nw1ss');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code -->
    
</body>
</html>
