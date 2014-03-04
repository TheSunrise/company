<?php
	switch($settings->getSite()){
		case "Home":
			include("includes/content-main.php");
			break;
			
		case "About":
			include("includes/content-about.php");
			break;
		
		case "Services":
			include("includes/content-services.php");
			break;
		
		case "Contact":
			include("includes/content-contact.php");
			break;	
			
		case "Article":
			include("includes/content-article.php");
			break;
			
		case "Register":
			include("includes/content-register.php");
			break;
			
		case "Login":
			include("includes/content-login.php");
			break;
		
		default:
			include("includes/404.php");
			break;
	}
?>