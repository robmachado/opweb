<?php

$mperf = '<table>
    <tr>
        <td>
            <label for="mperfmaq">Maquina</label><br>
            <input type="text" id="mperfmaq" name="mperfmaq" value="" size="25" placeholder="Identificação da Maquina"><br>
            <label for="mperfobs">Observações</label><br>
            <textarea name="mperfobs" id="mperfobs" maxlength="500" rows="6" cols="80" placeholder="Observações da micro-perfuradeira, esse campo será impresso na OP"></textarea><br>
            <label for="mperfprtvde">Produtividade</label><br>
            <input class="right" type="text" id="mperfprtvde" name="mperfprtvde" value="'.$mperfprtvde.'" size="5" placeholder="0,0">kg/min<br>            
        </td>
    </tr>
</table>';
