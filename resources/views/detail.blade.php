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
					            <div class="description">{{ $geo->first()->getPolitical() }}</div>
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
					            <div class="description">Indonesia</div>
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
					            <div class="description">Indonesia</div>
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
					            <div class="description">Indonesia</div>
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
					            <div class="description">Indonesia</div>
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
					            <div class="description">{{ $geo->first()->getFormattedAddress() }}</div>
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
					            <div class="description">{{ $cuaca->temperature->now }}</div>
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
					            <div class="description">{{ $cuaca->humidity }}</div>
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
					            <div class="description">{{ $cuaca->wind->direction }}</div>
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
					            <div class="description">{{ $cuaca->wind->speed }}</div>
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
					            <div class="description">{{ $cuaca->pressure }}</div>
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
					            <div class="description">{{ $cuaca->weather->description }}</div>
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
{{-- <p>Nama Negara : {{ $geo->first()->getPolitical() }}</p>
<p>Nama Provinsi : </p>
<p>Nama Kota : {{ $geo->first()->getLocality() }}</p>
<p>Latitude : {{ $geo->first()->getCoordinates()->getLatitude() }}</p>
<p>Longitude : {{ $geo->first()->getCoordinates()->getLongitude() }}</p>
<p>Suhu : {{ $cuaca->temperature->now }}</p>
<p>Kelembaban : {{ $cuaca->humidity }}</p>
<p>Tekanan Udara : {{ $cuaca->pressure }}</p>
<p>Kecepatan Angin : {{ $cuaca->wind->speed }}</p>
<p>Arah Mata Angin : {{ $cuaca->wind->direction }}</p>
<p>Cuaca : {{ $cuaca->weather->description }}</p>
{{ $lokasi }}

<div style="width: 500px; height: 500px;">
	{!! Mapper::render() !!}
</div>
 --}}
@endsection