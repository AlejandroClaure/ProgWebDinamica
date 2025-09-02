<?php
$estudios = $_GET['estudios'];
$sexo = $_GET['sexo'];

switch($estudios){
    case 1: $texto = "Sin estudios"; break;
    case 2: $texto = "Primarios"; break;
    case 3: $texto = "Secundarios"; break;
}

echo "Sexo: $sexo<br>";
echo "Nivel de estudios: $texto";
?>