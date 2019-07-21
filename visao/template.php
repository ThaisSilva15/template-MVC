<html>
	<head>
		<meta charset="utf-8">

		<title>CamiThaMake Store</title>
		<base href="<?= URL_BASE ?>">

		<link rel="stylesheet" href="publico/css/app.css">
		<script src="publico/js/script.js"></script>
	</head>

	<body class="container">
		<?php require_once 'visao/cabecalho.php' ?>

		<main class="container" id="content">
			<?php require $viewFilePath; ?>
		</main>

		<?php require_once 'visao/rodape.php' ?>
	</body>
</html>
