function enviar(){
    // lo tengo que hacer con varios if(condiccion que me pida en el encunciado) y susu respectivos elses para mostrar el error si no se cumple lo que me ha pedido el enunciado, para esto tengo que hacer vaios span con id distintas para que salga el error debajo de la tabla
var email=document.getElementById("email").value;
var web=document.getElementById("web").value;
var pass=document.getElementById("password").value;
var pass2=document.getElementById("password2").value;

if (email=!""&& email*="@" ){
    document.getElementById("error1").innerHTML="Campo correcto"
}else{
    document.getElementById("error1").innerHTML="Tiene un error en el campo 'Email', sevise que tenga un '.' y una '@'. "
}
if(){}

}