<html>
	<head>
		<title>template MVC</title>
		<base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
		<script src="./publico/js/script.js"></script>
		<link rel="stylesheet" href="./publico/css/app.css">
	</head>
	<body class="container">

		<?php require_once './visao/cabecalho.php' ?>

		<main class="container">
			<?php require $viewFilePath; ?>
		</main>

		<?php require_once './visao/rodape.php' ?>

	</body>
</html>
