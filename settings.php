<?php
	class mySettings
	{
		var $company = "company";
		var $status = "newUser";
		var $site = "index";

  	function mySettings($status, $site){
  		$this->site = $site;
    }

    function getTitle(){
    	echo $this->company . " | " . $this->site;
    }
		
		function startNewSession(){
			session_start();
		}
		
		function setStatus($status){
			$this->status = $status;
		}
		
		function getCompany(){
			echo $this->company;
		}
		
		function getSite(){
			return $this->site;
		}
	}
	
	$settings = NEW mySettings("new", $site);
	$settings->startNewSession();
?>