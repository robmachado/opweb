<?php

$reb = '<table>
    <tr>
        <td>
            <label for="reblargmin">Largura Mínina</label><br>
            <input class="right" type="text" id="reblargmin" name="reblargmin" value="'.$reblargmin.'" size="8" placeholder="0,00">mm<br>
            <label for="reblargnom">Largura Nominal</label><br>
            <input class="right" type="text" id="reblargnom" name="reblargnom" value="'.$reblargnom.'" size="8" placeholder="0,00">mm<br>
            <label for="reblargmax">Largura Máxima</label><br>
            <input class="right" type="text" id="reblargmax" name="reblargmax" value="'.$reblargmax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="reblargini">Largura Inicial</label><br>
            <input class="right" type="text" id="reblargini" name="reblargini" value="'.$reblargini.'" size="8" placeholder="0,00">mm<br>
            <label for="rebsentidobob">Sentido do Bobinamento</label><br>
            <input type="text" id="rebsentidobob" name="rebsentidobob" value="'.$rebsentidobob.'" size="25" placeholder="Sentido do bobinamento"><br>
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
    </tr>
</table>';
