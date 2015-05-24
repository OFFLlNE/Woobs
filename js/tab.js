$(function pageload(hash){
	$("#tabs a").click(function(){
					var page = this.hash.substring(1);
    					$.get(page+".php", function(gotHtml){
						$("#content").html(gotHtml);
					});
				});
			});

$(document).ready(function(){
    // Initialize history plugin.
    $.history.init(pageload);

    $("a").on("click",function(){
        if ($(this).attr("href").charAt(0) == '#'){
            var hash = $(this).attr("href");
            hash = hash.replace(/^.*#/, '');
            $.history.load(hash);
        }
    })
});
