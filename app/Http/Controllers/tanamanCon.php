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
    public function simpan(Request $request)
    {
    	$tanam = new Tanaman();
    	$tanam->nama_tanaman = $request->nama_tanaman;
    	$tanam->save();

    	$suhu = new SuhuS();
    	$suhu->suhuS1 = $request->input('suhuS1min').'-'.$request->input('suhuS1max');
    	$suhu->suhuS2 = $request->input('suhuS2min').'-'.$request->input('suhuS2max');
    	$suhu->suhuS3 = $request->input('suhuS3min').'-'.$request->input('suhuS3max');
    	$suhu->suhuN  = $request->input('suhuNmin').'-'.$request->input('suhuNmax');
    	$tanam->suhu()->save($suhu);

    	$ph = new PhS();
    	$ph->phS1 = $request->input('phS1min').'-'.$request->input('phS1max');
    	$ph->phS2 = $request->input('phS2min').'-'.$request->input('phS2max');
    	$ph->phS3 = $request->input('phS3min').'-'.$request->input('phS3max');
    	$ph->phN  = $request->input('phNmin').'-'.$request->input('phNmax');
    	$tanam->ph()->save($ph);

    	$lembab = new LembabS();
    	$lembab->lembabS1 = $request->input('lembabS1min').'-'.$request->input('lembabS1max');
    	$lembab->lembabS2 = $request->input('lembabS2min').'-'.$request->input('lembabS2max');
    	$lembab->lembabS3 = $request->input('lembabS3min').'-'.$request->input('lembabS3max');
    	$lembab->lembabN  = $request->input('lembabNmin').'-'.$request->input('lembabNmax');
    	$tanam->lembab()->save($lembab);

    	$curah = new CurahHujanS();
    	$curah->curahS1 = $request->input('curahS1min').'-'.$request->input('curahS1max');
    	$curah->curahS2 = $request->input('curahS2min').'-'.$request->input('curahS2max');
    	$curah->curahS3 = $request->input('curahS3min').'-'.$request->input('curahS3max');
    	$curah->curahN  = $request->input('curahNmin').'-'.$request->input('curahNmax');
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

    	$sS1	=	explode('-',$db->suhu->first()->suhuS1);
    	$sS2	=	explode('-',$db->suhu->first()->suhuS2);
    	$sS3	=	explode('-',$db->suhu->first()->suhuS3);
    	$sSN	=	explode('-',$db->suhu->first()->suhuN);
    	$pS1	=	explode('-',$db->ph->first()->phS1);
    	$pS2	=	explode('-',$db->ph->first()->phS2);
    	$pS3	=	explode('-',$db->ph->first()->phS3);
    	$pSN	=	explode('-',$db->ph->first()->phN);
    	$lS1	=	explode('-',$db->lembab->first()->lembabS1);
    	$lS2	=	explode('-',$db->lembab->first()->lembabS2);
    	$lS3	=	explode('-',$db->lembab->first()->lembabS3);
    	$lSN	=	explode('-',$db->lembab->first()->lembabN);
    	$cS1	=	explode('-',$db->curahHujan->first()->curahS1);
    	$cS2	=	explode('-',$db->curahHujan->first()->curahS2);
    	$cS3	=	explode('-',$db->curahHujan->first()->curahS3);
    	$cSN	=	explode('-',$db->curahHujan->first()->curahN);

    	$data =array(
    		'suhuS1min'	=> $sS1[0],'suhuS1max'	=> $sS1[1],'suhuS2min'	=> $sS2[0],'suhuS2max'	=> $sS2[1],
    		'suhuS3min'	=> $sS3[0],'suhuS3max'	=> $sS3[1],'suhuNmin' 	=> $sSN[0],'suhuNmax' 	=> $sSN[1],
    		'phS1min' 	=> $pS1[0],'phS1max' 	=> $pS1[1],'phS2min' 	=> $pS2[0],'phS2max' 	=> $pS2[1],
    		'phS3min' 	=> $pS3[0],'phS3max' 	=> $pS3[1],'phNmin' 	=> $pSN[0],'phNmax' 	=> $pSN[1],
    		'lembabS1min' => $lS1[0],'lembabS1max' => $lS1[1],'lembabS2min' => $lS2[0],'lembabS2max' => $lS2[1],
    		'lembabS3min' => $lS3[0],'lembabS3max' => $lS3[1],'lembabNmin' => $lSN[0],'lembabNmax' => $lSN[1],
    		'curahS1min' => $cS1[0],'curahS1max' => $cS1[1],'curahS2min' => $cS2[0],'curahS2max' => $cS2[1],
    		'curahS3min' => $cS3[0],'curahS3max' => $cS3[1],'curahNmin'  => $cSN[0],'curahNmax'  => $cSN[1],
    	);

    	$data = (object) $data;

    	return view('admin.tanaman.Etanaman',compact('data','db'));
    }

    public function perbaharui(Request $request,$id)
    {
    	$db = Tanaman::with('suhu','lembab','curahHujan','ph')->findOrFail(decrypt($id));

    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    	$db->
    }
}
