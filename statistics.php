<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="main2.css">

</head>
<body>
<?php $activePage = "statistics.php"; ?>
<div id="navigation">
	<?php include('/menu.php'); ?>
</div>
<div class="middle">
	<h1 id="heading">Statistics</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="dropdown">
  				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
   					By category
    				<span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
    				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Bla</a></li>
  				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 overall rating</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>

					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top 10 last match rating</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<h1 id="heading">Top10 K/D ratio</h1>
				<div class="boxProfile">
		    		<table style="width:100%">
						<tr>
							<td>blablabla</td>
							<td>NUMBER</td>
						</tr>
						<tr>
							<td>jne</td>
							<td>NUMBER</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<HR NOSHADE SIZE=7>
<ADDRESS> <A HREF=MAILTO:johanneshorm@hotmail.com>Woobs&copy</A> TÜ Informaatika </ADDRESS>

</body>
</html>