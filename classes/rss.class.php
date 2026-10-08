<?php

class rss {
	
var $feed;

  
	function produce_XML_object_tree($raw_XML) {
		libxml_use_internal_errors(true);
		try {
			$xmlTree = new SimpleXMLElement($raw_XML);
		} catch (Exception $e) {
			// Something went wrong.
			$error_message = 'SimpleXMLElement threw an exception.';
			foreach(libxml_get_errors() as $error_line) {
				$error_message .= "\t" . $error_line->message;
			}
			trigger_error($error_message);
			return false;
		}
		return $xmlTree;
	}

  function parse() 
  
  {
    $rss = simplexml_load_file($this->feed);
	
    $rss_split = array();
	
	
    foreach ($rss->channel->item as $item) {
	
	
      $title = (string) $item->title; // Title
      $link   = (string) $item->link; // Url Link
   	  $description = (string) $item->description; //Description
     	  
      $rss_split[] = '

          <li>
        <a href="'.$link.'" target="_blank" title="" >
            '.str_replace("eKantipur:", "", $title).' 
        </a>
          </li>
';
    }

    return $rss_split;
  }



  function display($numrows) 
  {
    $rss_split = $this->parse();
    $i = 0;
    $rss_data = '<ul class="link-list">';
    while ( $i < $numrows ) 
	{
      $rss_data .= $rss_split[$i];
      $i++;
    }
    
	$trim = str_replace('', '',$this->feed);
    $user = str_replace('&lang=en-us&format=rss_200','',$trim);
    $rss_data.='</ul>';
    
    return $rss_data;
  }
}
?>