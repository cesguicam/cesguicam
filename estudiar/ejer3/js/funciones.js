$(document).ready(function () {
    $("#boton1").click(function () {
     alert($("#parrafo").text());
    });
    $("#boton2").click(function () {
       $("#parrafo").html("<h1>TEXTACO COJONEE</h1>"); 
    });
    $("#boton3").click(function () {
       $("td").html("<h1>asssssssssssss</h1>") 
    });
 });