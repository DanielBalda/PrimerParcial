<?php
echo "<form action='ejercicio1b.php' method='post'>";

if ($_POST['text1'] < 6){
    $_POST['text1'] = 5;
}else{
    echo "El numero ingresado es: ".$_POST['text1']."<br>";
}


for ($a = 0; $a < $_POST['text1']; $a++){
    echo "<input type='number' name='texto$a'><br>";
}
echo "<input type='submit' value='Enviar'><input type='reset' value='Borrar'></form>";
echo "<form action='ejercicio1.html' method='get'><input type='submit' value='Volver'></form>";
?>