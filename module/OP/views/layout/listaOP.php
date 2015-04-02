<?php

$dtIni = $_POST['dtIni'];
$dtFim = $_POST['dtFim'];
$flagOnlyOpen = $_POST['flagOnlyOpen'];

function dt2my($data)
{
    $aDt = explode("/",$data);
    $mydata = "$aDt[2]-$aDt[1]-$aDt[0]";
    return $mydata;
}

$flag = "";
$filtro = "";
if ($flagOnlyOpen) {
    $flag = "checked";
    $filtro = " AND opstatus = '0'";
}

if (isset($dtIni) && isset($dtFim) && $dtIni != '' && $dtFim != '') {
    $mydtIni = dt2my($dtIni);
    $mydtFim = dt2my($dtFim);
    $sqlComm = "SELECT * FROM OP WHERE dtEmis >= '$mydtIni' AND dtEmis <= '$mydtFim'$filtro ORDER BY opnum;";
}


        
$html .= '<!doctype html>';
$html .= '<html lang="pt_BR">';
$html .= '<head>';
$html .= '<meta charset="utf-8">';
$html .= '<title>Lista de Ordens de Producao</title>';
$html .= '<link rel="stylesheet" href="../../../../public/js/jquery/themes/smoothness/jquery-ui.css">';
$html .= '<script src="../../../../public/js/jquery/jquery-2.1.1.js"></script>';
$html .= '<script src="../../../../public/js/jquery/jquery-ui-1.11.0/jquery-ui.js"></script>';
$html .= '<script src="../../../../public/js/jquery/jquery-ui-1.11.0/datepicker-pt-BR.js"></script>';
$html .= '<link rel="stylesheet" href="../../../../public/css/style.css">';
$html .= '  <script>';
$html .= '  $(function() {';
//$html .= '    $("#dtIni").datepicker();';
//$html .= '    $("#dtFim").datepicker();';
$html .= '      $("#dtIni, #dtFim").datepicker({
                    dateFormat: "dd/mm/yy",
		    dayNames: ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado","Domingo"],
		    dayNamesMin: ["D","S","T","Q","Q","S","S","D"],
                    dayNamesShort: ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb","Dom"],
                    monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],
                    monthNamesShort: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
                    nextText: "Próximo",
                    prevText: "Anterior"
		});';
$html .= '  });';
$html .= '  </script>';
$html .= '</head>';
$html .= '<body>';
$html .= '<center>';
$html .= '<div>';
$html .= '<table id="tblSearch" width="200px" bgcolor="#DDDDDD">';
$html .= '<tr>';
$html .= '<td>';
$html .= '<form name="formLista" action="listaOP.php" method="post">';
$html .= '<label for="dtIni">Data Inicio</label><br><input type="text" id="dtIni" name="dtIni" value="'.$dtIni.'"><br>';
$html .= '<label for="dtFim">Data Fim</label><br><input type="text" id="dtFim" name="dtFim" value="'.$dtFim.'"><br>';
$html .= '<input type="checkbox" id="flagOnlyOpen" name="flagOnlyOpen" value="1"'. $flag.'>apenas OPs Abertas<br>';
$html .= '<input type="submit" value="Buscar">';
$html .= '</form>';
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';
$html .= '</div>';
$html .= '</center>';
$html .= "<h2>$sqlComm</h2>";
$html .= '</body>';
$html .= '</html>';

echo $html;
