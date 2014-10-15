<?php

$ft = '<table>
    <tr>
        <td>
            <label for="ftcodprod">Código do Produto</label><br>
            <input type="text" id="ftcodprod" name="ftcodprod" value="'.$prod_cod.'" size="15" placeholder="código" disabled><br>
            <label for="ftdesc">Descrição</label><br>
            <textarea name="ftdesc" id="ftdesc" maxlength="100" rows="3" placeholder="Descrição do produto" disabled>'.$prod_desc.'</textarea>
        </td>
        <td>
            <label for="ftclient">Cliente</label><br>
            <input type="text" id="ftclient" name="ftclient" value="'.$cliente.'" placeholder="Nome Cliente" disabled><br>
            <label for="ftprodcli">Produto do Cliente</label><br>
            <input type="text" id="ftprodcli" name="ftprodcli" value="'.$prod_cli.'" placeholder="Cod. Prod. Cliente" disabled><br>
        </td>
        <td>
            <label for="ftdesenv">Numero do desenvolvimento</label><br>
            <input type="text" id="ftdesenv" name="ftdesenv" value="'.$ftdesenv.'" placeholder="Numero Desenvolvimento"><br>
            <label for="ftgtin">GTIN</label><br>
            <input type="text" id="ftgtin" name="ftgtin" value="'.$ftgtin.'" placeholder="Código Barras"><br>
            <input type="checkbox" id="ftimpobs" name="ftimpobs" value="'.$ftimpobs.'">Imprimir OBS
        </td>
        <td>
            <label for="ftobs">Observações</label><br>
            <textarea name="ftobs" id="ftobs" maxlength="500" rows="6" cols="60" placeholder="Observações da ficha técnica esses dados não serão impressos a menos que indicado para">'.$ftobs.'</textarea>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <label for="ftlargmin">Largura Mínina</label><br>
            <input class="right" type="text" id="ftlargmin" name="ftlargmin" value="'.$ftlargmin.'" size="8" placeholder="0,00">mm<br>
            <label for="ftlargnom">Largura Nominal</label><br>
            <input class="right" type="text" id="ftlargnom" name="ftlargnom" value="'.$ftlargnom.'" size="8" placeholder="0,00">mm<br>
            <label for="ftlargmax">Largura Máxima</label><br>
            <input class="right" type="text" id="ftlargmax" name="ftlargmax" value="'.$ftlargmax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftespsmin">Espessura Mínina</label><br>
            <input class="right" type="text" id="ftespesmin" name="ftespesmin" value="'.$ftespesmin.'" size="8" placeholder="0,00">mm<br>
            <label for="ftespsnom">Espessura Nominal</label><br>
            <input class="right" type="text" id="ftespesnom" name="ftespesnom" value="'.$ftespesnom.'" size="8" placeholder="0,00">mm<br>
            <label for="ftespesmax">Espessura Máxima</label><br>
            <input class="right" type="text" id="ftespesmax" name="ftespesmax" value="'.$ftespesmax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftgrammin">Gramatura Mínina</label><br>
            <input class="right" type="text" id="ftgrammin" name="ftgrammin" value="'.$ftgrammin.'" size="8" placeholder="0,00">g/m&sup2;<br>
            <label for="ftgremnom">Gramatura Nominal</label><br>
            <input class="right" type="text" id="ftgramnom" name="ftgramsnom" value="'.$ftgramnom.'" size="8" placeholder="0,00">g/m&sup2;<br>
            <label for="ftgrammax">Gramatura Máxima</label><br>
            <input class="right" type="text" id="ftgrammax" name="ftgrammax" value="'.$ftgrammax.'" size="8" placeholder="0,00">g/m&sup2;<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftcompmin">Comprimento Mínino</label><br>
            <input class="right" type="text" id="ftcompmin" name="ftcompmin" value="'.$ftcompmin.'" size="8" placeholder="0,00">mm<br>
            <label for="ftcompnom">Comprimento Nominal</label><br>
            <input class="right" type="text" id="ftcompnom" name="ftcompnom" value="'.$ftcompnom.'" size="8" placeholder="0,00">mm<br>
            <label for="ftcompmax">Comprimento Máximo</label><br>
            <input class="right" type="text" id="ftcompmax" name="ftcompmax" value="'.$ftcompmax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftabamin">ABA Mínina</label><br>
            <input class="right" type="text" id="ftabamin" name="ftabamin" value="'.$ftabamin.'" size="8" placeholder="0,00">mm<br>
            <label for="ftabanom">ABA Nominal</label><br>
            <input class="right" type="text" id="ftabanom" name="ftabanom" value="'.$ftabanom.'" size="8" placeholder="0,00">mm<br>
            <label for="ftabamax">ABA Máxima</label><br>
            <input class="right" type="text" id="ftabamax" name="ftabamax" value="'.$ftabamax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftsanfmin">SANFONA Mínina</label><br>
            <input class="right" type="text" id="ftsanfmin" name="ftsanfmin" value="'.$ftsanfmin.'" size="8" placeholder="0,00">mm<br>
            <label for="ftsanfnom">SANFONA Nominal</label><br>
            <input class="right" type="text" id="ftsanfnom" name="ftsanfnom" value="'.$ftsanfnom.'" size="8" placeholder="0,00">mm<br>
            <label for="ftsanfmax">SANFONA Máxima</label><br>
            <input class="right" type="text" id="ftsnafmax" name="ftsanfmax" value="'.$ftsanfmax.'" size="8" placeholder="0,00">mm<br>
        </td>
        <td width="10px"></td>
        <td>
            <label for="ftpesomin">Peso Mínino</label><br>
            <input class="right" type="text" id="ftpesomin" name="ftpesomin" value="'.$ftpesomin.'" size="8" placeholder="0,00">g<br>
            <label for="ftpesonom">Peso Nominal</label><br>
            <input class="right" type="text" id="ftpesonom" name="ftpesonom" value="'.$ftpesonom.'" size="8" placeholder="0,00">g<br>
            <label for="ftpesomax">Peso Máximo</label><br>
            <input class="right" type="text" id="ftpesomax" name="ftpesomax" value="'.$ftpesomax.'" size="8" placeholder="0,00">g<br>
        </td>
    </tr>
</table>
<table>
    <tr>
        <td>
            <label for="ftsolda">Tipo de Solda</label><br>
            <textarea name="ftsolda" id="ftsolda" maxlength="500" rows="6" cols="40" placeholder="Observações para Corte/Solda">'.$ftsolda.'</textarea>
        </td>
        <td>
            <label for="ftimp">Impressão (cores)</label><br>
            <textarea name="ftimp" id="ftimp" maxlength="500" rows="6" cols="40" placeholder="Observações para Impressão">'.$ftimp.'</textarea>
        </td>
        <td>
            <label for="ftalert">Alertas</label><br>
            <textarea name="ftalert" id="ftalert" maxlength="500" rows="6" cols="40" placeholder="Observações de Alerta, esse campo será impresso na OP">'.$ftalert.'</textarea>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table>
                <tr>
                    <td>
                        <label for="ftversao">Versão</label><br>
                        <input type="text" id="ftversao" name="ftversao" value="'.$ftversao.'" size="4"  placeholder="00"><br>
                    </td>
                    <td>
                        <label for="ftdata">Data da Última alteração</label><br>
                        <input type="text" id="ftdata" name="ftdata" value="'.$ftdata.'" size="11" placeholder="Data"><br>
                    </td>
                    <td>
                        <label for="ftemitente">Emitente</label><br>
                        <input type="text" id="ftemitente" name="ftemitente" value="'.$ftemitente.'" size="15" placeholder="Nome resp."><br>
                    </td>
                    <td>
                        <br>
                        <input type="button" value="Imprimir Ficha Técnica">                            
                    </td>
                </tr>
            </table>
        </td>
        <td></td>
    </tr>
</table>';


$ft = '<table>
        <tr>
            <td>
                <label for="ftcodprod">Código do Produto</label><br>
                <input type="text" id="ftcodprod" name="ftcodprod" value="'.$prod_cod.'" size="15" placeholder="código" disabled><br>
                <label for="ftdesc">Descrição</label><br>
                <textarea name="ftdesc" id="ftdesc" maxlength="100" rows="3" placeholder="Descrição do produto" disabled>'.$prod_desc.'</textarea>
            </td>
            <td>
                <label for="ftclient">Cliente</label><br>
                <input type="text" id="ftclient" name="ftclient" value="'.$cliente.'" placeholder="Nome Cliente" disabled><br>
                <label for="ftprodcli">Produto do Cliente</label><br>
                <input type="text" id="ftprodcli" name="ftprodcli" value="'.$prod_cli.'" placeholder="Cod. Prod. Cliente" disabled><br>
            </td>
            <td>
                <label for="ftdesenv">Numero do desenvolvimento</label><br>
                <input type="text" id="ftdesenv" name="ftdesenv" value="'.$ftdesenv.'" placeholder="Numero Desenvolvimento"><br>
                <label for="ftgtin">GTIN</label><br>
                <input type="text" id="ftgtin" name="ftgtin" value="'.$ftgtin.'" placeholder="Código Barras"><br>
                <input type="checkbox" id="ftimpobs" name="ftimpobs" value="'.$ftimpobs.'">Imprimir OBS
            </td>
            <td>
                <label for="ftobs">Observações</label><br>
                <textarea name="ftobs" id="ftobs" maxlength="500" rows="6" cols="60" placeholder="Observações da ficha técnica esses dados não serão impressos a menos que indicado para">'.$ftobs.'</textarea>
            </td>
            <td width="30%" rowspan="4">
                <fieldset>
                <p>Desenho</p>
                <center>
                    <img src="BB_gears.svg" alt="Engrenagens" height="340" width="142">
                </center>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <label for="ftlargmin">Largura Mínina</label><br>
                            <input class="right" type="text" id="ftlargmin" name="ftlargmin" value="'.$ftlargmin.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftlargnom">Largura Nominal</label><br>
                            <input class="right" type="text" id="ftlargnom" name="ftlargnom" value="'.$ftlargnom.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftlargmax">Largura Máxima</label><br>
                            <input class="right" type="text" id="ftlargmax" name="ftlargmax" value="'.$ftlargmax.'" size="8" placeholder="0,00">mm<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftespsmin">Espessura Mínina</label><br>
                            <input class="right" type="text" id="ftespesmin" name="ftespesmin" value="'.$ftespesmin.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftespsnom">Espessura Nominal</label><br>
                            <input class="right" type="text" id="ftespesnom" name="ftespesnom" value="'.$ftespesnom.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftespesmax">Espessura Máxima</label><br>
                            <input class="right" type="text" id="ftespesmax" name="ftespesmax" value="'.$ftespesmax.'" size="8" placeholder="0,00">mm<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftgrammin">Gramatura Mínina</label><br>
                            <input class="right" type="text" id="ftgrammin" name="ftgrammin" value="'.$ftgrammin.'" size="8" placeholder="0,00">g/m&sup2;<br>
                            <label for="ftgremnom">Gramatura Nominal</label><br>
                            <input class="right" type="text" id="ftgramnom" name="ftgramsnom" value="'.$ftgramnom.'" size="8" placeholder="0,00">g/m&sup2;<br>
                            <label for="ftgrammax">Gramatura Máxima</label><br>
                            <input class="right" type="text" id="ftgrammax" name="ftgrammax" value="'.$ftgrammax.'" size="8" placeholder="0,00">g/m&sup2;<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftcompmin">Comprimento Mínino</label><br>
                            <input class="right" type="text" id="ftcompmin" name="ftcompmin" value="'.$ftcompmin.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftcompnom">Comprimento Nominal</label><br>
                            <input class="right" type="text" id="ftcompnom" name="ftcompnom" value="'.$ftcompnom.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftcompmax">Comprimento Máximo</label><br>
                            <input class="right" type="text" id="ftcompmax" name="ftcompmax" value="'.$ftcompmax.'" size="8" placeholder="0,00">mm<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftabamin">ABA Mínina</label><br>
                            <input class="right" type="text" id="ftabamin" name="ftabamin" value="'.$ftabamin.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftabanom">ABA Nominal</label><br>
                            <input class="right" type="text" id="ftabanom" name="ftabanom" value="'.$ftabanom.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftabamax">ABA Máxima</label><br>
                            <input class="right" type="text" id="ftabamax" name="ftabamax" value="'.$ftabamax.'" size="8" placeholder="0,00">mm<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftsanfmin">SANFONA Mínina</label><br>
                            <input class="right" type="text" id="ftsanfmin" name="ftsanfmin" value="'.$ftsanfmin.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftsanfnom">SANFONA Nominal</label><br>
                            <input class="right" type="text" id="ftsanfnom" name="ftsanfnom" value="'.$ftsanfnom.'" size="8" placeholder="0,00">mm<br>
                            <label for="ftsanfmax">SANFONA Máxima</label><br>
                            <input class="right" type="text" id="ftsnafmax" name="ftsanfmax" value="'.$ftsanfmax.'" size="8" placeholder="0,00">mm<br>
                        </td>
                        <td width="10px"></td>
                        <td>
                            <label for="ftpesomin">Peso Mínino</label><br>
                            <input class="right" type="text" id="ftpesomin" name="ftpesomin" value="'.$ftpesomin.'" size="8" placeholder="0,00">g<br>
                            <label for="ftpesonom">Peso Nominal</label><br>
                            <input class="right" type="text" id="ftpesonom" name="ftpesonom" value="'.$ftpesonom.'" size="8" placeholder="0,00">g<br>
                            <label for="ftpesomax">Peso Máximo</label><br>
                            <input class="right" type="text" id="ftpesomax" name="ftpesomax" value="'.$ftpesomax.'" size="8" placeholder="0,00">g<br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <label for="ftsolda">Tipo de Solda</label><br>
                            <textarea name="ftsolda" id="ftsolda" maxlength="500" rows="6" cols="40" placeholder="Observações para Corte/Solda">'.$ftsolda.'</textarea>
                        </td>
                        <td>
                            <label for="ftimp">Impressão (cores)</label><br>
                            <textarea name="ftimp" id="ftimp" maxlength="500" rows="6" cols="40" placeholder="Observações para Impressão">'.$ftimp.'</textarea>
                        </td>
                        <td>
                            <label for="ftalert">Alertas</label><br>
                            <textarea name="ftalert" id="ftalert" maxlength="500" rows="6" cols="40" placeholder="Observações de Alerta, esse campo será impresso na OP">'.$ftalert.'</textarea>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <label for="ftversao">Versão</label><br>
                            <input type="text" id="ftversao" name="ftversao" value="'.$ftversao.'" size="4"  placeholder="00"><br>
                        </td>
                        <td>
                            <label for="ftdata">Data da Última alteração</label><br>
                            <input type="text" id="ftdata" name="ftdata" value="'.$ftdata.'" size="11" placeholder="Data"><br>
                        </td>
                        <td>
                            <label for="ftemitente">Emitente</label><br>
                            <input type="text" id="ftemitente" name="ftemitente" value="'.$ftemitente.'" size="15" placeholder="Nome resp."><br>
                        </td>
                        <td>
                            <br>
                            <input type="button" value="Imprimir Ficha Técnica">                            
                        </td>
                        <td></td>
                        <td><label for="desenho">Desenho</label><br><input type="text" id="desenho" name="desenho" value="" size="25" placeholder="Path para o desenho resp."><input type="button" value="Subir"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
';
