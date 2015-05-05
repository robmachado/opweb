<?php

$path = dirname(__FILE__);
$dir_iterator = new RecursiveDirectoryIterator($path);
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($iterator as $file) {
    if (is_file($file)) {
        if (substr($file, -3) == 'php') {
            clearTABS($file);
            echo $file, "\n";
            
        }
    }
}
function clearTABS($filename)
{
    $dados = file_get_contents($filename);
    $dados = str_replace("\t", '    ', $dados);
    $dados = str_replace("\r\n", "\n", $dados);
    file_put_contents($filename, $dados);
}
