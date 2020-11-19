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

            <div class="container mt-5" id="body"> </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/index.js" ></script>
<script src="../js/utils.js" ></script>
</body>
</html>