
let formAccesso = document.getElementById("form-accesso");
let formRegistrazione = document.getElementById("form-registrazione");


function switchForm(vuoleRegistrarsi) {
    console.log("switch");
    vuoleRegistrarsi ? formRegistrazione.classList.replace("d-none", "d-block") : formAccesso.classList.replace("d-none", "d-block");
    vuoleRegistrarsi ? formAccesso.classList.replace("d-block", "d-none") : formRegistrazione.classList.replace("d-block", "d-none");
}