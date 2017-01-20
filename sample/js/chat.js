$(function(){

    //データストアを作成（データを送受信するために必要）
    var milkcocoa = new MilkCocoa('hotiuyo9jbv.mlkcca.com');//※ID自分のに変えてね！！

    //データベースストア：オブジェクト生成
    var chatDataStore = milkcocoa.dataStore("chat"); //アプリ名指定

	// スライド領域
	$('.drawer').drawer();
	
    //送信処理（ボタンをクリック）
    $("#button").on("click",function(){
		var name = $("#name").val();
        var text = $("#msg").val(); 
		// 名前が空白の場合にはアラート
		if(name == ''){
			alert('なまえを入力してください。');
			return;
		}
		// メッセージが空白の場合にはアラート
		if(text == ''){
			alert('なにかメッセージを入力してください。');
			return;
		}
		var time = new Date();
		var y = time.getFullYear();
		var m = time.getMonth() + 1;
		var d = time.getDate();	
		var h = time.getHours();
		var mi = time.getMinutes();	
		var s = time.getSeconds();		
		var feel = $("[name=feeling]").val();
		time = y + '年' + m + '月' + d + '日' + h + '時' + mi +'分' + s + '秒';
		
        //milkcocoa:push送信
        chatDataStore.push({
			message:text,
			time : time,
			name : name,
			feel : feel
			},function(e){
            $("#msg").val(""); //送信後、空っぽにする
        });
    });

    //受信処理（push受信）
    chatDataStore.on("push",function(data){
        console.dir(data);
		var name = $("#name").val();
		var send_name = data.value.name; 
		var feel_val = data.value.feel;
		var icon = getIcon(feel_val);
		if(name == send_name){ // 	自分の発言
			//　メイン
			$("#board").append('<li><div class="fukidashi-line">'
				+ '<div class="icon"><img src=' + icon + ' class="img_left"></div>'
				+ '<div class="fukidashi_left"><div class="box left">' + data.value.message + '</div></div>'
				+ '</div><div class="line_font">' +data.value.time +'&nbsp;'+ data.value.name +'</div></li>');
			// 履歴
			$("#history").append("<li><div class='line'>"+　data.value.message+ '</div>'
				+ '<div class="line_his_font">' +　data.value.time + ' Name：'+　data.value.name +"</li>");

		} else {　// 相手の発言
			// メイン
			  $("#board").append('<li><div><div class="fukidashi-line">'
				+ '<div class="fukidashi_right"><div class="box right">' + data.value.message + '</div></div>'
				+ '<div class="icon"><img src=' + icon + '></div></div>'
				+ '<div class="line_font line_rigth">' +data.value.time +'&nbsp;'+ data.value.name + '</div></li>');
			
			// 履歴
			$("#history").append("<li><div class='line'>"+　data.value.message+ '</div>'
				+ '<div class="line_his_font">' +　data.value.time + ' Name：'+　data.value.name +"</li>");
			
		}
		
		// スクロールを自動で一番下へ
		$(".chatarea").scrollTop($("#auto_scroll")[0].scrollHeight);  
		$(".historyarea").scrollTop($("#history_scroll")[0].scrollHeight);  
    });
	
	function getIcon(feel_val){
		if(feel_val  == '1'){ //勇者
			var icon_img = "images/hero.png"
			return icon_img;
		} else if (feel_val == '2') {　//騎士
			var icon_img = "images/knight.png"
			return icon_img;
		} else if (feel_val == '3') { //魔法使い
			var icon_img = "images/magician.png"
			return icon_img;
		} else if (feel_val == '4') { //天使
			var icon_img = "images/angel.png"
			return icon_img;
		} else if (feel_val == '5') { //ピエロ
			var icon_img = "images/clown.png"
			return icon_img;
		} else if (feel_val == '6') { //海賊
			var icon_img = "images/pirates.png"
			return icon_img;
		} else if (feel_val == '7') { //マリア様
			var icon_img = "images/maria.png"
			return icon_img;
		} else if (feel_val == '8') { //赤ちゃん
			var icon_img = "images/baby.png"
			return icon_img;
		} else if (feel_val == '9') { //ドラゴン
			var icon_img = "images/dragon.png"
			return icon_img;
		} else if (feel_val == '10') { //クマ
			var icon_img = "images/bear.png"
			return icon_img;
		} 
	};
	
	//　履歴処理
	 var history = milkcocoa.dataStore('chat').history();
		history.sort('asc'); //ASC昇順、DESC降順
		history.size(1); // 初期表示個数を設定
		history.limit(100); // 表示個数
		var i = 0;
		history.on('data', function(data) {
			  data.forEach(function(d,i){
				$("#history").append("<li><div class='line'>"+d.value.message+ '</div><div class="line_his_font">' +d.value.time + ' Name：'+　d.value.name +"</li>");
			  });
		});
	
		// 表示後のイベント
		history.on('end', function() {
			// スクロールを自動で一番下へ
			$(".historyarea").scrollTop($("#history_scroll")[0].scrollHeight);  
		});
	
	    // 履歴の表示
	    history.run();

});