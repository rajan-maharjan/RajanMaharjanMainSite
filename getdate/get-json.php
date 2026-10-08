<?php 
include "../classes/nepali.calendar.class.php";

$replaceFor = array(0,1,2,3,4,5,6,7,8,9);
$replaceBy = array('०','१','२','३','४','५','६','७','८','९');
$ADBS =  "वि.सं ";
if(!isset($_REQUEST['dateType']))
    $_REQUEST['dateType']='np';
$objectNepaliCal = 	new nepaliCalendar();

if(isset($_REQUEST['dateType']) && $_REQUEST['dateType']=='en'){
	$returnVal= array(
	                'STATUS'=>'SUCCESS',
	                'MESSAGE'=>'Converted Date Successfully.',
	                'CALENDAR_TYPE'=>'EN',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>date("Y"),'CHAR_2'=>date("y")
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>strtoupper(date("M")),'FULL'=>strtoupper(date('F'))
                                    ),
                                'NUMBER'=>date('m')
                                ),
    	                'DATE'=>date("j"),
    	                'DAY'=>array('SHORT'=>date('D'),'FULL'=>date("l")),
    	                'AD_BD'=>"A.D"
    	                )
	                );
	}
	
if(isset($_REQUEST['dateType']) && $_REQUEST['dateType']=='np'){
	$arrayData = $objectNepaliCal->eng_to_nep(date("Y"),date("m"),date("d"));	
	$year = str_replace($replaceFor, $replaceBy, $arrayData['year']);
	$month = $arrayData['nmonth'];
	$day = $arrayData['day'];	
	$date = str_replace($replaceFor, $replaceBy, $arrayData['date']);
	$ADBS  ="वि.सं ";

	$returnVal= array(
                    'STATUS'=>'SUCCESS',
	                'MESSAGE'=>'Converted Date Successfully.',
	                'CALENDAR_TYPE'=>'NP',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>$year,'CHAR_2'=>substr($year,2,2)
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>'n/a','FULL'=>$month
                                    ),
                                'NUMBER'=>'n/a'
                                ),
    	                'DATE'=>$date,
    	                'DAY'=>array('SHORT'=>'n/a','FULL'=>$day),
    	                'AD_BD'=>$ADBS
    	                )
	                );
	}

if(isset($_REQUEST['dateType']) && trim($_REQUEST['dateType'])=='np' && isset($_REQUEST['dformat'])){		
	switch(trim(strtolower($_REQUEST['dformat']))){
		case 'adbs':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'AD_BD'=>$ADBS
						)
					);
				break;
				
		case 'yyyy':
				   $returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'YEAR'=>array(
							'CHAR_4'=>$year,'CHAR_2'=>substr($year,2,2)
							)
						)
					);
					break;
				
		case 'mon':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'MONTH'=>array(
							'CHARACTER'=>array(
									'SHORT'=>'n/a','FULL'=>$month
								),
							'NUMBER'=>'n/a'
							)
						)
					);
				break;
		case 'date':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'DATE'=>$date
						)
					);
				break;
		case 'day':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'DAY'=>$day
						)
					);
				break;
		}
}

if(isset($_REQUEST['dateType']) && trim($_REQUEST['dateType'])=='en' && isset($_REQUEST['dformat'])){		
	switch(trim(strtolower($_REQUEST['dformat']))){
		case 'adbs':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'AD_BD'=>"A.D"
						)
					);
				break;
				
		case 'yyyy':
				   $returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'YEAR'=>array(
							'CHAR_4'=>date("Y"),'CHAR_2'=>date("y")
							)
						)
					);
					break;
				
		case 'mon':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'MONTH'=>array(
							'CHARACTER'=>array(
                                        'SHORT'=>strtoupper(date("M")),'FULL'=>strtoupper(date('F'))
                                    ),
                            'NUMBER'=>date('m')
							)
						)
					);
				break;
		case 'date':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'DATE'=>date("j")
						)
					);
				break;
		case 'day':
				$returnVal= array(
					'STATUS'=>'SUCCESS',
					'MESSAGE'=>'Converted Date Successfully.',
					'CALENDAR_TYPE'=>$_REQUEST['dateType'],
					'CALENDAR_DATA'=>array(
						'DAY'=>array('SHORT'=>date('D'),'FULL'=>date("l"))
						)
					);
				break;
		}
}


if((isset($_REQUEST['dateType']) && isset($_REQUEST['date'])) || !isset($_REQUEST)){
	$arrayDate = explode("-",$_REQUEST['date']);
	$dd = $arrayDate[0];
	$mm = $arrayDate[1];
	$yyyy = $arrayDate[2];
    
    
    if($_REQUEST['dateType']=='e2n'){
		$returnArray=$objectNepaliCal->eng_to_nep($yyyy,$mm,$dd);	
		if($returnArray['year'] != ''){
    		$year = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['year']);
    		$date = str_replace($replaceForCalendarNep, $replaceByCalendarNep, $returnArray['date']);
    		$returnVal= array(
                    'STATUS'=>'SUCCESS',
	                'MESSAGE'=>'English to Nepali Converted Successfully.',
	                'CALENDAR_TYPE'=>'NP',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>$year,'CHAR_2'=>substr($year,2,2)
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>'n/a','FULL'=>$returnArray['nmonth']
                                    ),
                                'NUMBER'=>'n/a'
                                ),
    	                'DATE'=>$date,
    	                'DAY'=>array('SHORT'=>'n/a','FULL'=>$returnArray['day']),
    	                'AD_BD'=>"वि.सं "
    	                )
	                );
    		
		}
		else{
		    $returnVal= array(
                    'STATUS'=>'FAIL',
	                'MESSAGE'=>'Invalid Input Parameter or Date Value for conversion.',
	                'CALENDAR_TYPE'=>'NP',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>'','CHAR_2'=>''
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>'','FULL'=>''
                                    ),
                                'NUMBER'=>''
                                ),
    	                'DATE'=>$date,
    	                'DAY'=>array('SHORT'=>'','FULL'=>''),
    	                'AD_BD'=>''
    	                )
	                );
		}
	}
	else{
		$returnArray= $objectNepaliCal->nep_to_eng($yyyy,$mm,$dd);
		    if($returnArray['year'] != ''){
		    //print($returnArray['date']." ".$returnArray['emonth'].", ".$returnArray['year']." (".$returnArray['day'].")");
		    
		    $returnVal= array(
	                'STATUS'=>'SUCCESS',
	                'MESSAGE'=>'Nepali to English Converted Successfully.',
	                'CALENDAR_TYPE'=>'EN',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>$returnArray['year'],'CHAR_2'=>substr($returnArray['year'],2,2)
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>strtoupper(substr($returnArray['emonth'],0,3)),'FULL'=>strtoupper($returnArray['emonth'])
                                    ),
                                'NUMBER'=>'n/a'
                                ),
    	                'DATE'=>$returnArray['date'],
    	                'DAY'=>array('SHORT'=>substr($returnArray['day'],0,3),'FULL'=>$returnArray['day']),
    	                'AD_BD'=>"A.D"
    	                )
	                );
	                
		    }
		  else{
		    $returnVal= array(
                    'STATUS'=>'FAIL',
	                'MESSAGE'=>'Invalid Input Parameter or Date Value for conversion.',
	                'CALENDAR_TYPE'=>'EN',
	                'CALENDAR_DATA'=>array(
    	                'YEAR'=>array(
                                'CHAR_4'=>'','CHAR_2'=>''
                                ),
    	                'MONTH'=>array(
                                'CHARACTER'=>array(
                                        'SHORT'=>'','FULL'=>''
                                    ),
                                'NUMBER'=>''
                                ),
    	                'DATE'=>$date,
    	                'DAY'=>array('SHORT'=>'','FULL'=>''),
    	                'AD_BD'=>''
    	                )
	                );
	    	}
		}
   
	}

echo json_encode($returnVal,JSON_UNESCAPED_UNICODE);

?>
