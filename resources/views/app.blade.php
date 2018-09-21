<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cat Club Genève</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs/jq-2.2.0,dt-1.10.11/datatables.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />

	<!-- Scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/t/bs/jq-2.2.0,dt-1.10.11/datatables.min.js"></script>

	<!--script src="//code.jquery.com/jquery-1.10.2.js"></script-->
  <!--script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script-->

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
					@if(Auth::guest())
						<li><a href="{{ url('/') }}">{{__("Acceuil")}}</a></li>
					@else
						<li><a href="{{ url('/home') }}">{{__("Acceuil")}}</a></li>
					  <li><a href="{{ url('/expositions') }}">{{__("Expositions")}}</a>
						<li><a href="{{ url('/cats') }}">{{__("Mes Chats")}}</a>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right	">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">{{__("Connexion")}}</a></li>
						<li><a href="{{ url('/auth/register') }}">{{__("Inscriptions")}}</a></li>
					@else
						<li><a href="{{ url('/profile') }}">{{__("Mon Profile")}}</a></li>
						<li><a href="{{ url('/auth/logout') }}">{{__("Déconnexion")}}</a></li>
					@endif
						<li><a href="{{ url('/locale/fr') }}">fr</a></li>
						<li><a href="{{ url('/locale/en') }}">en</a></li>
				</ul>
			</div>
		</div>
	</nav>
</div>

@yield('content')	

</body>
</html>
