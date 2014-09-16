<?php
include_once('../../OP/views/fichatecnica.php');
include_once('../../OP/views/mpbase.php');

$tipo = array('00'=>'Mercadoria para Revenda',
            '01'=>'Matéria-Prima',
            '02'=>'Embalagem',
            '03'=>'Produto em Processo',
            '04'=>'Produto Acabado',
            '05'=>'Subproduto',
            '06'=>'Produto Intermediário',
            '07'=>'Material de Uso e Consumo',
            '08'=>'Ativo Imobilizado',
            '09'=>'Serviços',
            '10'=>'Outros insumos',
            '99'=>'Outras');


?>
<!doctype html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <title>Produtos</title>
  <link rel="stylesheet" href="../../libs/jquery/themes/smoothness/jquery-ui.css">
  <script src="../../libs/jquery/jquery-2.1.1.js"></script>
  <script src="../../libs/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../../images/style.css">
  <script>
    $(function() {
        $("#tabs").tabs();
    });
    $(document).ready(function(){
        $("button").click(function(){
            //$("#ft").toggle();
            //$("#ft").remove();
        });
    });
  </script>
</head>
<body>
<button>Toggle</button>
<p>This is a paragraph with little content.</p>
<p>This is another small paragraph.</p>
<form name="formOP" action="gravarProduto.php" method="post">
    <fieldset>
        
    <legend>Produto</legend>
    <table>
    <tr>
        <td>
            <label for="prod_cod">Código do Produto</label><br>
            <input type="text" id="prod_cod" name="prod_cod" value="<?=$prod_cod;?>" size="15" placeholder="Código do Produto">
            <input type="button" id="buscaprod" name="buscaprod" value="Busca" OnClick="ajaxBuscaProd();"><br>
            <label for="prod_desc">Descrição</label><br>
            <textarea name="prod_desc" id="desc" maxlength="100" rows="3" placeholder="Descrição do produto"><?=$prod_desc;?></textarea>
        </td>
        <td>
            <label for="uni">Unidade de Estoque</label><br>
            <select name="uni" id="uni">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
            </select><br>
            <label for="tipo">Tipo de Item</label><br>
            <select name="tipo" id="tipo">
                <option value=" ">Selecione ...</option>
                <option value="00">Mercadoria para Revenda</option>
                <option value="01">Matéria-Prima</option>
                <option value="02">Embalagem</option>
                <option value="03">Produto em Processo</option>
                <option value="04">Produto Acabado</option>
                <option value="05">Subproduto</option>
                <option value="06">Produto Intermediário</option>
                <option value="07">Material de Uso e Consumo</option>
                <option value="08">Ativo Imobilizado</option>
                <option value="09">Serviços</option>
                <option value="10">Outros insumos</option>
                <option value="99">Outras</option>
            </select>
        </td>
    </tr>
    </table>
    </fieldset>
    <div id="tabs">
    <ul>
        <li><a href="#ft">Ficha Técnica</a></li>
        <li><a href="#mp">Matérias-Primas</a></li>
        <li><a href="#impostos">Impostos</a></li>
        <li><a href="#unid">Unidades</a></li>
    </ul>
    <div id="ft">
        <?=$ft;?>
    </div>
    <div id="mp">
        <?=$mpbase;?>
    </div>
    <div id="impostos">
    </div>
    <div id="unid">
        <table>
            <tr>
                <th>de</th><th>para</th><th>fator</th>
            </tr>
            <tr>
                <td>
                <select name="uniini1" id="uniini1">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <select name="unifim1" id="unifim1">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <input type="text" id="fator1" name="fator1" value="" size="15" placeholder="Fator de conversão">    
                </td>
            </tr>
            <tr>
                <td>
                <select name="uniini2" id="uniini2">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <select name="unifim2" id="unifim2">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <input type="text" id="fator2" name="fator2" value="" size="15" placeholder="Fator de conversão">
                </td>
            </tr>
            <tr>
                <td>
                <select name="uniini3" id="uniini3">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <select name="unifim3" id="unifim3">
                <option value="kg" <?=$selKG;?>>kg</option>
                <option value="un" <?=$selUN;?>>un</option>
                <option value="m" <?=$selM;?>>metro</option>
                <option value="mq" <?=$selM2;?>>m&sup2;</option>
                </select>
                </td>
                <td>
                <input type="text" id="fator3" name="fator3" value="" size="15" placeholder="Fator de conversão">
                </td>
            </tr>
        </table>
    </div>
    </div>    
</form>        
</body>
</html>