
function showPassword(){
    var x = document.getElementById("passwordLogin");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");

    if(x.type==='password'){
        x.type="text";
        y.style.display="none";
        z.style.display="block";
    }
    else{
        x.type="password";
        y.style.display="block";
        z.style.display="none";

    }
}
