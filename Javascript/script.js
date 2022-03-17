const inputName = document.getElementById("fullname");
const inputEmail = document.getElementById("Email");
const inputPassword = document.getElementById("Pass");
const inputPasswordConfime = document.getElementById("PassConfirme");
const inputs = document.querySelectorAll("input");
//Message d'erreur
const errName = document.getElementById("error-username");
const errEmail = document.getElementById("error-email");
const errPass = document.getElementById("error-password");
const errPassConfirme = document.getElementById("error-password-cofirme");

inputs.forEach((champ) => {
    champ.addEventListener("blur", () => {
        validateName();
        validateEmail();
        validatePass();
        validatePassConfirme();
    });
});

function validateName() {
    let username = inputName.value;
    if (username != "") {
        errName.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (!username.match(/^[a-z]{5,}$/i)) {
            errName.innerHTML = "Invalid username format(must containe 5 characters at least)";
        }
    } else {
        errName.innerHTML = "username is required";
    }

}

function validateEmail() {
    let email = inputEmail.value;
    if (email != "") {
        errEmail.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (!email.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/)) {
            errEmail.innerHTML = "Invalid email format";
        }
    } else {
        errEmail.innerHTML = "email adresse is required";
    }
}

function validatePass() {
    let pass = inputPassword.value;
    if (pass != "") {
        errPass.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (!pass.match(/^[a-zA-Z0-9_/.+-@]{6,}$/)) {
            errPass.innerHTML = "Password must contain 6 characters at leat";
        }
    } else {
        errPass.innerHTML = "Password field is required";
    }
}

function validatePassConfirme() {
    let passConfirme = inputPasswordConfime.value;
    if (passConfirme != "") {
        errPassConfirme.innerHTML = "";
        // /i : ignoreCase	Checks whether the "i" modifier is set
        if (passConfirme != inputPassword.value) {
            errPassConfirme.innerHTML = "Confirmation not identical to the password field ";
        }
    } else {
        errPassConfirme.innerHTML = "Password Confirmation field is required";
    }
}