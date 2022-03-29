document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var usu = document.getElementById("usuario").value;
    var num = document.getElementById("numero").value;
    var web = document.getElementById("web").value;
    //he intentado buscar una manera para optimizar los if en vez de tener que repetirlos, pero no lo he conseguido, por eso hay tantos, para que funcione bien.
    if (usu.length == 0 || usu.length<=5) {
        document.getElementById("res").innerHTML = "Debe completar el campo usuario y tener almenos de 5 caracteres "
        return;
    } else if (num.length == 0 || num.length <= 9) {
        document.getElementById("res").innerHTML = "El numero no puede estar vacio y debe tener 9 digitos"
        return;
    } else if (num.startsWith(1)) {
        document.getElementById("res").innerHTML = "El numero debe empezar por 6 o 9"
        return;

    }else if (num.startsWith(2)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    } else if (num.startsWith(3)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    } else if (num.startsWith(4)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    }else if (num.startsWith(5)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    } else if (num.startsWith(7)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    } else if (num.startsWith(8)) {
        document.getElementById("res").innerHTML = "Debe empezar por 6 o 9"
        return;

    } else if (web.length == 0) {
        document.getElementById("res").innerHTML = "El campo web no puede estar vacio"
        return;
    } else if (!String(web).startsWith("www")) {
        document.getElementById("res").innerHTML = "El campo tiene que empezar por www."
        return;
    } else if (!String(web).endsWith(".es")) {
        document.getElementById("res").innerHTML = "El campo tiene que terminar por .es"
        return;
    }

    if (document.getElementById('deportes').checked == false && document.getElementById('cine').checked == false && document.getElementById('musica').checked == false) {
        document.getElementById("res").innerHTML = "Debe seleccionar al menos un campo. "
        return;
    }

    this.submit();

}