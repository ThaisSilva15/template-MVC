    <meta charset="utf-8">
<h2>Listar Produtos Carrinho</h2>
<table class="table">
    <thead>
        <tr>
            <TH>IDPRODUTO</TH>
            <th>NOME</th> 
            <th>PREÇO</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php 
    if(isset($carrinho)) {
        $total=0;
        // $total=0;
        // $defiDesconto=0;
        foreach ($carrinho as $produto){ 
    ?>

    <tr>
        <td><?=$produto['CodProduto']?></td>        
        <td><?=$produto['NomeProd']?></td>
        <td><?=$produto['Preco']?></td>
        <?= 
        $total=$total + $produto['Preco'];
        ?>
        <td><a href="./carrinho/deletar/<?=$produto['CodProduto']?>">del</a></td>
    </tr>
    <?php 
        }
    }else{
        echo "<h1>Seu carrinho está vazio<h1>";
    }
    ?>
  <?php
   // $total = $total- $defiDesconto;
   if (isset($carrinho)) {
            echo "O Total e da sua compra em reais é: ". $total;
            $pedido["PrecoTotal"]=$total;
            echo "O Total e da sua compra com desconto é de: ". $totalcompra;
    ?>
    <a href="./pedido/comprar/<?=$pedido['PrecoTotal']?>">Comprar</a>
<?php  
}
    ?>