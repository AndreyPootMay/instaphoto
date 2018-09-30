<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="<?php echo ROUTEPUBLIC; ?>/public/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ROUTEPUBLIC; ?>/public/css/styles.css">
	<title><?= APPNAME ?></title>
</head>
<body>
	<nav class="red">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo"><?= APPNAME ?></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="<?= ROUTEPUBLIC ?>/users/login">Entrar</a></li>
				<li><a href="<?= ROUTEPUBLIC ?>/users/register">Registrarse</a></li>
			</ul>
		</div>
	</nav>
	<main>
		<div class="container" align="center" style="margin-top: 150px">
			<div class="row center-div">
			    <div class="col s12">
			      <div class="card">
			      	<div class="row">
			      		<br>
			      		<img src="<?= ROUTEPUBLIC ?>/public/img/logo.jpg" alt="" width="200">
			      	</div>
			        <div class="card-content black-text">
						<form action="<?= ROUTEPUBLIC ?>/users/loginback" method="post" autocomplete="off">
							<input type="email" placeholder="Correo electrónico" autofocus name="email" required>
							<input type="password" placeholder="Clave" name="pass" required>
							<button class="btn waves-effect waves-light black" type="submit" name="action">Entrar <i class="material-icons">send</i></button>
						</form>
						<br>
						<br>
						<br>
						2018 Copyright InstaPhoto &copy;
			        </div>
			      </div>
			    </div>
  			</div>
		</div>
	</main>
</body>
</html>