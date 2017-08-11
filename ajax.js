function ajaxrequest(){
    try{
        ajax = new XMLHttpRequest();
    }catch (e1){
        try{
            ajax = new ActiveXObject("Msxml2.XMLHTTP")
        }catch(e2){
            try{
                ajax = new ActiveXObject("Microsoft.XMLHTTP") 
            }
            catch (e3){
                ajax = false;
            }
        }
    }
    return ajax;
}

function chatting(){
    request = new ajaxrequest();
    request.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            if(this.responseText != null ){
                document.getElementById('chat_box').innerHTML = this.responseText
            }else{
                alert("ajax error: no data received");
            }
        }else{
            alert("ajax error: " + this.statusText);
        }
    }
    request.open("POST","chat.php", true)
    request.send();
}

setInterval(function(){chatting()}, 1000);