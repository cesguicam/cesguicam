function calcular() {
    var num1=parseInt(document.getElementById("n1").value);
    var num2=parseInt(document.getElementById("n2").value);
    var suma=(num1+num2);
    var resta=(num1-num2);
    var div=(num1/num2);
    var mul=(num1*num2);

    document.getElementById("res").innerHTML= "la suma es "+ suma + "<br>"+"la resta es "+ resta + "<br>"+"la division es "+ div + "<br>"+"la multiplicacion es "+ mul + "<br>";
}

function borde(){
    document.getElementById("tabla").className= "boder";
}