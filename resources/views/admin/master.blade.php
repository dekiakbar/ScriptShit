<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="ui computer only grid">
	<div class="column">
		<div class="ui blue secondary pointing menu">
			<a class="active item" href="#"><i class="dashboard icon"></i>Dashboard</a>
		  	
		  	<div class="ui dropdown item">
		    	Data
			    <i class="dropdown icon"></i>
			    <div class="menu">
			    	<div class="item">
				      <i class="leaf icon"></i>
				      Tanaman
				    </div>
			      	<div class="item">
				      	<i class="dropdown icon"></i>
				      	Tanah
				      	<div class="menu">
				        	<a class="item"><i class="plus icon blue"></i> Data</a>
				        	<a class="item"><i class="list icon blue"></i> Data</a>
				        	<a class="item"><i class="checkmark box icon blue"></i> Data</a>				      
				    	</div>
				    </div>
			        <div class="item">
				      	<i class="dropdown icon"></i>
				      	Tanaman
				      	<div class="menu">
				        	<a class="item"><i class="plus icon blue"></i> Data</a>
				        	<a class="item"><i class="list icon blue"></i> Data</a>				      
				    	</div>
				    </div>
			    </div>
		  	</div>

		  	<div class="right menu">
		  		<div class="ui inline dropdown item">
				    <div class="text">
				      <img class="ui avatar image" src="https://semantic-ui.com/images/avatar/small/jenny.jpg">
				    </div>
				    <div class="menu">
				        <a class="item"><i class="setting icon"></i>Setting</a>
				        <a class="item"><i class="sign out icon"></i>Logout</a>
				    </div>
				</div>
		  	</div>

		</div>
	</div>
</div>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script>
    $('.ui.dropdown')
     .dropdown();
    </script>
</body>
</html>