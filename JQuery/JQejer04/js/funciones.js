$(document).ready(function () {

    $("#esteBoton").click(function () {
        $(".tabla").css("border", "solid");
    });

    $("button.otroBoton").click(function () {
        var estilo = $("table").attr("style");
        $("#res").text(estilo);
    });

    $("#Botonazo").click(function () {
        $(".tabla").css("border", "none");
    });
});