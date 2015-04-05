<?php
	function redirect(){
		if($_SESSION['redirect']==false){
			if(isset($_SESSION['url'])){
				$url = $_SESSION['url'];
			else
		   		$url = "csgorankings.azurewebistes.net/index.php"; // default page for 
		
			header("Location: http://$url"); // perform correct redirect.
			$_SESSION['redirect']=true;
		}
	}
?>