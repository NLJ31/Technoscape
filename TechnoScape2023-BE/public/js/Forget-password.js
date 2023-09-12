function validatePassword() {
    var input = document.getElementById("resetPassword").value.trim();
    var invalid = document.getElementById("resetPass");

    if(input.length < 8 || !input.match(/[0-9]/) || !input.match(/[a-z]/) || !input.match(/[A-Z]/)){
        invalid.style.display = "block";
        document.getElementById("PassRequired").style.display = "none";
        return false;
    }
    else {
        invalid.style.display = "none";
    }


    return true;
}

function validateEmail() {
    var email = document.getElementById("forgetEmail").value.trim();

    if (email.split("@").length !== 2 || !email.split("@")[1].includes(".") || email.split("@")[0].length === 0) {
        
        document.getElementById("InvalidEmail").style.display = "none";
        document.getElementById("InvalidEmail2").style.display = "block";
        document.getElementById("InvalidEmail3").style.display = "none";
        return false;
    } else {
        document.getElementById("InvalidEmail2").style.display = "none";
    }
    return true;

}

function confirmPass() {
    var Cinput = document.getElementById("confirmPassword").value.trim();

    var input = document.getElementById("resetPassword").value.trim();

    var invalid2 = document.getElementById("invalid2");

    if (Cinput != input) {
        document.getElementById("ConfirmRequired").style.display = "none";
        invalid2.style.display = "block";
        return false;
    }
    else {
        invalid2.style.display = "none";    
    }
    return true;
}

function showPassword(){
    var x = document.getElementById("resetPassword");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    var a = document.getElementById("confirmPassword");
    var b = document.getElementById("hide3");
    var c = document.getElementById("hide4");

    if(x.type==='password' || a.type === 'password'){
        x.type="text";
        a.type="text;"
        y.style.display="none";
        z.style.display="block";
        b.style.display="none";
        c.style.display="block";
    }  
    else{
        x.type="password";
        a.type="password";
        y.style.display="block";
        z.style.display="none";
        b.style.display="block";
        c.style.display="none";
        
    }
}

function checkNotification() {
    var email = document.getElementById("forgetEmail").value.trim();

    if (email === "") {
        document.getElementById("InvalidEmail").style.display = "block";
        document.getElementById("InvalidEmail2").style.display = "none";
        document.getElementById("InvalidEmail3").style.display = "none";
        return false;
    }
    return true;
}

function checkform() {
    let pass = document.getElementById("resetPassword").value.trim();
    let confirm = document.getElementById("confirmPassword").value.trim();
    if (pass === "" || confirm === "" || validatePassword() === false || confirmPass() === false) {
        if (pass === "") {
            document.getElementById("PassRequired").style.display = "block";
            document.getElementById("resetPassword").style.border = "2px solid red";
        }
    
        if (confirm === "") {
            document.getElementById("ConfirmRequired").style.display = "block";
            document.getElementById("confirmPassword").style.border = "2px solid red";
        }
        return false;
    }
    return true;
}