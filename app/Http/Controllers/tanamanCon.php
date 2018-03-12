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
    public function index()
    {

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
    	$suhu->suhuS1 = $request->suhuS1;
    	$suhu->suhuS2 = $request->suhuS2;
    	$suhu->suhuS3 = $request->suhuS3;
    	$suhu->suhuN = $request->suhuN;
    	$tanam->suhu()->save($suhu);

    	$ph = new PhS();
    	$ph->phS1 = $request->phS1;
    	$ph->phS2 = $request->phS2;
    	$ph->phS3 = $request->phS3;
    	$ph->phN = $request->phN;
    	$tanam->ph()->save($ph);

    	$lembab = new LembabS();
    	$lembab->lembabS1 = $request->lembabS1;
    	$lembab->lembabS2 = $request->lembabS2;
    	$lembab->lembabS3 = $request->lembabS3;
    	$lembab->lembabN = $request->lembabN;
    	$tanam->lembab()->save($lembab);

    	$curah = new CurahHujanS();
    	$curah->curahS1 = $request->curahS1;
    	$curah->curahS2 = $request->curahS2;
    	$curah->curahS3 = $request->curahS3;
    	$curah->curahN = $request->curahN;
    	$tanam->curahHujan()->save($curah);

    	return redirect('admin/tanaman/tambah');
    }
}
