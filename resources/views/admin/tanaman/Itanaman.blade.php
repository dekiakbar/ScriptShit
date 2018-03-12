@extends('admin.master')
@section('judul','Daftar Data Tanaman')
@section('isi')
	<div class="ui segment">
		<h4 class="ui dividing header">Daftar Data Tanaman</h4>
		<table class="ui single line celled table">
		  	<thead>
		    	<tr>
		      		<th>Nama Tanaman</th>
		      		<th>Suhu</th>
		      		<th>Kelembaban</th>
		      		<th>PH</th>
		      		<th>Curah Hujan</th>
		      		<th>Opsi</th>
		    	</tr>
		  	</thead>
		  	<tbody>
		    	@foreach($datas as $data)
		    		<tr>
		    			<td>{{ $data->nama_tanaman }}</td>
		    			<td>{{ $data->suhu->first()->suhuS1 }}</td>
		    			<td>{{ $data->lembab->first()->lembabS1 }}</td>
		    			<td>{{ $data->ph->first()->phS1 }}</td>
		    			<td>{{ $data->curahHujan->first()->curahS1 }}</td>
		    			<td class="center aligned">
		    				<a href="" class="ui mini button red animated fade inverted">
		    					<div class="visible content">
		    						Hapus
		    					</div>
		    					<div class="hidden content">
		    						<i class="trash icon"></i>
		    					</div>
		    				</a>
		    				<a href="" class="ui mini button purple animated fade inverted">
		    					<div class="visible content">
		    						Edit
		    					</div>
		    					<div class="hidden content">
		    						<i class="edit icon"></i>
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
@endsection