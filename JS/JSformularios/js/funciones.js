function validar(campo) {
    //var nombre = document.getElementById("nombre");
    //alert(campo.value);
    if (campo.value == null || campo.value == "" || campo.value.length == 0) {
       //campo.style = "border: 2px solid red";
       //campo.focus();
       mostrarError("spnombre", "Error: Nombre vacio"); 
    }else {
        //campo.style = "";
        borrarError("spnombre");
    }

}

function mostrarError (nombreSpan, mensaje) {  //campo es spnombre por que en mostrar error sale lo hemos puesto el primero, y mensaje es error:..
    document.getElementById(nombreSpan).innerHTML = mensaje;
}
function borrarError(nombreSpan){
    document.getElementById(nombreSpan).innerHTML = "";
}
function validarFormulario(){
    var cadenaError =  "";
    var nombre = document.getElementById("nombre");
    if (nombre.value == null || nombre.value.length == 0){
        cadenaError = cadenaError + "<li>Error: Nombre vacio</li>";
    }
    var postal = document.getElementById("postal");
    if (postal.value == null || nombre.value.length == 0) {
        cadenaError = cadenaError + "<li>Error: cod postal vacio</li>";
    }else if (postal.value.length != 5){
        cadenaError = cadenaError + "<li>Error: Cod postal de 5 cifras</li>";
    }

    



    if (cadenaError.length == 0) {
        return true;
    } else {
        document
        mostrarError("sperrores", cadenaError);
        return false;
    }

    
}
function mostrarEdad(campoedad) {
    document.getElementById("spedad").innerHTML = campoedad.value
}