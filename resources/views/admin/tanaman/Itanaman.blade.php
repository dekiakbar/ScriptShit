@extends('admin.master')
@section('judul','Daftar Data Tanaman')
@section('isi')
	<div class="ui segment">
		<h4 class="ui dividing header">Daftar Data Tanaman</h4>
		<table class="ui single line celled table">
		  	<thead>
		    	<tr>
		    		<th class="center aligned">No</th>
		      		<th class="center aligned">Nama Tanaman</th>
		      		<th class="center aligned">Suhu (&#8451;)</th>
		      		<th class="center aligned">Kelembaban (%)</th>
		      		<th class="center aligned">PH</th>
		      		<th class="center aligned">Curah Hujan (mm)</th>
		      		<th class="center aligned">Opsi</th>
		    	</tr>
		  	</thead>
		  	<tbody>
		    	@foreach($datas as $data)
		    		<tr>
		    			<td class="center aligned">{{ ++$no }}</td>
		    			<td class="center aligned">{{ $data->nama_tanaman }}</td>
		    			<td class="center aligned">{{ $data->suhu->first()->suhuS1 }}</td>
		    			<td class="center aligned">{{ $data->lembab->first()->lembabS1 }}</td>
		    			<td class="center aligned">{{ $data->ph->first()->phS1 }}</td>
		    			<td class="center aligned">{{ $data->curahHujan->first()->curahS1 }}</td>
		    			<td class="center aligned">
		    				<a onclick="lihat(this)" class="ui mini button blue animated fade inverted" data-detail="{{ md5($data->id) }}">
		    					<div class="visible content">
		    						Detail
		    					</div>
		    					<div class="hidden content">
		    						<i class="zoom icon"></i>
		    					</div>
		    				</a>
		    				<a href="{{ route('tanaman.edit',encrypt($data->id)) }}" class="ui mini button purple animated fade inverted">
		    					<div class="visible content">
		    						Edit
		    					</div>
		    					<div class="hidden content">
		    						<i class="edit icon"></i>
		    					</div>
		    				</a>
		    				<a class="ui mini button red animated fade inverted">
		    					<div class="visible content">
		    						Hapus
		    					</div>
		    					<div class="hidden content">
		    						<i class="trash icon"></i>
		    					</div>
		    				</a>
		    			</td>
		    		</tr>
		    	@endforeach
		  	</tbody>
		</table>
	</div>

	<div class="ui container center aligned">
		{{ $datas->appends(\Request::except('page'))->links('admin/pagination.semantic-ui') }}
	</div>

	@foreach($datas as $data)
		<div class="ui modal" id="{{ md5($data->id) }}">
		  	<i class="close icon"></i>
		  	<div class="header">
		    	Detail Data Tanaman
		  	</div>
		  	<div class="image content">
		    	<div class="description">
		      		<table class="ui definition table">
			  			<thead>
			    			<tr>
			    				<th class="center aligned">Jagung</th>
			    				<th class="center aligned">Sangat Sesuai</th>
			    				<th class="center aligned">Sesuai</th>
			    				<th class="center aligned">Kurang Sesuai</th>
			    				<th class="center aligned">Tidak Sesuai</th>
			  				</tr>
						</thead>
			  			<tbody>
			    			<tr>
			      				<td class="center aligned">Suhu (&#8451;)</td>
			      				<td class="center aligned">{{ $data->suhu->first()->suhuS1 }}</td>
			      				<td class="center aligned">{{ $data->suhu->first()->suhuS2 }}</td>
			      				<td class="center aligned">{{ $data->suhu->first()->suhuS3 }}</td>
			      				<td class="center aligned">{{ $data->suhu->first()->suhuN }}</td>
			    			</tr>
			    			<tr>
			      				<td class="center aligned">Kelembaban (%)</td>
			      				<td class="center aligned">{{ $data->lembab->first()->lembabS1 }}</td>
			      				<td class="center aligned">{{ $data->lembab->first()->lembabS2 }}</td>
			      				<td class="center aligned">{{ $data->lembab->first()->lembabS3 }}</td>
			      				<td class="center aligned">{{ $data->lembab->first()->lembabN }}</td>
			    			</tr>
			    			<tr>
			    				<td class="center aligned">PH</td>
			    				<td class="center aligned">{{ $data->ph->first()->phS1 }}</td>
			    				<td class="center aligned">{{ $data->ph->first()->phS2 }}</td>
			    				<td class="center aligned">{{ $data->ph->first()->phS3 }}</td>
			    				<td class="center aligned">{{ $data->ph->first()->phN }}</td>
			    			</tr>
			    			<tr>
			    				<td class="center aligned">Curah Hujan (mm)</td>
			    				<td class="center aligned">{{ $data->curahHujan->first()->curahS1 }}</td>
			    				<td class="center aligned">{{ $data->curahHujan->first()->curahS2 }}</td>
			    				<td class="center aligned">{{ $data->curahHujan->first()->curahS3 }}</td>
			    				<td class="center aligned">{{ $data->curahHujan->first()->curahN }}</td>
			    			</tr>
						</tbody>
					</table>
		    	</div>
		  	</div>
		</div>
	@endforeach
@endsection