//config内の値は自分のプロジェクトの設定に合わせて指定
var config = {
    apiKey: "AIzaSyCV6AReeO8pnAOA2hhkVIVW6D6bVEtlD7o",
    authDomain: "symply-b0249.firebaseapp.com",
    databaseURL: "https://symply-b0249.firebaseio.com",
    storageBucket: "",
};

firebase.initializeApp(config);

var rootRef = firebase.database().ref();

$('#msgIn').keypress(function (e) {
    if (e.keyCode == 13) {
        var name = $('#nameIn').val();
        var text = $('#msgIn').val();
        rootRef.push({ name: name, text: text });
        $('#msgIn').val('');
    }
});

rootRef.on('child_added', function (ss) {
    var msg = ss.val();
    dspChatMsg(msg.name, msg.text);
});

function dspChatMsg(name, text) {
    $('<div class="right_balloon"/>').text(text).appendTo($('#msgDiv'));
    $("html,body").animate({ scrollTop: $('#bottomDiv').offset().top }, 0);
};