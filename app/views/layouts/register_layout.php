<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $title; ?>
	</title>
	<!-- Dodaj linki do arkuszy stylów CSS, skryptów JS itp. -->
</head>

<body>
	<!-- Menu nawigacyjne -->
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/login">Logowanie</a></li>
		</ul>
	</nav>

	<!-- Treść strony -->
	<?php require_once ($content); ?>
</body>

</html>