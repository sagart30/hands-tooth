<?php

	function categoryData($jsonData){
		$arrData = json_decode($jsonData, true);
		if(count($arrData)){
			return implode(", ",array_column($arrData,'cName'));
		}else{
			return "-";
		}
		 
	}
	
	function typeData($strData){
		if($strData){
			echo trim(str_replace('"',"",$strData),'[]');
		}else{
			return "-";
		}
	}
	
	function dateView($date){
		return date("d M Y", strtotime($date));
	}
