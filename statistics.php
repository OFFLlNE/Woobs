<!DOCTYPE html>
<html>
	<head>
		<title>Statistics</title>
		<link rel="stylesheet" property='stylesheet' href="statistics.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script>
			$(function(){
				$("#tabs a").click(function(){
					var page = this.hash.substring(1);
					$.get(page+".php", function(gotHtml){
						$("#content").html(gotHtml);
					});
					return false;
				});
			});
		</script>
	</head>
<body>

<?php $activePage = "statistics.php"; 
include ('database/displayFunctions.php');
?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Statistics</h1>
	<div class="container-fluid">
		<div class="row">	
			<ul id="tabs">
				<li><a href="#content1">Tab1</a></li>
				<li><a href="#content2">Tab2</a></li>
				<li><a href="#content3">Tab3</a></li>
			</ul>
		</div>
		<div class="row">
			<div id = "content_wrapper">
				<div id="content">
					<p>MAU</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>
</body>
</html>