"use strict";

$(document).ready(function() {

    $('#BotonBuscar').click(function(){
        let pokemon = $('#pokemonTexto').val().toLowerCase();
        buscaPokemon(pokemon);
    })
    
});


async function buscaPokemon(pokemon){

    if(pokemon != ''){
        let url = 'https://pokeapi.co/api/v2/pokemon/'+pokemon
        try {
            const response = await fetch(url)
            if(response.ok) {
                let jsonResponse = await llamadaFetch(url)
                llenarBody(jsonResponse)
            } else {
              alert('No se ha encontrado ningun Pokemon');
            }
          } catch (error) {
            console.error('Hubo un problema con la petición Fetch:' + error.message);
          }
    }else{
        
        let url = 'https://pokeapi.co/api/v2/pokemon/?limit=151'

        try {
            const response = await fetch(url)
            if(response.ok) {
                let jsonResponse = await llamadaFetch(url)
                buscaPokemonPokedex(jsonResponse)
            } else {
              alert('No se ha encontrado ningun Pokemon');
            }
          } catch (error) {
            console.error('Hubo un problema con la petición Fetch:' + error.message);
          }  
    }
}

function llenarBody(data){
    console.log(data)
    let arrayTipos=[]
    
    if(data.types != null){
        data.types.forEach(element => arrayTipos.push(element.type.name));

        arrayTipos = arrayTipos.toString().replace('electric','Eléctrico').replace('flying','Volador').replace('fire','Fuego').replace('ice','Hielo').replace('normal','Normal').replace('bug','Bicho').replace('water','Agua').replace('poison','Veneno')
                                      .replace('ground','Tierra').replace('psychic','Psíquico').replace('fighting','Lucha').replace('rock','Roca').replace('ghost','Fantasma')
    
        $('#body').empty()
            $('#body').append(`
            <div class="row">
                <div class="col ">
                <h1>${PrimeraLetraMayuscula(data.name)}</h1>
                <ul class="list-group mt-3">
                    <li class="list-group-item">Numero de la Pokedex: ${data.order}</li>
                    <li class="list-group-item">Tipo: ${arrayTipos.toString().replace(',',', ')}</li>
                </ul>

                </div>
                    
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <img src="${data.sprites.front_default}" width="245" height="350">
                        </div>
                        <div class="col">
                        <img src="${data.sprites.back_default}" width="245" height="350">
                    </div>
                    </div>
                </div>
            </div>

            `);
    }
    
}



function buscaPokemonPokedex(pokemons){

   let pokedexCompleta = pokemons.results

   let arrayResultados = []

    pokedexCompleta.forEach(pokemon =>  arrayResultados.push(pokemon.name));

   let nombrePokemonsParaPeticionFetch = arrayResultados.toString()

   peticionFetchPokemons(nombrePokemonsParaPeticionFetch)
}



async function peticionFetchPokemons(nombrePokemonsParaPeticionFetch){
    let arrayLlenarBodyPokedex = []
    let arrayPokemonsParaPeticionFetch = nombrePokemonsParaPeticionFetch.split(',')
    
   

    for (let i = 0; i < arrayPokemonsParaPeticionFetch.length; i++) {
        const url = 'https://pokeapi.co/api/v2/pokemon/' + arrayPokemonsParaPeticionFetch[i]
        const response = await fetch(url)
        const json = await response.json()
        arrayLlenarBodyPokedex.push(json)
    }
            
    llenarBodyPokedex(arrayLlenarBodyPokedex)
}

function llenarBodyPokedex(data){
    
    $('#body').empty()
    //data.forEach(element => console.log(element))

    let arrayTipoPokemons = []

    for (let i = 0; i < data.length; i++) {

        console.log(data[i])
        //console.log(data[i].types)

        // for (let x = 0; x <= data[i].types.length; x++) {
        //     console.log(data[i].types[x])
            
        // }
        
        
        // arrayTipoPokemons.push(data[i].types)
        //console.log(arrayTipoPokemons)

       

        $('#body').append(`
        <div class="row">
            <div class="col ">
            <h1>${PrimeraLetraMayuscula(data[i].name)}</h1>
            <ul class="list-group mt-3">
                <li class="list-group-item">Numero de la Pokedex: ${data[i].order}</li>
                <li class="list-group-item">Tipo: ${data[i].types.type}</li>
            </ul>

            </div>
                
            <div class="col">
                <div class="row">
                    <div class="col">
                        <img src="${data[i].sprites.front_default}" width="245" height="350">
                    </div>
                    <div class="col">
                    <img src="${data[i].sprites.back_default}" width="245" height="350">
                </div>
                </div>
            </div>
        </div>

        `)
        
    }
        
        


    

   





   
}




 //ToDo: tipo de pokemon cuando haces busqueda de todos  

