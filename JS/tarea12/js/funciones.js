function enviar(){
    // lo tengo que hacer con varios if(condiccion que me pida en el encunciado) y susu respectivos elses para mostrar el error si no se cumple lo que me ha pedido el enunciado, para esto tengo que hacer vaios span con id distintas para que salga el error debajo de la tabla
var email=document.getElementById("email").value;
var web=document.getElementById("Web").value;
var pass=document.getElementById("password").value;
var pass2=document.getElementById("password2").value;
var erroremail="";
var errorweb="";
var erroredad="";
var errorcontra="";

if (email=!""/*&& email*="@"*/ ){
    document.getElementById("error1").innerHTML="Campo correcto";

}else{
    erroremail="Tiene un error en el campo 'Email', sevise que tenga un '.' y una '@'. "
    document.getElementById("error1").innerHTML="Tiene un error en el campo 'Email', sevise que tenga un '.' y una '@'. ";
}
/*if(web){
error2
}else{

}*/
if(edad>0){
    document.getElementById("error3").innerHTML="Campo correcto";
}else{
    document.getElementById("error3").innerHTML="La edad tiene que ser mayor que 0.";
}
if (pass==pass2){
    document.getElementById("error5").innerHTML="Campo correcto";
}else{
    document.getElementById("error5").innerHTML="La contraseña no coincide, prueba de nuevo";
}
}