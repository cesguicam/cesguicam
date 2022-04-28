$(document).ready(function () {
    $("h1#nivel1").click(function () {
        $("#nivel1").addClass("uno");
        $(".nivel2").removeClass("dos");
    });
    $("h1.nivel2").click(function () {
        $(".nivel2").addClass("dos");
        $("#nivel1").removeClass("uno");
    });
});