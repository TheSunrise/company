<?php
	switch($settings->getSite()){
		case "Home":
			include("includes/content-main.php");
			break;
			
		default:
			include("includes/404.php");
			break;
	}
?>