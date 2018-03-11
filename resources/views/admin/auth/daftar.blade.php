@extends('admin.master')
@section('judul','Tambah Admin')
@section('isi')
	<div class="ui segment">
		<form class="ui form" method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
		  	<h4 class="ui dividing header">Tambah Akun Admin</h4>
		  	<div class="field">

		    	<div class="two fields">
		      		<div class="field">
		      			<label>Nama</label>
		        		<input name="name" placeholder="Nama" type="text" value="{{ old('name') }}">
		      		</div>
		      		
		      		<div class="field">
		      			<label>Email</label>
		        		<input name="email" placeholder="Alamat Email" type="text" value="{{ old('email') }}">
		      		</div>
		    	</div>

		  	</div>
		  	<div class="field">

		    	<div class="fields">
		      		<div class="eight wide field">
		      			<label>Password</label>
		        		<input name="password" placeholder="Password" type="password" value="{{ old('password') }}">
		      		</div>
		      		<div class="eight wide field">
		      			<label>Ketik Ulang Password</label>
		        		<input name="password_confirmation" placeholder="Ketik Ulang Password" type="password" value="{{ old('passwordLagi') }}">
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