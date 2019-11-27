<h2>listar Pedidos por Datas</h2>
<table class="table" border="1">
    <thead>
        <tr>
            <th class="th-produto">Data da Compra</th>
            <th class="th-produto">Total</th>
        </tr>
    </thead>
    <?php foreach ($adm as $data): ?>
        <tr>
            <td class="th-produto"><?=$data['datacompra']?></td><br>
            <td class="th-produto"><?=$data['total']?></td>
        </tr>
    <?php endforeach; ?>
</table>