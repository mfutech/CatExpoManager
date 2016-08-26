<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cat Club Genève</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jq-2.2.0,dt-1.10.11/datatables.min.css"/>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body background='http://www.catclubdegeneve.ch/images/center.jpg'>
<div class="container">
<table border="0" width="100%">
  <tr valign="top"> 
    <td height="197"><img src="http://www.catclubdegeneve.ch/index/top.jpg" width="827" height="212"></td>
    <td height="197"><br>
      <img src="http://www.catclubdegeneve.ch/index/logo.jpg" width="173" height="169"> </td>
  </tr>
</table>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CCG Expositions</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Acceuil</a></li>
					@if(!Auth::guest())
					    <li><a href="{{ url('/expositions') }}">Expositions</a>
						<li><a href="{{ url('/cats') }}">Mes Chats</a>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right	">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Connexion</a></li>
						<li><a href="{{ url('/auth/register') }}">Inscriptions</a></li>
					@else
						<li><a href="{{ url('/profile') }}">Mon Profile</a></li>
						<li><a href="{{ url('/auth/logout') }}">Déconnexion</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>
	
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jq-2.2.0,dt-1.10.11/datatables.min.js"></script>
</body>
</html>
