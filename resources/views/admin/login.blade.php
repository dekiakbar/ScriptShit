<!DOCTYPE html>
<html>
<head>
	<title>Admin | Login</title>
	<meta charset="utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	
	<style type="text/css">
		body{
			background-color: #e5e7e9;
		}
    	body > .grid {
    	  height: 100%;
    	}
    	.image {
    	  margin-top: -100px;
    	}
    	.column {
    	  max-width: 450px;
    	}
	</style>
</head>
<body>
	<div class="ui middle aligned center aligned grid">
	  	<div class="column">
	    	<div class="ui segment teal">
	    		<h2 class="ui image header">
			      	<div class="content">
			        	Login Admin
			      	</div>
			    </h2>

			    <form action="{{ route('login') }}" method="POST" class="ui large form">
			    	{{ csrf_field() }}
			      	<div class="ui stacked secondary  segment">
			        
			        	<div class="field">
			          		<div class="ui left icon input">
			            		<i class="user icon"></i>
			            		<input type="text" name="email" placeholder="Alamat E-mail" value="{{ old('email') }}">
			          		</div>
			        	</div>
			        
			        	<div class="field">
			        	  	<div class="ui left icon input">
			        	  	  	<i class="lock icon"></i>
			        	  	  	<input type="password" name="password" placeholder="Password">
			        	  	</div>
			        	</div>
			        
			        	<button class="ui fluid large teal submit button">
			        		Masuk
			        	</button>
			      	</div>

			    </form>

			    <div class="ui message">
			    	<a href="">Lupa Kata Sandi</a>
			    </div>
	    	</div>
	  	</div>
	</div>

	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>