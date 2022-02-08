function iniciar() {
    var usu=prompt("introduzca nombre");
    if (usu=="cesar") {
        document.getElementById("container").className="cesar"
    } else if (usu=="kike") {
        document.getElementById("container").className="kike"
    } else {
        document.getElementById("container").className="otro"
    }
}
window.addEventListener("load", iniciar, false);