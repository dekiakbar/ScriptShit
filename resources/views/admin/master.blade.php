<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<style>
		#content {
			min-height: 100px;
		}
		.ui.grid{
			padding: 0 !important;
		}
		.pushable.segment{
			margin: 0 !important;
		}
	</style>
</head>
<body>

<div class="ui grid">
	<div class="computer only row">
		<div class="column">
			
			<div class="ui pointing menu">
			  <a class="browse item" style="color: #0E6EB8 !important;">
			    Data
			    <i class="dropdown icon"></i>
			  </a>
			  <div class="ui fluid popup bottom left transition hidden" style="max-width: 800px;">
			    <div class="ui four column relaxed divided grid">
			      <div class="column">
			        <h4 class="ui header">Tanah</h4>
			        <div class="ui link list">
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			        </div>
			      </div>
			      <div class="column">
			        <h4 class="ui header">Perbandingan</h4>
			        <div class="ui link list">
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			        </div>
			      </div>
			      <div class="column">
			        <h4 class="ui header">Survei Tanah</h4>
			        <div class="ui link list">
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			        </div>
			      </div>
			      <div class="column">
			        <h4 class="ui header">Populasi</h4>
			        <div class="ui link list">
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			          <a class="item">Menu</a>
			        </div>
			      </div>
			    </div>
			  </div>
			  <a class="ui item" style="color: #0E6EB8 !important;">
			    <i class="setting icon"></i>
			    Pengaturan
			  </a>
			</div>

		</div>
	</div>
	
	<div class="tablet mobile only row">
		<div class="column">
			<div class="ui menu">
				<a id="mobile_item" class="item"><i class="blue bars icon"></i></a>
			</div>
		</div>
	</div>
</div>

<div class="ui pushable segment">
		<div class="ui sidebar vertical menu">
			<a class="item">Menu Item A</a>
			<a class="item">Menu Item B</a>
			<a class="item">Menu Item C</a>
			<a class="item">Menu Item D</a>
		</div>
		<div class="pusher">
				<div id="content" class="ui segment">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
		 </div>
</div>


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
		$('.ui.sidebar').sidebar({
		    context: $('.ui.pushable.segment'),
		    transition: 'overlay'
		}).sidebar('attach events', '#mobile_item');

		$('.browse')
		  .popup({
		    inline     : true,
		    hoverable  : true,
		    transition  : 'slide down',
		    position   : 'bottom left',
		    delay: {
		      show: 100,
		      hide: 50
		    }
	  });
	</script>
</body>
</html>