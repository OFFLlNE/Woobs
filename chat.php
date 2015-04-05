<!DOCTYPE html>
<html>
	<head>
		<title>Support</title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://reverbim.com/chat/loader/" type="text/javascript"></script>
		<script type="text/javascript">$(document).ready(function(){setupReverb({developer_id:'b4d827a4',theme_id:1});});</script>
	</head>
<body>

<?php $activePage = "chat.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<div class="container-fluid">
		<h1 id="heading">Support</h1>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class = "Contact">
						<a href="chat.php" target="_blank">Ask anything in chat</a> 
						<a id="show_id" onclick="document.getElementById('spoiler_id').style.display='';
							document.getElementById('show_id').style.display='none';" class="link">[Questions or suggestions, feel free to contact us]
						</a>
						<span id="spoiler_id" style="display: none">
							<a
								onclick="document.getElementById('spoiler_id').style.display='none'; document.getElementById('show_id').style.display='';" class="link">[Hide]
							</a>
							<br>
								<a href="mailto:valjalauri@gmail.com">Click To send a mail</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php';?>
