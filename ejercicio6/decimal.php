<?php
	$numero;$result="";$numero1=0;
	if (isset($_POST['calcular'])) {
		$numero=(int)($_POST['numero']);
		$numero1=(int)($_POST['numero']);
		while ($numero >0) {
			$num=(int)($numero%2);
			$result=$num."".$result;
			$numero=(int)($numero/2);
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center>
<body style="color: #282026; text-align: center; background: black">
	<div style=" background-color: #F6DF1F; width: 700px; " >
	<form method="POST" action="decimal.php">
		<h1>Ingrese el numero</h1>
		<input type="text" name="numero" value="<?=$numero1?>">
		<input type="submit" name="calcular" value="calcular">
		<h1><?php echo "El byte en binario es :"  . $result ?></h1>


</form>
</div>
</body>
</center>
</html>