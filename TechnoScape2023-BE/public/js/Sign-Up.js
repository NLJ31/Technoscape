
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

function showConfirmPassword() {
    var a = document.getElementById("confirmPassSignUp");
    var b = document.getElementById("hide3");
    var c = document.getElementById("hide4");   
    if( a.type === 'password'){
        a.type="text;"
        b.style.display="none";
        c.style.display="block";
    }
    else{
        a.type="password";
        b.style.display="block";
        c.style.display="none";
    }
}
function validatePassword() {
    var input = document.getElementById("passwordSignUp").value.trim();
    var invalid = document.getElementById("invalid1");

    if((input.length > 1 && input.length < 8) || !input.match(/[0-9]/) || !input.match(/[a-z]/) || !input.match(/[A-Z]/)){
        invalid.style.display = "block";
        document.getElementById("passwordRequired").style.display = "none";
        return false;
    }
    else {
        invalid.style.display = "none";
        return true;
    }
}

function confirmPassword() {
    var Cinput = document.getElementById("confirmPassSignUp").value.trim();

    var input = document.getElementById("passwordSignUp").value.trim();

    var invalid2 = document.getElementById("invalid2");

    if (Cinput != input) {
        invalid2.style.display = "block";
        document.getElementById("confirmRequired").style.display = "none";
        return false;
    }
    else {
        invalid2.style.display = "none";
    }
    return true;
}

function validateEmail() {
    var input = document.getElementById("email").value.trim();

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
    var numerical = document.getElementById("Whatsapp");
    numerical.value = numerical.value.replace(/[^0-9]/g, '');
    if(input.length < 9) {
        document.getElementById("WhatsappInvalid").style.display = "block";
        document.getElementById("whatsappRequired").style.display = "none";
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

    if (nama == "" || tempatLahir == "" || tanggalLahir =="" || (!document.getElementById("Male").checked && !document.getElementById("Female").checked) || validateDate() === false){
        if (nama == "") {
            document.getElementById("namaLengkap").style.border = "2px solid red";
            document.getElementById("nameRequired").style.display = "block";
        } else {
            document.getElementById("namaLengkap").style.border = "1px solid #F4F4F4";
            document.getElementById("nameRequired").style.display = "none";
        }
        if (tempatLahir == "") {
            document.getElementById("tempatLahir").style.border = "2px solid red";
            document.getElementById("tempatRequired").style.display = "block";
        } else {
            document.getElementById("tempatLahir").style.border = "1px solid #F4F4F4";
            document.getElementById("tempatRequired").style.display = "none";
        }
        if (tanggalLahir == "") {
            document.getElementById("tanggalLahir").style.border = "2px solid red";
            document.getElementById("dateRequired").style.display = "block";
        } else {
            document.getElementById("tanggalLahir").style.border = "1px solid #F4F4F4";
            document.getElementById("dateRequired").style.display = "none";
        }
        if (!document.getElementById("Male").checked && !document.getElementById("Female").checked) {
            document.getElementById("genderRequired").style.display = "block";
        } else {
            document.getElementById("genderRequired").style.display = "none";
        }
        return false;
    }
    document.getElementById("namaLengkap").style.border = "1px solid #F4F4F4";
    document.getElementById("nameRequired").style.display = "none";
    document.getElementById("tanggalLahir").style.border = "1px solid #F4F4F4";
    document.getElementById("tempatRequired").style.display = "none";
    document.getElementById("tempatLahir").style.border = "1px solid #F4F4F4";
    document.getElementById("dateRequired").style.display = "none";
    document.getElementById("genderRequired").style.display = "none";
    next_page(1);
    return true;
}

function checkFormStep2() {
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("passwordSignUp").value.trim();
    let confirmPasswordSignup = document.getElementById("confirmPassSignUp").value.trim();


    if (validateEmail() === false || confirmPassword() === false || validatePassword() === false || password === "" || email === "" || confirmPasswordSignup === "") {
        if (email === "") {
            document.getElementById("email").style.border = "2px solid red";
        } else {
            document.getElementById("email").style.border = "1px solid #F4F4F4";
        }
        if (password === "") {
            document.getElementById("passwordRequired").style.display = "block";
            document.getElementById("passwordSignUp").style.border = "2px solid red";
            document.getElementById("invalid1").style.display = "none";
        } else {
            document.getElementById("passwordRequired").style.display = "none"; 
            document.getElementById("passwordSignUp").style.border = "1px solid #F4F4F4";
        }
        if (confirmPasswordSignup === "") {
            document.getElementById("confirmRequired").style.display = "block";
            document.getElementById("confirmPassSignUp").style.border = "2px solid red";
            document.getElementById("invalid2").style.display = "none";
        } else {
            document.getElementById("confirmRequired").style.display = "none";
            document.getElementById("confirmPassSignUp").style.border = "1px solid #F4F4F4";
        }
        return false;
    }
    document.getElementById("confirmPassSignUp").style.border = "1px solid #F4F4F4";
    document.getElementById("passwordSignUp").style.border = "1px solid #F4F4F4";
    document.getElementById("email").style.border = "1px solid #F4F4F4";
    document.getElementById("invalid2").style.display = "none";
    document.getElementById("passwordRequired").style.display = "none";
    document.getElementById("confirmRequired").style.display = "none";
    document.getElementById("invalid1").style.display = "none";
    document.getElementById("EmailInvalid").style.display = "none";
    next_page(1);
    return true;
}

function checkFormStep3() {
    let Whatsapp = document.getElementById("Whatsapp").value.trim();
    let LINE = document.getElementById("LINE").value.trim();
    let Institution = document.getElementById("Institution").value.trim();

    if (Whatsapp == "" || LINE == "" || Institution == "" || validateNumber() === false){
        if (Whatsapp == "") {
            document.getElementById("Whatsapp").style.border = "2px solid red";
            document.getElementById("whatsappRequired").style.display = "block"
        } else {
            document.getElementById("Whatsapp").style.border = "1px solid #F4F4F4";
            document.getElementById("whatsappRequired").style.display = "none";
        }
        if (LINE == "") {
            document.getElementById("LINE").style.border = "2px solid red";
            document.getElementById("LINERequired").style.display = "block";
        } else {
            document.getElementById("LINE").style.border = "1px solid #F4F4F4";
            document.getElementById("LINERequired").style.display = "none";
        }
        if (Institution == "") {
            document.getElementById("Institution").style.border = "2px solid red";
            document.getElementById("institutionRequired").style.display = "block";
        } else {
            document.getElementById("Institution").style.border = "1px solid #F4F4F4";
            document.getElementById("institutionRequired").style.display = "none";
        }
        return false;
    }
    return true;
}

function validateDate () {
    var Umur = document.getElementById("tanggalLahir").value;

    const age = new Date(Date.now()-new Date(Umur)).getFullYear() - 1970;
    document.getElementById("dateRequired").style.display = "none";

    if (age <= 100 && age >= 17) {
        document.getElementById("dateIncorrect").style.display = "none";
        document.getElementById("tanggalLahir").style.border = "1px solid #F4F4F4";
        return true;
    } else {
        document.getElementById("dateIncorrect").style.display = "block";
        document.getElementById("tanggalLahir").style.border = "2px solid red";
        return false;
    }
}
