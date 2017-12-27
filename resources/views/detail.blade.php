@extends('master')
@section('judul','Detail Tempat')

@section('isi')
<div class="ui container segment">
	<div class="ui container">
		<h3 class="ui center aligned header">Info Geolokasi</h3>
		<div class="ui four column doubling stackable grid">
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large flag middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Negara :</a>
					            <div class="description">{{ $lokasi->negara }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large address card outline middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Provinsi :</a>
					            <div class="description">{{ $lokasi->provinsi }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large address card outline middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Kota :</a>
					            <div class="description">{{ $lokasi->kota }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large address card outline middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Kecamatan :</a>
					            <div class="description">{{ $lokasi->kecamatan }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large address card outline middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Kelurahan :</a>
					            <div class="description">{{ $lokasi->kelurahan }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large address card middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Alamat :</a>
					            <div class="description">{{ $lokasi->alamat }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large thermometer half middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Suhu :</a>
					            <div class="description">{{ $kondisi->suhu }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large percent middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Kelembaban :</a>
					            <div class="description">{{ $kondisi->kelembaban }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large random middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Arah Angin :</a>
					            <div class="description">{{ $kondisi->arahAngin }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large soundcloud middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Kecepatan Angin :</a>
					            <div class="description">{{ $kondisi->kecAngin }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large arrow down middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Tekanan Udara :</a>
					            <div class="description">{{ $kondisi->tekUdara }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
			<div class="column">
			    <div class="ui segment">
			    	<div class="ui relaxed divided list">
					    <div class="item">
					        <i class="large cloud middle aligned icon blue"></i>
					        <div class="content">
					            <a class="header">Cuaca :</a>
					            <div class="description">{{ $kondisi->cuaca }}</div>
					        </div>
					    </div>
					</div>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="ui container segment">
	<div class="ui container">
		<h3 class="ui center aligned header">Map Geolokasi</h3>
		<div class="ui sixteen column doubling stackable">
			<div class="column">
				<div class="ui segment">
					<div style="height: 500px;">
						{!! Mapper::render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection