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
			      		<label>Sangat Sesuai</label>
					    <div class="two fields">
					        <div class="field">
					        	<input name="suhuS1min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS1max" placeholder="18-23" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS2min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS2max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS3min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS3max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuNmin" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuNmax" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			  	</div>
			</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Kelembaban</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Sesuai</label>
					    <div class="two fields">
					        <div class="field">
					        	<input name="lembabS1min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS1max" placeholder="18-23" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS2min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS2max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS3min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS3max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabNmin" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabNmax" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			  	</div>
			</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data PH</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Sesuai</label>
					    <div class="two fields">
					        <div class="field">
					        	<input name="phS1min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS1max" placeholder="18-23" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS2min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS2max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS3min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS3max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phNmin" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="phNmax" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			  	</div>
			</div>

			<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Curah Hujan</h4>
			  	<div class="fields">
			    	<div class="four wide field">
			      		<label>Sangat Sesuai</label>
					    <div class="two fields">
					        <div class="field">
					        	<input name="curahS1min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS1max" placeholder="18-23" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS2min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS2max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS3min" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS3max" placeholder="18-23" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahNmin" placeholder="18-23" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahNmax" placeholder="18-23" type="text">
					        </div>
					    </div>
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