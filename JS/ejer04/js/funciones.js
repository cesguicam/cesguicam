function calcular(){
     const n1 = document.getElementById("numero1").value;
     const n2 = document.getElementById("numero2").value;

if(n1 > n2){
    document.getElementById("resultado").innerHTML = "El mayor numero es " + n1 + " y el menor es " + n2
} else if (n1 < n2){
    document.getElementById("resultado").innerHTML = "El menor numero es " + n1 + " y el mayor es " + n2
}else{
    document.getElementById("resultado").innerHTML = n1+" y  " + n2 +" Son iguales"
}
}