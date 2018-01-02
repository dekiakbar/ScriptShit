@extends('master')
@section('judul','Edit Data Perbandingan')

@section('isi')
<div class="ui container segment">
	<div class="ui two column stackable grid container">
	  	<div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">Suhu</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="suhu">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Ksuhu();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tsuhu();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div>
	  	<div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">Kelembaban</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="kelembaban">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Kkelembaban();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tkelembaban();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div>
	  	<div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">PH</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="ph">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Kph();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tph();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div><div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">Ketinggian</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="ketinggian">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Kketinggian();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tketinggian();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div><div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">Kedalaman</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="kedalaman">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Kkedalaman();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tkedalaman();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div><div class="column">
	    	<div class="ui segment">
	  			<div class="ui center aligned header">Ketebalan</div>
				<div class="ui teal progress" data-value="1" data-total="5" id="ketebalan">
	  				<div class="bar">
	    				<div class="progress"></div>
	  				</div>
				</div>
			  	<button class="ui button compact icon basic red" onclick="Kketebalan();">
			  		<i class="minus icon"></i>
			  	</button>
			  	<button class="ui compact icon teal basic button right floated" onclick="Tketebalan();">
			  		<i class="add icon"></i>
			  	</button>
	    	</div>
	  	</div>
	</div>
</div>
@endsection