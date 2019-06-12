<?php
    if(ehPost()){
        foreach ($errors as $erro){
            echo "$erro<br>";
        }
    }
  ?>
        
<h1> Cadastro do produto</h1>
        <form action="" method="POST">
            Preco: <input type="text" name="preco">
            Nome do Produto: <input type="text" name="nomeproduto">
            Descricão: <input type="text" name="descricao">
            Imagem: <input type="text" name="imagem">
            Estoque Minimo: <input type="text" name="estoque_minimo">
            Estoque Maximo: <input type="text" name="estoque_maximo">
            <button>Enviar</button>
            
        