<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ordem de Producao</title>
  <link rel="stylesheet" href="libs/jquery/themes/smoothness/jquery-ui.css">
  <script src="libs/jquery/jquery-2.1.1.js"></script>
  <script src="libs/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
<form>
<div>
    <h2 align="center">Dados da OP<h2>
    <table>
        <tr>
            <td>
                <label for="codprod">Código do Produto</label><br>
                <input type="text" id="codprod" name="codprod" value="" size="15" placeholder="Código do Produto"><input type="button" id="buscaprod" name="buscaprod" value="Busca"><br>
                <label for="desc">Descrição</label><br>
                <textarea name="desc" id="desc" maxlength="100" rows="3" placeholder="Descrição do produto"></textarea>
            </td>
            <td>
                <label for="pedido">Pedido Interno</label><br>
                <input type="text" id="pedido" name="pedido" value="" placeholder="Numero Pedido"><br>
                <label for="qtdade">Quantidade</label><br>
                <input class="right" type="text" id="qtdade" name="qtdade" value="" placeholder="Quantidade"><br>
                <label for="uni">Unidade</label><br>
                <select name="uni" id="uni">
                    <option value="kg" selected>kg</option>
                    <option value="pc">peça</option>
                    <option value="m">metro</option>
                    <option value="mil">milheiro</option>
                </select>
            </td>
            <td>
                <label for="client">Cliente</label><br>
                <input type="text" id="client" name="client" value="" placeholder="Nome Cliente"><br>
                <label for="pedcli">Pedido do Cliente</label><br>
                <input type="text" id="pecli" name="pecli" value="" placeholder="Numero Ped. Cliente"><br>
                <label for="prodcli">Produto do Cliente</label><br>
                <input type="text" id="prodcli" name="prodcli" value="" placeholder="Cod. produto Cliente">
            </td>
            <td>
                <label for="opnum">Numero da OP</label><br>
                <input type="text" id="opnum" name="opnum" value="" placeholder="Numero OP"><input type="button" id="buscaop" name="buscaop" value="Busca"><br>
                <label for="prazo">Prazo de Entrega</label><br>
                <input type="text" id="prazo" name="prazo" value="" placeholder="data entrega"><br>
                <input type="submit" value="Gravar">         <input type="button" value="Imprimir">      <input type="button" value="Deletar"> 
            </td>
        </tr>
    </table>
</div>    
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Ficha Técnica</a></li>      
    <li><a href="#tabs-2">Extrusão</a></li>
    <li><a href="#tabs-3">Impressão</a></li>
    <li><a href="#tabs-4">Bolha</a></li>
    <li><a href="#tabs-5">Rebobinadeira</a></li>
    <li><a href="#tabs-6">Corte/Solda</a></li>
    <li><a href="#tabs-7">Co-Laminadora</a></li>
    <li><a href="#tabs-8">Micro-Perfuradeira</a></li>
    <li><a href="#tabs-9">Embalagem</a></li>
  </ul>
  <div id="tabs-1">
    <table>
        <tr>
            <td>
                <label for="ftcodprod">Código do Produto</label><br>
                <input type="text" id="ftcodprod" name="ftcodprod" value="" size="15" placeholder="código" disabled><br>
                <label for="ftdesc">Descrição</label><br>
                <textarea name="ftdesc" id="ftdesc" maxlength="100" rows="3" placeholder="Descrição do produto" disabled></textarea>
            </td>
            <td>
                <label for="ftclient">Cliente</label><br>
                <input type="text" id="ftclient" name="ftclient" value="" placeholder="Nome Cliente" disabled><br>
                <label for="ftprodcli">Produto do Cliente</label><br>
                <input type="text" id="ftprodcli" name="ftprodcli" value="" placeholder="Cod. Prod. Cliente" disabled><br>
            </td>
            <td>
                <label for="ftdesenv">Numero do desenvolvimento</label><br>
                <input type="text" id="ftdesenv" name="ftdesenv" value="" placeholder="Numero Desenvolvimento"><br>
                <label for="ftgtin">GTIN</label><br>
                <input type="text" id="ftgtin" name="ftgtin" value="" placeholder="Código Barras"><br>
                <input type="checkbox" id="ftimpobs" name="ftimpobs" value="1">Imprimir OBS
            </td>
            <td>
                <label for="ftobs">Observações</label><br>
                <textarea name="ftobs" id="ftobs" maxlength="500" rows="6" cols="60" placeholder="Observações da ficha técnica esses dados não serão impressos a menos que indicado para"></textarea>
            </td>
        </tr>
        </table>
        <table>
        <tr>
            <td>
                <label for="ftlargmin">Largura Mínina</label><br>
                <input class="right" type="text" id="ftlargmin" name="ftlargmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftlargnom">Largura Nominal</label><br>
                <input class="right" type="text" id="ftlargnom" name="ftlargnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftlargmax">Largura Máxima</label><br>
                <input class="right" type="text" id="ftlargmax" name="ftlargmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftespsmin">Espessura Mínina</label><br>
                <input class="right" type="text" id="ftespesmin" name="ftespesmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftespsnom">Espessura Nominal</label><br>
                <input class="right" type="text" id="ftespesnom" name="ftespesnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftespesmax">Espessura Máxima</label><br>
                <input class="right" type="text" id="ftespesmax" name="ftespesmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftgrammin">Gramatura Mínina</label><br>
                <input class="right" type="text" id="ftgrammin" name="ftgrammin" value="" size="8" placeholder="0,00">g/m&sup2;<br>
                <label for="ftgremnom">Gramatura Nominal</label><br>
                <input class="right" type="text" id="ftgramnom" name="ftgramsnom" value="" size="8" placeholder="0,00">g/m&sup2;<br>
                <label for="ftgrammax">Gramatura Máxima</label><br>
                <input class="right" type="text" id="ftgrammax" name="ftgrammax" value="" size="8" placeholder="0,00">g/m&sup2;<br>
                
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftcompmin">Comprimento Mínino</label><br>
                <input class="right" type="text" id="ftcompmin" name="ftcompmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftcompnom">Comprimento Nominal</label><br>
                <input class="right" type="text" id="ftcompnom" name="ftcompnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftcompmax">Comprimento Máximo</label><br>
                <input class="right" type="text" id="ftcompmax" name="ftcompmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftabamin">ABA Mínina</label><br>
                <input class="right" type="text" id="ftabamin" name="ftabamin" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftabanom">ABA Nominal</label><br>
                <input class="right" type="text" id="ftabanom" name="ftabanom" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftabamax">ABA Máxima</label><br>
                <input class="right" type="text" id="ftabamax" name="ftabamax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftsanfmin">SANFONA Mínina</label><br>
                <input class="right" type="text" id="ftsanfmin" name="ftsanfmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftsanfnom">SANFONA Nominal</label><br>
                <input class="right" type="text" id="ftsanfnom" name="ftsanfnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="ftsanfmax">SANFONA Máxima</label><br>
                <input class="right" type="text" id="ftsnafmax" name="ftsanfmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="ftpesomin">Peso Mínino</label><br>
                <input class="right" type="text" id="ftpesomin" name="ftpesomin" value="" size="8" placeholder="0,00">g<br>
                <label for="ftpesonom">Peso Nominal</label><br>
                <input class="right" type="text" id="ftpesonom" name="ftpesonom" value="" size="8" placeholder="0,00">g<br>
                <label for="ftpesomax">Peso Máximo</label><br>
                <input class="right" type="text" id="ftpesomax" name="ftpesomax" value="" size="8" placeholder="0,00">g<br>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <label for="ftsolda">Tipo de Solda</label><br>
                <textarea name="ftsolda" id="ftsolda" maxlength="500" rows="6" cols="40" placeholder="Observações para Corte/Solda"></textarea>
            </td>
            <td>
                <label for="ftimp">Impressão (cores)</label><br>
                <textarea name="ftimps" id="ftimp" maxlength="500" rows="6" cols="40" placeholder="Observações para Impressão"></textarea>
            </td>
            <td>
                <label for="ftalert">Alertas</label><br>
                <textarea name="ftalert" id="ftalert" maxlength="500" rows="6" cols="40" placeholder="Observações de Alerta, esse campo será impresso na OP"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                <label for="ftversao">Versão</label><br>
                <input type="text" id="ftversao" name="ftversao" value="" size="4"  placeholder="00"><br>
                        </td><td>
                <label for="ftdata">Data da Última alteração</label><br>
                <input type="text" id="ftdata" name="ftdata" value="" size="11" placeholder="Data"><br>
                        </td><td>
                <label for="ftemitente">Emitente</label><br>
                <input type="text" id="ftemitente" name="ftemitente" value="" size="15" placeholder="Nome resp."><br>
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
    </table>    
  </div>
  <div id="tabs-2">
      <table>
          <tr>
              <td>
                  
              </td>
          </tr>
      </table>
  </div>
  <div id="tabs-3">
      <table>
          <tr>
              <td>
                  
              </td>
          </tr>
      </table>
  </div>
  <div id="tabs-4">
      <table>
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
                <textarea name="bolobs" id="bolobs" maxlength="500" rows="6" cols="80" placeholder="Observações da maquina de bolha, esse campo será impresso na OP"></textarea>
            </td>
          </tr>
      </table>
  </div>
  <div id="tabs-5">
      <table>
          <tr>
            <td>
                  
            </td>
            <td width="10px"></td>
            <td>
                <label for="rebobs">Observações</label><br>
                <textarea name="rebobs" id="rebobs" maxlength="500" rows="6" cols="80" placeholder="Observações da rebobinadeira, esse campo será impresso na OP"></textarea>
            </td>
          </tr>
      </table>
  </div>
  <div id="tabs-6">
      <table>
          <tr>
            <td>
                <label for="cslargmin">Largura Mínina</label><br>
                <input class="right" type="text" id="cslargmin" name="cslargmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="cslargnom">Largura Nominal</label><br>
                <input class="right" type="text" id="cslargnom" name="cslargnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="cslargmax">Largura Máxima</label><br>
                <input class="right" type="text" id="cslargmax" name="cslargmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="csespsmin">Espessura Mínina</label><br>
                <input class="right" type="text" id="csespesmin" name="csespesmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="csespsnom">Espessura Nominal</label><br>
                <input class="right" type="text" id="csespesnom" name="csespesnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="csespesmax">Espessura Máxima</label><br>
                <input class="right" type="text" id="csespesmax" name="csespesmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="cscompmin">Comprimento Mínino</label><br>
                <input class="right" type="text" id="cscompmin" name="cscompmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="cscompnom">Comprimento Nominal</label><br>
                <input class="right" type="text" id="cscompnom" name="cscompnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="cscompmax">Comprimento Máximo</label><br>
                <input class="right" type="text" id="cscompmax" name="cscompmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="csabamin">ABA Mínina</label><br>
                <input class="right" type="text" id="csabamin" name="csabamin" value="" size="8" placeholder="0,00">mm<br>
                <label for="csabanom">ABA Nominal</label><br>
                <input class="right" type="text" id="csabanom" name="csabanom" value="" size="8" placeholder="0,00">mm<br>
                <label for="csabamax">ABA Máxima</label><br>
                <input class="right" type="text" id="csabamax" name="csabamax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="cssanfmin">SANFONA Mínina</label><br>
                <input class="right" type="text" id="cssanfmin" name="cssanfmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="cssanfnom">SANFONA Nominal</label><br>
                <input class="right" type="text" id="cssanfnom" name="cssanfnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="cssanfmax">SANFONA Máxima</label><br>
                <input class="right" type="text" id="cssnafmax" name="cssanfmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="cssoldatipo">Tipo de Solda</label><br>
                <input type="text" id="cssoldatipo" name="cssoldatipo" value="" size="40" placeholder="Tipo de Solda"><br>
                <label for="csfuracao">Furação</label><br>
                <input type="text" id="csfuracao" name="csfuracao" value="" size="40" placeholder="Indicar a Furação"><br>
                <label for="cspknumpc">Número Pç/Pacote</label><br>
                <input class="right" type="text" id="cspknumpc" name="cspknumpc" value="" size="8" placeholder="00000"><br>
                <label for="csamarnumpc">Numero Pç/Amarrado</label><br>
                <input class="right" type="text" id="csamarnumpc" name="csamarnumpc" value="" size="8" placeholder="00000"><br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="csobs">Observações</label><br>
                <textarea name="csobs" id="csobs" maxlength="500" rows="6" cols="60" placeholder="Observações do Corte e Solda, esse campo será impresso na OP"></textarea>
            </td>
          </tr>
      </table>
  </div>
  <div id="tabs-7">
      <table>
          <tr>
            <td>
                <label for="colamlargmin">Largura Mínina</label><br>
                <input class="right" type="text" id="colamlargmin" name="colamlargmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="colamlargnom">Largura Nominal</label><br>
                <input class="right" type="text" id="colamlargnom" name="colamlargnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="colamlargmax">Largura Máxima</label><br>
                <input class="right" type="text" id="colamlargmax" name="colamlargmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="colamompmin">Comprimento Mínino</label><br>
                <input class="right" type="text" id="colamcompmin" name="colamcompmin" value="" size="8" placeholder="0,00">mm<br>
                <label for="colamcompnom">Comprimento Nominal</label><br>
                <input class="right" type="text" id="colamcompnom" name="colamcompnom" value="" size="8" placeholder="0,00">mm<br>
                <label for="colamompmax">Comprimento Máximo</label><br>
                <input class="right" type="text" id="ftcompmax" name="colamcompmax" value="" size="8" placeholder="0,00">mm<br>
            </td>
            <td width="10px"></td>
            <td>
                <label for="colamdesc">Descrição</label><br>
                <input type="text" id="colamdesc" name="colamdesc" value="" size="40" placeholder="Descrição"><br>
                <label for="colamtubete">Tubete</label><br>
                <input type="text" id="colamtubete" name="colamtubete" value="" size="40" placeholder="Indicar o tubete">
            </td>
            <td width="10px"></td>
            <td>
                <label for="colamobs">Observações</label><br>
                <textarea name="colamobs" id="colamobs" maxlength="500" rows="6" cols="80" placeholder="Observações da colaminadora, esse campo será impresso na OP"></textarea>
            </td>
          </tr>
      </table>
  </div>
  <div id="tabs-8">
      <table>
          <tr>
              <td>
                <label for="mperfobs">Observações</label><br>
                <textarea name="mperfobs" id="mperfobs" maxlength="500" rows="6" cols="80" placeholder="Observações da micro-perfuradeira, esse campo será impresso na OP"></textarea>
              </td>
          </tr>
      </table>
  </div>
  <div id="tabs-9">
      <table>
          <tr>
              <td>
                <label for="embpknumpc">Pacotes com</label><br>
                <input class="right" type="text" id="embpknumpc" name="embpknumpc" value="" size="8" placeholder="00000" title="Somente numeros">peças<br>
                <label for="embamarnumpc">Amarrados com</label><br>
                <input class="right" type="text" id="embamarnumpc" name="embamarnumpc" value="" size="8" placeholder="00000">peças<br>  
                <label for="embpesoamar">Peso por amarrado</label><br>
                <input class="right" type="text" id="embpesoamar" name="embpesoamar" value="" size="8" placeholder="0,00" pa>kg<br>  
              </td>
              <td width="40px"></td>
              <td>
                <label for="embtipo">Tipo de Embalagem</label><br>
                <input type="text" id="embtipo" name="embtipo" value="" size="80" placeholder="Tipo de embalagem"><br>
                <label for="embobs">Observações</label><br>
                <textarea name="embobs" id="embobs" maxlength="500" rows="6" cols="80" placeholder="Observações da embalagem, esse campo será impresso na OP"></textarea>
              </td>
          </tr>
      </table>
  </div>
</div>
</form>    
</body>
</html>