$(document).ready(function () {
    $("#titulo1").click(function () {
        $("#titulo1").addClass("fondo");
        $("#titulo2").removeClass("fondo2");
    });

    $("#titulo2").click(function () {
        $("#titulo2").addClass("fondo2");
        $("#titulo1").removeClass("fondo");
    });
});