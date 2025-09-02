<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$op = $_GET['operacion'];

switch($op){
    case '+': $res = $n1 + $n2; break;
    case '-': $res = $n1 - $n2; break;
    case '*': $res = $n1 * $n2; break;
    case '/': $res = $n2 != 0 ? $n1 / $n2 : "Error: división por cero"; break;
}

echo "$n1 $op $n2 = $res";
?>