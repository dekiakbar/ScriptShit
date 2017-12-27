<?php 
	function TarahAngin($arahAngin)
    {
    	$arahAngin 	= explode(' ',$arahAngin);
	    	if (count($arahAngin) > 1) {
	    		if ($arahAngin[1] == 'N') {
		    	 	$arahAngin[1] = 'Utara';
		    	}elseif ($arahAngin[1] == 'NE') {
		    		$arahAngin[1] = 'Timur Laut';
		    	}elseif ($arahAngin[1] == 'E') {
		    		$arahAngin[1] = 'Timur';
		    	}elseif ($arahAngin[1] == 'SE') {
		    		$arahAngin[1] = 'Tenggara';
		    	}elseif ($arahAngin[1] == 'S') {
		    		$arahAngin[1] = 'Selatan';
		    	}elseif ($arahAngin[1] == 'SW') {
		    		$arahAngin[1] = 'Barat Daya';
		    	}elseif ($arahAngin[1] == 'W') {
		    		$arahAngin[1] = 'Barat';
		    	}elseif ($arahAngin[1] == 'NW') {
		    		$arahAngin[1] = 'Barat Laut';
		    	}elseif ($arahAngin[1] == 'WNW') {
		    		$arahAngin[1] = 'Barat Barat Laut';
		    	}elseif ($arahAngin[1] == 'NNE') {
		    		$arahAngin[1] = 'Utara Timur Laut';
		    	}elseif ($arahAngin[1] == 'ENE') {
		    		$arahAngin[1] = 'Timur Timur Laut';
		    	}elseif ($arahAngin[1] == 'ESE') {
		    		$arahAngin[1] = 'Timur Tenggara';
		    	}elseif ($arahAngin[1] == 'SSE') {
		    		$arahAngin[1] = 'Selatan Tenggara';
		    	}elseif ($arahAngin[1] == 'SSW') {
		    		$arahAngin[1] = 'Selatan Barat Daya';
		    	}elseif ($arahAngin[1] == 'WSW') {
		    		$arahAngin[1] = 'Barat Barat Daya';
		    	}elseif ($arahAngin[1] == 'NNW') {
		    		$arahAngin[1] = 'Utara Barat Laut';
		    	}
		    	$arahAngin = $arahAngin[0].' '.$arahAngin[1];
	    	}else{
	    		$arahAngin = $arahAngin[0];
	    	}
    	return $arahAngin;	
    }

    

 ?>