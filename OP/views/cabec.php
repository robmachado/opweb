<?php

$cabec = '<fieldset>
<legend>Dados da OP</legend>
<table>
<tr>
    <td>
    <label for="prod_cod">Código do Produto</label><br>
    <input type="text" id="prod_cod" name="prod_cod" value="'.$prod_cod.'" size="15" placeholder="Código do Produto">
    <input type="button" id="buscaprod" name="buscaprod" value="Busca" OnClick="ajaxBuscaProd();"><br>
    <label for="prod_desc">Descrição</label><br>
    <textarea name="prod_desc" id="desc" maxlength="100" rows="3" placeholder="Descrição do produto">'.$prod_desc.'</textarea>
    </td>
    <td>
    <label for="pedido">Pedido Interno</label><br>
    <input type="text" id="pedido" name="pedido" value"'.$pedido.'" placeholder="Numero Pedido"><br>
    <label for="qtdade">Quantidade</label><br>
    <input class="right" type="text" id="qtdade" name="qtdade" value="'.$qtdade.'" placeholder="Quantidade"><br>
    <label for="uni">Unidade</label><br>
    <select name="uni" id="uni">
        <option value="kg">kg</option>
        <option value="un">un</option>
        <option value="m">metro</option>
        <option value="mq">m&sup2;</option>
    </select>
    </td>
    <td>
    <label for="client">Cliente</label><br>
    <input type="text" id="cliente" name="cliente" value="'.$cliente.'" placeholder="Nome Cliente"><br>
    <label for="pedcli">Pedido do Cliente</label><br>
    <input type="text" id="pecli" name="pecli" value="'.$pedcli.'" placeholder="Número Ped. Cliente"><br>
    <label for="prodcli">Produto do Cliente</label><br>
    <input type="text" id="prodcli" name="prodcli" value="'.$prodcli.'" placeholder="Cod. produto Cliente">
    </td>
    <td>
    <label for="opnum">Número da OP</label><br>
    <input type="text" id="opnum" name="opnum" value="'.$op_id.'" '.$ophabilita.' placeholder="Número OP"><input type="button" id="btn_BuscaOP" name="btn_BuscaOP" value="Busca" OnClick="ajaxBuscaOP();"><br>
    <label for="prazo">Prazo de Entrega</label><br>
    <input type="text" id="op_prazo" name="op_prazo" value="'.$op_prazo.'" placeholder="Data de Entrega"><br>
    </td>
</tr>
<tr>
    <td><input type="submit" value="Gravar"></td>
    <td><input type="button" value="Imprimir" OnClick="javaprint();"></td>
    <td><input type="button" value="Limpar/Nova" OnClick="javaclean();"></td>
    <td><input type="button" value="Deletar" OnClick="javadelete();"></td>
</tr>
</table>
</fieldset>';
