<?php require_once('../conexionBBDD/conexion.php'); ?>
<?php 


$videojuego = mysqli_query($conexion, "SELECT v.*, vc.* FROM videojuegos v JOIN videojuego_caracteristicas vc ON v.id_videojuego = vc.id_videojuego WHERE v.Nombre='Cuphead'");
$atributos = mysqli_query($conexion, "SELECT * FROM videojuegos v JOIN videojuego_atributos va ON  v.id_videojuego = va.id_videojuego WHERE v.Nombre = 'Cuphead'");
$pros = mysqli_query($conexion, "SELECT * FROM videojuegos v JOIN videojuego_pros_contras vpc  ON v.id_videojuego = vpc.id_videojuego WHERE v.Nombre = 'Cuphead' AND vpc.Tipo_pro_contra = 'pro'");
$contras = mysqli_query($conexion, "SELECT * FROM videojuegos v JOIN videojuego_pros_contras vpc  ON v.id_videojuego = vpc.id_videojuego WHERE v.Nombre = 'Cuphead' AND vpc.Tipo_pro_contra = 'contra'");



 ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="../css/index.css" >
</head>
<body>

    <div class="container-fluid  contenedor">
        <div class="container mt-5">
            <div class="row">
                <div class="mx-auto"> <h1>Pokedex</h1> </div>
            </div>
        </div>
        
            <div class="container mt-5 ">
                <div class="col mt-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="pokemonTexto" placeholder="Escribe el nombre del pokemon">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="BotonBuscar" type="button">Buscar</button>
                    </div>
                    </div>
                </div>
            </div>


            <form action="layout.php" method="get">
            <div class="container mt-5 ">
                <div class="col mt-5">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="texto" name="nombre" placeholder="Escribe el nombre">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <div class="container-fluid mt-5" id="body"> </div>

            <a href="https://wa.me/+34633276957" id='botonWatsapp' target="_blank"><img src="../../whatsapp-icon.png" alt=""></a>
            <!-- <div class="container-fluidm mt-5" id="body"> 
                <input list="browsers" name="browser" id="browser">
                <datalist id="browsers">
                </datalist>
            </div> -->
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/index.js" ></script>
<script src="../js/utils.js" ></script>
</body>
</html>