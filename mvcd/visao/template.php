<html>
	<head>
		<meta charset="utf-8">

		<title>CamiThaMake Store</title>
		<base href="<?= URL_BASE ?>">

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
