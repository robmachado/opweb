<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ordem de Producao</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form>
<div>
    <table>
        <tr>
            <td>
                <label for="codprod">Código do Produto</label><br>
                <input type="text" id="codprod" name="codprod" value="codprod" size="15"><input type="button" id="buscaprod" name="buscaprod" value="Busca"><br>
                <label for="desc">Descrição</label><br>
                <textarea name="desc" id="desc" maxlength="100" rows="3">Descrição do produto</textarea>
            </td>
            <td>
                <label for="pedido">Pedido Interno</label><br>
                <input type="text" id="pedido" name="pedido" value="pedido"><br>
                <label for="qtdade">Quantidade</label><br>
                <input type="text" id="qtdade" name="qtdade" value="qtdade"><br>
                <label for="uni">Unidade</label><br>
                <input type="text" id="uni" name="uni" value="uni"><br>
            </td>
            <td>
                <label for="client">Cliente</label><br>
                <input type="text" id="client" name="client" value="client"><br>
                <label for="pedcli">Pedido do Cliente</label><br>
                <input type="text" id="pecli" name="pecli" value="pedcli"><br>
                <label for="prodcli">Produto do Cliente</label><br>
                <input type="text" id="prodcli" name="prodcli" value="prodcli"><br>
            </td>
            <td>
                <label for="opnum">Numero da OP</label><br>
                <input type="text" id="opnum" name="opnum" value="opnum"><input type="button" id="buscaop" name="buscaop" value="Busca"><br>
                <label for="prazo">Prazo de Entrega</label><br>
                <input type="text" id="prazo" name="prazo" value="prazo"><br>
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit">
</div>
</form>    
</body>
</html>

