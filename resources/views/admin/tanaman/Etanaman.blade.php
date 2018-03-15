@extends('admin.master')
@section('judul','Tambah Data Tanaman')

@section('isi')
	<div class="ui segment raised tall stacked teal">
		<form class="ui form" method="POST" action="{{ route('tanaman.perbaharui',encrypt($db->id)) }}">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PATCH">
			
		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Tambah Data Tanaman</h4>
			  	<div class="field">
			    	<label>Nama Tanaman</label>
			    	<div class="one fields">
			      		<div class="sixteen wide field">
			        		<input name="nama_tanaman" placeholder="Nama Tanaman" value="{{ $db->nama_tanaman }}" type="text">
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
					        	<input name="suhuS1min" value="{{ $data->suhuS1min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS1max" value="{{ $data->suhuS1max }}" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS2min" value="{{ $data->suhuS1min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS2max" value="{{ $data->suhuS2max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS3min" value="{{ $data->suhuS3min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS3max" value="{{ $data->suhuS3max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuNmin" value="{{ $data->suhuNmin }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuNmax" value="{{ $data->suhuNmax }}" type="text">
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
					        	<input name="lembabS1min" value="{{ $data->lembabS1min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS1max" value="{{ $data->lembabS1max }}" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS2min" value="{{ $data->lembabS2min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS2max" value="{{ $data->lembabS2max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS3min" value="{{ $data->lembabS3min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS3max" value="{{ $data->lembabS3max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabNmin" value="{{ $data->lembabNmin }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabNmax" value="{{ $data->lembabNmax }}" type="text">
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
					        	<input name="phS1min" value="{{ $data->phS1min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS1max" value="{{ $data->phS1max }}" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS2min" value="{{ $data->phS2min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS2max" value="{{ $data->phS2max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS3min" value="{{ $data->phS3min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS3max" value="{{ $data->phS3max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phNmin" value="{{ $data->phNmin }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="phNmax" value="{{ $data->phNmax }}" type="text">
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
					        	<input name="curahS1min" value="{{ $data->curahS1min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS1max" value="{{ $data->curahS1max }}" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS2min" value="{{ $data->curahS2min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS2max" value="{{ $data->curahS2max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS3min" value="{{ $data->curahS3min }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS3max" value="{{ $data->curahS3max }}" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahNmin" value="{{ $data->curahNmin }}" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahNmax" value="{{ $data->curahNmax }}" type="text">
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