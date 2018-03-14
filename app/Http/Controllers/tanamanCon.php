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
    	return view('admin.tanaman.tanaman');
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
    	$suhu->suhuN = $request->input('suhuNmin').'-'.$request->input('suhuNmax');
    	$tanam->suhu()->save($suhu);

    	$ph = new PhS();
    	$ph->phS1 = $request->input('phS1min').'-'.$request->input('phS1max');
    	$ph->phS2 = $request->input('phS2min').'-'.$request->input('phS2max');
    	$ph->phS3 = $request->input('phS3min').'-'.$request->input('phS3max');
    	$ph->phN = $request->input('phNmin').'-'.$request->input('phNmax');
    	$tanam->ph()->save($ph);

    	$lembab = new LembabS();
    	$lembab->lembabS1 = $request->input('lembabS1min').'-'.$request->input('lembabS1max');
    	$lembab->lembabS2 = $request->input('lembabS2min').'-'.$request->input('lembabS2max');
    	$lembab->lembabS3 = $request->input('lembabS3min').'-'.$request->input('lembabS3max');
    	$lembab->lembabN = $request->input('lembabNmin').'-'.$request->input('lembabNmax');
    	$tanam->lembab()->save($lembab);

    	$curah = new CurahHujanS();
    	$curah->curahS1 = $request->input('curahS1min').'-'.$request->input('curahS1max');
    	$curah->curahS2 = $request->input('curahS2min').'-'.$request->input('curahS2max');
    	$curah->curahS3 = $request->input('curahS3min').'-'.$request->input('curahS3max');
    	$curah->curahN = $request->input('curahNmin').'-'.$request->input('curahNmax');
    	$tanam->curahHujan()->save($curah);

    	return redirect('admin/tanaman/tambah');
    }
}
