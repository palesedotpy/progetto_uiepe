let passwordVisibile = false;
let immagine;
let passwordInput;
/* Funzione per mostrare la password */
function mostraPassword(IdInput, IdImmagine, event) {
    /* Evita che il form sia inviato */
    event.preventDefault();
    immagine = document.getElementById(IdImmagine);
    passwordInput = document.getElementById(IdInput);

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

/* TODO c'è un bug se le funzione viene usate più volte nello stesso form */