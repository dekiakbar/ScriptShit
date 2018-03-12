<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tanaman;
use App\suhuS;
use App\phS;
use App\lembabS;
use App\curahHujanS;

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
    public function simpan()
    {

    }
}
