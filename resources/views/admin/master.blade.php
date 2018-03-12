<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>Admin | @yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div class="ui secondary pointing menu blue">
		<div class="header item active">
			SPK Penentuan Lahan
		</div>
		<div class="right menu">
		  <a class="ui item" onclick="event.preventDefault();document.getElementById('logout').submit();">
		    <div class="ui animated fade button blue" tabindex="0">
				<div class="visible content">Logout</div>
				<div class="hidden content">
					<i class="sign out icon"></i>
				</div>
			</div>
		  </a>
		</div>
	</div>

	<form id="logout" action="{{ route('logout') }}" method="post">
		{{ csrf_field() }}
	</form>

	<div class="ui stackable two column grid">
		<div class="three wide column">
			<div class="ui vertical menu">
				<div class="header item">
					Sub Menu
				</div>
				<div class="ui dropdown item">
				  	Data Tanaman
				  	<i class="leaf icon blue"></i>
				  	<div class="menu">
				  		<a class="item"><i class="plus icon"></i> Tambah Data</a>
				    	<a class="item"><i class="list icon"></i> Daftar Data</a>
				  	</div>
				</div>
				<div class="ui dropdown item">
				  	Data PH
				  	<i class="thermometer icon blue"></i>
				  	<div class="menu">
				  		<a class="item"><i class="plus icon"></i> Tambah Data</a>
				    	<a class="item"><i class="list icon"></i> Daftar Data</a>
				  	</div>
				</div>
				<div class="ui dropdown item">
				  	Data Akun
				  	<i class="setting icon blue"></i>
				  	<div class="menu">
				  		<a class="item"><i class="plus icon"></i> Tambah Akun</a>
				    	<a class="item"><i class="list icon"></i> Daftar Akun</a>
				    	<a class="item"><i class="lock icon"></i> Ubah Kata Sandi</a>
				  	</div>
				</div>
			</div>
		</div>

		<div class="twelve wide column">
			@yield('isi')
		</div>
	</div>

	<footer style="margin-top: 10px;">
		<div class="ui segment center aligned blue">
			<p>&copy;{!! date('Y') !!} 
				| Dibuat Dengan :
				<a target="_blank" href="https://Laravel.com">Laravel</a>
				<i class="large pink heartbeat icon"></i>
				<a target="_blank" href="https://Semantic-ui.com">Semantic</a>
			</p>
		</div>
	</footer>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script>
    $('.ui.dropdown').dropdown({
    	on:'hover',
    });

    </script>
</body>
</html>