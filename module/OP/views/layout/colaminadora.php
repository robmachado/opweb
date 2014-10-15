<?php

$colam = '<table>
<tr>
    <td>
        <label for="colamlargmin">Largura Mínina</label><br>
        <input class="right" type="text" id="colamlargmin" name="colamlargmin" value="'.$colamlargmin.'" size="8" placeholder="0,00">mm<br>
        <label for="colamlargnom">Largura Nominal</label><br>
        <input class="right" type="text" id="colamlargnom" name="colamlargnom" value="'.$colamlargnom.'" size="8" placeholder="0,00">mm<br>
        <label for="colamlargmax">Largura Máxima</label><br>
        <input class="right" type="text" id="colamlargmax" name="colamlargmax" value="'.$colamlargmax.'" size="8" placeholder="0,00">mm<br><br>
        <label for="colprtvde">Produtividade</label><br>
        <input class="right" type="text" id="colprtvde" name="colprtvde" value="'.$colprtvde.'" size="5" placeholder="0,0">kg/min<br>
    </td>
    <td width="10px"></td>
    <td>
        <label for="colamompmin">Comprimento Mínino</label><br>
        <input class="right" type="text" id="colamcompmin" name="colamcompmin" value="'.$colamcompmin.'" size="8" placeholder="0,00">mm<br>
        <label for="colamcompnom">Comprimento Nominal</label><br>
        <input class="right" type="text" id="colamcompnom" name="colamcompnom" value="'.$colamcompnom.'" size="8" placeholder="0,00">mm<br>
        <label for="colamompmax">Comprimento Máximo</label><br>
        <input class="right" type="text" id="ftcompmax" name="colamcompmax" value="'.$colamcompmax.'" size="8" placeholder="0,00">mm<br>
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
</tr>
</table>';
