
var currentTab = 0;

showTab(currentTab);

function showTab(index) {
    var x = document.getElementsByClassName("tab");
    x[index].style.display = "block";
}

function next_page(index) {
    var x = document.getElementsByClassName("tab");
    x[currentTab].style.display = "none";
    currentTab = currentTab + index;
    showTab(currentTab);
 }


function showPassword(){
    var x = document.getElementById("passwordSignUp");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    var a = document.getElementById("confirmPassSignUp");
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

function validatePassword() {
    var input = document.getElementById("passwordSignUp").value.trim();
    var invalid = document.getElementById("invalid1");

    if(input.length < 8 || !input.match(/[0-9]/) || !input.match(/[a-z]/) || !input.match(/[A-Z]/)){
        invalid.style.display = "block";
        return false;
    }
    else {
        invalid.style.display = "none";
    }


    return true;
}

function confirmPassword() {
    var Cinput = document.getElementById("confirmPassSignUp").value.trim();

    var input = document.getElementById("passwordSignUp").value.trim();

    var invalid2 = document.getElementById("invalid2");

    if (Cinput != input) {
        invalid2.style.display = "block";
        return false;
    }
    else {
        invalid2.style.display = "none";
    }
    return true;
}

function validateEmail() {
    var input = document.getElementById("emailSignUp").value.trim();

    if (input.split("@").length !== 2 || !input.split("@")[1].includes(".") || input.split("@")[0].length === 0) {
        document.getElementById("EmailInvalid").style.display = "block";

        return false;
    } else {
        document.getElementById("EmailInvalid").style.display = "none";
    }

    return true;
}

function validateNumber() {
    var input = document.getElementById("Whatsapp").value.trim();

    if(input.length < 9) {
        document.getElementById("WhatsappInvalid").style.display = "block";
        return false;
    } else {
        document.getElementById("WhatsappInvalid").style.display = "none";
    }
    return true;
}

function checkFormStep1() {
    let nama = document.getElementById("namaLengkap").value.trim();

    let tempatLahir = document.getElementById("tempatLahir").value.trim();

    let tanggalLahir = document.getElementById("tanggalLahir").value;

    if (nama == "" || tempatLahir == "" || tanggalLahir =="" || (!document.getElementById("Male").checked && !document.getElementById("Female").checked)){

        return false;
    }
    next_page(1);
    return true;
}

function checkFormStep2() {
    if (validateNumber() === 0 || validateEmail() === 0 || confirmPassword() === 0 || validatePassword() === 0){
        return false;
    }
    next_page(1);
    return true;
}
