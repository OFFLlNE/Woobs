$(document).ready(function(){

done();
});

function done(){
	setTimeout(function() {
		updates();
		done();
	}, 1000);
}

function updates(){
	$.getJSON("database/fetch.php", function(data) {
		$("#last").empty();

		$.each(data.result, function(){

			$("#last").append("<li>Username: "+this['UserName']+"</li><br />");
		});
	});
}