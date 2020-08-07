<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tarea 12</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <a href="index.html"><h1>Índice</h1></a>
        <br><hr>
        <!-- PHP -->
        <?php
        //Crear arreglo "valor"
		$valor[1]=90;
		$valor[30]=7;
		$valor['e']=99;
		$valor['Hola']=43;

		//Imorimir
		foreach ($valor as $ref => $valores) {
			echo "El ".$ref." es igual a ".$valores."<br>";
		}
        ?>
    </body>
</html>      