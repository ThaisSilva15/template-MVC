<?php
if (ehPost()) {
    foreach ($errors as $erro) {
        echo "$erro<br>";
    }
}
?>
<select name="pedido" id="pedido" class="formulario-select-option">
        <?php
        foreach ($pedidos as $pedido):
            if ($produto["idPedido"] == $pedido["idPedido"]):?>
                <option value="<?= $pedido["idPedido"] ?>" selected=""><?= $pedido["descricao"] ?></option>
            <?php else: ?>
                <option value="<?= $pedido["idPedido"] ?>"><?= $pedido["descricao"] ?></option>
            <?php endif;
        endforeach;
        ?>
    </select>