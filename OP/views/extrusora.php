<?php

$ext = '<table>
          <tr>
            <td>
                <label for="extlargmin">Largura Mínina</label><br>
                <input class="right" type="text" id="extlargmin" name="extlargmin" value="'.$extlargmin.'" size="8" placeholder="0,00">mm<br>
                <label for="extlargnom">Largura Nominal</label><br>
                <input class="right" type="text" id="extlargnom" name="extlargnom" value="'.$extlargnom.'" size="8" placeholder="0,00">mm<br>
                <label for="extlargmax">Largura Máxima</label><br>
                <input class="right" type="text" id="extlargmax" name="extlargmax" value="'.$extlargmax.'" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="extespsmin">Espessura Mín. parede </label><br>
                <input class="right" type="text" id="extespesmin" name="extespesmin" value="'.$extespesmin.'" size="8" placeholder="0,00">mm<br>
                <label for="extespsnom">Espessura Nom. parede</label><br>
                <input class="right" type="text" id="extespesnom" name="extespesnom" value="'.$extespesnom.'" size="8" placeholder="0,00">mm<br>
                <label for="extespesmax">Espessura Máx. parede</label><br>
                <input class="right" type="text" id="extespesmax" name="extespesmax" value="'.$extespesmax.'" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="extsanfmin">SANFONA Mínina</label><br>
                <input class="right" type="text" id="extsanfmin" name="extsanfmin" value="'.$extsanfmin.'" size="8" placeholder="0,00">mm<br>
                <label for="extsanfnom">SANFONA Nominal</label><br>
                <input class="right" type="text" id="extsanfnom" name="extsanfnom" value="'.$extsanfnom.'" size="8" placeholder="0,00">mm<br>
                <label for="extsanfmax">SANFONA Máxima</label><br>
                <input class="right" type="text" id="extsnafmax" name="extsanfmax" value="'.$extsanfmax.'" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="extgrammin">Gramametro Mínino</label><br>
                <input class="right" type="text" id="extgmmin" name="extgmmin" value="'.$extgmmin.'" size="8" placeholder="0,00">g/m<br>
                <label for="extgremnom">Gramametro Nominal</label><br>
                <input class="right" type="text" id="extgmnom" name="extgmnom" value="'.$extgmnom.'" size="8" placeholder="0,00">g/m<br>
                <label for="extgrammax">Gramametro Máximo</label><br>
                <input class="right" type="text" id="extgmmax" name="extgmmax" value="'.$extgmmax.'" size="8" placeholder="0,00">g/m<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="extmatriz">Matriz</label><br>
                <input type="text" id="extmatriz" name="extmatriz" value="'.$extmatriz.'" size="20" placeholder="Matriz a ser usada"><br>
                <label for="extrazao">Razão de Sopro</label><br>
                <input type="text" id="extrazsopro" name="extrazsopro" value="'.$extrazsopro.'" size="20" placeholder="Razão de Sopro"><br>
                <label for="exttipobob">Tipo de Bobina</label><br>
                <select name="exttipobob" id="exttipobob">
                    <option value="S" selected>Simples</option>
                    <option value="T">Técnica</option>
                    <option value="I">Infestada</option>
                    <option value="F">Sanfonada</option>
                    <option value="P">Picotada</option>
                </select><br>
                <label for="extmaq">Maquina</label><br>
                <input type="text" id="extmaq" name="extmaq" value="'.$extmaq.'" size="20" placeholder="Identificação da Maquina">
            </td>
            <td width="10px"></td>
            <td>
                <label for="extmettot">Metragem Total</label><br>
                <input class="right" type="text" id="extmettot" name="extmettot" value="'.$extmettot.'" size="8" placeholder="00000">m<br>
                <label for="extnumbob">Numero de Bobinas</label><br>
                <input class="right" type="text" id="extnumbob" name="extnumbob" value="'.$extnumbob.'" size="3" placeholder="000"><br>
                <label for="extmetbob">Metragem por Bobina</label><br>
                <input class="right" type="text" id="extmetbob" name="extmetbob" value="'.$extmetbob.'" size="8" placeholder="00000">m<br>
                <label for="extpesotot">Peso Total</label><br>
                <input class="right" type="text" id="extpesotot" name="extpesotot" value="'.$extpesotot.'" size="8" placeholder="0,00">kg<br>
                <label for="extpesobob">Peso por Bobina</label><br>
                <input class="right" type="text" id="extpesobob" name="extpesobob" value="'.$extpesobob.'" size="8" placeholder="0,00">kg<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="extdiammax">Diâmetro Máximo</label><br>
                <input class="right" type="text" id="extdiammax" name="extdiammax" value="'.$extdiammax.'" size="8" placeholder="0,00">mm<br>
                <label for="extprtvde">Produtividade</label><br>
                <input class="right" type="text" id="extprtvde" name="extprtvde" value="'.$extprtvde.'" size="5" placeholder="0,0">kg/min<br>
                <label for="extperdas">Perdas de Processo</label><br>
                <input class="right" type="text" id="extperdas" name="extperdas" value="'.$extperdas.'" size="8" placeholder="0,00">%<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="exttratamento">Tratamento</label><br>
                <input type="text" id="exttratamento" name="exttratamento" value="'.$exttratamento.'" size="25" placeholder="Tratamento de superficie"><br>
                <label for="extmapa">Mapa de Tratamento</label><br>
                <input class="right" type="text" id="extmapa1" name="extmapa1" value="'.$extmapa1.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa2" name="extmapa2" value="'.$extmapa2.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa3" name="extmapa3" value="'.$extmapa3.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa4" name="extmapa4" value="'.$extmapa4.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa5" name="extmapa5" value="'.$extmapa5.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa6" name="extmapa6" value="'.$extmapa6.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa7" name="extmapa7" value="'.$extmapa7.'" size="3" placeholder="000">
                <input class="right" type="text" id="extmapa8" name="extmapa8" value="'.$extmapa8.'" size="3" placeholder="000">
            </td>
          </tr>  
          <tr>
            <td colspan="15">
                <label for="extpobs">Observações</label><br>
                <textarea name="extpobs" id="extpobs" maxlength="500" rows="3" cols="120" placeholder="Observações da extrusão, esse campo será impresso na OP">'.$extobs.'</textarea>
            </td>
          </tr>
      </table>';
