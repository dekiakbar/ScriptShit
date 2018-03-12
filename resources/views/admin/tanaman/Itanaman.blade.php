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
		    				<a href="" class="ui mini button blue animated fade inverted">
		    					<div class="visible content">
		    						Detail
		    					</div>
		    					<div class="hidden content">
		    						<i class="zoom icon"></i>
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
		    				<a href="" class="ui mini button red animated fade inverted">
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
@endsection