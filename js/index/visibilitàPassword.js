let passwordVisibile = true;
let immagine;
let passwordInput;
/* Funzione per mostrare la password */
function mostraPassword(IdInput, IdImmagine, pulsante, event) {
    /* Evita che il form sia inviato */
    event.preventDefault();
    immagine = document.getElementById(IdImmagine);
    passwordInput = document.getElementById(IdInput);

    /* Controlla se l'attributo è presente nel pulsante */
    let passwordVisibile = typeof pulsante.dataset.passwordVisibile != "undefined" ? true : false;

    /* Aggiunge / rimuove l'attributo passwordVisibile  */
    passwordVisibile ? delete pulsante.dataset.passwordVisibile : pulsante.setAttribute("data-password-visibile", "")    
    
    /* Alterna l'icona del pulsante */
    immagine.src = passwordVisibile ? "assets/immagini/nascondi.png" : "assets/immagini/mostra.png";
    /* Alterna la visibilità della password */
    passwordInput.type = passwordVisibile ? "text" : "password";

}

/* TODO c'è un bug se le funzione viene usate più volte nello stesso form */