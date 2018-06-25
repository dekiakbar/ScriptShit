<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">
</head>
<body>

	<div id="sidebar" class="ui sidebar vertical left menu overlay visible very thin icon">
		<div class="item logo">
			<img src="img/logo.png" /><img src="img/thumblogo.png" style="display: none" />
		</div>
		<div class="ui accordion displaynone">
			<a class="title item">Dashboard  <i class="dropdown icon"></i></a>
			<div class="content">
				<a class="item" href="dashboard.html">Dashboard</a>
			</div>
			<div class="title item">
				<i class="dropdown icon"></i> Layouts
			</div>
			<div class="content">
				<a class="item" href="sidebar.html">Sidebar</a>
				<a class="item" href="menu.html">Nav</a>
				<a class="item" href="animatedicon.html">Animated Icon</a>
				<a class="item" href="box.html">Box</a>
			</div>
			<a class="item">
				<b>Perbandingan Data</b>
			</a>	
			<div class="title item">
				<i class="dropdown icon"></i> Kriteria
			</div>
			<div class="content">
				<a class="item" href="accordion.html">Pengaturan Data</a>
			</div>
		</div>

		<div class="ui dropdown item">
			<z class="displaynone">Dashboard</z>
			<i class="icon demo-icon server icon-heart"></i>
			<div class="menu">
				<div class="header">
					Dashboard
				</div>
				<div class="ui divider"></div>
				<a class="item" href="dashboard.html">Dashboard</a>
			</div>
		</div>

		<div class="ui dropdown item">
			<z class="displaynone">Layout</z>
			<i class="icon demo-icon world icon-globe"></i>
			<div class="menu">
				<div class="header">
				Layout
				</div>
				<div class="ui divider"></div>
				<a class="item" href="inbox.html">Inbox</a>
				<a class="item" href="mail.html">Mailbox</a>
				<a class="item" href="chat.html">Chat</a>
				<a class="item" href="contacts.html">Contacts</a>
			</div>
		</div>

		<div class="ui dropdown item">
			<z class="displaynone">Pages</z>
			<i class="icon demo-icon  icon-params setting"></i>
			<div class="menu">
				<div class="header">
					Pengaturan
				</div>
				<div class="ui divider"></div>
				<a class="item" href="accordion.html">Lihat Data</a>
			</div>
		</div>

	</div>

	<div class="pusher">
		<div id="right" class="ui menu asd borderless marginlefting">
			<a class="item buka">
				<i class="icon content"></i>
			</a>
			<a class="item">Pemanfaatan lahan berbasis web</a>
				<div class="right menu">
					<div class="item">
						<div class="ui primary button">Sign Up</div>
					</div>
				</div>
		</div>
	</div>

	
	@yield('isi')


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZ8rloezEy9IpHLmbWmWA20Gh1nuMcyeY&libraries=places&callback=initMap" async defer>
    </script>
</body>
</html>