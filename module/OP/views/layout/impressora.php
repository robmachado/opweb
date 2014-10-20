<?php
$impsentbob = 6;
$sentb = '<select name="impsentbob" id="impsentbob">';
for ($x = 1; $x < 29; $x++) {
    if ($x < 10) {
        $t = str_pad($x, 2, '0', STR_PAD_LEFT);
    } else {
        $t = (string) $x;
    }
    $sel = '';
    if ($impsentbob == $x) {
        $sel = ' selected ';
        $img = "bob/$t.png";
    }
    $sentb .= "<option value=\"$t\"$sel>$t</option>";
}
$sentb .= '</select>';

$imp = '<table>
          <tr>
            <td>
                <label for="impcilindro">Cilindro</label><br>
                <input type="text" id="impcilindro" name="impcilindro" value="'.$impcilindro.'" size="25" placeholder="Identificação do cilindro"><br>
                <label for="impsentidobob">Sentido de Bobinamento</label><br>
                <input type="text" id="impsentidobob" name="impsentidobob" value="'.$impsentidobob.'" size="25" placeholder="Sentido de Bobinamento"><br>
                <label for="impprtvde">Produtividade</label><br>
                <input class="right" type="text" id="impprtvde" name="impprtvde" value="'.$impprtvde.'" size="5" placeholder="0,0">kg/min<br>
                <label for="impperdas">Perdas de Processo</label><br>
                <input class="right" type="text" id="impperdas" name="impperdas" value="'.$impperdas.'" size="8" placeholder="0,00">%<br>
            </td>  
            <td>
                <label for="impmaq">Maquina</label><br>
                <input type="text" id="impmaq" name="impmaq" value="'.$impmaq.'" size="25" placeholder="Identificação da Maquina"><br>
                <label for="impobs">Observações</label><br>
                <textarea name="impobs" id="impobs" maxlength="500" rows="6" cols="80" placeholder="Observações da impressão, esse campo será impresso na OP">'.$impobs.'</textarea>
            </td>
            <td>
                <label for="impsentbob">Sentido do bobinamento</label><br>'.$sentb.'<br>
                <img name="imgimpsentbob" id="imgimpsentbob" src="'.$img.'" alt="Sentido de bobinamento" height="140">    
            </td>
          </tr>
      </table>';
