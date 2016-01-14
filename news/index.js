$(function() {

$('#btn3').on('click',function() {

// unsupported.
if (!'SpeechSynthesisUtterance' in window) {
    alert('Web Speech API には未対応です.');
    return;
    }
    var msg = new SpeechSynthesisUtterance();
     var a = document.getElementById('a').title;
         console.log(msg); 

     for(var i=0;a>=i;i++){
     var tit = document.querySelector('.headline-'+i).textContent;//テキスト取得
     msg.volume = 1;
    msg.rate = 1;
    msg.pitch = 1;
    msg.text = tit;//取得したテキストセット
    msg.lang = 'ja-JP';
    speechSynthesis.speak(msg);
    }
}





