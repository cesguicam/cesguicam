$(document).ready(function () {
    $("h1#nivel1").click(function () {
        $(this).toggleClass("uno");
    });
    $("h1.nivel2").click(function () {
        $(this).toggleClass("dos");
    });
});