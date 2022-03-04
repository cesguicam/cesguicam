function calcular(par){
    var num1=parseInt(document.getElementById("n1").value);
    var num2=parseInt(document.getElementById("n2").value);
    var resultado ="";
    if (par=="+") {
        resultado = num1 + num2;
        document.getElementById("respuesta").value=resultado;
    } else if (par=="-"){
        resultado = num1 - num2;
        document.getElementById("respuesta").value=resultado;
    } else if (par=="/"){
        resultado = num1 / num2;
        document.getElementById("respuesta").value=resultado;
    } else if(par=="*") {
        resultado = num1 * num2;
        document.getElementById("respuesta").value=resultado;
    }
}