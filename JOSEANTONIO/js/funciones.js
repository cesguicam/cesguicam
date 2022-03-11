function graba(b) {
    /* 
     set fso = CreateObject("Scripting.FileSystemObject"); 
       set s   = fso.CreateTextFile(b, True);
    
       //var firstName = document.getElementById('FirstName');
      // var lastName  = document.getElementById('lastName');
    
       s.writeline("verde" );
       s.writeline("azult");
    
       s.writeline("-----------------------------");
       s.Close();
       */
    alert('grabado');

}
function miFunc(a) {
    document.getElementById("demo").style.color = a;
}

function activa(b) {
    document.getElementById(b).style.color = document.getElementById("demo").style.color;
}
function myFunction() {
    document.getElementById("demo").style.color = "red";
}
