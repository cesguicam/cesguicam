function calcular(){
    var base=parseInt(document.getElementById("base").value);
    var ex=parseInt(document.getElementById("ex").value);
    var resultado="";

    resultado=Math.pow(base,ex);

    document.getElementById("resultado").innerHTML="El resultado es:"+resultado;

}