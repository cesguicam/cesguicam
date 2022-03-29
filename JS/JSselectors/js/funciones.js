function iniciar() {
    /*alert(document.getElementById("usuario").value);
    var usu=prompt("introduzca nombre"); //en la variable usu se guarda el valos que se introduzca en la pagina
    alert("hola " + usu + " que tenga un buen dia");*/

   /*var usu=prompt("introduzca nombre");
    document.getElementById("texto").innerHTML = "Hola " + usu + "<br>";
    document.getElementById("texto").style = "font-weight: bold;";*/

  /*var radios = document.getElementsByName("valores");
    for (let i = 0; i < radios.length; i++) {
        alert(radios[i].value);
        
    }*/

    /*document.getElementsByTagName("p")[0].innerHTML = "primer P";
    document.getElementsByTagName("p")[0].onclick = mostrarMensaje;

    document.getElementsByClassName("clase")[1].onclick = mostrarTexto("pulsado");*/


   // document.querySelector("#principal p:first-child").onclick = alerta;
   var coleccion = document.querySelectorAll("#principal p");
   for (let i = 0; i < coleccion.length; i++) {
       const element = coleccion[i].innerHTML = "P " + (i+1);
       
   }
}
function alerta() {
    alert("Alertaa");
}

function mostrarTexto(texto) {
    alert(texto);
}

function mostrarMensaje() {
    document.getElementById("texto").innerHTML = "Hola wacho" + "<br>";
    document.getElementById("texto").className = "borderYcolor";
}

function ocultar(){
    document.getElementById("principal").style = "display: none";

}
function mostrar(){
    document.getElementById("principal").style = "display: block";
}
window.addEventListener("load", iniciar, false); /*a la ventana del navegador le decimos que escuche que se produzca un evento (en este caso la carga del documento)*/

