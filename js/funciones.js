//Hacemos uso del metodo document.getElementById("info"); para poder mostrar la salida AJAX por pantalla
var resultado = document.getElementById("info");

//Creamos la función function mostrarUsuarios()
function mostrarUsuarios()
{
    //Creamos una variable la cual va a depender del navegador que estemos utilizando
    var xmlhttp;

    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else{
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //Le decimos al objeto HTTPrequest qué función de JavaScript se encargará de procesar la 
    //respuesta.
    xmlhttp.onreadystatechange = function(){
      //Si la petición a finalizado y ha sido exitosa 
      if(this.readyState === 4 && this.status === 200){
        //Debemos recibir una respuesta del servidor y asi poder ver la lista de personas
        //en la pantalla para ellos hacemos uso de la variable resultado
        resultado.innerHTML = this.responseText;

      }
    }
    //Fuera de la función usamos el método opem() que recibe tres parametros
    //El primer parámetro el tipo de método, el segundo parámetro me da el nombre del servidor
    //y el tercer parámetro el booleano true ya que toda esta petición es asíncrona
    xmlhttp.open("GET", "servidor.php", true);
    //Y finalizamos con el método send() para poder ejecutar nuestra petición
    xmlhttp.send();


  }
