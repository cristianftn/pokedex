
/*function llamadaFetch(url){
    fetch(url).then(function(response) {
        if(response.ok) {
            fetch(url).then(response => response.json())
            .then(data => console.log(data))
        } else {
          alert('No se ha encontrado ningun Pokemon');
        }
      })
      .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
      });
     
}
 */

function PrimeraLetraMayuscula(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }

    
