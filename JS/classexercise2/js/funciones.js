function iniciar() {
 var titulo = document.getElementById("titulo");
 var capa = document.getElementById("capa");
 var texto = document.getElementById("texto");
 if (capa.classList.contains("success")){
     titulo.innerHTML = "CORRECTO";
     texto.innerHTML = "Todo bien";
 } else if (capa.classList.contains("warning")){
    titulo.innerHTML = "CUIDADO";
    texto.innerHTML = "Ten ciudado fiera";
 } else if (capa.classList.contains("error")){
    titulo.innerHTML = "ERROR";
    texto.innerHTML = "Mal mal mal todo mal";
 }
}
window.addEventListener("load", iniciar, false);