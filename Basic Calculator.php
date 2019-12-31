<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<?php 

       
         
         
	 ?>
	 <h2 style="color: red">Calculadora PHP</h2>
    <form method="post" style="padding-left:10px; background-color: orange;">
    	<p style="color: white; font-size: 17px;">Numero 1</p><br>
    	<input style="" type="text" name="numero1"><br>
    	<p style="color: white; font-size: 17px"> Numero 2</p><br>
    	<input style="margin-bottom: 5px;"  type="" name="numero2"><br>
    	<input style="margin-bottom: 5px;" type="submit" name="somar" name="somar" value="Somar">
    	<input style="margin-bottom: 5px;" type="submit" name="subt" value="subtrair">
    	<input style="margin-bottom: 5px;" type="submit" name="multi" value="multiplicar">
    	<input style="margin-bottom: 5px;" type="submit" name="dividir" value="dividir">
    </form>

	<?php
            $numero1 = @$_POST['numero1'];
        	$numero2 = @$_POST['numero2'];

	 if (isset($_POST['somar'])) {
        	

        	echo "<h2>A soma é: ",$numero1 + $numero2,"</h2>";
        }
     if (isset($_POST['subt'])) {
        	echo "<h2>A subtração é: ",$numero1 - $numero2,"</h2>";
        }

    if (isset($_POST['multi'])) {
        	echo "<h2>A multiplicação é: ",$numero1 * $numero2,"</h2>";
        }
        if (isset($_POST['dividir'])) {
        	echo "<h2>A multiplicação é: ",$numero1 / $numero2,"</h2>";
        }

	?>

</body>
</html>