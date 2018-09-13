<?php
if(empty($_GET["checks"])) {
    echo "Hoy es: " . $_GET['dia'] . " de " . date('F', mktime(0, 0, 0, $_GET['mes'], 1)) . " de " . $_GET['anio'];
}else
    echo "Hoy es: " . $_GET['dia'] . "/" . $_GET['mes'] . "/" . $_GET['anio'];
?>

<br><br><form action='ejercicio2.php' method='get'><input type='submit' value='Volver'></form>
