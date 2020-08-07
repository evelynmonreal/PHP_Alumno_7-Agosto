<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tarea 13</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <a href="index.html"><h1>Índice</h1></a>
        <br><hr>
        <!-- PHP -->
        <?php
        //Crear arreglo de las peliculas vistas en el mes
        $pelis = array(
		'Enero' => 10,
		'Febrero' => 3,
		'Marzo' => 5,
		'Abril' => 7,
		'Mayo' => 9,
		'Junio' => 5,
		'Julio' => 6,
		'Agosto' => 1,
		'Septiempre' => 0,
		'Octubre' => 0,
		'Noviembre' => 0,
		'Diciembre' => 0,
        );
        //Imprimir
        foreach ($pelis as $mes => $cant) {
            echo "En ".$mes." se vieron ".$cant." peliculas <br>";
        }
        ?>
    </body>
</html>