<?php
	switch($site){
		case "index":
			include("includes/content-main.php");
			break;
			
		default:
			include("includes/404.php");
			break;
	}
?>