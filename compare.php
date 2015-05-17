<?php
include('/menu.php');
$activePage = "compare.php";
?>
<div class="middle">
	<h1>Compare</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3">
				<div id="label_div1"></div>

				<div class="profilepic">
					<div id="profile1">
						<img class="img-responsive pull-right" src="img/profilepic.png" alt="Relevant textual alternative to the image"/>
					</div>
				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<div class ="predict">
					<form class="pull-left">
							<h1 class="pull-right">Player1</h1>
               				<div class="input_container">
                   				<input type="text" id="username_id" onkeyup="autocompleteUser()" >
                    			<ul id="username_list_id"></ul>
                			</div>
					</form>

				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<div class ="predict">
					<form class="pull-right">
							<h1 class="pull-left">Player2</h1>
               				<div class="input_container">
                   				<input type="text" id="username_id2" onkeyup="autocompleteUser2()" >
                    			<ul id="username_list_id2"></ul>
                			</div>
					</form>

				</div>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3">
				<div id="label_div2"></div>

				<div class="profilepic">
					<div id="profile2">
						<img class="img-responsive pull-left" src="img/profilepic.png" alt="Relevant textual alternative to the image"/>
					</div>
				</div>
			</div>

		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">

				<div id="player1stat">

				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">

				<div id="player2stat">

				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>