<?php

use Illuminate\Database\Seeder;

use App\Tanaman;
use App\SuhuS;
use App\PhS;
use App\LembabS;
use App\CurahHujanS;

class tanamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nama_tanaman = ['Padi Sawah','Padi Gogo','Pangan Jagung','Kacang Tanah'];
    	$suhuS1   = ['24-29','24-29','20-26','25-27'];
    	$suhuS2   = ['22-24','22-24','26-23','20-25'];
    	$suhuS3   = ['18-22','18-22','16-20','18-20'];
    	$suhuN    = ['18','18','16','18'];
    	$phS1     = ['5.5-7.0','5.5-7.5','5.8-7.8','6.0-7.0'];
		$phS2     = ['4.5-5.5','5.0-5.5','5.5-5.8','5.0-6.0'];
		$phS3     = ['4.5','5.0','5.5','5.0'];
		$phN      = ['1','3','3','3'];
		$lembabS1 = ['33-90','33-90','42','50-80'];
		$lembabS2 = ['30-33','30-33','36-42','80'];
		$lembabS3 = ['30','30','30-36','80'];
		$lembabN  = ['10','10','30','10','',''];
		$curahS1  = ['0','0','900-1200','400-1100'];
		$curahS2  = ['0','0','1200-1600','1100-1600'];
		$curahS3  = ['0','0','1600','1600-1900'];
		$curahN   = ['0','0','300','1900'];

		foreach ($nama_tanaman as $index => $isi) {
			$tanam = new Tanaman();
	    	$tanam->nama_tanaman = $nama_tanaman[$index];
	    	$tanam->save();

	    	$suhu = new SuhuS();
	    	$suhu->suhuS1 = $suhuS1[$index];
	    	$suhu->suhuS2 = $suhuS2[$index];
	    	$suhu->suhuS3 = $suhuS3[$index];
	    	$suhu->suhuN  = $suhuN[$index];
	    	$tanam->suhu()->save($suhu);

	    	$ph = new PhS();
	    	$ph->phS1 = $phS1[$index];
	    	$ph->phS2 = $phS2[$index];
	    	$ph->phS3 = $phS3[$index];
	    	$ph->phN  = $phN[$index];
	    	$tanam->ph()->save($ph);

	    	$lembab = new LembabS();
	    	$lembab->lembabS1 = $lembabS1[$index];
	    	$lembab->lembabS2 = $lembabS2[$index];
	    	$lembab->lembabS3 = $lembabS3[$index];
	    	$lembab->lembabN  = $lembabN[$index];
	    	$tanam->lembab()->save($lembab);

	    	$curah = new CurahHujanS();
	    	$curah->curahS1 = $curahS1[$index];
	    	$curah->curahS2 = $curahS2[$index];
	    	$curah->curahS3 = $curahS3[$index];
	    	$curah->curahN  = $curahN[$index];
	    	$tanam->curahHujan()->save($curah);
		}
    }
}
