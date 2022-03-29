function iniciar() {
    var usu=prompt("introduzca nombre");
    if (usu=="cesar") {
        document.getElementById("container").className="cesarr"
    } else if (usu=="kike") {
        document.getElementById("container").className="kike"
    } else {
        document.getElementById("container").className="otro"
    }
}
window.addEventListener("load", iniciar, false); //espera a que termine la funcion iniciar para que cargue la pagina