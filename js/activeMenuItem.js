window.onload = activateCurrentLink;

function activateCurrentLink(){
    var a = document.getElementsByTagName("A");
    for(var i=0;i<a.length;i++)
        if(a[i].href == window.location.href.split("#")[0])
            a[i].className = 'active';
}