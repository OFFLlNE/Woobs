<?php include('/menu.php'); ?>
<?php $activePage = "";
include ('database/displayFunctions.php');
?>



<div class="middle">
	<div class="base">
		<div class="thumbnail">
			<img src="img/base.gif" alt="CS:GO Rankings"/>
		</div>
	</div>
</div>

<div class="statistics">

	<div class="users_statistics">
		<?php
			usersWithout();
		?>
		<?php
			usersWith();
		?>


	</div>

	<div class="heading">
		<h1>Users by first letter</h1>
	</div>

	<div class="boxMain">
	    <table style="width:100%">
			<tr>
				<td>First letter</td>
				<td>Value</td>
			</tr>
			<?php
				byFirstLetter();
			?>
		</table>

	</div>
</div>
<div class="top">
</div>
<?php include 'footer.php';?>
