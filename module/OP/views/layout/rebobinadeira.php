<?php
$rebsentbob = 6;
$sentb = '<select name="rebsentbob" id="rebsentbob">';
for ($x = 1; $x < 29; $x++) {
    if ($x < 10) {
        $t = str_pad($x, 2, '0', STR_PAD_LEFT);
    } else {
        $t = (string) $x;
    }
    $sel = '';
    if ($rebsentbob == $x) {
        $sel = ' selected ';
        $img = "bob/$t.png";
    }
    $sentb .= "<option value=\"$t\"$sel>$t</option>";
}
$sentb .= '</select>';

$reb = '<table>
    <tr>
        <td>
            <label for="reblargmin">Largura Mínina</label><br>
            <input class="right" type="text" id="reblargmin" name="reblargmin" value="'.$reblargmin.'" size="8" placeholder="0,00">mm<br>
            <label for="reblargnom">Largura Nominal</label><br>
            <input class="right" type="text" id="reblargnom" name="reblargnom" value="'.$reblargnom.'" size="8" placeholder="0,00">mm<br>
            <label for="reblargmax">Largura Máxima</label><br>
            <input class="right" type="text" id="reblargmax" name="reblargmax" value="'.$reblargmax.'" size="8" placeholder="0,00">mm<br><br>
            <label for="rebprtvde">Produtividade</label><br>
            <input class="right" type="text" id="rebprtvde" name="rebprtvde" value="'.$rebprtvde.'" size="5" placeholder="0,0">kg/min<br>
            <label for="rebperdas">Perdas de processo</label><br>
            <input class="right" type="text" id="rebperdas" name="rebperdas" value="'.$rebperdas.'" size="5" placeholder="00000">%
        </td>
        <td width="10px"></td>
        <td>
            <label for="reblargini">Largura Inicial</label><br>
            <input class="right" type="text" id="reblargini" name="reblargini" value="'.$reblargini.'" size="8" placeholder="0,00">mm<br>
            <label for="rebdiamax">Diâmeto Máximo</label><br>
            <input class="right" type="text" id="rebdiamax" name="rebdiamax" value="'.$rebdiamax.'" size="8" placeholder="0,00">mm<br>
            <label for="rebmetbob">Metragem por Bobina</label><br>
            <input class="right" type="text" id="rebmetbob" name="rebmetbob" value="'.$rebmetbob.'" size="8" placeholder="00000">m<br>
            <label for="rebpesobob">Peso por Bobina</label><br>
            <input class="right" type="text" id="rebpesobob" name="rebpesobob" value="'.$rebpesobob.'" size="8" placeholder="0,00">kg<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="rebmaq">Maquina</label><br>
            <input type="text" id="rebmaq" name="rebmaq" value="'.$rebmaq.'" size="25" placeholder="Identificação da Maquina"><br>
            <label for="rebobs">Observações</label><br>
            <textarea name="rebobs" id="rebobs" maxlength="500" rows="6" cols="80" placeholder="Observações da rebobinadeira, esse campo será impresso na OP">'.$rebobs.'</textarea>
        </td>
        <td>
            <label for="rebsentbob">Sentido do bobinamento</label><br>'.$sentb.'<br>
            <img name="imgrebsentbob" id="imgrebsentbob" src="'.$img.'" alt="Sentido de bobinamento" height="140">
        </td>
    </tr>
</table>';
