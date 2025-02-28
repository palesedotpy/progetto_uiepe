let passwordVisibile = false;
let immagine = document.getElementById("immagine-mostra-password");
let passwordInput = document.getElementById("password_input");

/* Funzione per mostrare la password */
function mostraPassword() {
    /* 
        Alterna lo stato di visibilitò della password:
        se è visibile la nasconde, e viceversa.
    */
    passwordVisibile = !passwordVisibile;
    
    /* Alterna l'icona del pulsante */
    immagine.src = passwordVisibile ? "assets/immagini/nascondi.png" : "assets/immagini/mostra.png";
    /* Alterna la visibilità della password */
    passwordInput.type = passwordVisibile ? "text" : "password";

}

