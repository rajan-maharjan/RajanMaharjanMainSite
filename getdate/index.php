<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<span id='nepali-date'>
<?php 
include "../classes/nepali.calendar.class.php";

$replaceFor = array(0,1,2,3,4,5,6,7,8,9);
$replaceBy = array('०','१','२','३','४','५','६','७','८','९');
$ADBS =  "वि.सं ";
if(!isset($_GET['dateType']))
    $_GET['dateType']='np';
$objectNepaliCal = 	new nepaliCalendar();
if(isset($_GET['dateType']) && $_GET['dateType']=='en'){	
	$returnVal =date('j F Y, l');
	$ADBS = "A.D";
	$year=date("Y");
	$month=date("M");
	$date=date("d");
	$day=date("l");	
	}
if(isset($_GET['dateType']) && $_GET['dateType']=='np'){
	$arrayData = $objectNepaliCal->eng_to_nep(date("Y"),date("m"),date("d"));	
	$year = str_replace($replaceFor, $replaceBy, $arrayData['year']);
	$month = $arrayData['nmonth'];
	$day = $arrayData['day'];	
	$date = str_replace($replaceFor, $replaceBy, $arrayData['date']);
	$returnVal = $ADBS." ".$year." ".$month." ".$date.", ".$day;	
	}

if(isset($_GET['dateType']) && (trim($_GET['dateType'])=='np' || trim($_GET['dateType'])=='en')){
	if(isset($_GET['dformat'])){	
		switch(trim(strtolower($_GET['dformat']))){
			case 'adbs':$returnVal = $ADBS;break;
			case 'yyyy':$returnVal = $year;break;
			case 'mon':$returnVal = $month;break;
			case 'dd':$returnVal = $date;break;
			case 'date':$returnVal = $date;break;
			case 'day':$returnVal =$day;break;			
			}
	}
	echo $returnVal;
}


if((isset($_GET['dateType']) && isset($_GET['date'])) || !isset($_GET)){
	$arrayDate = explode("-",$_GET['date']);
	$dd = $arrayDate[0];
	$mm = $arrayDate[1];
	$yyyy = $arrayDate[2];
    
    
    if($_GET['dateType']=='e2n'){
		$returnArray=$objectNepaliCal->eng_to_nep($yyyy,$mm,$dd);	
		if($returnArray['year'] != ''){
    		$year = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['year']);
    		$date = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['date']);		
    		print($date." ".$returnArray['nmonth'].", ".$year." (".$returnArray['day'].")");	
		}
		else{
		    echo "invalid input parameter or date value.";
		}
	}
	else{
		$returnArray= $objectNepaliCal->nep_to_eng($yyyy,$mm,$dd);
		    if($returnArray['year'] != ''){
		    print($returnArray['date']." ".$returnArray['emonth'].", ".$returnArray['year']." (".$returnArray['day'].")");
		    }
		  else{
		    echo "invalid input parameter or date value.";
		}
		}
 
	}

?>
</span>
		<!-- Tracking Code -->
    <script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-8948168-y']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>			
    <!-- Tracking Code Ends -->
</body>
</html>