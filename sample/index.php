<?php
session_start();
?>



<!DOCTYPE html>
<!-- microdata マークアップを Google 構造化データ マークアップ支援ツールで追加 -->
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Symply[シンプリー] | 趣味でつながるデートサービス</title>
  <meta name="description" content="男性2,980円、女性980円で同じ趣味を持った異性とデートができる！趣味デートサービスSymply[シンプリー]で理想の恋人を見つけよう！">
  <meta name="keywords" content="趣味, デート, 趣味デート, カップル, 趣味友, 恋活, 婚活, 東京デート">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="alternate" hreflang="ja" href="http://www.symply.jp">
<!--  <link rel="stylesheet" href="css/reset.css">-->
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="style.css?201601192">
  <link rel="shortcut icon" href="images/logo.jpg">
  <script src="jquery-3.1.1.min.js"></script> 
</head>
<body>
<span itemscope itemtype="http://schema.org/Product">
<meta itemprop="image" content="http://www.symply.jp/images/tennis.jpg">
<!--Header-->
  <header class="header">
    <div id="header_navi">
        <div id="header_logo">
            <div id="toggle"><a class="header_pic"><center><img src ="images/symply.png" width="110px"></center></a></div>
                <ul id="menu" class="">
                <li style="display:inline"><a href="index.php" class="header_pic"><img src ="images/symply.png" width="180px"></a></li>
                <li style="display:inline"><a class ="home" href="index.php">&nbsp;&nbsp;&nbsp;HOME&nbsp;</a></li>
                <li style="display:inline"><a class ="home" href="http://www.symply.jp/column/">|&nbsp;&nbsp;Symplyコラム&nbsp;</a></li>
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
    
    <table cellpadding="0" cellspacing="0" class="header_table"><tbody>
        <tr><td><img src="images/tennis.jpg" class="header_pic2"></td><td><img src="images/karaoke.jpg" class="header_pic2"></td><td><img src="images/trip_header2.jpg" class="header_pic2"></td><td><img src="images/gurume.jpg" class="header_pic2"></td><td><img src="images/kansen_soccer_header.jpg" class="header_pic2"></td><td><img src="images/bowling.jpg" class="header_pic2"></td>
<!--            <td><img src="images/walking.jpg" class="header_pic2"></td>--></tr></tbody></table>
 
    <table cellpadding="0" cellspacing="0" class="header_table_pc" width="80%"><tbody>
        <tr><td><img src="images/header_couple4.jpg"></td>
            <td><h2><font color="pink"><img src="images/shuku.jpg" width="7%">リリース1ヵ月でデート開催数100回突破</font></h2>
                <h1><font color="#9966CC">13の趣味でつながるデートサービス</font></h1><br><p class="txt"><a href="kiyaku.html">利用規約</a>および<a href="privacy.html">プライバシーポリシー</a>に同意して<br>
                
                <?php

// composerで生成されたオートロドファイル読み込み
require_once( 'vendor/autoload.php' );

// DBと接続
require_once( 'dbconnect.php' );

// Facebookログインしたユーザー情報をDBに保存するPHPスクリプト
require_once( 'checkuser.php' );

// 訪問者がすでにFacebookログインしているかどうかを確認
if (isset($_SESSION['facebook_access_token'])) {

	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	// 参考： https://developers.facebook.com/docs/php/gettingstarted
	$response = $fb->get('/me');
	$user = $response->getGraphObject();

	// 下記のような感じで情報を取り出せます。
	$fid = $user['id']; // ID
	$fname = $user['name']; // 名前
	$femail = $user['email'];// Email
	$fphoto = "http://graph.facebook.com/" . $user['id'] . "/picture?type=large"; // 顔写真のURL

//	echo $fid;
//	echo $fname;

	// ログイン済み、かつ新規ユーザーの場合は、DBに会員情報を保存する関数読み込み
	checkuser($fid, $fname, $femail, $fphoto, $mysqli); ?>

<!--
	<p>ログインしました</p>
-->
<?php } else {
	// ログインしていないユーザーには、Facebookログインリンクを表示する
	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email'];

	// 下記のURL部分を環境にあわせて変更してください
	$loginUrl = $helper->getLoginUrl('http://www.symply.jp/login-callback.php', $permissions);
	echo '<a href="' . $loginUrl . '"><img src="images/facebook_login.png" alt="facebookログイン" class="facebook"></a>';
}
  ?>
                
<br>Facebookには一切投稿されません。<br>18歳未満の方や独身でない方はご登録いただけません。</p><br></td></tr></tbody>
    </table>
    
<div class="header_sp">
    <h3><font color="pink"><p class ="txt4"><img src="images/shuku.jpg" class="shuku">リリース1ヵ月で、デート開催数100回突破</font></h3>
<img src ="images/header_couple4.jpg" alt="Slideshow Image 1" class="slideshow" /> 
    <h2><p class ="txt4"><font color="#9966CC"><strong>13の趣味でつながるデートサービス</strong></font></p></h2><p class ="txt2"><a href="kiyaku.html">利用規約</a>および<a href="privacy.html">プライバシーポリシー</a>に同意して<br>
    
    <?php

// composerで生成されたオートロドファイル読み込み
require_once( 'vendor/autoload.php' );

// DBと接続
require_once( 'dbconnect.php' );

// Facebookログインしたユーザー情報をDBに保存するPHPスクリプト
require_once( 'checkuser.php' );

// 訪問者がすでにFacebookログインしているかどうかを確認
if (isset($_SESSION['facebook_access_token'])) {

	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	// 参考： https://developers.facebook.com/docs/php/gettingstarted
	$response = $fb->get('/me');
	$user = $response->getGraphObject();

	// 下記のような感じで情報を取り出せます。
	$fid = $user['id']; // ID
	$fname = $user['name']; // 名前
	$femail = $user['email'];// Email
	$fphoto = "http://graph.facebook.com/" . $user['id'] . "/picture?type=large"; // 顔写真のURL

//	echo $fid;
//	echo $fname;

	// ログイン済み、かつ新規ユーザーの場合は、DBに会員情報を保存する関数読み込み
	checkuser($fid, $fname, $femail, $fphoto, $mysqli); ?>

<!--
	<p>ログインしました</p>
-->

<?php } else {
	// ログインしていないユーザーには、Facebookログインリンクを表示する
	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email'];

	// 下記のURL部分を環境にあわせて変更してください
	$loginUrl = $helper->getLoginUrl('http://www.symply.jp/login-callback.php', $permissions);
	echo '<a href="' . $loginUrl . '"><img src="images/facebook_login.png" alt="facebookログイン" class="facebook"></a>';
}
  ?>
    <br>Facebookには一切投稿されません。</p></div>
    
    <table cellpadding="0" cellspacing="0" class="header_table"><tbody>
        <tr><td><img src="images/run.jpg" class="header_pic2"></td><td><img src="images/golf.jpg" class="header_pic2"></td><td><img src="images/trip2.jpg" class="header_pic2"></td><td><img src="images/kansen_baseball2.jpg" class="header_pic2"></td><td><img src="images/cooking.jpg" class="header_pic2"></td><td><img src="images/movie.jpg" class="header_pic2"></td>
<!--            <td><img src="images/borudaring.jpg" class="header_pic2"></td>--></tr></tbody></table>
        
    
    <span itemprop="description"><h2>おすすめポイント</h2>
    <div class="skills-wrapper_sp">
      <div class="skill-box_sp">  
          <h2><img style="vertical-align:top;" src="images/one.png" width="8%"/><span style="display:inline-block;">いきなりデート</span></h2>
        <p><img src ="images/2nd.png" class ="user"></p>
        <p class="skill-text">
          マッチングアプリや街コンと違い、二人でデートするまでの駆け引き不要。まずは、会って相性を確かめましょう
        </p>
      </div>
      <div class="skill-box_sp">
          <h2><img style="vertical-align:top;" src="images/two.png" width="8%"/><span style="display:inline-block;">趣味つながり</span></h2><br>
        <p><img src ="images/ban5.png" class = "matching2"></p><br>
        <p class="skill-text">
          見た目やトーク力ではなく、趣味つながりで気軽に異性とデート
        </p>
      </div>
      <div class="skill-box_sp">
          <h2><img style="vertical-align:top;" src="images/three.png" width="8%"/><span style="display:inline-block;">告白不要</span></h2><p><img src ="images/couple_mono.png" class = "user"></p>
        <p class="skill-text">
            デート後に「もう一度会いたい」「付き合いたい」などの評価を導入。両思いでカップル誕生
        </p>
      </div>
        </div></span>

　　<section class="about_symply">
　　 <h2 class="heading">デート内容</h2>           
      <p class="skill-text"><br>
          趣味デートはスポーツ・観光・文化・グルメに分かれています。<br>この中から、好きな趣味デートを選んで頂き、マッチングします。(複数選択可)
        </p><br>
            <center><table border=1 class="table2">
             <tr>
                 <td rowspan=4 align=center style="color:black" bgcolor = #B0E0E6><b>スポーツ</b></td>
                <td align=center><img src="images/tennis_icon.png" class="icon4">テニス</td>
             </tr>
             <tr>
                <td align=center><img src="images/run_icon.png" class="icon4">ランニング</td>
             </tr>
             <tr>
                <td align=center><img src="images/bowling_icon.png" class="icon4">ボーリング</td>
             </tr> 
             <tr>
                <td align=center><img src="images/golf_icon.png" class="icon4">ゴルフ</td>
             </tr>  
                
             <tr>
                 <td rowspan=4 align=center style="color:black" bgcolor = #B0E0E6><b>観光</b></td>
                <td align=center><img src="images/trip_icon.png" class="icon4">プチ旅行</td>
             </tr>　
             <tr>
                <td align=center><img src="images/aqua_icon.png" class="icon4">水族館</td>
             </tr>　
             <tr>
                <td align=center><img src="images/baseball_icon.png" class="icon4">野球観戦</td>
             </tr>　
             <tr>
                <td align=center><img src="images/kansen_soccer_icon.png" class="icon4">Jリーグ観戦</td>
             </tr>
                
             <tr>
                 <td rowspan=3 align=center style="color:black" bgcolor = #B0E0E6><b>文化</b></td>
                <td align=center><img src="images/movie_icon.png" class="icon4">映画</td>
             </tr>　
             <tr>
                <td align=center><img src="images/karaoke_icon.png" class="icon4">カラオケ</td>
             </tr>　
            　<tr>
                <td align=center><img src="images/walking_icon.png" class="icon4">ウォーキング</td>
             </tr>
                
             <tr>
                 <td rowspan=3 align=center style="color:black" bgcolor = #B0E0E6><b>グルメ</b></td>
                <td align=center><img src="images/cooking_icon.png" class="icon4">料理</td>
             </tr>　
             <tr>
                <td align=center><img src="images/gurume_icon.png" class="icon4">グルメ</td>
             </tr>
            </table></center>
  </section>
    
　<section class="about_symply">
　　 <h2 class="heading">参加条件</h2>
     <p class="about-text2">18～29歳で独身の方のみ(高校生不可)、場所は東京で1時間のデートになります。<br><br>
          男性会員のみ、大卒（大学生可）が参加資格となります。<br><br></p>
     
         <center><table border=1 class="table2" width="50%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td align=center width=200 height=40 style="color:black"> </td>　 
                <td align=center width=200 height=40 style="color:black">年齢</td>　   
                <td align=center width=200 height=40 style="color:black">配偶者</td> 
                <td align=center width=200 height=40 style="color:black">学歴</td>　 
                <td align=center width=200 height=40 style="color:black">時間</td>　   
                <td align=center width=200 height=40 style="color:black">場所</td> 
             </tr>　　　
             <tr>
                <td align=center height=40>男性会員</td>
                <td rowspan=2 align=center height=40>18歳～29歳</td>
                <td rowspan=2 align=center height=40>独身の方のみ</td>
                <td align=center height=40>大卒以上(大学生可)</td>
                <td rowspan=2 align=center height=40>1時間</td>
                <td rowspan=2 align=center height=40>東京都</td>
             </tr>
            　<tr>
                <td align=center height=40>女性会員</td>
                <td align=center height=40>---</td>
             </tr>
            </table></center><br><br>
  </section>

 <section class="money">
    <h2 class="heading">料金</h2>
      <p class="about-text2">
          男性 2,980円/回(税込)・女性 980円/回(税込) となります。<br><br>
    </p>
    <center><table border=1 class="table2" width="20%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td align=center width=200 height=40 style="color:black"> </td>　 
                <td align=center width=200 height=40 style="color:black">料金</td>　   
             </tr>　　　
             <tr>
                <td align=center height=40>男性会員</td>
                <td align=center height=40>2,980円/回</td>
             </tr>
            　<tr>
                <td align=center height=40>女性会員</td>
                <td align=center height=40>980円/回</td>
             </tr>
            </table></center>
　</section>
    
　  <section class="skills_pc">
    <h2 class="heading">付き合うまでのステップ</h2>
    <div class="skills-wrapper_a">
      <div class="skill-box">  
          <div class="skill-title"><img style="vertical-align:top;" src="images/one.png" width="10%"/><span style="display:inline-block;">趣味デート登録</span>
        <p><img src ="images/user.png" class = "user"></p>
        <p class="skill-text">
          Facebookログイン後、興味のある趣味デートを選ぶ
        </p>
      </div>
        </div>
     <div class="skill-box">
         <div class="skill-title"><img style="vertical-align:top;" src="images/two.png" width="10%" /><span style="display:inline-block;">いきなりデート</span>
        <p><img src ="images/dating_skill.png" class = "matching"></p>
        <p class="skill-text">
          1時間限定で同じ趣味を選んだ人とデート
        </p>
      </div>
          </div>
      <div class="skill-box">
        <div class="skill-title"><img style="vertical-align:top;" src="images/three.png" width="10%" /><span style="display:inline-block;">2ndデート</span>
        <p><img src ="images/love.png" class = "user"></p>
        <p class="skill-text">
          デート後に「もう一度会いたいか」回答。両想い限定でセカンドデート
        </p>
      </div>
         </div>
      <div class="skill-box">
          <div class="skill-title"><img style="vertical-align:top;" src="images/four.png" width="10%" /><span style="display:inline-block;">カップル誕生</span>
        <p><img src ="images/valuation.png" class = "mail"></p>
        <p class="skill-text">
          セカンドデート後に「付き合いたいか」を回答。両想いでカップル誕生
        </p>
      </div>
    </div>
    </div>
  </section>
    
   <section class="skills_sp">     
    <h2 class="heading">付き合うまでのステップ</h2>
    <div class="skills-wrapper_a">
      <div class="skill-box">  
          <div class="skill-title"><img style="vertical-align:top;" src="images/one.png" width="15%"/><span style="display:inline-block;">デート登録</span></div>
        <p><img src ="images/user.png" class = "user"></p>
        <p class="skill-text">
          Facebookログイン後、興味のある趣味デートを選ぶ
        </p>
      </div>
     <div class="skill-box">
         <div class="skill-title"><img style="vertical-align:top;" src="images/two.png" width="15%"/><span style="display:inline-block;">いきなりデート</span></div>
        <p><img src ="images/dating_skill.png" class = "matching"></p>
        <p class="skill-text">
          1時間限定で同じ趣味デートを選んだ人とデート
        </p>
      </div>
      </div>
      <div class="skills-wrapper_a">
      <div class="skill-box">
          <div class="skill-title"><img style="vertical-align:top;" src="images/three.png" width="15%"/><span style="display:inline-block;">2ndデート</span></div>
        <p><img src ="images/love.png" class = "user"></p>
        <p class="skill-text">
          デート後に「もう一度会いたいか」回答。両想い限定でセカンドデート
        </p>
      </div>
      <div class="skill-box">
          <div class="skill-title"><img style="vertical-align:top;" src="images/four.png" width="15%"/><span style="display:inline-block;">カップル誕生</span></div>
        <p><img src ="images/valuation.png" class = "mail"></p>
        <p class="skill-text">
          セカンドデート後に「付き合いたいか」を回答。両想いでカップル誕生
        </p>
      </div>
    </div>
  </section>
    
  <section class="uservoice">
        
        <h2 class="heading">お客様の声</h2>
        
        <p class="about-text2"><img style="vertical-align:top;" src="images/one.png" width="1.5%" height="1.5%"/>【水族館デート】男性・27歳・上場企業勤務・KMさん</p><br>
        <img src="images/man2.png" class="man">
    <div id="balloon-3-left">
        待ち合わせのときは、心臓がバクバクしてましたが、中学・高校の入学式のような期待感が蘇りました。
        あまり話すのが得意ではなかったのですが、たくさんの魚たちと幻想的な雰囲気で自然にお相手の方と楽しむことができました。
        また、機会があれば利用させて頂きます。
    </div>
        
        <p class="about-text2"><img style="vertical-align:top;" src="images/two.png" width="1.5%" height="1.5%"/>【料理デート】女性・25歳・丸の内OL・AKさん</p>
    <div id="balloon-3-right">
        料理は日頃から自炊していたので、問題なく楽しめました。
        いきなりデートは少し不安でしたが、材料も場所も用意されていたので、取り越し苦労でした。今は、「他のデートも試してみようかな〜」と思ってます。
    </div>
        <img src="images/woman1.png" class="man">
        
        <p class="about-text2"><img style="vertical-align:top;" src="images/three.png" width="1.5%" height="1.5%"/>【テニスデート】男性・23歳・社会人1年目・YYさん</p><br>
        <img src="images/man1.png" class="man">
    <div id="balloon-3-left">
        テニスデート、とても楽しかったです。中学からテニスをしていたので、自信がありました！お相手の方は、大学生でサークルで練習していたみたいです。ボレー教えてあげたら、喜んでました笑。職場で異性と接する機会がないので有難いです。
    </div>
        <p class="about-text2"><img style="vertical-align:top;" src="images/four.png" width="1.5%" height="1.5%"/>【ウォーキングデート】女性・19歳・大学生・ETさん</p>
        <div id="balloon-3-right">
        趣味があまり思い浮かばなかったので、ウォーキングデートを選びました。少し寒かったですが(笑)、吉祥寺の井の頭公園を歩いてたら犬の散歩に遭遇したり、癒しポイントが多かったです。友達にもオススメします！
    </div>
        <img src="images/woman2.png" class="man">
    </section>
    
    <section class="uservoice_sp">
        <h2 class="heading">お客様の声</h2>
        <p class="about-text2"><img style="vertical-align:top;" src="images/one.png" width="5%"/>【水族館デート】<br>男性・27歳・上場企業勤務・KMさん</p><br>
        <img src="images/man2.png" class="man">
    <div id="balloon-2-left">
        <p class="txt">
        待ち合わせのときは、心臓がバクバクしてましたが、中学・高校の入学式のような期待感が蘇りました。あまり話すのが得意ではなかったのですが、たくさんの魚たちと幻想的な雰囲気で自然にお相手の方と楽しむことができました。また、機会があれば利用させて頂きます。
        </p>
    </div>
        <br><br><p class="about-text2"><img style="vertical-align:top;" src="images/two.png" width="5%"/>【料理デート】<br>女性・25歳・丸の内OL・AKさん</p><br>
        <img src="images/woman1.png" class="man">
    <div id="balloon-2-left">
        <p class="txt">料理は日頃から自炊していたので、問題なく楽しめました。
            いきなりデートは少し不安でしたが、材料も場所も用意されていたので、取り越し苦労でした。今は、「他のデートも試してみようかな〜」と思ってます。</p>
    </div>
        <br><br><p class="about-text2"><img style="vertical-align:top;" src="images/three.png" width="5%"/>【テニスデート】<br>男性・23歳・社会人1年目・YYさん</p><br>
        <img src="images/man1.png" class="man">
    <div id="balloon-2-left">
        <p class="txt">テニスデート、とても楽しかったです。中学からテニスをしていたので、自信がありました！お相手の方は、大学生でサークルで練習していたみたいです。ボレー教えてあげたら、喜んでました笑。職場で異性と接する機会がないので有難いです。</p>
    </div>
        <br><br><p class="about-text2"><img style="vertical-align:top;" src="images/four.png" width="5%"/>【ウォーキングデート】<br>女性・19歳・大学生・ETさん</p><br>
        <img src="images/woman2.png" class="man">
        <div id="balloon-2-left">
            <p class="txt">趣味があまり思い浮かばなかったので、ウォーキングデートを選びました。少し寒かったですが(笑)、吉祥寺の井の頭公園を歩いてたら犬の散歩に遭遇したり、癒しポイントが多かったです。友達にもオススメします！</p>
    </div>
        
    </section>
    
<!--
       <div>
    <img src="images/couple_different.jpg" class="sa">
    </div>
-->
    
<!--
        <section class="skills_pc"> 
　  <h2 class="heading">Symplyコラム</h2>
    <p class="skill-text">
      Symply運営事務局が監修の恋愛コンテンツ。Symplyでパートナーが見つかる秘訣も大公開。
    </p>
      <ol class="ranking">
        <div id="pc_ranking">
        <li class="ranking-item" style="float:left;">
         <div id="ranking_solid">
          <a href="http://symply.jp/column/2017/01/07/%E6%AC%A1%E3%81%AE%E3%83%87%E3%83%BC%E3%83%88%E3%81%AB%E3%81%A4%E3%81%AA%E3%81%92%E3%82%8B%E3%81%9F%E3%82%81%E3%81%AB%E3%81%AF%EF%BC%9F%E3%80%8C%E3%81%BE%E3%81%9F%E4%BC%9A%E3%81%84%E3%81%9F%E3%81%84/">
            <img class="image2" src="images/young_couple_kiss.jpg" alt="次のデートへの愛情表現">
              <br><p class="text3"><b>次のデートにつなげるためには？「また会いたい！」という気持ちをシンプルに伝える方法を紹介！</b></p>
          </a>
         </div>
        </li>
        <li class="ranking-item" style="float:right;">
         <div id="ranking_solid">
          <a href="http://symply.jp/column/2017/01/07/%E3%83%87%E3%83%BC%E3%83%88%E3%81%A7%E7%94%B7%E6%80%A7%E3%82%A6%E3%82%B1%E3%81%8C%E6%8A%9C%E7%BE%A4%E3%81%AE%E6%9C%8D%E3%81%AE%E3%82%B3%E3%83%BC%E3%83%87%E3%82%84%E9%81%B8%E3%81%B3%E6%96%B9%E3%81%A8/">
            <img class="image" src="images/dating_for_fashion.jpg" alt="グラフの画像">
            <p class="text"><b>デートで男性ウケが抜群の服のコーデや選び方とは？</b></p>
          </a>
         </div>
        
        </li>
        <li class="ranking-item" style="float:right;">
         <div id="ranking_solid">
          <a href="http://symply.jp/column/2017/01/07/%E8%B6%A3%E5%91%B3%E3%83%87%E3%83%BC%E3%83%88%E3%81%8C%E7%9B%9B%E3%82%8A%E4%B8%8A%E3%81%8C%E3%82%8B%E7%90%86%E7%94%B1%E3%81%A8%E3%81%AF%EF%BC%9F%E5%AE%9A%E7%95%AA%E3%83%87%E3%83%BC%E3%83%88%E3%81%AB/">
            <img class="image" src="images/hobby_dating_recommend.jpg" alt="グラフの画像">
            <p class="text"><b>趣味デートが盛り上がる理由とは？定番デートに飽きがきたら、趣味デートがおすすめ！</b></p>
          </a>
         </div>
        </li>
        </div>
    </ol>
    
    <p><font color="white">
<font size="2">
      Symply運営事務局が監修の恋愛コンテンツ。Symplyでパートナーが見つかる秘訣も大公開。
        </font></font>
    </p>
    
    <ol class="ranking">
        <div id="pc_ranking">
        <li class="ranking-item" style="float:left;">
         <div id="ranking_solid">
          <a href="http://symply.jp/column/2017/01/08/%E3%83%87%E3%83%BC%E3%83%88%E3%81%A7%E6%B2%88%E9%BB%99%E3%81%AB%E5%9B%B0%E3%81%A3%E3%81%9F%E4%BA%BA%E3%81%A7%E3%82%82%E5%A4%A7%E4%B8%88%E5%A4%AB%EF%BC%81%E8%81%9E%E3%81%8B%E3%82%8C%E3%81%9F%E3%82%89/">
            <img class="image" src="images/dating_communication.jpg" alt="グラフの画像">
            <p class="text"><b>デートで沈黙に困った人でも大丈夫！聞かれたら嬉しい話題を一挙紹介！</b></p>
          </a>
         </div>
        </li>
        <li class="ranking-item" style="float:right;">
         <div id="ranking_solid">
          <a href="http://symply.jp/column/2017/01/10/%E6%81%8B%E6%B4%BB%E3%83%BB%E5%A9%9A%E6%B4%BB%E3%83%BB%E3%81%8A%E8%A6%8B%E5%90%88%E3%81%84%E3%83%BB%E3%82%AB%E3%83%83%E3%83%97%E3%83%AA%E3%83%B3%E3%82%B0%E3%83%91%E3%83%BC%E3%83%86%E3%82%A3%E3%83%BC/">
            <img class="image" src="images/couple_different.jpg" alt="グラフの画像">
            <p class="text"><b>恋活・婚活・お見合い・カップリングパーティー・街コンの違いとは？</b></p>
          </a>
         </div>
        </li>
        </div>

    </ol>
    </section>
-->

    <section class="skills_sp"> 
  <h2 class="heading">Symplyコラム</h2>
        <p class="skill-text">
      <br>Symply運営事務局が監修の恋愛コンテンツ。<br>Symplyでパートナーが見つかる秘訣も大公開。<br>
    </p>
      <div class="ranking">
        <li class="ranking-item">
        <div id="ranking_solid2">
          <a href="http://symply.jp/column/2017/01/07/%E6%AC%A1%E3%81%AE%E3%83%87%E3%83%BC%E3%83%88%E3%81%AB%E3%81%A4%E3%81%AA%E3%81%92%E3%82%8B%E3%81%9F%E3%82%81%E3%81%AB%E3%81%AF%EF%BC%9F%E3%80%8C%E3%81%BE%E3%81%9F%E4%BC%9A%E3%81%84%E3%81%9F%E3%81%84/">
            <img class="image" src="images/young_couple_kiss.jpg" alt="次のデートへの愛情表現">
            <p class="text"><b>次のデートにつなげるためには？「また会いたい！」という気持ちをシンプルに伝える方法を紹介！</b></p>
          </a>
        </div>
        </li>
        <li class="ranking-item">
        <div id="ranking_solid2">
          <a href="http://symply.jp/column/2017/01/07/%E3%83%87%E3%83%BC%E3%83%88%E3%81%A7%E7%94%B7%E6%80%A7%E3%82%A6%E3%82%B1%E3%81%8C%E6%8A%9C%E7%BE%A4%E3%81%AE%E6%9C%8D%E3%81%AE%E3%82%B3%E3%83%BC%E3%83%87%E3%82%84%E9%81%B8%E3%81%B3%E6%96%B9%E3%81%A8/">
            <img class="image" src="images/dating_for_fashion.jpg" alt="グラフの画像">
            <p class="text"><b>デートで男性ウケが抜群の服のコーデや選び方とは？</b></p>
          </a>
        </div>
        </li>
        <li class="ranking-item">
        <div id="ranking_solid2">
          <a href="http://symply.jp/column/2017/01/07/%E8%B6%A3%E5%91%B3%E3%83%87%E3%83%BC%E3%83%88%E3%81%8C%E7%9B%9B%E3%82%8A%E4%B8%8A%E3%81%8C%E3%82%8B%E7%90%86%E7%94%B1%E3%81%A8%E3%81%AF%EF%BC%9F%E5%AE%9A%E7%95%AA%E3%83%87%E3%83%BC%E3%83%88%E3%81%AB/">
            <img class="image" src="images/hobby_dating_recommend.jpg" alt="グラフの画像">
            <span class="order"></span>
            <p class="text"><b>趣味デートが盛り上がる理由とは？定番デートに飽きがきたら、趣味デートがおすすめ！</b></p>
          </a>
        </div>
        </li>
        <li class="ranking-item">
        <div id="ranking_solid2">
          <a href="http://symply.jp/column/2017/01/08/%E3%83%87%E3%83%BC%E3%83%88%E3%81%A7%E6%B2%88%E9%BB%99%E3%81%AB%E5%9B%B0%E3%81%A3%E3%81%9F%E4%BA%BA%E3%81%A7%E3%82%82%E5%A4%A7%E4%B8%88%E5%A4%AB%EF%BC%81%E8%81%9E%E3%81%8B%E3%82%8C%E3%81%9F%E3%82%89/">
            <img class="image" src="images/dating_communication.jpg" alt="グラフの画像">
            <span class="order"></span>
            <p class="text"><b>デートで沈黙に困った人でも大丈夫！聞かれたら嬉しい話題を一挙紹介！</b></p>
          </a>
        </div>
        </li>
        <li class="ranking-item">
        <div id="ranking_solid2">
          <a href="http://symply.jp/column/2017/01/10/%E6%81%8B%E6%B4%BB%E3%83%BB%E5%A9%9A%E6%B4%BB%E3%83%BB%E3%81%8A%E8%A6%8B%E5%90%88%E3%81%84%E3%83%BB%E3%82%AB%E3%83%83%E3%83%97%E3%83%AA%E3%83%B3%E3%82%B0%E3%83%91%E3%83%BC%E3%83%86%E3%82%A3%E3%83%BC/">
            <img class="image" src="images/couple_different.jpg" alt="グラフの画像">
            <span class="order"></span>
            <p class="text"><b>恋活・婚活・お見合い・カップリングパーティー・街コンの違いとは？</b></p>
          </a>
        </div>
        </li>
      </div>
    </section>
    
    <div id="as">
     <a href="http://www.symply.jp/column/">
        <div class="text2">もっと読む</div>
      </a>
    </div>
        
　<section class="about_symply">
　　 <h2 class="heading">FAQ</h2>
     <div id="qa">
        <p class="txt">Q.　Facebookを利用していないと参加できないでしょうか？<br>
        A.　本人確認を兼ねているため、Facebook登録は必要になります。<br><br></p>
        <p class="txt">Q.　クレジットカード払いのみでしょうか？<br>
        A.　年齢確認も兼ねているため、クレジットカード払いのみとさせていただいております。<br><br></p>
        <p class="txt">Q.　1回目のデートの後、両想いにならなかった場合はどうなりますか？<br>
        A.　その時点で、デート終了となります。両想いの場合のみ、ご連絡します。2ndデートは無料です。<br><br></p>
        <p class="txt">Q.　ドタキャンされないか心配です…。<br>
        A.　事前払いにより、ドタキャンの心配はほとんどございません。<br><br></p>
        <p class="txt">Q.　マッチング費用である男性2,980円、女性980円以外は料金が発生しないですか？<br>
        A.　マッチング費用以外は、施設の利用料(テニスコートやシミュレーションゴルフ代など)や食事代（材料費やランチ代など）がかかります。お一人様3,000円以下になります。<br><br></p>
        <p class="txt">その他、ご質問・ご要望はinfo@symply.jpまでお願いいたします。</p>
     </div>
  </section>
    
        <center><p class ="txt7"><a href="kiyaku.html">利用規約</a>および<a href="privacy.html">プライバシーポリシー</a>に同意して<br><a href="index2.php">

    <?php

// composerで生成されたオートロドファイル読み込み
require_once( 'vendor/autoload.php' );

// DBと接続
require_once( 'dbconnect.php' );

// Facebookログインしたユーザー情報をDBに保存するPHPスクリプト
require_once( 'checkuser.php' );

// 訪問者がすでにFacebookログインしているかどうかを確認
if (isset($_SESSION['facebook_access_token'])) {

	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	// 参考： https://developers.facebook.com/docs/php/gettingstarted
	$response = $fb->get('/me');
	$user = $response->getGraphObject();

	// 下記のような感じで情報を取り出せます。
	$fid = $user['id']; // ID
	$fname = $user['name']; // 名前
	$femail = $user['email'];// Email
	$fphoto = "http://graph.facebook.com/" . $user['id'] . "/picture?type=large"; // 顔写真のURL

//	echo $fid;
//	echo $fname;

	// ログイン済み、かつ新規ユーザーの場合は、DBに会員情報を保存する関数読み込み
	checkuser($fid, $fname, $femail, $fphoto, $mysqli); ?>

<!--
	<p>ログインしました</p>
-->

<?php } else {
	// ログインしていないユーザーには、Facebookログインリンクを表示する
	// このあたりはFacebookディベロッパーマニュアルをほぼコピペしただけです
	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email'];

	// 下記のURL部分を環境にあわせて変更してください
	$loginUrl = $helper->getLoginUrl('http://www.symply.jp/login-callback.php', $permissions);
	echo '<a href="' . $loginUrl . '"><img src="images/facebook_login.png" alt="facebookログイン" class="facebook"></a>';
}
  ?>
            </a><br>Facebookには一切投稿されません。<br>18歳未満の方や独身でない方はご登録いただけません。</p></center><br><br>

  <footer class="footer">
    <span itemprop="name">Symply</span> © 2016 
  </footer></span>

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
 
