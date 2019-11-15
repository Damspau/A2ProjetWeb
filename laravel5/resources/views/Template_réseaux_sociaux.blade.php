<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<title>Laravel</title>
	<link rel="stylesheet" href="./assets/vendors/bootstrap/css/bootstrap.min.css">
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<!-- Styles -->
	<style>
		html, body {
			background-color: #fff;
			color: #636b6f;
			font-family: 'Nunito', sans-serif;
			font-weight: 25%;
			height: 50%;
		}

		.full-height {
			height: 100vh;
		}
		.flex-center {
			align-items: center;
			display: flex;
			justify-content: center;
		}

		.position-ref {
			position: relative;
		}
		.tab {
			float: left;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
			width: 15%;
			height: 50%;
		}
		.top-right {
			position: absolute;
			right: 10px;
			top: 18px;
		}

		.content {
			text-align: center;
		}

		.title {
			font-size: 84px;
		}

		.links > a {
			color: #636b6f;
			padding: 0 25px;
			font-size: 13px;
			font-weight: 600;
			letter-spacing: .1rem;
			text-decoration: none;
			text-transform: uppercase;
		}

		.m-b-md {
			margin-bottom: 30px;
		}
	</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		@if (Route::has('login'))
		<div class="top-right links">
			@auth
			<a href="{{ url('/home') }}">Home</a>
			@else
			<a href="{{ route('login') }}">Login</a>

			@if (Route::has('register'))
			<a href="{{ route('register') }}">Register</a>
			@endif
			@endauth
		</div>
	</div>
		@endif
	<div class="mainHeaderSocial"><span>Retrouvez-nous sur</span><ul class="socialServices _light">
		<li><i class="fab fa-instagram"></i><a href="https://twitter.com/cesiingenieurs%20"  rel="noreferrer noopener" target="_blank" title="Twitter"><span>Twitter</span></a></li>

		<li><a href="https://www.linkedin.com/school/cesiecoledingenieurs/" class=" " rel="noreferrer noopener" target="_blank" title="LinkedIn"><span>LinkedIn</span></a></li>

		<li><a href="http://www.viadeo.com/fr/company/ei-cesi" class=" " rel="noreferrer noopener" target="_blank" title="Viadeo"><span>Viadeo</span></a></li>

		<li><a href="https://www.facebook.com/CESIingenieurs/" class=" " rel="noreferrer noopener" target="_blank" title="Facebook"><span>Facebook</span></a></li>
	</ul></div>
</div>
<div class="content">
	<div class="title m-b-md">
		Laravel
	</div>

	<div class="links">
		<a href="https://laravel.com/docs">Docs</a>
		<a href="https://laracasts.com">Laracasts</a>
		<a href="https://laravel-news.com">News</a>
		<a href="https://blog.laravel.com">Blog</a>
		<a href="https://nova.laravel.com">Nova</a>
		<a href="https://forge.laravel.com">Forge</a>
		<a href="https://github.com/laravel/laravel">GitHub</a>
	</div>
</div>
</body>
</html>
