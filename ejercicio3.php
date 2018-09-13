<?php
$array = array(
    array("nombre" => "Daniel","clave" => "123", "email" => "agaw@gmail.com"),
    array("nombre" => "Andres","clave" => "andre","email" => "gtasg@gmail.com"),
    array("nombre" => "Pedro","clave" => "pedro123","email" => "agws@gmail.com"),
    array("nombre" => "Alberto","clave" => "dsa","email" => "dasf@gmail.com")
);
$arrayeval = FALSE;
$total = count($array);
for($a = 0; $a < $total; $a++) {
    if($array[$a]["nombre"] == $_POST["nombre"] && $array[$a]["clave"] == $_POST["clave"]) {
        echo "Usuario Valido";
        echo "<br>";
        echo "El Usuario es: ".$array[$a]["nombre"];
        echo "<br>";
        echo "La Contraseña es: ".$array[$a]["clave"];
        echo "<br>";
        echo "El Email registrado es: ".$array[$a]["email"];
        echo "<br>";
        $arrayeval = TRUE;
    }
}
if(!$arrayeval) {
    echo "El Usuario y/o Clave es incorrecto";
}