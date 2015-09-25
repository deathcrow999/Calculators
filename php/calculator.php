<?php

$value1 = $_POST['value1'];
$symbol = $_POST['operator'];
$value2 = $_POST['value2'];

if($symbol === "+"){
 $output = $value1 + $value2;
 } elseif($symbol === "-"){
 $output = $value1 - $value2;
 } elseif($symbol === "/"){
 $output = $value1 / $value2;
 } elseif($symbol === "*"){
 $output = $value1 * $value2;
 }

echo $output;
?>
