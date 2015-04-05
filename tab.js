$(function(){
				$("#tabs a").click(function(){
					var page = this.hash.substring(1);
					$.get(page+".php", function(gotHtml){
						$("#content").html(gotHtml);
					});
					return false;
				});
			});