<html>
    <head>
        <meta charset="utf-8">
        <title>後で読む</title>
    </head>
    <body>
    <div id ="result">
        $.cookie.json = true;
var cookParam = $.cookie("push"),
    resultElm = $('#result');
    list1       ='<li><h2>'+cookParam[0]+'</h2><p><a href="'+cookParam[2]+'"><img src="'+cookParam[1]+'"></a></p></li>',
    list2       ='<li><h2>'+cookParam[3]+'</h2><p><a href="'+cookParam[5]+'"><img src="'+cookParam[4]+'"></a></p></li>',
    list3       ='<li><h2>'+cookParam[6]+'</h2><p><a href="'+cookParam[8]+'"><img src="'+cookParam[7]+'"></a></p></li>'
    var undifindChk = 8 - cookParam.length;
    if(5 == undifindChk){
        resultElm.append(list1)
    }else if(2 == undifindChk){
        resultElm.append(list1)
        resultElm.append(list2)
    }else{
        resultElm.append(list1)
        resultElm.append(list2)
        resultElm.append(list3)
    }
$('#remove').click(function(){
    $.removeCookie("push");
    location.reload();
});
    </body>
</html>