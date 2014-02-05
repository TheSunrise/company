<?php
	class mySettings
	{
		var $company = "company";
		var $status = "newUser";
		var $login = FALSE;
		var $site = "index";

  	function mySettings($login, $status, $site){
  		$this->site = $site;
    }

    function getTitle(){
    	echo $this->company . " | " . $this->site;
    }
		
		function startNewSession(){
			session_start();
		}
	}
	
	$settings = NEW mySettings(FALSE, "newUser", $site);
	$settings->startNewSession();
?>