<!doctype html>
<html lang="pt_BR">
<head>
  <meta charset="utf-8">
  <title>NCM</title>
  <link rel="stylesheet" href="../../libs/jquery/themes/smoothness/jquery-ui.css">
  <script src="../../libs/jquery/jquery-2.1.1.js"></script>
  <script src="../../libs/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="../../images/style.css">
  <script>
    $(function() {
        $("#tblSN").hide();
        $("#tblNorm").show();
        $("#tabse").tabs();
        $("#tabss").tabs();
    });
    $(document).ready(function(){
        $("#regime").change(function(){
            if ($(this).val() == '1') {
                $("#tblNorm").hide();
                $("#tblSN").show();
            } else {
                $("#tblSN").hide();
                $("#tblNorm").show();
            }
        });
        
    });
  </script>
</head>
<body>
<form name="formNCM" action="gravarNCM.php" method="post">
<fieldset>
<legend>NCM</legend>
<table>
<tr>
<td>
<label for="prod_cod">Código do NCM</label><br>
<input type="text" id="ncm_cod" name="ncm_cod" value="<?=$ncm_cod;?>" size="15" placeholder="Código do NCM">
<input type="button" id="buscaprod" name="buscancm" value="Busca" OnClick="ajaxBuscaNCM();"><br>
<label for="ncm_desc">Descrição</label><br>
<textarea name="ncm_desc" id="desc" maxlength="200" rows="3" placeholder="Descrição do NCM"><?=$ncm_desc;?></textarea><br>
<label for="tottribperc">Percentual do total dos tributos Lei 12.741/12</label><br>
<input type="text" id="tottribperc" name="tottribperc" value="<?=$tottribperc;?>" size="5" placeholder="Perc.">%
</td>
</tr>
</table>
</fieldset>
<table>
<tr>
    <td>
        <fieldset>
        <legend>ENTRADAS</legend>
        <div id="entradas">
        <div id="tabse">
            <ul>
                <li><a href="#ICMSe">ICMS</a></li>
                <li><a href="#IPIe">IPI</a></li>
                <li><a href="#PISCOFINSe">PIS/COFINS</a></li>
                <li><a href="#IIe">II</a></li>
                <li><a href="#ISSe">ISS</a></li>
            </ul>
            <div id="ICMSe">
                <table>
                    <tr>
                        <td>
                            <label for="regimee">Regime</label><br> 
                            <select name="regimee" id="regimee">
                            <option value=" ">Selecione</option>
                            <option value="0">0 - Tributação Normal</option>
                            <option value="1">1 - Tributação Simples Nacional</option>
                            </select><br>
                            <label for="origeme">Origem</label><br> 
                            <select name="origeme" id="origeme">
                            <option value=" ">Selecione</option>
                            <option value="0">0 - Nacional, exceto as indicadas em 3,4,5 e 8</option>
                            <option value="1">1 - Extrangeira, importação direte exceto a indicada no código 6</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>    
            <div id="IPIe">
            </div>
            <div id="PISCOFINSe">
            </div>
            <div id="IIe">
            </div>
            <div id="ISSe">
            </div>
        </div>
        </div>    
        </fieldset>
    </td>
    <td>
        <fieldset>
        <legend>SAÍDAS</legend>
        <div id="saidas">
        <div id="tabss">
            <ul>
                <li><a href="#ICMSs">ICMS</a></li>
                <li><a href="#IPIs">IPI</a></li>
                <li><a href="#PISCOFINSs">PIS/COFINS</a></li>
                <li><a href="#IIs">II</a></li>
                <li><a href="#ISSs">ISS</a></li>
            </ul>
            <div id="ICMSs">
                <table>
                    <tr>
                        <td>
                            <label for="regimes">Regime</label><br> 
                            <select name="regimes" id="regimes">
                            <option value=" ">Selecione</option>                                
                            <option value="0">0 - Tributação Normal</option>
                            <option value="1">1 - Tributação Simples Nacional</option>
                            </select><br>
                            <label for="origems">Origem</label><br> 
                            <select name="origems" id="origems">
                            <option value=" ">Selecione</option>                                
                            <option value="0">0 - Nacional, exceto as indicadas em 3,4,5 e 8</option>
                            <option value="1">1 - Extrangeira, importação direte exceto a indicada no código 6</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="IPIs">
            </div>
            <div id="PISCOFINSs">
            </div>
            <div id="IIs">
            </div>
            <div id="ISSs">
            </div>
        </div>
        </div>
        </fieldset>
    </td>
</tr>      
</table>
</form>    
</body>
</html>
