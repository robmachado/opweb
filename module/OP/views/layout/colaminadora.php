<?php
$colsentbob = 6;
$sentb = '<select name="colsentbob" id="colsentbob">';
for ($x = 1; $x < 29; $x++) {
    if ($x < 10) {
        $t = str_pad($x, 2, '0', STR_PAD_LEFT);
    } else {
        $t = (string) $x;
    }
    $sel = '';
    if ($colsentbob == $x) {
        $sel = ' selected ';
        $img = "bob/$t.png";
    }
    $sentb .= "<option value=\"$t\"$sel>$t</option>";
}
$sentb .= '</select>';

$colam = '<table>
<tr>
    <td>
        <label for="colamlargmin">Largura Mínina</label><br>
        <input class="right" type="text" id="colamlargmin" name="colamlargmin" value="'.$colamlargmin.'" size="8" placeholder="0,00">mm<br>
        <label for="colamlargnom">Largura Nominal</label><br>
        <input class="right" type="text" id="colamlargnom" name="colamlargnom" value="'.$colamlargnom.'" size="8" placeholder="0,00">mm<br>
        <label for="colamlargmax">Largura Máxima</label><br>
        <input class="right" type="text" id="colamlargmax" name="colamlargmax" value="'.$colamlargmax.'" size="8" placeholder="0,00">mm<br><br>
        <label for="colprtvde">Produtividade (kg)</label><br>
        <input class="right" type="text" id="colprtvde" name="colprtvde" value="'.$colprtvde.'" size="5" placeholder="0,0">kg/min<br>
        <label for="colprtvdem">Produtividade (m)</label><br>
        <input class="right" type="text" id="colprtvdem" name="colprtvdem" value="'.$colprtvdem.'" size="5" placeholder="0,0">m/min<br>
    </td>
    <td width="10px"></td>
    <td>
        <label for="colamompmin">Comprimento Mínino</label><br>
        <input class="right" type="text" id="colamcompmin" name="colamcompmin" value="'.$colamcompmin.'" size="8" placeholder="0,00">mm<br>
        <label for="colamcompnom">Comprimento Nominal</label><br>
        <input class="right" type="text" id="colamcompnom" name="colamcompnom" value="'.$colamcompnom.'" size="8" placeholder="0,00">mm<br>
        <label for="colamompmax">Comprimento Máximo</label><br>
        <input class="right" type="text" id="ftcompmax" name="colamcompmax" value="'.$colamcompmax.'" size="8" placeholder="0,00">mm<br>
        <label for="colperdas">Perdas de Processo</label><br>
        <input class="right" type="text" id="colperdas" name="colperdas" value="'.$colperdas.'" size="5" placeholder="0000">%
    </td>
    <td width="10px"></td>
    <td>
        <label for="colamdesc">Descrição</label><br>
        <input type="text" id="colamdesc" name="colamdesc" value="'.$colamdesc.'" size="40" placeholder="Descrição"><br>
        <label for="colamtubete">Tubete</label><br>
        <input type="text" id="colamtubete" name="colamtubete" value="'.$colamtubete.'" size="40" placeholder="Indicar o tubete">
    </td>
    <td width="10px"></td>
    <td>
        <label for="colmaq">Maquina</label><br>
        <input type="text" id="colmaq" name="colmaq" value="'.$colammaq.'" size="25" placeholder="Identificação da Maquina"><br>
        <label for="colamobs">Observações</label><br>
        <textarea name="colamobs" id="colamobs" maxlength="500" rows="6" cols="80" placeholder="Observações da colaminadora, esse campo será impresso na OP">'.$colamobs.'</textarea>
    </td>
    <td>
        <label for="colsentbob">Sentido do bobinamento</label><br>'.$sentb.'<br>
        <img name="imgcolsentbob" id="imgcolsentbob" src="'.$img.'" alt="Sentido de bobinamento" height="140">    
    </td>
</tr>
</table>';
