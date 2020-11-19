"use strict";

async function llamadaFetch(url){
    const response = await fetch(url)
    const json = await response.json()
    
    return json
}
 

function PrimeraLetraMayuscula(string) {
    if(string != null){
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
}

    
