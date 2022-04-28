$(document).ready(function () {
   $("div").mouseover(function () {
       $(this).addClass("fondo");
       if($(this).hasClass("clase")){
           $(this).addClass("color");
       };
   });
   $("div").mouseout(function () {
      $(this).removeClass("fondo"); 
      if($(this).hasClass("clase")){
           $(this).removeClass("color");
       };
   });
   $("button.boton").click(function () {
       $("div").toggleClass("ocultarmostrar");
   });
   $("button.boton2").click(function () {
       var estilo = $("span").attr("style");
      $("div#estiloSpan").text(estilo); 
   });
});