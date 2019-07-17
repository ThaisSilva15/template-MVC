<html>
    <head>
        <title>CamiThaMake Store</title>
        <base href="<?= URL_BASE ?>">
        <link rel="stylesheet" href="./publico/css/app.css">
        <script src="./publico/js/script.js"></script>
    </head>
    <body class="container"></body>

    <?php require './visao/cabecalho.php' ?>

    <main class="container" id="content">
        <?php require $viewFilePath; ?>

    </main>
    <?php require './visao/rodape.php' ?>

</body>
</html>
