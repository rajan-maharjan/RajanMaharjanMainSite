<?php

class clicks extends common{

	
	function __construct(){

		$this->TABLE 		= 	"clicks";

		$this->PRIMARY_ID	=	"click_id";		

		}

	

	function selectAll($isActive="Y", $condition = FALSE,$end='',$start=''){

		$whereCond="1";

		if($isActive!='')

			$whereCond.=" AND is_active='$isActive'";

                

                if($condition){

                    $whereCond.=" AND ".$condition;

                }

						

		$resultRow=$this->select($this->TABLE,array("*"),$whereCond, $this->PRIMARY_ID." desc", $groupby="", $start, $end);

		return $resultRow;

		}
	

	function getDetail($clickId){

		return $this->selectRow($this->TABLE,array("*"),$this->PRIMARY_ID."='$clickId'");

		}

	function __destruct(){

		$table=$this->TABLE;

		$this->destructAll($table);

	}	

}

?>