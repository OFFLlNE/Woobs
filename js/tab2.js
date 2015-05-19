$(document).ready(function() {
    function addingListener() {
        window.addEventListener("popstate", function(e) {
            if (e.state == null) {
                hideAll();
            } else if (e.state.view == "cs1") {
                show1();
            } else if (e.state.view == "cs2") {
                show2();
            } 
            }
        });
    }

    function hideAll() {
        $("#cs1").hide();
        $("#cs2").hide();
    }

    function show1() {
        $("#cs1").show();
        $("#cs2").hide();
    }

    function show2() {
        $("#cs1").hide();
        $("#cs2").show();
    }


    var url = window.location.href;
    console.log(url.search("#"));
    if (url.search("#") == -1) {
        hideAll();
    } else {
        var a = url.substr(url.indexOf("#") + 1);
        if (a == "content1") {
           show1();
        } else if (a == "content2") {
            show2();
        } 
        } else {
            hideAll();
        }
    }

    $("#C1").click(function(){
        show1();
        window.history.pushState({'view': 'cs1'}, "content1", "/statistics.php#content1");
        addingListener();
        return false;
    }); 
    $("#C2").click(function(){
        show2();
        window.history.pushState({'view': 'cs2'}, "content2", "/statistics.php#content2");
        addingListener();
        return false;
    }); 
   
});