    <table>
        <tr>
            <td>
                <label for="prod_cod">Código do Produto</label><br>
                <input type="text" id="prod_cod" name="prod_cod" value="#prod_cod#" size="15"><input type="button" id="buscaprod" name="buscaprod" value="Busca" OnClick="ajaxBuscaProd(this)"><br>
                <label for="desc">Descrição</label><br>
                <textarea name="prod_desc" id="prod_desc" maxlength="100" rows="3">#prod_desc#</textarea>
            </td>
            <td>
                <label for="pedint">Pedido Interno</label><br>
                <input type="text" id="pedint" name="pedint" value="#pedint#"><br>
                <label for="qtdade">Quantidade</label><br>
                <input type="text" id="qtdade" name="qtdade" value="#qtdade#"><br>
                <label for="uni">Unidade</label><br>
                <input type="text" id="uni" name="uni" value="#uni#"><br>
            </td>
            <td>
                <label for="client">Cliente</label><br>
                <input type="text" id="client" name="client" value="#client#"><br>
                <label for="pedcli">Pedido do Cliente</label><br>
                <input type="text" id="pedcli" name="pedcli" value="#pedcli#"><br>
                <label for="prodcli">Produto do Cliente</label><br>
                <input type="text" id="prodcli" name="prodcli" value="#prodcli#"><br>
            </td>
            <td>
                <label for="opnum">Número da OP</label><br>
                <input type="text" id="opnum" name="opnum" value="#op_id#"><input type="button" id="btn_buscaop" name="btn_buscaop" value="Busca" OnClick="ajaxBuscaOP(this);"><br>
                <label for="op_prazo">Prazo de Entrega</label><br>
                <input type="text" id="op_prazo" name="op_prazo" value="#op_prazo#"><br>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Gravar"></td>
            <td><input type="button" value="Imprimir" OnClick="javaprint();"></td>
            <td><input type="button" value="Limpar/Nova" OnClick="javaclean();"></td>
            <td><input type="button" value="Deletar" OnClick="javadelete();"></td>
        </tr>
    </table>
    
