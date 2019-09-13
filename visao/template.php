<html>
    <head>
        <meta charset="utf-8">	
        <title>CamiThaMake Store</title>
        <base href="<?= URL_BASE ?>">
        <link rel="shortcut icon" type="image/x-png" href="./publico/img/user/user.png">
        <link rel="stylesheet" href="publico/css/app.css">
        <script src="publico/js/script.js"></script>
    </head>
    <body class="container">

        <?php
        if (
                $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cliente/cadastro' &&
                $_SERVER['PHP_SELF'] != '/template-MVC/index.php/login/'
        ) {
            require './visao/cabecalho.php';
        } else {
            require './visao/cabecalho_aux.php';
        }
        ?>

        <main class="container" id="content">
            <?php require $viewFilePath; ?>
        </main>

        <?php
        if (
                $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cliente/cadastro' &&
                $_SERVER['PHP_SELF'] != '/template-MVC/index.php/login/'
        ) {
            require './visao/rodape.php';
        }
        ?>


    </body>
</html>