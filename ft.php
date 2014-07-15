<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FT</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form>
<div>
    <table>
        <tr>
            <td>
                <label for="ftcodprod">Código do Produto</label><br>
                <input type="text" id="ftcodprod" name="ftcodprod" value="ftcodprod" size="15" disabled><br>
                <label for="ftdesc">Descrição</label><br>
                <textarea name="ftdesc" id="ftdesc" maxlength="100" rows="3" disabled>Descrição do produto</textarea>
            </td>
            <td>
                <label for="ftclient">Cliente</label><br>
                <input type="text" id="ftclient" name="ftclient" value="client" disabled><br>
                <label for="ftprodcli">Produto do Cliente</label><br>
                <input type="text" id="ftprodcli" name="ftprodcli" value="prodcli" disabled><br>
            </td>
            <td>
                <label for="ftdesenv">Numero do desenvolvimento</label><br>
                <input type="text" id="ftdesenv" name="ftdesenv" value="desenv"><br>
                <label for="ftgtin">GTIN</label><br>
                <input type="text" id="ftgtin" name="ftgtin" value="gtin"><br>
            </td>
            <td>
                <label for="ftobs">Observações</label><br>
                <textarea name="ftobs" id="ftobs" maxlength="500" rows="6" cols="60">Observações da ficha técnica esses dados não serão impressos a menos que indicado para</textarea>
            </td>
        </tr>
        </table>
        <table>
        <tr>
            <td>
                <label for="ftlargmin">Largura Mínina</label><br>
                <input type="text" id="ftlargmin" name="ftlargmin" value="ftlargmin" size="8">mm<br>
                <label for="ftlargnom">Largura Nominal</label><br>
                <input type="text" id="ftlargnom" name="ftlargnom" value="ftlargnom" size="8">mm<br>
                <label for="ftlargmax">Largura Máxima</label><br>
                <input type="text" id="ftlargmax" name="ftlargmax" value="ftlargmax" size="8">mm<br>
            </td>
            <td>
                <label for="ftespsmin">Espessura Mínina</label><br>
                <input type="text" id="ftespesmin" name="ftespesmin" value="ftespesmin" size="8">mm<br>
                <label for="ftespsnom">Espessura Nominal</label><br>
                <input type="text" id="ftespesnom" name="ftespesnom" value="ftespesnom" size="8">mm<br>
                <label for="ftespesmax">Espessura Máxima</label><br>
                <input type="text" id="ftespesmax" name="ftespesmax" value="ftespesmax" size="8">mm<br>
            </td>
            <td>
                <label for="ftgrammin">Gramatura Mínina</label><br>
                <input type="text" id="ftgrammin" name="ftgrammin" value="ftgrammin" size="8">g/m&sup2;<br>
                <label for="ftgremnom">Gramatura Nominal</label><br>
                <input type="text" id="ftgramnom" name="ftgramsnom" value="ftgramnom" size="8">g/m&sup2;<br>
                <label for="ftgrammax">Gramatura Máxima</label><br>
                <input type="text" id="ftgrammax" name="ftgrammax" value="ftgrammax" size="8">g/m&sup2;<br>
                
            </td>
            <td>
                <label for="ftcompmin">Comprimento Mínino</label><br>
                <input type="text" id="ftcompmin" name="ftcompmin" value="ftcompmin" size="8">mm<br>
                <label for="ftcompnom">Comprimento Nominal</label><br>
                <input type="text" id="ftcompnom" name="ftcompnom" value="ftcompnom" size="8">mm<br>
                <label for="ftcompmax">Comprimento Máximo</label><br>
                <input type="text" id="ftcompmax" name="ftcompmax" value="ftcompmax" size="8">mm<br>
            </td>
            <td>
                <label for="ftabamin">ABA Mínina</label><br>
                <input type="text" id="ftabamin" name="ftabamin" value="ftabamin" size="8">mm<br>
                <label for="ftabanom">ABA Nominal</label><br>
                <input type="text" id="ftabanom" name="ftabanom" value="ftabanom" size="8">mm<br>
                <label for="ftabamax">ABA Máxima</label><br>
                <input type="text" id="ftabamax" name="ftabamax" value="ftabamax" size="8">mm<br>
            </td>
            <td>
                <label for="ftsanfmin">SANFONA Mínina</label><br>
                <input type="text" id="ftsanfmin" name="ftsanfmin" value="ftsanfmin" size="8">mm<br>
                <label for="ftsanfnom">SANFONA Nominal</label><br>
                <input type="text" id="ftsanfnom" name="ftsanfnom" value="ftsanfnom" size="8">mm<br>
                <label for="ftsanfmax">SANFONA Máxima</label><br>
                <input type="text" id="ftsnafmax" name="ftsanfmax" value="ftsanfmax" size="8">mm<br>
            </td>
            <td>
                <label for="ftpesomin">Peso Mínino</label><br>
                <input type="text" id="ftpesomin" name="ftpesomin" value="ftpesomin" size="8">g<br>
                <label for="ftpesonom">Peso Nominal</label><br>
                <input type="text" id="ftpesonom" name="ftpesonom" value="ftpesonom" size="8">g<br>
                <label for="ftpesomax">Peso Máximo</label><br>
                <input type="text" id="ftpesomax" name="ftpesomax" value="ftpesomax" size="8">g<br>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <label for="ftsolda">Tipo de Solda</label><br>
                <textarea name="ftsolda" id="ftsolda" maxlength="500" rows="6" cols="40">Observações da Solda</textarea>
            </td>
            <td>
                <label for="ftimp">Impressão (cores)</label><br>
                <textarea name="ftimps" id="ftimp" maxlength="500" rows="6" cols="40">Observações da Impressão</textarea>
            </td>
            <td>
                <label for="ftalert">Alertas</label><br>
                <textarea name="ftalert" id="ftalert" maxlength="500" rows="6" cols="40">Observações de Alerta esse campo será impresso na OP</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <label for="ftversao">Versão</label><br>
                <input type="text" id="ftversao" name="ftversao" value="ftversao" size="8"><br>
                <label for="ftdata">Data da Última alteração</label><br>
                <input type="text" id="ftdata" name="ftdata" value="ftdata" size="11"><br>
                <label for="ftemitente">Emitente</label><br>
                <input type="text" id="ftemitente" name="ftemitente" value="ftemitente" size="15"><br>
            </td>
        </tr>
    </table>
    
    <input type="submit" value="Submit">
</div>
</form>    
</body>
</html>

