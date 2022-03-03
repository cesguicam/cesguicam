function bucle(){
var frase = document.getElementById("frase").value;
var num = document.getElementById("numero").value;
var resultado = "";
for (let i = 0; i < num; i++) {
    resultado = resultado + (i+1) + ". " +frase + "<br>";
    
}
document.getElementById("resultado").innerHTML = resultado;
}