<?php
	function redirect(){
		if($_SESSION['redirect']==false){
			if(isset($_SESSION['url'])) 
		   		$url = $_SESSION['url']; // holds url for last page visited.
			else 
		   		$url = "index.php"; // default page for 

			header("Location: $url"); // perform correct redirect.
			$_SESSION['redirect']=true;
		}
	}
?>