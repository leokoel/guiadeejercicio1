<?php
$numero=$_POST['numero'];
$divisibles=array();


for ($contador=2; $contador<$numero; $contador++) {
    $dividido=$numero/$contador;
    if (!substr_count($dividido, '.')==1) {
                $divisibles["$contador"] = "$dividido";
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculadora de números primos</title>
 
<link href="../olton-Metro-UI-CSS-299d6a5/css/modern.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/numeroprimo.css">
</head>
<center> 
<body style="background-color: black;">
<h1 class="h1text">calculadora de números primos</h1>

<div class="formulario">
<form name="form1" method="post" action="">
  <div class="contenido1">
  <p>
    <label for="numero">Número:</label>
    <input class="numberlabel" type="text" name="numero" id="numero" placeholder="ingrese un numero">
  </p>
  <p>
    <input class="botoneishon" type="submit" name="calcular" id="calcular" value="Calcular" class="botonenvio">
  </p>
  </div>
</form>
</div>
<div class="resultados1">
<p >
    <?php 
        echo "El número $numero es divisible entre:<br>";
        echo '1<br>';
        echo "$numero<br>";
        echo implode("<br>",$divisibles);
if (!empty($divisibles)) {
    echo "<h3>El número $numero es compuesto</h3>";
} else {
        echo "<h3>El número $numero es primo</h3>";
}
?></p>
</div>
</body>
</center>
</html>
 