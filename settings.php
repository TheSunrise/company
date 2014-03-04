<?php
	class mySettings
	{
		var $company = "Company";
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
		
		function getYear(){
			echo "2014";
		}
	}
	
	$settings = NEW mySettings("new", $site);
	$settings->startNewSession();
?>