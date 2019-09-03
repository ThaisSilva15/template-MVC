<html>
    <head>
        <meta charset="utf-8">	
        <title>CamiThaMake Store</title>
        <base href="<?= URL_BASE ?>">
        <link rel="shortcut icon" type="image/x-png" href="./publico/img/user/user.png">
        <link rel="stylesheet" href="publico/css/app.css">
        <script src="publico/js/script.js"></script>
    </head>
    <body class="container"></body>
    <?php
    if (
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cliente/cadastro' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/categoria/descricao' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/formapagamento/adicionar' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cupom/cadastro'
    // Colocar aqui as páginas que não precisarão do cabeçalho principal
    ) {
        require './visao/cabecalho.php';
    } else {
        require './visao/cabecalho_aux.php';
    }
    
    // require './visao/cabecalho.php';
    ?>

    <main class="container" id="content">
        <?php echo $_SERVER['PHP_SELF']; ?>
        <?php require $viewFilePath; ?>
    </main>

    <?php
    if (
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cliente/cadastro' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/categoria/descricao' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/formapagamento/adicionar' &&
            $_SERVER['PHP_SELF'] != '/template-MVC/index.php/cupom/cadastro'
    // Colocar aqui as páginas que não precisarão do rodapé
    ) {
        require './visao/rodape.php';
    }
    
    // require './visao/rodape.php';
    ?>

</div>
</body>
</html>
