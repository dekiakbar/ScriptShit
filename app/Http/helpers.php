<?php 
	
	//fungsi untuk mentranslate arah mata angin
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
    // akhir fungsi translate arah angin

    // fungsi untuk mentranslate nama cuaca
    function Tcuaca($cuaca)
    {
    	if ($cuaca == 'clear sky') {
    		$cuaca = 'Cerah';	
    	}elseif ($cuaca == 'few clouds') {
    		$cuaca = 'Berawan';
    	}elseif ($cuaca == 'scattered clouds') {
    		$cuaca = 'Sangat Berawan';
    	}elseif ($cuaca == 'broken clouds') {
    		$cuaca = 'Mendung';
    	}elseif ($cuaca == 'shower rain') {
    		$cuaca = 'Gerimis';
    	}elseif ($cuaca == 'rain') {
    		$cuaca = 'Hujan';
    	}elseif ($cuaca == 'thunderstorm') {
    		$cuaca = '';
    	}elseif ($cuaca == 'snow') {
    		$cuaca = 'Bersalju';
    	}elseif ($cuaca == 'mist') {
    		$cuaca = 'Berkabut';
    	}
    	return $cuaca;
    }
    // akhir fungsi translate nama cuaca

    // Methode AHP
    // 
    //fungsi untuk mengkuadratkan matriks
    function kuadrat($matriks)
    {
		$hasil = array();
		for ($i=0; $i < sizeof($matriks) ; $i++) { 
			for ($j=0; $j < sizeof($matriks) ; $j++) {
				$simpan = 0; 
				for ($k=0; $k < sizeof($matriks) ; $k++) { 
					$simpan += $matriks[$i][$k] * $matriks[$k][$j];
				}
				$hasil[$i][$j] = $simpan;
			}
		}
		return $hasil;
	}
	// akhir fungsi kuadrat
	// 
	// fungsi utk menjumlahkan baris matriks
	function jumlahkan($matriks)
	{
		$hasil = array();
		for ($i=0; $i < sizeof($matriks); $i++) { 
			$tampung = 0;
			for ($j=0; $j < sizeof($matriks); $j++) { 
				$tampung += $matriks[$i][$j];
			}
			$hasil[$i]=$tampung;
		}

		$total=0;
		for ($k=0; $k < sizeof($hasil) ; $k++) { 
			$total += $hasil[$k];
		}
		$hasil[$k+1] = $total;
		return $hasil;
	}
	// akhir fungsi penjumlahan baris matriks
	// 
	// fungsu utk normalisasi matriks
	function normalisasi($matriks)
	{
		$hasil = array();
		$pembagi = $matriks[sizeof($matriks)];
		$tampung = 0;
		for ($i=0; $i < sizeof($matriks)-1; $i++) { 
			$hasil[$i] = $matriks[$i]/$pembagi; 
		}
		return $hasil;
	}
	// akhir fungsi normalisasi matriks
	// 
	// akhir methode AHP


 ?>