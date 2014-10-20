<?php
$mperfsentbob = 6;
$sentb = '<select name="mperfsentbob" id="mperfsentbob">';
for ($x = 1; $x < 29; $x++) {
    if ($x < 10) {
        $t = str_pad($x, 2, '0', STR_PAD_LEFT);
    } else {
        $t = (string) $x;
    }
    $sel = '';
    if ($mperfsentbob == $x) {
        $sel = ' selected ';
        $img = "bob/$t.png";
    }
    $sentb .= "<option value=\"$t\"$sel>$t</option>";
}
$sentb .= '</select>';

$mperf = '<table>
    <tr>
        <td>
            <label for="mperfmaq">Maquina</label><br>
            <input type="text" id="mperfmaq" name="mperfmaq" value="" size="25" placeholder="Identificação da Maquina"><br>
            <label for="mperfobs">Observações</label><br>
            <textarea name="mperfobs" id="mperfobs" maxlength="500" rows="6" cols="80" placeholder="Observações da micro-perfuradeira, esse campo será impresso na OP"></textarea><br>
            <table><tr><td>
            <label for="mperfprtvde">Produtividade</label><br>
            <input class="right" type="text" id="mperfprtvde" name="mperfprtvde" value="'.$mperfprtvde.'" size="5" placeholder="0,0">kg/min
            </td>
            <td></td>
            <td>
            <label for="mperfperdas">Perdas de Processo</label><br>
            <input class="right" type="text" id="mperfperdas" name="mperfperdas" value="'.$mperfprtvde.'" size="5" placeholder="0000">%
            </td></tr></table>
        </td>
        <td>
            <label for="mperfsentbob">Sentido do bobinamento</label><br>'.$sentb.'<br>
            <img name="imgmperfsentbob" id="imgmperfsentbob" src="'.$img.'" alt="Sentido de bobinamento" height="140">    
        </td>
    </tr>
</table>';
