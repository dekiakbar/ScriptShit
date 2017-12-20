<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manual.css') }}">
</head>
<body>

	<div id="sidebar" class="ui sidebar vertical left menu overlay visible">
		<div class="item logo">
			<img src="img/logo.png" /><img src="img/thumblogo.png" style="display: none" />
		</div>
		<div class="ui accordion">
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
				<b>Components</b>
			</a>	
			<div class="title item">
				<i class="dropdown icon"></i> UI-Kit
			</div>
			<div class="content">
				<a class="item" href="accordion.html">Accordion</a>
				<a class="item" href="breadcrumb.html">Breadcrumb</a>
				<a class="item" href="button.html">Button</a>
			</div>
		</div>
		<div class="ui dropdown item displaynone">
			<z>Dashboard</z>
			<i class="icon demo-icon heart icon-heart"></i>
			<div class="menu">
				<div class="header">
					Dashboard
				</div>
				<div class="ui divider"></div>
				<a class="item" href="dashboard.html">Dashboard</a>
			</div>
		</div>
		<div class="ui dropdown item displaynone">
			<z>Layout</z>
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
		<div class="ui dropdown item displaynone">
			<z>Pages</z>
			<i class="icon demo-icon  icon-params alarm"></i>
			<div class="menu">
				<div class="header">
					Layouts
				</div>
				<div class="ui divider"></div>
				<a class="item" href="sidebar.html">Sidebar</a>
				<a class="item" href="menu.html">Nav</a>
				<a class="item" href="animatedicon.html">Animated Icon</a>
				<a class="item" href="box.html">Box</a>
				<a class="item" href="cards.html">Cards</a>
			</div>
		</div>
	</div>
	<div class="pusher">
		<div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
			<a class="item openbtn">
				<i class="icon content"></i>
			</a>
			<a class="item">Messages</a>
				<div class="right menu">
					<div class="ui dropdown item">
						Language
						<i class="dropdown icon"></i>
						<div class="menu">
							<a class="item">English</a>
							<a class="item">Russian</a>
							<a class="item">Spanish</a>
						</div>
					</div>
					<div class="item">
						<div class="ui primary button">Sign Up</div>
					</div>
				</div>
		</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/manual.js') }}"></script>
</body>
</html>