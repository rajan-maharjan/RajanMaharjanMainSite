<?php
class functions extends common{
		
	//use PHPMailer\PHPMailer\PHPMailer;

	function __construct(){
			
		}
	
	function getPageName($page){
		switch($page){
			case 'fb-update':$pageName="updateFB";break;
			case 'apps':$pageName='date-converter';break;
			default: $pageName=$page;
		}
		return $pageName;
	}
	
	function filterPage(){
		if( ! isset($_GET['page']) || (isset($_GET['page']) && trim($_GET['page'])!='apps' && trim($_GET['page'])!='' && ! file_exists('pages/'.trim($_GET['page']).'.php'))){				
			 echo "<script>window.location='".SITE_PATH."404.html'</script>";
		}
		else 
			return $this->getPageName($_GET['page']);
	}

	function __destruct(){		
		
	}

}
