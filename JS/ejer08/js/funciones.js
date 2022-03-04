var random=parseInt(Math.random()*100);
var intentos=10;
//se pone fuera el numero aleatorio para que no se genere cada vez que se le de al botón
function aleatorio(){
    var n1=document.getElementById("num").value;

if(intentos>0){
    if (n1<random) {
        intentos=intentos-1;
        document.getElementById("resultado").innerHTML= "El número es mas grande, intentos restantes = "+ intentos;
        
    } else if (n1>random){
        intentos=intentos-1;
        document.getElementById("resultado").innerHTML= "El número es mas pequeño, intentos restantes = "+ intentos;
        
    }else {
        document.getElementById("resultado").innerHTML= "Es el numero!!! "+random;
    }  
} else{
        document.getElementById("resultado").innerHTML= "se te han acabado los intentos"+ " el numero era "+ random; 
    }
   
}
function nuevo(){
    random=parseInt(Math.random()*100);
    intentos=10;
    document.getElementById("resultado").innerHTML="";
}