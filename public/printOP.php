<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../bootstrap.php';


use TCPDF;

// create new PDF document
$orientation = 'P';
$unit = 'mm';
$format = 'A4';
$unicode = true;
$encoding = 'UTF-8';
$diskcache = false;
$pdfa = true;
$pdf = new TCPDF(
    $orientation,
    $unit,
    $format,
    $unicode,
    $encoding,
    $diskcache,
    $pdfa
);

// set document information
//PDF_CREATOR = TCPDF
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Roberto L. Machado');
$pdf->SetTitle('OP');
$pdf->SetSubject('OP');
$pdf->SetKeywords('OP, Produto, test, guide');

$pdf->resetHeaderTemplate();

// set default header data
$logoFile = __DIR__ . '/public/img/logo.jpg';
$logoW = 30;
$titulo = 'Ordem de Produção';
$complemento = 'Plastfoam Ind. e Comercio de Plásticos Ltda';
$pdf->setHeaderData($logoFile, $logoW, $titulo, $complemento);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


//Close and output PDF document
$pdf->Output('example_050.pdf', 'I');
