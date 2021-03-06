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
					        	<input name="suhuS1min" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS1max" placeholder="xxx" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS2min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS2min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Sesuai Batas Maksimal</label>
					    <div class="two fields">
					        <div class="field">
					        	<input name="suhuS2max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS2max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS3min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS3min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Cukup Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuS3max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuS3max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuNmin1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuNmin2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Tidak Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="suhuNmax1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="suhuNmax2" placeholder="xxx" type="text">
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
					        	<input name="lembabS1min" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS1max" placeholder="xxx" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS2min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS2min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS2max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS2max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS3min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS3min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Cukup Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabS3max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabS3max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabNmin1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabNmin2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Tidak Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="lembabNmax1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="lembabNmax2" placeholder="xxx" type="text">
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
					        	<input name="phS1min" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS1max" placeholder="xxx" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS2min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS2min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS2max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS2max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS3min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS3min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Cukup Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phS3max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phS3max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phNmin1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phNmin2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Tidak Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="phNmax1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="phNmax2" placeholder="xxx" type="text">
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
					        	<input name="curahS1min" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS1max" placeholder="xxx" type="text">
					        </div>
					    </div>
				    </div>
			    	<div class="four wide field">
			      		<label>Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS2min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS2min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS2max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS2max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Cukup Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS3min1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS3min2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Cukup Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahS3max1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahS3max2" placeholder="xxx" type="text">
					        </div>
					    </div>
			    	</div>
			    	<div class="four wide field">
			      		<label>Tidak Sesuai Batas Minimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahNmin1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahNmin2" placeholder="xxx" type="text">
					        </div>
					    </div>
					    <label>Tidak Sesuai Batas Maksimal</label>
			      		<div class="two fields">
					        <div class="field">
					        	<input name="curahNmax1" placeholder="xxx" type="text">
					        </div>
					        <div class="field">
					        	<input name="curahNmax2" placeholder="xxx" type="text">
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