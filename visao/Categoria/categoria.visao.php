<?php
    if(ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
  ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="">
            Descrição: <input type="text" name="descricao">
                <button type="submit"> Enviar </button>
        </form>
    </body>
</html>
