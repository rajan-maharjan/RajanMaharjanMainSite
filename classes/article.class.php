<?php

class article extends common{

	
	function __construct(){

		$this->TABLE 		= 	"articles";

		$this->PRIMARY_ID	=	"article_id";		

		}

	

	function selectAll($isActive="Y", $condition = FALSE,$end='',$start=''){

		$whereCond="1";

		if($isActive!='')

			$whereCond.=" AND is_active='$isActive'";

                

                if($condition){

                    $whereCond.=" AND ".$condition;

                }

						

		$resultRow=$this->select($this->TABLE,array("*"),$whereCond, $this->PRIMARY_ID." asc", $groupby="", $start, $end);

		return $resultRow;

		}
	

	function getDetail($articleId){

		return $this->selectRow($this->TABLE,array("*"),$this->PRIMARY_ID."='$articleId'");

		}

	function __destruct(){

		$table=$this->TABLE;

		$this->destructAll($table);

	}	

}

?>