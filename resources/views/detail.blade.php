<p>Nama Negara : {{ $geo->first()->getPolitical() }}</p>
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