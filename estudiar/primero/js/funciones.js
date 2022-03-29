function iniciar(){
    var usu=prompt("Escriba su nombre");
    if (usu=="cesar"){
        document.getElementById("container").className="cesar";
       
        }else if (usu=="kike") {
            document.getElementById("container").className="kike";
        }else {
            document.getElementById("container").className="otro"
        }
        document.getElementById("resultado").innerHTML= "bienvenido " + usu;
}
window.addEventListener("load", iniciar, false);