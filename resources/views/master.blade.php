<!DOCTYPE html>
<html>
<head>
	<title>template</title>
	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->
	<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet"  href="{{ asset('/css/stylesheet3.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>
<body>
<section id="menu" class="navbar-fixed-top">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Logo</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
					          <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
					          <ul class="dropdown-menu" role="menu">
					            <li><a href="/produtos/cadeira">Cadeiras</a></li>
					            <li><a href="/produtos/mesa">Mesas</a></li>
					            <li><a href="/produtos/objecto">Objectos</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="/produto">Todos</a></li>
					          </ul>
					</li>
					
					<li class="dropdown" role="menu">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Serviços
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/produto">Produtos</a></li>
							<li><a href="/categoria">Categorias</a></li>
							<li><a href="/administrador">Usuarios</a></li>

					 </ul>	
					
					</li>
					

					@if(Auth::check()) 
					<li class="dropdown" role="menu">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administracao
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/produto">Produtos</a></li>
							<li><a href="/categoria">Categorias</a></li>
							<li><a href="/texto">Textos</a></li>
							<li><a href="/administrador">Usuarios</a></li>

					 </ul>	
					
					</li>
					@endif        
					        <li><a href="#">Galeria</a></li>
					        <li><a href="#">Acerca</a></li>
					 
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			
			</div>
		</div>
	</nav>
	</section>

	
@yield('content')
<!-- Scripts 
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
-->
<section id="bootom">
	<div class="container">
	<div class="row footerr">
	<div class="form-group text-button">
		<label class="lb-text">Contactos: </label><label class="lb-cnt">8412345566</label><br>
		<label class="lb-text">Email: </label><label class="lb-cnt">cultura@cultura.com</label>
	</div>

	</div>
	</div>
</section>	 

</body>
</html>