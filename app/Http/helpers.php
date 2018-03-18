<?php 
/**
* Kelas helper yang berisi inti dari semua logic aplikasi ini
* Here is the magic formula 
*/
	
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
    		$cuaca = 'Badai';
    	}elseif ($cuaca == 'snow') {
    		$cuaca = 'Bersalju';
    	}elseif ($cuaca == 'mist') {
    		$cuaca = 'Berkabut';
    	}
    	return $cuaca;
    }
    // akhir fungsi translate nama cuaca

/**
* Function Login untuk metode AHP
*/
//========================== Methode AHP ========================== 
    // 
    // fungsi perbandingan , mengubah nilai jd matriks
    function perbandinganKriteria($kriteria)
	{
		$hasil = array();
		for ($i=0; $i < sizeof($kriteria) ; $i++) { 
			for ($j=0; $j < sizeof($kriteria) ; $j++) { 
				$hasil[$i][$j] = $kriteria[$i]/$kriteria[$j];
			}
		}
		return $hasil;
	}
    // akhir fungsi perbandingan
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
		$hasil[$k] = $total;
		return $hasil;
	}
	// akhir fungsi penjumlahan baris matriks
	// 
	// fungsi utk normalisasi matriks
	function normalisasi($matriks)
	{
		$hasil = array();
		$pembagi = $matriks[sizeof($matriks)-1];
		$tampung = 0;
		for ($i=0; $i < sizeof($matriks); $i++) { 
			$hasil[$i] = $matriks[$i]/$pembagi; 
		}
		return $hasil;
	}
	// akhir fungsi normalisasi matriks
	// 
	// fungsi eigen vektor pilihan x eigen vektor kriteria
	function EVPxEVK($a,$b){
		$hasil = array();
		for ($i=0; $i < sizeof($a) ; $i++) { 
			for ($j=0; $j < sizeof($b) ; $j++) {
				$simpan = 0; 
				for ($k=0; $k < sizeof($a) ; $k++) { 
					$simpan += $a[$i][$k] * $b[$k][0];
				}
				$hasil[$i][0] = $simpan;
			}
		}
		return $hasil;
	}
//==========================  akhir methode AHP ========================== 

/**
* Function untuk memproses data tanaman dari form input
*/
//========================== Function input form =========================
	function cekInput($data1,$data2,$data3,$data4)
	{
		$hasil="";
		if ((!empty($data1) && !empty($data2)) && (!empty($data3) && !empty($data4))) 
		{
			$hasil = $data1.'-'.$data2.','.$data3.'-'.$data4;
		}
		else if ((!empty($data1) && !empty($data2)) || empty($data3) || empty($data4)) 
		{
			$hasil = $data1.'-'.$data2;
		}
		return $hasil;
	}

// Function untuk memecah data dari database untuk di edit pada form edit tanaman
	function pecahData($data)
	{
		$hasil=array();

		if (strpos($data, ',')) 
		{
			$range = explode(',', $data);
			
			if (strpos($range[0],'-') && strpos($range[1],'-')) 
			{
				$dataMin = explode('-', $range[0]);
				$dataMax = explode('-', $range[1]);

				$hasil = array(
					'status' => true,
					'min1' => $dataMin[0],'min2' => $dataMin[1],
					'max1' => $dataMax[0],'max2' => $dataMax[1]
				);
			}else
			{
				$hasil = array(
					'min' => $range[0],'max' => $range[1]
				);
			}
		}
		else
		{
			$dataMin = explode('-', $data);

			$hasil = array(
				'status' => false,
				'min1' => $dataMin[0],'min2' => $dataMin[1],
				'max1' => null, 'max2' => null
			);
		}

		return (object) $hasil;
	}
?>