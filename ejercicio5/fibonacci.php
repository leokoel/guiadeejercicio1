<!DOCTYPE html>
<html>
<head>
	<title>secuenciafibonacci</title>
	<link rel="stylesheet" type="text/css" href="css/fibonacciphp.css">
</head>
<center>
<body class="cuerpo">
	<head >
		
		<div class="contenido">
		<?php  

			$anterior = 0;
			$ultima = 1;
			$numdigitado = $_GET['numero'];

			echo "secuencia fibonacci del 1 al $numdigitado: <br />";
			echo "ultima";

				while($ultima <= $numdigitado){
					$ultima = $anterior + $ultima;
					$anterior = $ultima - $anterior;

					if($ultima <=$numdigitado){
						echo ", $ultima";
					}else{
						echo ".";
					}
				}
		?>
		</div>
	</head>
</body>
</center>
</html>