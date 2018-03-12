@extends('admin.master')
@section('judul','Tambah Data Tanaman')

@section('isi')
	<div class="ui segment raised tall stacked teal">
		<form class="ui form" method="POST" action="{{ route('tanaman.simpan') }}">
			{{ csrf_field() }}
			
		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Tambah Data Tanaman</h4>
			  	<div class="field">
			    	<label>Nama Tanaman</label>
			    	<div class="one fields">
			      		<div class="sixteen wide field">
			        		<input name="nama_tanaman" placeholder="Nama Tanaman" type="text">
			      		</div>
			    	</div>
			  	</div>
			</div>
		  
		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Suhu</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Cocok</label>
			      		<input name="suhuS1" placeholder="18-23" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cocok</label>
			      		<input name="suhuS2" placeholder="10-19,23-25" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Cocok</label>
			      		<input name="suhuS3" placeholder="1-9,23-24" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Cocok</label>
			      		<input name="suhuN" placeholder="1-9,23-24" type="text">
			    	</div>
			  	</div>
			</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Kelembaban</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Cocok</label>
			      		<input name="lembabS1" placeholder="18-23" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cocok</label>
			      		<input name="lembabS2" placeholder="10-19,23-25" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Cocok</label>
			      		<input name="lembabS3" placeholder="1-9,23-24" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Cocok</label>
			      		<input name="lembabN" placeholder="1-9,23-24" type="text">
			    	</div>
			  	</div>
		  	</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data PH</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Cocok</label>
			      		<input name="phS1" placeholder="4-6" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cocok</label>
			      		<input name="phS2" placeholder="3-4,7-8" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Cocok</label>
			      		<input name="phS3" placeholder="2,9" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Cocok</label>
			      		<input name="phN" placeholder="1,10" type="text">
			    	</div>
			  	</div>
			</div>

			<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Curah Hujan</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Cocok</label>
			      		<input name="curahS1" placeholder="400-600" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cocok</label>
			      		<input name="curahS2" placeholder="300-400,700-800" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Cocok</label>
			      		<input name="curahS3" placeholder="200,900" type="text">
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Cocok</label>
			      		<input name="curahN" placeholder="100,1000" type="text">
			    	</div>
			  	</div>
			</div>

		  	<div class=" ui divider"></div>
			
			<div class="ui right aligned">
				<button class="ui button animated blue">
					<div class="visible content">
						Simpan
					</div>
					<div class="hidden content">
						<i class="save icon"></i>
					</div>
				</button>
			</div>
		</form>
	</div>
@endsection