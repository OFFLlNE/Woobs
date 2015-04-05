<?php
	function redirect(){
		if($_SESSION['redirect']==false){
			if(isset($_SESSION['url'])){

			   	if (strpos($_SESSION['url'],'signin.php') !== false) {
			   		$url = "csgorankings.azurewebistes.net/profile.php";
				}
				else{
					$url = $_SESSION['url'];
					}
				}
			else{
		   		$url = "csgorankings.azurewebistes.net/index.php"; // default page for 
			}
		   
			header("Location: http://$url"); // perform correct redirect.
			$_SESSION['redirect']=true;
		}
	}
?>