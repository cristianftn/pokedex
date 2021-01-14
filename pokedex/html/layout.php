<?php

require_once('../conexionBBDD/conexion.php');



    $nombre = $_GET['nombre'];

 

    $resultado = mysqli_query($conexion, 'SELECT p.pokename , t.typename FROM pokemon p join poketipo pt ON p.IDpoke = pt.IDpoke JOIN tipo t on t.IDtype = pt.IDtype WHERE p.pokename = '.'"$nombre"' )or die("ERROR");
    
    print $resultado;

   
    while($fila = mysqli_fetch_array($resultado)){
        echo $fila['pokename'] ;
        echo $fila['typename'] ;
        echo"<br>";
    }

    


?>