<?php
session_start();
?>
 

<!DOCTYPE html>
<html lang="ja">
<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>お申し込み画面 | Symply[シンプリー]</title>   
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
    <script type="text/javascript"><!--
 function chkdisp( obj,id ) {
  if( obj.checked ){
   document.getElementById(id).style.display = "block";
  }
  else {
   document.getElementById(id).style.display = "none";
  }
 }
// --></script>
<!--住所自動スクリプト-->
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!--住所自動スクリプト-->
</head>
<body>
<h1>お申し込み画面</h1>    
<!-- Main[Start] -->
<form method="post" action="insert_member.php">
　　 <h2 class="heading">デート内容</h2>
    <section class="about_symply">
     <div id="qa">
    <p class="txt3">興味のあるデートにチェックをつけてください(複数チェック可)。<br><br>
         複数選択の場合、どれか1つマッチングした相手と趣味デートを行っていただきます。</p><br>
        <center><table border=1 class="table" width="80%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center style="color:black">趣味デート一覧</td>　 
             </tr>　
            <tr>
                 <td height=40><input type="checkbox" name="dating[]" value="テニス" id="chk1" onclick="chkdisp(this,'ans1')" /><label for="chk1"></label><img src="images/tennis_icon.png" class="icon3">&nbsp;&nbsp;テニス</td>
                 
                 <td height=40><input type="checkbox" name="dating[]" value="ランニング" id="chk2" onclick="chkdisp(this,'ans2')" /><label for="chk2"></label><img src="images/run_icon.png" class="icon3">&nbsp;&nbsp;ランニング</td>
             </tr>　
             <tr>
                 <td height=40><input type="checkbox" name="dating[]" value="ボーリング" id="chk3" onclick="chkdisp(this,'ans3')" /><label for="chk3"></label><img src="images/bowling_icon.png" class="icon3">&nbsp;&nbsp;ボーリング</td>
                
                 <td height=40><input type="checkbox" name="dating[]" value="ゴルフ" id="chk4" onclick="chkdisp(this,'ans4')" /><label for="chk4"></label><img src="images/golf_icon.png" class="icon3">&nbsp;&nbsp;ゴルフ</td>
             </tr>　
                 <td height=40><input type="checkbox" name="dating[]" value="料理" id="chk5" onclick="chkdisp(this,'ans5')" /><label for="chk5"></label><img src="images/cooking_icon.png" class="icon3">&nbsp;&nbsp;料理</td>
            
                 <td height=40><input type="checkbox" name="dating[]" value="グルメ" id="chk6" onclick="chkdisp(this,'ans6')" /><label for="chk6"></label><img src="images/gurume_icon.png" class="icon3">&nbsp;&nbsp;グルメ</td>
            <tr>
                 <td height=40><input type="checkbox" name="dating[]" value="プチ旅行" id="chk7" onclick="chkdisp(this,'ans7')" /><label for="chk7"></label><img src="images/trip_icon.png" class="icon3">&nbsp;&nbsp;プチ旅行</td>
                 
                 <td height=40><input type="checkbox" name="dating[]" value="水族館" id="chk8" onclick="chkdisp(this,'ans8')" /><label for="chk8"></label><img src="images/aqua_icon.png" class="icon3">&nbsp;&nbsp;水族館</td>
             </tr>　
<!--
            <tr>
                 <td height=40><input type="checkbox" name="dating[]" value="プロ野球観戦" id="chk9" onclick="chkdisp(this,'ans9')" /><label for="chk9"></label><img src="images/baseball_icon.png" class="icon3">&nbsp;&nbsp;プロ野球観戦</td>
                
                 <td height=40><input type="checkbox" name="dating[]" value="Jリーグ観戦" id="chk10" onclick="chkdisp(this,'ans10')" /><label for="chk10"></label><img src="images/kansen_soccer_icon.png" class="icon3">&nbsp;&nbsp;Jリーグ観戦</td>
             </tr>　
-->
            <tr>
                <td height=40><input type="checkbox" name="dating[]" value="映画" id="chk11" onclick="chkdisp(this,'ans11')" /><label for="chk11"></label><img src="images/movie_icon.png" class="icon3">&nbsp;&nbsp;映画</td>
                 
                <td height=40><input type="checkbox" name="dating[]" value="カラオケ" id="chk12" onclick="chkdisp(this,'ans12')" /><label for="chk12"></label><img src="images/karaoke_icon.png" class="icon3">&nbsp;&nbsp;カラオケ</td>
             </tr>
             
            <tr>
            <td height=40><input type="checkbox" name="dating[]" value="ウォーキング" id="chk13" onclick="chkdisp(this,'ans13')" /><label for="chk13"></label><img src="images/walking_icon.png" class="icon3">&nbsp;&nbsp;ウォーキング</td>
            </tr>
            </table></center>
       </div>
      
       <div id="qa">
           <p class="txt3">選んだ趣味デートのうち、希望する条件がございましたら、下記よりチェックをお願いします。</p>
       <p class="txt2">テニス・プロ野球観戦・サッカー観戦・ゴルフ・ボーリングは選択しても、希望条件は表示されませんので、ご注意ください。</p><br>
       </div>
<!--     <div class="skills-wrapper_c"> -->
    <div id="ansdiv">
        <div id="ans5">
            <table border=1 class="table" width="40%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center height=40 style="color:black">料理</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="cooking[]" value="お好み焼き" checked></label>&nbsp;&nbsp;お好み焼き</td>
                 <td height=40><label><input type="checkbox" name="cooking[]" value="餃子" checked></label>&nbsp;&nbsp;餃子</td>
             </tr>　
             </table><br><br> 
        </div>
    </div>
         
        <div id="ansdiv">
        <div id="ans2">
            <table border=1 class="table" width="40%">
                <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=3 align=center height=40 style="color:black">ランニング</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="run[]" value="駒沢オリンピック公園" checked></label>&nbsp;&nbsp;駒沢オリンピック公園(2km)</td>
                 <td height=40><label><input type="checkbox" name="run[]" value="皇居" checked></label>&nbsp;&nbsp;皇居(5km)</td>
               </tr>  
            </table><br><br> 
        </div>
    </div>
        
        <div id="ansdiv">
        <div id="ans6">
            <table border=1 class="table" width="40%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center height=40 style="color:black">グルメ</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="gurume[]" value="肉料理" checked></label>&nbsp;&nbsp;肉料理</td>
                 <td height=40><label><input type="checkbox" name="gurume[]" value="イタリアン" checked></label>&nbsp;&nbsp;イタリアン</td>
             </tr>　　
             </table><br><br>  
        </div>
    </div>
          
        
        <div id="ansdiv">
        <div id="ans7"> 
            <table border=1 class="table" width="40%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center height=40 style="color:black">プチ観光</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="trip[]" value="お台場" checked></label>&nbsp;&nbsp;お台場</td>
                 <td height=40><label><input type="checkbox" name="trip[]" value="浅草・東京スカイツリー" checked></label>&nbsp;&nbsp;浅草・東京スカイツリー</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="trip[]" value="横浜中華街" checked></label>&nbsp;&nbsp;横浜中華街</td>
                 <td height=40><label><input type="checkbox" name="trip[]" value="鎌倉・江ノ島" checked></label>&nbsp;&nbsp;鎌倉・江ノ島</td>
             </tr>　　
             </table><br><br> 
          </div>
    </div>
        
         <div id="ansdiv">
        <div id="ans8"> <table border=1 class="table" width="40%">
             <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center width=500 height=40 style="color:black">水族館</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="aqua[]" value="サンシャイン" checked></label>&nbsp;&nbsp;サンシャイン水族館</td>
                 <td height=40><label><input type="checkbox" name="aqua[]" value="アクアパーク" checked></label>&nbsp;&nbsp;アクアパーク品川</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="aqua[]" value="シーパラ" checked></label>&nbsp;&nbsp;八景島シーパラダイス</td>
                 <td height=40><label><input type="checkbox" name="aqua[]" value="江ノ水" checked></label>&nbsp;&nbsp;新・江ノ島水族館</td>
             </tr>　　
             </table><br><br> 
             </div>
         </div>   
          
        
        <div id="ansdiv">
        <div id="ans12"> <table border=1 class="table" width="40%">
                <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=3 align=center height=40 style="color:black">カラオケ</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="karaoke[]" value="邦楽" checked></label>&nbsp;&nbsp;邦楽</td>
                 <td height=40><label><input type="checkbox" name="karaoke[]" value="洋楽" checked></label>&nbsp;&nbsp;洋楽</td>
                 <td height=40><label><input type="checkbox" name="karaoke[]" value="アニソン" checked></label>&nbsp;&nbsp;アニソン</td>
             </tr>　　
            </table><br><br> 
          </div>
        </div>
        
       <div id="ansdiv">
        <div id="ans13"> <table border=1 class="table" width="40%">
                <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=3 align=center width=500 height=40 style="color:black">ウォーキング</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="walking[]" value="下町散歩" checked></label>&nbsp;&nbsp;下町散歩(上野～お茶の水)</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="walking[]" value="伝統×モダン散歩" checked></label>&nbsp;&nbsp;伝統×モダン散歩(神楽坂)</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="walking[]" value="自然癒し系散歩" checked></label>&nbsp;&nbsp;自然癒し系散歩(吉祥寺)</td>
             </tr>　　
            </table><br><br> 
           </div>
        </div>
        
        <div id="ansdiv">
        <div id="ans11"> <table border=1 class="table" width="40%">
                <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=3 align=center width=500 height=40 style="color:black">映画</td>　 
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="movie[]" value="バイオハザード" checked></label>&nbsp;&nbsp;バイオハザード　ザ・ファイナル</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="movie[]" value="スター・ウォーズ" checked></label>&nbsp;&nbsp;ローグ・ワン　スター・ウォーズ・ストーリー</td>
             </tr>　
             <tr>
                 <td height=40><label><input type="checkbox" name="movie[]" value="ファンタビ" checked></label>&nbsp;&nbsp;ファンタスティック・ビーストと魔法使いの旅</td>
             </tr>　　
            </table><br><br> 
             </div>
         </div>   
    
    <h2 class="heading">希望日時</h2>
        
        <div id="qa">
        <p class="txt3">希望日時のチェックをお願いします。空いている日はすべて選択でお願いします。</p>
        <p class="txt2">デートの時間帯は、すべて10時～18時までの間で1時間になります。(野球観戦・Jリーグ観戦を除く)※予約日変更不可</p>
       </div>
        
        <center><table border=1 class="table" width="30%">
             
            <tr bgcolor = #B0E0E6>　　　　　　　
                <td colspan=2 align=center style="color:black">日程一覧</td>　 
            </tr>　
            <tr>
                <td height=40><input type="checkbox" name="date[]" value="1月14日" checked><label for="chk1"></label>&nbsp;&nbsp;1月14日&nbsp;(<font color="blue">土</font>)</td>
                 
                <td height=40><input type="checkbox" name="date[]" value="1月15日" checked><label for="chk2"></label>&nbsp;&nbsp;1月15日&nbsp;(<font color="red">日</font>)</td>
            </tr>
            <tr>
                <td height=40><input type="checkbox" name="date[]" value="1月21日" checked><label for="chk1"></label>&nbsp;&nbsp;1月21日&nbsp;(<font color="blue">土</font>)</td>
                 
                <td height=40><input type="checkbox" name="date[]" value="1月22日" checked><label for="chk2"></label>&nbsp;&nbsp;1月22日&nbsp;(<font color="red">日</font>)</td>
            </tr>
            <tr>
                <td height=40><input type="checkbox" name="date[]" value="1月28日" checked><label for="chk1"></label>&nbsp;&nbsp;1月28日&nbsp;(<font color="blue">土</font>)</td>
                 
                <td height=40><input type="checkbox" name="date[]" value="1月29日" checked><label for="chk2"></label>&nbsp;&nbsp;1月29日&nbsp;(<font color="red">日</font>)</td>
            </tr>        
        </table></center><br><br> 
         
    <h2 class="heading">ユーザー登録</h2>
        <center><table border=1 class="table" width="55%">
<!--
             <tr bgcolor = #4B99B5>　　　　　　　
                <td colspan=2 align=center style="color:white">きっかけデート一覧</td>　 
             </tr>　
-->
             <tr>
                 <td height=40 class="item" style="color:black">姓</td>
                 <td height=40 class="answer"><input type="text" id="name" name = "lastname"></td>
             </tr>　
             <tr>
                 <td height=40 class="item" style="color:black">名</td>
                 <td height=40 class="answer"><input type="text" id="name" name = "firstname"></td>
             </tr>
             <tr>
                 <td height=40 class="item" style="color:black">性別</td>
                 <td height=40 class="answer"><input type="radio" name="sex" value="男性" checked>男性&nbsp;&nbsp;<input type="radio" name="sex" value="女性">女性</td>
             </tr>　
             <tr>
                 <td height=40 class="item" style="color:black">年齢</td>
                 <td height=40 class="answer">
                   <select name="age">
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
                   </select></td>
             </tr>　
             <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
            <tr>
                <td height=40 class="item" style="color:black">郵便番号</td>
                <td height=40 class="answer"><input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');"></td>
            </tr>
            <!-- ▼住所入力フィールド(都道府県) -->
            <tr>
                <td height=40 class="item" style="color:black">都道府県</td><td height=40 class="answer"><input type="text" name="pref31" size="20"></td>
            </tr>
            <!-- ▼住所入力フィールド(都道府県以降の住所) -->
            <tr>
                <td height=40 class="item" style="color:black">都道府県以降の住所</td><td height=40 class="answer"><input type="text" name="addr31" size="30"></td>
            </tr>
             <tr>
                 <td height=40 class="item" style="color:black">大学名（男性のみ）</td>
                 <td height=40 class="answer"><input type="text" id="college" name="college"></td>
             </tr>　
            <tr>
                 <td height=40 class="item" style="color:black">Email</td>
                 <td height=40 class="answer"><input type="text" id="email" size="30" name="email"></td>
             </tr>　
            <tr>
                 <td height=40 class="item" style="color:black">Email（確認用）</td>
                 <td height=40 class="answer"><input type="text" id="email" size="30" name="email2"></td>
             </tr>　
             <tr>
                 <td height=40 class="item" style="color:black">電話番号</td>
                 <td height=40 class="answer"><input type="text" id="college" name="number"></td>
             </tr>　
            </table></center>
         <center><p id="submit"><input type="submit" value="送信"></p></center>
    </section>
    </form>
<!-- Main[End] -->

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