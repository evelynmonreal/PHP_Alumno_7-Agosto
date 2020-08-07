<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tarea 15</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
	<a href="index.html"><h1>Índice</h1></a>
	<br><hr>
    
     <!-- PHP -->
      <?php
        //Crear arreglo 
        $persona = array('Nombre'=>'Pedro Torres', 'Dirección'=>'Calle Ancha num. 3', 'Teléfono'=>1234567);

        //Imprimir
        foreach($persona as $dat => $inf){
        echo $dat.": ".$inf."<br>";
        }
      ?>
    </body>
</html>