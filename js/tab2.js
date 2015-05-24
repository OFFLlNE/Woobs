$(document).ready(function() {
    function addingListener() {
        window.addEventListener("popstate", function(e) {
            if (e.state == null) {
                hideAll();
            } else if (e.state.view == "cs1") {
                show1();
            } else if (e.state.view == "cs2") {
                show2();
            } else if (e.state.view == "cs3") {
                show3();
            }
        });
    }); 

    function hideAll() {
        $("#cs1").hide();
        $("#cs2").hide();
        $("#cs3").hide();
    }

    function show1() {
        $("#cs1").show();
        $("#cs2").hide();
        $("#cs3").hide();
    }

    function show2() {
        $("#cs1").hide();
        $("#cs2").show();
        $("#cs3").hide();
    }

    function show3() {
        $("#cs1").hide();
        $("#cs2").hide();
        $("#cs3").show();
    }


    var url = window.location.href;
    console.log(url.search("#"));
    if (url.search("#") == -1) {
        hideAll();
    } else {
        var a = url.substr(url.indexOf("#") + 1);
        if (a == "Overall") {
           show1();
        } else if (a == "Bestkillers") {
            show2();
        } else if (a == "Accuracy") {
            show3();
        } else {
            hideAll();
        }
    }

    $("#CSS1").click(function(){
        show1();
        window.history.pushState({'view': 'cs1'}, "Overall", "/katse.php#Overall");
        addingListener();
        return false;
    }); 
    $("#CSS2").click(function(){
        show2();
        window.history.pushState({'view': 'cs2'}, "Bestkillers", "/katse.php#Bestkillers");
        addingListener();
        return false;
    }); 
    $("#CSS3").click(function(){
        show3();
        window.history.pushState({'view': 'cs3'}, "Accuracy", "/katse.php#Accuracy");
        addingListener();
        return false;
    }); 
}; 