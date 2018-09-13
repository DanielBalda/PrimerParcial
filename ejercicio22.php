<?php
if(empty($_GET["checks"])) {
    echo "Hoy es: " . $_GET['dia'] . " de " . date('F', mktime(0, 0, 0, $_GET['mes'], 1)) . " de " . $_GET['anio'];
}else
    echo "Hoy es: " . $_GET['dia'] . "/" . $_GET['mes'] . "/" . $_GET['anio'];
?>
<select>
        <?php
                echo "<option selected>".$_GET['dia']."</option>";
        ?>
</select>
<select>
    <?php
    echo "<option selected>".$_GET['mes']."</option>";
    ?>
</select>
<select>
    <?php
    echo "<option selected>".$_GET['anio']."</option>";
    ?>
</select>

<br><br><form action='ejercicio2.php' method='get'><input type='submit' value='Volver'></form>
