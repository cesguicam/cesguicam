function calcularEdad(){
var nombre = document.getElementById("nombre").value;
var edad = document.getElementById("edad").value;
var fecha = document.getElementById("fecha").value;
var f2 = new Date();

if (edad!="" || edad.length>0) {
    var dias = edad * 365;

    document.getElementById("resultado").innerHTML = "Buenas tardes " + nombre + ". Usted tiene " + edad + " años, que son " + dias + " dias. Gracias"
}else {
    var fechainicio = new Date(fecha).getTime();
    var fechafin = new Date().getTime();

    var diff = fechafin -fechainicio

    var dias = Math.floor(diff/(1000*60*60*24));
    document.getElementById("resultado").innerHTML = "Buenas tardes " + nombre + ". Usted tiene " + dias + " dias de edad. Gracias"
}

}