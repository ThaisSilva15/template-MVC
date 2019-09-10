<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>

<h1> Cadastro do produto</h1><br>
<form action="" method="POST" enctype="multipart/form-data">
    Preco: <input type="text" name="preco" value="<?= @$produto['preco'] ?>"> <br>
    <br>Nome do Produto: <input type="text" name="nomeproduto" value="<?= @$produto['nomeproduto'] ?>"><br>
    <br>Descricão:  <input type="text" name="descricao" value="<?= @$produto['descricao'] ?>"><br>
    <br>Imagem: <input type="file" name="imagem"><br>
    <br>Categoria:
    <select name="categoria">
        <?php
        foreach ($categorias as $categoria):
            if ($produto["idcategoria"] == $categoria["idcategoria"]):
                ?>
                <option value="<?= $categoria["idcategoria"] ?>" selected=""><?= $categoria["descricao"] ?></option>
                <?php else:
                ?>
                <option value="<?= $categoria["idcategoria"] ?>"><?= $categoria["descricao"] ?></option>
            <?php
            endif;
        endforeach;
        ?>
    </select><br>
    <br>Estoque Minimo: <input type="text" name="estoque_minimo" value="<?= @$produto['estoque_minimo'] ?>"><br>
    <br>Estoque Maximo: <input type="text" name="estoque_maximo" value="<?= @$produto['estoque_maximo'] ?>"><br>
    <br><button>Enviar</button><br>
</form>