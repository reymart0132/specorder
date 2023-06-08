<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/specord/resource/php/class/core/init.php';
isLogin();
$viewtable = new viewtable();

$array1 = $viewtable->checkF9();

// var_dump($array1);

$path = $_SERVER['DOCUMENT_ROOT'] . '/specord/resource/form9/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
// var_dump($files);
$insertArray = array_values(array_diff($files,$array1));
var_dump($insertArray);

if(count($insertArray) !== 0){
  for ($x = 0; $x < count($insertArray); $x++) {
    $inserter = new insert($insertArray[$x]);
    $inserter->insertDiff();
  }
}


?>