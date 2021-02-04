<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.79.0">
	<title>Crud Estudiantes</title>
	<link rel="shortcut icon" type="image/png" href="/favicon.ico" />

	<!-- Bootstrap core CSS -->
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">

	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="mb-auto">
			<div>
				<h3 class="float-md-start mb-0">Crud Estudiantes</h3>
				<nav class="nav nav-masthead justify-content-center float-md-end">
					<a class="nav-link active" aria-current="page" href="#">Inicio</a>
				</nav>
			</div>
		</header>


		<div class="card bg-dark">
			<div class="card-body">
				<h2 class="card-header">Inicia Sesión</h2>
				<form action="<?php echo base_url('/login') ?>" method="post">
					<div class="mb-3">
						<input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Correo Electronico" required autocomplete="email">
						<!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
					</div>
					<div class="mb-3">
						<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required autocomplete="current-password">
					</div>

					<button type="submit" class="btn btn-primary">Ingresar</button>
				</form>
			</div>
		</div>
		<footer class="mt-auto text-white-50">
			<p>Prueba de desarrollo en <a href="#" class="text-white">Codeigniter</a>, por <a href="" class="text-white">Camilo Rios</a>.</p>
		</footer>
	</div>



</body>

</html>