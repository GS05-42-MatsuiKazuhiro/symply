<?php

require_once(__DIR__ . '/config.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>Symply | 趣味でつながるデートサービス</title>
<!--
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="images/logo.jpg">
  <script src="jquery-3.1.1.min.js"></script> 
</head>
<body>
<!--Header-->
  <header class="header">
    <div id="header_navi">
        <div id="header_logo">
            <a href="symply.jp"><img src ="images/symply_header.png"></a>
        </div>
            <a class ="header_facebook" href="login.php">
                <div class="header_facebooklabel">Facebookで登録/ログイン</div>
            </a>
<!--
        <div id="header_facebook">
            <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
        </div>
-->
    </div>

    <div id="cat_cover_box">
        <div id="cat_cover">
            <h1>『共感』できる相手が見つかる</h1>
            <p>— 趣味でつながるデートサービス —</p>
            <a class ="top_facebook" href="login.php">
                <div class="header_facebooklabel">Facebookで登録/ログイン</div>
            </a>
        </div><!--cat_cover-->
        <div id="cat_cover2">
        <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
        </div>
    </div>
  </header>
  <section class="skills">
<!--    <h2 class="heading">利用方法</h2>-->
    <img src ="images/riyou.png" class = "money_title">
    <div class="skills-wrapper">
      <div class="skill-box">  
<!--        <i class="skill-icon fa fa-lightbulb-o"></i>-->
        <div class="skill-title">会員登録</div><br>
        <p><img src ="images/user2.png" class = "user"></p><br>
        <p class="skill-text">
          Facebook登録制<br>
          興味のあるデートを選び、スキルや好みを入力。
        </p>
      </div>
      <div class="skill-box">
<!--        <i class="skill-icon fa fa-paint-brush"></i>-->
        <div class="skill-title">デート相手マッチング</div><br>
        <p><img src ="images/matching2.png" class = "matching"></p><br>
        <p class="skill-text">
          あなたの趣味・嗜好に合った最適な異性を<br>
          運営側がマッチングします。<br>
        </p>
      </div>
      <div class="skill-box">
<!--        <i class="skill-icon fa fa-code"></i>-->
        <div class="skill-title">メッセージ</div><br>
        <p><img src ="images/mail2.png" class = "mail"></p><br>
        <p class="skill-text">
          お互いがマッチング費を支払い終えたら、<br>
          メッセージを送り、デート日程を決めましょう。
        </p>
      </div>
    </div>
  </section>
  <section class="about_symply">
<!--    <h2 class="heading">Symply とは？</h2>-->
    <img src ="images/about.png" class = "money_title">
    <p class="about-text2">
      趣味が似ている異性と実際にデートするサービスです。<br><br>
    　従来の見た目やコミュニケーションに偏ったマッチングサービスとは異なり、共通点に特化しています。<br><br>
      「人の良さは実際に会わないと分からない！」という考えのもと、デートサービスを提供しております。
    </p>
　</section>
  <section class="works">
<!--    <h2 class="heading">選べるデート</h2>-->
    <img src ="images/choice.png" class = "money_title">
    <div class="works-wrapper">
      <div class="work-box tree">
        <img class="work-image" src="images/trip5.JPG" alt="制作事例1">
        <div class="work-description">
          <div class="work-description-inner">
<!--
            <p class="work-text">
              テニスデート<br>
              いつものメンバーには飽きて、違う人との練習がしたいと思っている。<br>
            　サーブからボレーまで一通りできる中級レベルの人はいないかな？<br>
            　相手探しにピッタリ！気軽に楽しめるテニスデート<br>
             
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
-->
          </div>
        </div>
      </div>
      <div class="work-box building">
        <img class="work-image" src="images/cooking5.JPG" alt="制作事例2">
        <div class="work-description">
          <div class="work-description-inner">
<!--
            <p class="work-text">
              料理デート<br>
              食べに行くのもよし！作るのもよし！料理デート<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
-->
          </div>
        </div>
      </div>
      <div class="work-box lake">
        <img class="work-image" src="images/kansen_baseball5.JPG" alt="制作事例3">
        <div class="work-description">
          <div class="work-description-inner">
<!--
            <p class="work-text">
              スポーツ観戦デート<br>
              サッカーファンのあなたは、週末はテレビで試合を応援<br>
              今度のホーム試合こそ、誰かと見に行きたい<br>
            　ファン同士で熱く盛り上がれ！スポーツ観戦デート<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
-->
          </div>
        </div>
      </div>
      <div class="work-box sky">
        <img class="work-image" src="images/kansen_soccer5.JPG" alt="制作事例4">
        <div class="work-description">
          <div class="work-description-inner">
<!--
            <p class="work-text">
              ドライブデート<br>
            　社会人になっても、年に１回の海外旅行は絶対に欠かせない<br>
            　美しい景色・思い出の写真を旅好きな人とシェアしたいな<br>
            　気分転換にちょっと遠出したい人たちへ！ドライブデート<br>
              <a href="#" class="button button-ghost">READ MORE</a>
            </p>
-->
          </div>
        </div>
      </div>
    </div>
  </section>
<!--
　<section class="about">
     <img src ="images/safety.png" class = "money_title">
         <div class="skills-wrapper">
      <div class="skill-box">
        <div class="skill-title">Facebook審査</div><br>
        <p><img src ="images/facebook_logo.png" class = "facebook_logo"></p><br>
        <p class="skill-text">  
          イニシャル表記で実名はでません。<br>
          Facebook投稿なし・友達除外設定あり
        </p>
      </div>
      <div class="skill-box">
        <div class="skill-title">年齢確認</div>
        <p><img src ="images/card3.png" class = "card"></p>  
        <p class="skill-text">
          クレジットカード払いによる年齢確認。<br>
          事前払いにより、直前のドタキャンを防止。
        </p>
      </div>
      <div class="skill-box">
        <div class="skill-title">24時間365日監視</div>
        <p><img src ="images/camera.png" class = "camera"></p>  
        <p class="skill-text">
          不適切な投稿がないように確認しています。<br>
        </p>
      </div>
    </div>
  </section>
-->
 <section class="money">
    <img src ="images/cost.png" class = "money_title">
    <p><img src ="images/money2.png" class = "money_pic"></p>  
    <p class="about-text2">
      男性 3,240円/回(税込)・女性 1,080円/回(税込) となります。
    </p>
    <a class ="bottom_facebook" href="index2.php">
                <div class="header_facebooklabel">Facebookで登録/ログイン</div>
    </a>
　</section>
<!--
  <section class="contact" id="contact">
    <h2 class="heading">お問い合わせ</h2>
    <img src ="images/inquiry.png">
    <form class="contact-form">
      <input type="text" name="name" placeholder="名前">
      <input type="text" name="mail" placeholder="メールアドレス">
      <textarea name="message" placeholder="メッセージ"></textarea>
      <input type="submit" value="送信">
    </form>
  </section>
-->
  <footer class="footer">
    Symply © 2016 
  </footer>
  <script src="lib/placeholders.min.js"></script>
</body>
</html>
