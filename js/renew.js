$(document).ready(function(){

done();
});

function done(){
	setTimeout(function() {
		updates();
		done();
	}, 200);
}

function updates(){
	$.getJSON("database/fetch.php", function(data) {
		$("ol").empty();

		$.each(data.result, function(){

			$("ol").append("<li>Name Tag: "+this['UserName']+"</li><br />");
		});
	});
}