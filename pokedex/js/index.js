$(document).ready(function() {

    $('#BotonBuscar').click(function(){
        let pokemon = $('#pokemonTexto').val().toLowerCase();
        buscaPokemon(pokemon);
    })
    
});


function buscaPokemon(pokemon){
    fetch('https://pokeapi.co/api/v2/pokemon/'+pokemon).then(function(response) {
        if(response.ok) {
            fetch('https://pokeapi.co/api/v2/pokemon/'+pokemon).then(response => response.json())
            .then(data => llenarBody(data))
            
        } else {
          alert('No se ha encontrado ningun Pokemon');
        }
      })
      .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
      });

   
}

function llenarBody(data){
    arrayTipos=[]
    data.types.forEach(element => arrayTipos.push(element.type.name));

    console.log(arrayTipos.toString())
    
$('#body').empty()
    $('#body').append(`
    <div class="row">
        <div class="col ">
        <h1>${PrimeraLetraMayuscula(data.name)}</h1>
        <ul class="list-group mt-3">
            <li class="list-group-item">Numero de la Pokedex: ${data.order}</li>
            <li class="list-group-item">Nombre: ${PrimeraLetraMayuscula(data.name)}</li>
            <li class="list-group-item">Tipo: ${arrayTipos.toString().replace(',',', ')}</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
        </ul>

        </div>
            
        <div class="col">
            <div class="row">
                <div class="col">
                    <img src="${data.sprites.front_default}" width="250" height="350">
                </div>
                <div class="col">
                <img src="${data.sprites.back_default}" width="250" height="350">
            </div>
            </div>
        </div>
    </div>

    `);

}

 

