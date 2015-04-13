<?php include('/menu.php');
$activePage = "support.php";
?>
<div class="middle">
	<div class="container-fluid">
		<h1>Support</h1>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="donation">
						<h3>Donate to our cause</h3>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
							<input type="hidden" name="cmd" value="_donations">
							<input type="hidden" name="business" value="loll_noob1@hotmail.com">
							<input type="hidden" name="lc" value="US">
							<input type="hidden" name="item_name" value="CSGOrankings">
							<input type="hidden" name="no_note" value="0">
							<input type="hidden" name="currency_code" value="USD">
							<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
							<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
							<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="AboutUs">
						<h3>About us</h3>
						<p>
							We are 3 students in the University of Tartu,
							studying informatics. Since we and many of our
							friends play the game called Counter-Strike:
							Global Offensive, we thought we should make an
							interesting webpage to track our stats and even
							compare them.
						</p>
					</div>
					<div class = "Contact">
						<div>
							<a href="chat.php" target="_blank">Ask anything in chat, which pops up lower right corner</a>
						</div>
						<a id="show_id" onclick="document.getElementById('spoiler_id').style.display='';
							document.getElementById('show_id').style.display='none';" class="link">[Questions or suggestions, feel free to contact us]
						</a>
						<span style="display: none">
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
