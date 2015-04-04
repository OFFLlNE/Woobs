
function showHint(str){

if (str.length==0) { 
    document.getElementById("userHint").innerHTML="0";
    return;
} else {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            document.getElementById("userHint").innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","/../database/predictUsers.php?q="+str,true);
    xmlhttp.send();
}    
}
