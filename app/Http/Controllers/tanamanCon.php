<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tanaman;
use App\SuhuS;
use App\PhS;
use App\LembabS;
use App\CurahHujanS;

class tanamanCon extends Controller
{
	/**
     * Function untuk menampilkan data tanaman
     *
     */
    public function tampil(Request $request)
    {
    	$datas = Tanaman::with('suhu','ph','lembab','curahHujan')->paginate(10);
    	return view('admin.tanaman.Itanaman',compact('datas'))->with('no',($request->input('page',1)-1)*10);
    }

    /**
     * Function untuk menampilkan form tambah data tanaman
     *
     */
    public function tambah()
    {
    	return view('admin.tanaman.Ttanaman');
    }

    /**
     * Function untuk menampilkan data tanaman
     *
     */
    public function simpan(Request $in)
    {
    	//function untuk menggabungkan inout menjadi sebuah string
    	$suhuS1	  = $in->suhuS1min.'-'.$in->suhuS1max;
    	$suhuS2	  = cekInput($in->suhuS2min1, $in->suhuS2min2, $in->suhuS2max1, $in->suhuS2max2);
    	$suhuS3	  = cekInput($in->suhuS3min1, $in->suhuS3min2, $in->suhuS3max1, $in->suhuS3max2);
    	$suhuN    = cekInput($in->suhuNmin1, $in->suhuNmin2, $in->suhuNmax1, $in->suhuNmax2);

    	$phS1     = $in->phS1min.'-'.$in->phS1max;
    	$phS2     = cekInput($in->phS2min1, $in->phS2min2, $in->phS2max1, $in->phS2max2);
    	$phS3 	  = cekInput($in->phS3min1, $in->phS3min2, $in->phS3max1, $in->phS3max2);
    	$phN 	  = cekInput($in->phNmin1, $in->phNmin2, $in->phNmax1, $in->phNmax2);
    	
    	$lembabS1 = $in->lembabS1min.'-'.$in->lembabS1max;
    	$lembabS2 = cekInput($in->lembabS2min1, $in->lembabS2min2, $in->lembabS2max1, $in->lembabS2max2);
    	$lembabS3 = cekInput($in->lembabS3min1, $in->lembabS3min2, $in->lembabS3max1, $in->lembabS3max2);
    	$lembabN  = cekInput($in->lembabNmin1, $in->lembabNmin2, $in->lembabNmax1, $in->lembabNmax2);
    	
    	$curahS1  = $in->curahS1min.'-'.$in->curahS1max;
    	$curahS2  = cekInput($in->curahS2min1, $in->curahS2min1, $in->curahS2max1, $in->curahS2max2);
    	$curahS3  = cekInput($in->curahS3min1, $in->curahS3min2, $in->curahS3max1, $in->curahS3max2);
    	$curahN   = cekInput($in->curahNmin1, $in->curahNmin2, $in->curahNmax1, $in->curahNmax2);

    	//seksi simpan ke database
    	$tanam = new Tanaman();
    	$tanam->nama_tanaman = $in->nama_tanaman;
    	$tanam->save();

    	$suhu = new SuhuS();
    	$suhu->suhuS1 = $suhuS1;
    	$suhu->suhuS2 = $suhuS2;
    	$suhu->suhuS3 = $suhuS3;
    	$suhu->suhuN  = $suhuN;
    	$tanam->suhu()->save($suhu);

    	$ph = new PhS();
    	$ph->phS1 = $phS1;
    	$ph->phS2 = $phS2;
    	$ph->phS3 = $phS3;
    	$ph->phN  = $phN;
    	$tanam->ph()->save($ph);

    	$lembab = new LembabS();
    	$lembab->lembabS1 = $lembabS1;
    	$lembab->lembabS2 = $lembabS2;
    	$lembab->lembabS3 = $lembabS3;
    	$lembab->lembabN  = $lembabN;
    	$tanam->lembab()->save($lembab);

    	$curah = new CurahHujanS();
    	$curah->curahS1 = $curahS1;
    	$curah->curahS2 = $curahS2;
    	$curah->curahS3 = $curahS3;
    	$curah->curahN  = $curahN;
    	$tanam->curahHujan()->save($curah);

    	return redirect('admin/tanaman/tambah');
    }

    /**
     * Function untuk merubah data tanaman
     *
     */
    public function edit($id)
    {
    	$db = Tanaman::with('suhu','ph','lembab','curahHujan')
    					->where('id',decrypt($id))
    					->firstOrFail();

    	$sS1	=	pecahData($db->suhu->first()->suhuS1);
    	$sS2	=	pecahData($db->suhu->first()->suhuS2);
    	$sS3	=	pecahData($db->suhu->first()->suhuS3);
    	$sSN	=	pecahData($db->suhu->first()->suhuN);

    	$pS1	=	pecahData($db->ph->first()->phS1);
    	$pS2	=	pecahData($db->ph->first()->phS2);
    	$pS3	=	pecahData($db->ph->first()->phS3);
    	$pSN	=	pecahData($db->ph->first()->phN);
    	
        $lS1	=	pecahData($db->lembab->first()->lembabS1);
    	$lS2	=	pecahData($db->lembab->first()->lembabS2);
    	$lS3	=	pecahData($db->lembab->first()->lembabS3);
    	$lSN	=	pecahData($db->lembab->first()->lembabN);
    	
        $cS1	=	pecahData($db->curahHujan->first()->curahS1);
    	$cS2	=	pecahData($db->curahHujan->first()->curahS2);
    	$cS3	=	pecahData($db->curahHujan->first()->curahS3);
    	$cSN	=	pecahData($db->curahHujan->first()->curahN);

    	$data = (object) array(
            'sS1' => $sS1,
            'sS2' => $sS2,
            'sS3' => $sS3,
            'sSN' => $sSN,
            'pS1' => $pS1,
            'pS2' => $pS2,
            'pS3' => $pS3,
            'pSN' => $pSN,
            'lS1' => $lS1,
            'lS2' => $lS2,
            'lS3' => $lS3,
            'lSN' => $lSN,
            'cS1' => $cS1,
            'cS2' => $cS2,
            'cS3' => $cS3,
            'cSN' => $cSN,
        );

    	return view('admin.tanaman.Etanaman',compact('data','db'));
    }

    /**
    * Function untuk memperbaharui data tanaman ke database
    *
    */
    public function perbaharui(Request $request,$id)
    {
    	$db = Tanaman::with('suhu','lembab','curahHujan','ph')->findOrFail(decrypt($id));

    	$db->nama_tanaman = $request->nama_tanaman;
    	$db->save();

    	$suhu = $db->suhu()->update([
    		'suhuS1' => $request->input('suhuS1min').'-'.$request->input('suhuS1max'),
			'suhuS2' => $request->input('suhuS2min').'-'.$request->input('suhuS2max'),
			'suhuS3' => $request->input('suhuS3min').'-'.$request->input('suhuS3max'),
			'suhuN' => $request->input('suhuNmin').'-'.$request->input('suhuNmax'),
    	]);

    	$ph = $db->ph()->update([
    		'phS1' => $request->input('phS1min').'-'.$request->input('phS1max'),
			'phS2' => $request->input('phS2min').'-'.$request->input('phS2max'),
			'phS3' => $request->input('phS3min').'-'.$request->input('phS3max'),
			'phN' =>  $request->input('phNmin').'-'.$request->input('phNmax'),
    	]);

    	$lembab = $db->lembab()->update([
    		'lembabS1' => $request->input('lembabS1min').'-'.$request->input('lembabS1max'),
    		'lembabS2' => $request->input('lembabS2min').'-'.$request->input('lembabS2max'),
    		'lembabS3' => $request->input('lembabS3min').'-'.$request->input('lembabS3max'),
    		'lembabN' => $request->input('lembabNmin').'-'.$request->input('lembabNmax'),
    	]);

    	$curah = $db->curahHujan()->update([
    		'curahS1' => $request->input('curahS1min').'-'.$request->input('curahS1max'),
			'curahS2' => $request->input('curahS2min').'-'.$request->input('curahS2max'),
			'curahS3' => $request->input('curahS3min').'-'.$request->input('curahS3max'),
			'curahN' => $request->input('curahNmin').'-'.$request->input('curahNmax'),
    	]);

    	return redirect('admin/tanaman');
    }

    public function hapus($id)
    {
    	$hapus = Tanaman::with('suhu','lembab','curahHujan','ph')->findOrFail(decrypt($id));
    	$hapus->delete();
    }
}
