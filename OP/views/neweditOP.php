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

$cabec = file_get_contents('cabec.php');
$colam = file_get_contents('colaminadora.php');
$cs = file_get_contents('cortesolda.php');
$bol = file_get_contents('bolha.php');
$emb = file_get_contents('embalagem.php');
$ft  = file_get_contents('fichatecnica.php');
$mperf = file_get_contents('microperfuradeira.php');
$reb = file_get_contents('rebobinadeira.php');
$mp = file_get_contents('materiaprima.php');
$ext = file_get_contents('extrusora.php');
$imp = file_get_contents('impressora.php');


$html .= '<!doctype html>';
$html .= '<html lang="pt_BR">';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html .= '<title>Ordem de Producao</title>';
$html .= '<link rel="stylesheet" href="../../libs/jquery/themes/smoothness/jquery-ui.css">';
$html .= '<script src="../../libs/jquery/jquery-2.1.1.js"></script>';
$html .= '<script src="../../libs/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>';
$html .= '<link rel="stylesheet" href="style.css">';
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
$html .= '<li><a href="#cs">Corte/Solda</a></li>';
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
$html .= '<div id="cs">';
$html .= $cs;
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
