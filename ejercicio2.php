<form action="ejercicio22.php" method="get">
<span>
    <?php
    echo "Hoy es: ".date("j-F-Y")."<br><br>";
    ?>
      <select name="dia">
        <?php
        $dia1= 1;
        $dia2= 31;
        for( $a=$dia1; $a<=$dia2; $a++ ) {
            if($a == date("d")) {
                echo "<option selected>".date("d")."</option>";
            }
            else {
                echo "<option>$a</option>";
            }
        }
        ?>
      </select>
    </span>
    <span>
      <select name="mes">
       <?php for( $m=1; $m<=12; ++$m ) {
           $mes = date('F', mktime(0, 0, 0, $m, 1));
           if($m == date("m"))
               echo "<option selected='".$m."'";
           ?>
           <option value="<?php echo $m; ?>"><?php echo $mes; ?></option>
       <?php } ?>
      </select>
    </span>
    <span>
      <select name="anio">
        <?php
        for($i = 1900; $i < 2101; $i++) {
            if($i == date("Y")) {
                echo "<option selected>".date("Y")."</option>";
            }
            else {
                echo "<option>$i</option>";
            }
        }
        ?>
      </select>
    </span>
    <br><br>
    Formato Corto:<input type="checkbox" name="checks" value="1"><br><br>
    <input type="submit" value="Enviar">
</form>
