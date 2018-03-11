@extends('admin.master')
@section('judul','Tambah Admin')
@section('isi')
	<div class="ui segment">
		<form class="ui form">
		  	<h4 class="ui dividing header">Tambah Akun Admin</h4>
		  	<div class="field">

		    	<div class="two fields">
		      		<div class="field">
		      			<label>Nama</label>
		        		<input name="nama" placeholder="Nama" type="text">
		      		</div>
		      		
		      		<div class="field">
		      			<label>Nama</label>
		        		<input name="email" placeholder="email" type="text">
		      		</div>
		    	</div>

		  	</div>
		  	<div class="field">

		    	<div class="fields">
		      		<div class="eight wide field">
		      			<label>Password</label>
		        		<input name="password" placeholder="Street Address" type="password">
		      		</div>
		      		<div class="eight wide field">
		      			<label>Ketik Ulang Password</label>
		        		<input name="passwordLagi" placeholder="Ketik Ulang Password" type="password">
		      		</div>
		    	</div>

		  	</div>
		  <button class="ui button animated blue inverted" tabindex="0">
			<div class="visible content">
				Simpan
			</div>
			<div class="hidden content">
				<i class="save icon"></i>
			</div>
		  </button>
		</form>
	</div>
@endsection