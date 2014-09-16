<?php

$op_id = 0;
$prod_cod = '';
if (isset($_REQUEST['id'])) {
    $op_id = $_REQUEST['id'];
}
if (isset($_REQUEST['prod'])) {
    $prod_cod = $_REQUEST['prod'];
}

if ($op_id != 0) {
    //carrega todo os dados da OP
    //travar o campo opnum
}
if ($prod_cod != '') {
    //carrega dados do produto buscando a ultima OP
    //nesse caso não deve ser trazido ou inserido as
    //informações especificas da última OP como:
    //op_id, qtdade, pedint, pedcli
    //carregar o campo opnum e op_id com "NEW" e travar opnum
}

/**
 * cabeçalho
 * $prod_cod
 * $prod_desc
 * $pedido
 * $qtdade
 * $uni
 * $cliente
 * $pedcli
 * $prodcli
 * $op_id
 * $op_prazo
 * $ophabilita
 */

/**
 * ficha técnica
 * $ftdesenv
 * $ftgtin
 * $ftimpobs
 * $ftobs
 * $ftlargmin
 * $ftlargnom
 * $ftlargmax
 * $ftespesmin
 * $ftespesnom
 * $ftespesmax
 * $ftgrammin
 * $ftgramnom
 * $ftgrammax
 * $ftcompmin
 * $ftcompnom
 * $ftcompmax
 * $ftabamin
 * $ftabanom
 * $ftabamax
 * $ftsanfmin
 * $ftsanfnom
 * $ftsanfmax
 * $ftpesomin
 * $ftpesonom
 * $ftpesomax
 * $ftsolda
 * $ftimp
 * $ftalert
 * $ftversao
 * $ftdata
 * $ftemitente
 */

/**
 * materias-primas
 * $codmp1p
 * $pmp1p
 * $qmp1p
 * $codmp2p
 * $pmp2p
 * $qmp2p
 * $codmp3p
 * $pmp3p
 * $qmp3p
 * $codmp4p
 * $pmp4p
 * $qmp4p
 * $codmp5p
 * $pmp5p
 * $qmp5p
 * $codmp6p
 * $pmp6p
 * $qmp6p
 * $codmp7p
 * $pmp7p
 * $qmp7p
 * $codmp8p
 * $pmp8p
 * $qmp8p
 * 
 * $codmp1u
 * $pmp1u
 * $qmp1u
 * $codmp2u
 * $pmp2u
 * $qmp2u
 * $codmp3u
 * $pmp3u
 * $qmp3u
 * $codmp4u
 * $pmp4u
 * $qmp4u
 * $codmp5u
 * $pmp5u
 * $qmp5u
 * $codmp6u
 * $pmp6u
 * $qmp6u
 * $codmp7u
 * $pmp7u
 * $qmp7u
 * $codmp8u
 * $pmp8u
 * $qmp8u
 */

/**
 * extrusora
 * $extlargmin
 * $extlargnom
 * $extlargmax
 * $extespesmin
 * $extespesnom
 * $extespesmax
 * $extsanfmin
 * $extsanfnom
 * $extsanfmax
 * $extgmmin
 * $extgmnom
 * $extgmmax
 * $extmatriz
 * $extrazsopro
 * $exttipobob
 * $extmaq
 * $extmettot
 * $extnumbob
 * $extmetbob
 * $extpesotot
 * $extpesobob
 * $extdiammax
 * $extprtvde
 * $extperdas
 * $exttratamento
 * $extmapa1
 * $extmapa2
 * $extmapa3
 * $extmapa4
 * $extmapa5
 * $extmapa6
 * $extmapa7
 * $extmapa8
 * $extobs
 */

/**
 * impressora
 * $impcilindro
 * $impsentidobob
 * $impprtvde
 * $impperdas
 * $impmaq
 * $impobs
 */

/**
 * colaminadora
 * $colamlargmin
 * $colamlargnom
 * $colamlargmax
 * $colamcompmin
 * $colamcompnom
 * $colamcompmax
 * $colamdesc
 * $colamtubete
 * $colammaq
 * $colamobs
 */

/**
 * rebobinaderia
 * $reblargmin
 * $reblargnom
 * $reblargmax
 * $reblargini
 * $rebsentidobob
 * $rebdiamax
 * $rebmetbob
 * $rebpesobob
 * $rebmaq
 * $rebobs
 */

include_once('cabec.php');
//$cabec = file_get_contents('cabec.php');
include_once('fichatecnica.php');
//$ft  = file_get_contents('fichatecnica.php');
include_once('materiaprima.php');
//$mp = file_get_contents('materiaprima.php');
include_once('extrusora.php');
//$ext = file_get_contents('extrusora.php');
include_once('impressora.php');
//$imp = file_get_contents('impressora.php');
include_once('colaminadora.php');
//$colam = file_get_contents('colaminadora.php');
include_once('rebobinadeira.php');
//$reb = file_get_contents('rebobinadeira.php');
include_once('bolha.php');
//$bol = file_get_contents('bolha.php');
include_once('microperfuradeira.php');
//$mperf = file_get_contents('microperfuradeira.php');
include_once('cortesolda.php');
//$ces = file_get_contents('cortesolda.php');
include_once('embalagem.php');
//$emb = file_get_contents('embalagem.php');





$html .= '<!doctype html>';
$html .= '<html lang="pt_BR">';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html .= '<title>Ordem de Producao</title>';
$html .= '<link rel="stylesheet" href="../../libs/jquery/themes/smoothness/jquery-ui.css">';
$html .= '<script src="../../libs/jquery/jquery-2.1.1.js"></script>';
$html .= '<script src="../../libs/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>';
$html .= '<link rel="stylesheet" href="../../images/style.css">';
$html .= '<script>';
$html .= '   $(function() {';
$html .= '      $( "#tabs" ).tabs();';
$html .= '   });';
$html .= '</script>';
$html .= '</head>';
$html .= '<body>';
$html .= '<form name="formOP" action="gravarOP.php" method="post">';
$html .= '<input type="hidden" id="op_id" name="op_id" value="'.$op_id.'">';
$html .= $cabec;
$html .= '<div id="tabs">';
$html .= '<ul>';
$html .= '<li><a href="#ft">Ficha Técnica</a></li>';
$html .= '<li><a href="#mp">Matérias-Primas</a></li>';
$html .= '<li><a href="#ext">Extrusão</a></li>';
$html .= '<li><a href="#imp">Impressão</a></li>';
$html .= '<li><a href="#bol">Bolha</a></li>';
$html .= '<li><a href="#reb">Rebobinadeira</a></li>';
$html .= '<li><a href="#ces">Corte/Solda</a></li>';
$html .= '<li><a href="#colam">Co-Laminadora</a></li>';
$html .= '<li><a href="#mperf">Micro-Perfuradeira</a></li>';
$html .= '<li><a href="#emb">Embalagem</a></li>';
$html .= '</ul>';
$html .= '<div id="ft">';
$html .= $ft;
$html .= '</div>';
$html .= '<div id="mp">';
$html .= $mp;
$html .= '</div>';
$html .= '<div id="ext">';
$html .= $ext;
$html .= '</div>';
$html .= '<div id="imp">';
$html .= $imp;
$html .= '</div>';
$html .= '<div id="bol">';
$html .= $bol;
$html .= '</div>';
$html .= '<div id="reb">';
$html .= $reb;
$html .= '</div>';
$html .= '<div id="ces">';
$html .= $ces;
$html .= '</div>';
$html .= '<div id="colam">';
$html .= $colam;
$html .= '</div>';
$html .= '<div id="mperf">';
$html .= $mperf;
$html .= '</div>';
$html .= '<div id="emb">';
$html .= $emb;
$html .= '</div>';
$html .= '</div>';
$html .= '</form>';
$html .= '</body>';
$html .= '</html>';

echo $html;
