@extends('admin.master')
@section('judul','Edit Data Tanaman')

@section('isi')
	<div class="ui segment raised tall stacked teal">
		<form class="ui form" method="POST" action="{{ route('tanaman.perbaharui',encrypt($db->id)) }}">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="PATCH">
			
		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Edit Data Tanaman</h4>
			  	<div class="field">
			    	<label>Nama Tanaman</label>
			    	<div class="one fields">
			      		<div class="sixteen wide field">
			        		<input name="nama_tanaman" placeholder="Nama Tanaman" type="text" value="{{ $db->nama_tanaman}}">
			      		</div>
			    	</div>
			  	</div>
			</div>
		  
		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Suhu</h4>
			  	<div class="fields">
			    	
			    	@if($data->sS1->strip == true && $data->sS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="suhuS1min" placeholder="xxx" type="text" value="{{ $data->sS1->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS1max" placeholder="xxx" type="text" value="{{ $data->sS1->data2}}">
						        </div>
						    </div>
					    </div>
			    	@endif

			    	@if($data->sS2->koma == true && $data->sS2->strip == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS2min1" placeholder="xxx" type="text" value="{{ $data->sS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS2min2" placeholder="xxx" type="text" value="{{ $data->sS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="suhuS2max1" placeholder="xxx" type="text" value="{{ $data->sS2->data3}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS2max2" placeholder="xxx" type="text" value="{{ $data->sS2->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->sS2->koma == false && $data->sS2->strip == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS2min1" placeholder="xxx" type="text" value="{{ $data->sS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS2min2" placeholder="xxx" type="text" value="{{ $data->sS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="suhuS2max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="suhuS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->sS3->koma == true && $data->sS3->strip == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS3min1" placeholder="xxx" type="text" value="{{ $data->sS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS3min2" placeholder="xxx" type="text" value="{{ $data->sS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS3max1" placeholder="xxx" type="text" value="{{ $data->sS3->data3}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS3max2" placeholder="xxx" type="text" value="{{ $data->sS3->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->sS3->koma == false && $data->sS3->strip == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS3min1" placeholder="xxx" type="text" value="{{ $data->sS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuS3min2" placeholder="xxx" type="text" value="{{ $data->sS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="suhuS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->sSN->koma == true && $data->sSN->strip == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmin1" placeholder="xxx" type="text" value="{{ $data->sSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuNmin2" placeholder="xxx" type="text" value="{{ $data->sSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmax1" placeholder="xxx" type="text" value="{{ $data->sSN->data3}}">
						        </div>
						        <div class="field">
						        	<input name="suhuNmax2" placeholder="xxx" type="text" value="{{ $data->sSN->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->sSN->koma == false && $data->sSN->strip == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmin1" placeholder="xxx" type="text" value="{{ $data->sSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuNmin2" placeholder="xxx" type="text" value="{{ $data->sSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="suhuNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->sSN->koma == true && $data->sSN->strip == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmin1" placeholder="xxx" type="text" value="{{ $data->sSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="suhuNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="suhuNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="suhuNmax2" placeholder="xxx" type="text" value="{{ $data->sSN->data2}}">
						        </div>
						    </div>
				    	</div>
			    	@endif

			  	</div>
			</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Kelembaban</h4>
			  	<div class="fields">

			    	@if($data->lS1->strip == true && $data->lS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="lembabS1min" placeholder="xxx" type="text" value="{{$data->lS1->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS1max" placeholder="xxx" type="text" value="{{$data->lS1->data2}}">
						        </div>
						    </div>
					    </div>
					@elseif($data->lS1->strip == false && $data->lS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="lembabS1min" placeholder="xxx" type="text" value="{{$data->lS1->data}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS1max" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
					    </div>
			    	@endif

			    	@if($data->lS2->strip == true && $data->lS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2min1" placeholder="xxx" type="text" value="{{ $data->lS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS2min2" placeholder="xxx" type="text" value="{{ $data->lS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2max1" placeholder="xxx" type="text" value="{{ $data->lS2->data3}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS2max2" placeholder="xxx" type="text" value="{{ $data->lS2->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->lS2->strip == false && $data->lS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2min1" placeholder="xxx" type="text" value="{{ $data->lS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS2min2" placeholder="xxx" type="text" value="{{ $data->lS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->lS2->strip == true && $data->lS2->koma == false)
				    	<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2min1" placeholder="xxx" type="text" value="{{ $data->lS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS2min2" placeholder="xxx" type="text" value="{{ $data->lS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS2max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->lS3->strip == true && $data->lS3->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3min1" placeholder="xxx" type="text" value="{{$data->lS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3min2" placeholder="xxx" type="text" value="{{$data->lS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3max1" placeholder="xxx" type="text" value="{{$data->lS3->data3}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3max2" placeholder="xxx" type="text" value="{{$data->lS3->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->lS3->strip == true && $data->lS2->koma == false)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3min1" placeholder="xxx" type="text" value="{{$data->lS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3min2" placeholder="xxx" type="text" value="{{$data->lS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->lS3->strip == false && $data->lS2->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3min1" placeholder="xxx" type="text" value="{{$data->lS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3max1" placeholder="xxx" type="text" value="{{$data->lS3->data2}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->lS3->strip == false && $data->lS3->koma == false)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3min1" placeholder="xxx" type="text" value="{{$data->lS3->data}}">
						        </div>
						        <div class="field">
						        	<input name="lembabS3min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif
			    	
			    	@if($data->lSN->strip == true && $data->lSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmin1" placeholder="xxx" type="text" value="{{$data->lSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmin2" placeholder="xxx" type="text" value="{{$data->lSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmax1" placeholder="xxx" type="text" value="{{$data->lSN->data3}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmax2" placeholder="xxx" type="text" value="{{$data->lSN->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->lSN->strip == true && $data->lSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmin1" placeholder="xxx" type="text" value="{{$data->lSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmin2" placeholder="xxx" type="text" value="{{$data->lSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->lSN->strip == false && $data->lSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmin1" placeholder="xxx" type="text" value="{{$data->lSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmax1" placeholder="xxx" type="text" value="{{$data->lSN->data2}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->lSN->strip == false && $data->lSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmin1" placeholder="xxx" type="text" value="{{$data->lSN->data}}">
						        </div>
						        <div class="field">
						        	<input name="lembabNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="lembabNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="lembabNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif
			  	</div>
			</div>

		  	<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data PH</h4>
			  	<div class="fields">
			    	
			    	@if($data->pS1->strip == true && $data->pS1->koma == true)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="phS1min" placeholder="xxx" type="text" value="{{$data->pS1->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS1max" placeholder="xxx" type="text" value="{{$data->pS1->data2}}">
						        </div>
						    </div>
					    </div>
					@elseif($data->pS1->strip == true && $data->pS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="phS1min" placeholder="xxx" type="text" value="{{$data->pS1->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS1max" placeholder="xxx" type="text" value="{{$data->pS1->data2}}">
						        </div>
						    </div>
					    </div>
			    	@endif

			    	@if($data->pS2->strip == true && $data->pS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2min1" placeholder="xxx" type="text" value="{{$data->pS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS2min2" placeholder="xxx" type="text" value="{{$data->pS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2max1" placeholder="xxx" type="text" value="{{$data->pS2->data3}}">
						        </div>
						        <div class="field">
						        	<input name="phS2max2" placeholder="xxx" type="text" value="{{$data->pS2->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pS2->strip == true && $data->pS2->koma == false)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2min1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phS2min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pS2->strip == false && $data->pS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2min1" placeholder="xxx" type="text" value="{{$data->pS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS2min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS2max1" placeholder="xxx" type="text" value="{{$data->pS2->data2}}">
						        </div>
						        <div class="field">
						        	<input name="phS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->pS3->strip == true && $data->pS3->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3min1" placeholder="xxx" type="text" value="{{$data->pS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS3min2" placeholder="xxx" type="text" value="{{$data->pS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3max1" placeholder="xxx" type="text" value="{{$data->pS3->data3}}">
						        </div>
						        <div class="field">
						        	<input name="phS3max2" placeholder="xxx" type="text" value="{{$data->pS3->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pS3->strip == true && $data->pS3->koma == false)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3min1" placeholder="xxx" type="text" value="{{$data->pS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS3min2" placeholder="xxx" type="text" value="{{$data->pS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pS3->strip == false && $data->pS3->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3min1" placeholder="xxx" type="text" value="{{$data->pS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phS3min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3max1" placeholder="xxx" type="text" value="{{$data->pS3->data2}}">
						        </div>
						        <div class="field">
						        	<input name="phS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->pS3->strip == false && $data->pS3->koma == false)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3min1" placeholder="xxx" type="text" value="{{$data->pS3->data}}">
						        </div>
						        <div class="field">
						        	<input name="phS3min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->pSN->strip == true && $data->pSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmin1" placeholder="xxx" type="text" value="{{$data->pSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phNmin2" placeholder="xxx" type="text" value="{{$data->pSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmax1" placeholder="xxx" type="text" value="{{$data->pSN->data3}}">
						        </div>
						        <div class="field">
						        	<input name="phNmax2" placeholder="xxx" type="text" value="{{$data->pSN->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pSN->strip == true && $data->pSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmin1" placeholder="xxx" type="text" value="{{$data->pSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phNmin2" placeholder="xxx" type="text" value="{{$data->pSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->pSN->strip == false && $data->pSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmin1" placeholder="xxx" type="text" value="{{$data->pSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="phNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmax1" placeholder="xxx" type="text" value="{{$data->pSN->data2}}">
						        </div>
						        <div class="field">
						        	<input name="phNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->pSN->strip == false && $data->pSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmin1" placeholder="xxx" type="text" value="{{$data->pSN->data}}">
						        </div>
						        <div class="field">
						        	<input name="phNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="phNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="phNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif
			  	</div>
			</div>

			<div class="ui secondary segment small form raised">
			  	<h4 class="ui dividing header">Data Curah Hujan</h4>
			  	<div class="fields">
			    	
			    	@if($data->cS1->strip == true && $data->cS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="curahS1min" placeholder="xxx" type="text" value="{{$data->cS1->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS1max" placeholder="xxx" type="text" value="{{$data->cS1->data2}}">
						        </div>
						    </div>
					    </div>
			    	@elseif($data->cS1->strip == false && $data->cS1->koma == false)
			    		<div class="four wide field">
				      		<label>Sangat Sesuai</label>
						    <div class="two fields">
						        <div class="field">
						        	<input name="curahS1min" placeholder="xxx" type="text" value="{{$data->cS1->data}}">
						        </div>
						        <div class="field">
						        	<input name="curahS1max" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
					    </div>
			    	@endif

			    	@if($data->cS2->strip == true && $data->cS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2min1" placeholder="xxx" type="text" value="{{$data->cS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS2min2" placeholder="xxx" type="text" value="{{$data->cS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2max1" placeholder="xxx" type="text" value="{{$data->cS2->data3}}">
						        </div>
						        <div class="field">
						        	<input name="curahS2max2" placeholder="xxx" type="text" value="{{$data->cS2->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cS2->strip == true && $data->cS2->koma == false)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2min1" placeholder="xxx" type="text" value="{{$data->cS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS2min2" placeholder="xxx" type="text" value="{{$data->cS2->data2}}">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="curahS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cS2->strip == false && $data->cS2->koma == true)
			    		<div class="four wide field">
				      		<label>Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2min1" placeholder="xxx" type="text" value="{{$data->cS2->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS2min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS2max1" placeholder="xxx" type="text" value="{{$data->cS2->data2}}">
						        </div>
						        <div class="field">
						        	<input name="curahS2max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->cS3->strip == true && $data->cS3->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3min1" placeholder="xxx" type="text" value="{{$data->cS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS3min2" placeholder="xxx" type="text" value="{{$data->cS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3max1" placeholder="xxx" type="text" value="{{$data->cS3->data3}}">
						        </div>
						        <div class="field">
						        	<input name="curahS3max2" placeholder="xxx" type="text" value="{{$data->cS3->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cS3->strip == true && $data->cS3->koma == false)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3min1" placeholder="xxx" type="text" value="{{$data->cS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS3min2" placeholder="xxx" type="text" value="{{$data->cS3->data2}}">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3max1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="curahS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cS3->strip == false && $data->cS3->koma == true)
			    		<div class="four wide field">
				      		<label>Cukup Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3min1" placeholder="xxx" type="text" value="{{$data->cS3->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahS3min2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Cukup Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahS3max1" placeholder="xxx" type="text" value="{{$data->cS3->data2}}">
						        </div>
						        <div class="field">
						        	<input name="curahS3max2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

			    	@if($data->cSN->strip == true && $data->cSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmin1" placeholder="xxx" type="text" value="{{$data->cSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmin2" placeholder="xxx" type="text" value="{{$data->cSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmax1" placeholder="xxx" type="text" value="{{$data->cSN->data3}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmax2" placeholder="xxx" type="text" value="{{$data->cSN->data4}}">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cSN->strip == true && $data->cSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmin1" placeholder="xxx" type="text" value="{{$data->cSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmin2" placeholder="xxx" type="text" value="{{$data->cSN->data2}}">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="curahNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@elseif($data->cSN->strip == false && $data->cSN->koma == true)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmin1" placeholder="xxx" type="text" value="{{$data->cSN->data1}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmax1" placeholder="xxx" type="text" value="{{$data->cSN->data2}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
				    @elseif($data->cSN->strip == false && $data->cSN->koma == false)
			    		<div class="four wide field">
				      		<label>Tidak Sesuai Batas Minimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmin1" placeholder="xxx" type="text" value="{{$data->cSN->data}}">
						        </div>
						        <div class="field">
						        	<input name="curahNmin2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
						    <label>Tidak Sesuai Batas Maksimal</label>
				      		<div class="two fields">
						        <div class="field">
						        	<input name="curahNmax1" placeholder="xxx" type="text" value="">
						        </div>
						        <div class="field">
						        	<input name="curahNmax2" placeholder="xxx" type="text" value="">
						        </div>
						    </div>
				    	</div>
			    	@endif

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