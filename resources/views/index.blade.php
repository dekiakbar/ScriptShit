@extends('master')
@section('judul','Skripsi')

@section('isi')
<div class="ui container segment">
	<div class="ui grid container">
		<div class="twelve wide column">
			<div class="ui form">
				<div class="field">
					<input id="cari" type="text" placeholder="Masukan Alamat">
				</div>
			</div>
		</div>
		<div class="four wide column">
			<a href="" id="proses" class="ui blue button">
				<i class="rocket icon"></i>
				Proses Data
			</a>
		</div>
		<div class="sixteen wide column">
		    <div id="map" style="height: 500px"></div>

		    <div id="informasiTempat" class="displaynone">
		    	Nama : <span id="nama-tempat" class="title"></span>
		    	<br>
		    	ID lokasi : <span id="id-tempat"></span>
		    	<br>
		    	Alamat : <span id="alamat"></span>
		    	<br>
		    	Geolokasi : <span id="lalo"></span>
		    </div>
		</div>
	</div>
</div>
@endsection
