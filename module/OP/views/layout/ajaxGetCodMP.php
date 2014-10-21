<?php

$cod = $_POST['codmp'];
//idmp
//fornecmp
//codfornecmp
$resp = array(
    array('codmp'=>'1234','idmp'=>'1','descmp'=>'desc1','fornecmp'=>'EU MESMO','codfornecmp'=>'xxxx', 'densmp'=>'941'),
    array('codmp'=>'9999','idmp'=>'2','descmp'=>'desc9999','fornecmp'=>'OSOUTROS','codfornecmp'=>'h35363', 'densmp'=>'962')
);

echo json_encode($resp);
