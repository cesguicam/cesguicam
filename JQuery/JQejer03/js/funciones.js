$(document).ready(function () {
    $("#modificar").click(function () {
       $("#parrafo").text("Nuevo texto"); 
    });
    $("#obtener").click(function () {
        alert($("#parrafo").text()); 
    });
    $("#modificarTD").click(function () {
        $("#tabla td").text("Texto del TD");
    });
});