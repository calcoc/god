var Synthesis;
var nowSynthesis = false;

function start(){
     var a = document.getElementById('a').title;
     for(var i=2;a>=i;i++){
     tit = document.querySelector('.headline-'+i).textContent;//テキスト取得
        var msg = new SpeechSynthesisUtterance();
    msg.volume = 1;
    msg.rate = 1;
    msg.pitch = 1;
    msg.text = tit;//取得したテキストセット
    msg.lang = 'ja-JP';
    

    speechSynthesis.speak(msg);


     nowSynthesis = true;
}}

function stop() {
    speechSynthesis.cancel();
       nowSynthesis = false;
}

onload = function(){
document.querySelector('#btn3').onclick = function () {
    
    // unsupported.
    if (!'SpeechSynthesisUtterance' in window) {
        alert('Web Speech API には未対応です.');
        return;
    }
    if (nowSynthesis) {
        stop();
        this.value = '音声を読み上げる';
        this.className = '';


    } else {
        start();
        this.value = '音声を止める';
        this.className = 'select';


    }
}}