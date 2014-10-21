<?php
$cod = $_POST['cod'];
$resp = array('codprod'=>$cod,'desc'=>'Esse mesmo');

echo json_encode($resp);
