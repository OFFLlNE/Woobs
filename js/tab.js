
$(document).ready(function(){

    $("a").on("click",function(){
        if ($(this).attr("href").charAt(0) == '#'){
            var hash = $(this).attr("href");
            hash = hash.replace(/^.*#/, '');
        }
    })
});

$.fragmentChange(true);
  $(document).bind("fragmentChange.page", function() {
    alert("yoyoy");
    });
  });