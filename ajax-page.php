<?php
$relativePath  = "";
include "files.inc.php";
$mychoice=trim($_REQUEST['choice']);
$responseMsg='';

if($mychoice=='convert-date'){
	if($_REQUEST['ct']=='e2n'){
		$returnArray=$objectNepaliCal->eng_to_nep($_REQUEST['yr'],$_REQUEST['mn'],$_REQUEST['dt']);		
		$year = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['year']);
		$date = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['date']);
		
		print($date." ".$returnArray['nmonth'].", ".$year." (".$returnArray['day'].")");		
	}
	else{
		$returnArray= $objectNepaliCal->nep_to_eng($_REQUEST['yr'],$_REQUEST['mn'],$_REQUEST['dt']);
		print($returnArray['date']." ".$returnArray['emonth'].", ".$returnArray['year']." (".$returnArray['day'].")");
		}
}
?>