<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>プチ旅行デート | Symply</title>
<!--  <link href="css/bootstrap.min.css" rel="stylesheet">-->
  <style>div{padding: 10px;font-size:16px;}</style>
  <link rel="shortcut icon" href="images/logo.jpg">
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
    
    <!-- Main[Start] -->
<form method="post" action="insert_trip.php">
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
     <dt><label>行きたい場所（複数選択可）</label></dt>
      <dd>
          <input type="checkbox" name="touristspot[]" value="1" checked> どこでもOK!<br>
          <input type="checkbox" name="touristspot[]" value="2"> 東京タワー<br>
          <input type="checkbox" name="touristspot[]" value="3"> 浅草・東京スカイツリー<br>
          <input type="checkbox" name="touristspot[]" value="4"> お台場<br>
          <input type="checkbox" name="touristspot[]" value="5"> 東京ディズニーランド<br>
          <input type="checkbox" name="touristspot[]" value="6"> 東京ディズニーシー<br>
          <input type="checkbox" name="touristspot[]" value="7"> 鴨川シーワールド<br>
          <input type="checkbox" name="touristspot[]" value="8"> マザー牧場<br>
          <input type="checkbox" name="touristspot[]" value="9"> 野毛山動物園<br>
          <input type="checkbox" name="touristspot[]" value="10"> 横浜中華街<br>
          <input type="checkbox" name="touristspot[]" value="11"> 八景島シーパラダイス<br>
          <input type="checkbox" name="touristspot[]" value="12"> 鎌倉・江ノ島<br>
          <input type="checkbox" name="touristspot[]" value="13"> 東武動物公園<br>
          <input type="checkbox" name="touristspot[]" value="14"> 西武園ゆうえんち
      </dd>
     <!--<dt><label>待ち合わせ場所</label></dt>
      <dd><select name="area">
    
   　　　<option value="1">北海道</option>
        <option value="2">青森県</option>
        <option value="3">岩手県</option>
        <option value="4">宮城県</option>
        <option value="5">秋田県</option>
        <option value="6">山形県</option>
        <option value="7">福島県</option>
        <option value="8">茨城県</option>
        <option value="9">栃木県</option>
        <option value="10">群馬県</option>　　
        <option value="11">埼玉県</option>
        <option value="12">千葉県</option>　
        <option value="13">東京都</option>
        <option value="14">神奈川県</option>
        <option value="15">新潟県</option>
        <option value="16">富山県</option>
        <option value="17">石川県</option>
        <option value="18">福井県</option>
        <option value="19">山梨県</option>
        <option value="20">長野県</option>
        <option value="21">岐阜県</option>
        <option value="22">静岡県</option>
        <option value="23">愛知県</option>
        <option value="24">三重県</option>
        <option value="25">滋賀県</option>
        <option value="26">京都府</option>
        <option value="27">大阪府</option>
        <option value="28">兵庫県</option>
        <option value="29">奈良県</option>
        <option value="30">和歌山県</option>
        <option value="31">鳥取県</option>
        <option value="32">島根県</option>
        <option value="33">岡山県</option>
        <option value="34">広島県</option>
        <option value="35">山口県</option>
        <option value="36">徳島県</option>
        <option value="37">香川県</option>
        <option value="38">愛媛県</option>
        <option value="39">高知県</option>
        <option value="40">福岡県</option>
        <option value="41">佐賀県</option>
        <option value="42">長崎県</option>
        <option value="43">熊本県</option>
        <option value="44">大分県</option>
        <option value="45">宮崎県</option>
        <option value="46">鹿児島県</option>
        <option value="47">沖縄県</option>

        </select></dd>-->
<!--
     <input type="submit" value="送信"><br>
        <label> ～クラス分け～<br>
         入門～初心者クラス：(～半年未満)ラケットが握れて、ストロークができる状態<br>
    　　　初中級クラス：(～2年未満)サーブ・ラリー・ボレーが一通りできる状態(ゲームができる状態)<br>
    　　　中級クラス：(2年以上～)１セットゲームができる状態<br>
         上級クラス：(4年以上～)トーナメント参加経験あり<br>
         </label>
-->
       <dt><p id="submit"><input type="submit" value="送信"></p></dt>
    </dl>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>