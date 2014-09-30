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
        $("#tabs").tabs();
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
                <textarea name="ncm_desc" id="desc" maxlength="100" rows="3" placeholder="Descrição do NCM"><?=$ncm_desc;?></textarea>
            </td>
        </tr>
        </table>
        </fieldset>
        <table>
        <tr>    
        <td>
        <div id="entradas">
        <div id="tabs">
            <ul>
                <li><a href="#ICMS">ICMS</a></li>
                <li><a href="#IPI">IPI</a></li>
                <li><a href="#PISCOFINS">PIS/COFINS</a></li>
                <li><a href="#II">II</a></li>
                <li><a href="#ISS">ISS</a></li>
            </ul>
            <div id="ICMS">
                <table>
                    <tr>
                        <td>
                            <label for="regime">Regime</label><br> 
                            <select name="regime" id="regime">
                            <option value="0">0 - Tributação Normal</option>
                            <option value="1">1 - Tributação Simples Nacional</option>
                            </select><br>
                            <label for="origem">Origem</label><br> 
                            <select name="origem" id="origem">
                            <option value="0">0 - Nacional, exceto as indicadas em 3,4,5 e 8</option>
                            <option value="1">1 - Extrangeira, importação direte exceto a indicada no código 6</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div id="tblNorm">
                <fieldset>
                <legend>Normal</legend>
                <table>
                    <tr>
                        <td>
                            <label for="tpTrib">Situação Tributária</label><br> 
                            <select name="sitTrib" id="sitTrib">
                            <option value=" ">Selecione</option>                                
                            <option value="00">00-Tributada Integralmente</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <table>
                    <tr> 
                    <td>
                    <div id="nICMS">
                        <fieldset>
                            <legend>ICMS</legend>
                        </fieldset>
                    </div>
                    </td>
                    <td>
                    <div id="nICMST">
                        <fieldset>
                            <legend>ICMSST</legend>
                        </fieldset>    
                    </div>
                    </td>
                    </tr>
                    </table>        
                    </tr>
                </table>
                </fieldset>
                </div>
                <div id="tblSN">
                <fieldset>
                <legend>Simples Nacional</legend>
                <table>
                    <tr>
                        <td>
                            <label for="tpTrib">Situação Tributária</label><br> 
                            <select name="sitTrib" id="sitTrib">
                            <option value=" ">Selecione</option>
                            <option value="101">101-Tributada com permissão de Crédito</option>
                            </select>
                        </td>
                    </tr>

                </table>
                </fieldset>                    
                </div>    
            </div>
            <div id="IPI">
            </div>
            <div id="PISCOFINS">
            </div>
            <div id="II">
            </div>
            <div id="ISS">
            </div>
       </div>
            </td>
            <td>
       <div id="saidas">
        <div id="tabs">
            <ul>
                <li><a href="#ICMS">ICMS</a></li>
                <li><a href="#IPI">IPI</a></li>
                <li><a href="#PISCOFINS">PIS/COFINS</a></li>
                <li><a href="#II">II</a></li>
                <li><a href="#ISS">ISS</a></li>
            </ul>
            <div id="ICMS">
                <table>
                    <tr>
                        <td>
                            <label for="regime">Regime</label><br> 
                            <select name="regime" id="regime">
                            <option value="0">0 - Tributação Normal</option>
                            <option value="1">1 - Tributação Simples Nacional</option>
                            </select><br>
                            <label for="origem">Origem</label><br> 
                            <select name="origem" id="origem">
                            <option value="0">0 - Nacional, exceto as indicadas em 3,4,5 e 8</option>
                            <option value="1">1 - Extrangeira, importação direte exceto a indicada no código 6</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <div id="tblNorm">
                <fieldset>
                <legend>Normal</legend>
                <table>
                    <tr>
                        <td>
                            <label for="tpTrib">Situação Tributária</label><br> 
                            <select name="sitTrib" id="sitTrib">
                            <option value=" ">Selecione</option>                                
                            <option value="00">00-Tributada Integralmente</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <table>
                    <tr> 
                    <td>
                    <div id="nICMS">
                        <fieldset>
                            <legend>ICMS</legend>
                        </fieldset>
                    </div>
                    </td>
                    <td>
                    <div id="nICMST">
                        <fieldset>
                            <legend>ICMSST</legend>
                        </fieldset>    
                    </div>
                    </td>
                    </tr>
                    </table>        
                    </tr>
                </table>
                </fieldset>
                </div>
                <div id="tblSN">
                <fieldset>
                <legend>Simples Nacional</legend>
                <table>
                    <tr>
                        <td>
                            <label for="tpTrib">Situação Tributária</label><br> 
                            <select name="sitTrib" id="sitTrib">
                            <option value=" ">Selecione</option>
                            <option value="101">101-Tributada com permissão de Crédito</option>
                            </select>
                        </td>
                    </tr>

                </table>
                </fieldset>                    
                </div>    
            </div>
            <div id="IPI">
            </div>
            <div id="PISCOFINS">
            </div>
            <div id="II">
            </div>
            <div id="ISS">
            </div>
           
       </div>
            </td>
        </tr>
        </table>
       </div>     
    </form>  
</body>
</html>