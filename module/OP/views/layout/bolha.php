<?php

$bol = '<table>
          <tr>
            <td>
                <label for="bollargmin">Largura Mínina</label><br>
                <input class="right" type="text" id="bollargmin" name="bollargmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="bollargnom">Largura Nominal</label><br>
                <input class="right" type="text" id="bollargnom" name="bollargnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="bollargmax">Largura Máxima</label><br>
                <input class="right" type="text" id="bollargmax" name="bollargmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="bolcompmin">Comprimento Mínino</label><br>
                <input class="right" type="text" id="bolcompmin" name="bolcompmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="bolcompnom">Comprimento Nominal</label><br>
                <input class="right" type="text" id="bolcompnom" name="bolcompnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="bolcompmax">Comprimento Máximo</label><br>
                <input class="right" type="text" id="bolcompmax" name="bolcompmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="bolcamada1">Camada 1</label><br>
                <input type="text" id="bolcamada1" name="bolcamada1" value="" size="20" placeholder="Material 1&ordf; camada"><br>
                <label for="bolcamada2">Camada 2</label><br>
                <input type="text" id="bolcamada2" name="bolcamada2" value="" size="20" placeholder="Material 2&ordf; camada"><br>
                <label for="bolcamada3">Camada 3</label><br>
                <input type="text" id="bolcamada3" name="bolcamada3" value="" size="20" placeholder="Material 3&ordf; camada"><br>
                <label for="bolcamada4">Camada 4</label><br>
                <input type="text" id="bolcamada4" name="bolcamada4" value="" size="20" placeholder="Material 4&ordf; camada">
            </td>
            <td width="10px"></td>
            <td>
                <label for="boldesc">Descrição</label><br>
                <input type="text" id="boldesc" name="boldesc" value="" size="25" placeholder="Descrição"><br>
                <label for="bolpicote">Picote</label><br>
                <input type="text" id="bolpicote" name="bolpicote" value="" size="25" placeholder="Indicar o picote"><br>
                <label for="boltubete">Tubete</label><br>
                <input type="text" id="boltubete" name="boltubete" value="" size="25" placeholder="Indicar o tubele"><br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="bolobs">Observações</label><br>
                <textarea name="bolobs" id="bolobs" maxlength="500" rows="6" cols="80" placeholder="Observações da maquina de bolha, esse campo será impresso na OP"></textarea><br>
                <table><tr><td>
                <label for="bolprtvde">Produtividade (kg)</label><br>
                <input class="right" type="text" id="bolprtvde" name="bolprtvde" value="'.$bolprtvde.'" size="5" placeholder="0,0">kg/min<br>
                <label for="bolprtvdem">Produtividade (m)</label><br>
                <input class="right" type="text" id="bolprtvdem" name="bolprtvdem" value="'.$bolprtvdem.'" size="5" placeholder="0,0">m/min<br>
                <td>
                <td></td>
                <td>
                <label for="bolperdas">Perdas de Processo</label><br>
                <input class="right" type="text" id="bolperdas" name="bolperdas" value="'.$bolprtvde.'" size="5" placeholder="00000">%<br>
</td>
                </tr></table>
            </td>
          </tr>
      </table>';
