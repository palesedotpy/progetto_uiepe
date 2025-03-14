<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accesso</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    
    <body>
        <div class="container-fluid full-page h-md-auto ">
            <div class="row h-100 flex-column flex-md-row h-md-auto">
                <div class="col-12 col-md-6 p-3 bg-blu-scuro text-white text-center d-flex flex-md-column flex-row justify-content-center align-items-center">
                    <div class="w-50 mb-4" id="logo">
                        <img src="assets/immagini/logo-gv.png" class="img-fluid logo-gv "    alt="logo">
                        <img src="assets/immagini/bandiera.png" class="img-fluid " alt="">
                    </div>
                    <div id="nome">
                        <h1 class="h1 titolo text-start mb-4"><strong>UFFICIO <br> INTERDISTRETTUALE <br> ESECUZIONE PENALE <br> ESTERNA </strong></h1>
                        <h2 class="h2 sotto-titolo"><strong>Ministero della Giustizia</strong></h2>
                    </div>
                </div>
                <!-- TODO Settare opportunatamente i required -->
             
                <div class="col-12 col-md-6 p-3 text-center d-flex justify-content-center align-items-center">
                    <!-- Form Accesso -->
                    <form action="php/accedi.php" method="post" class="container col-12 col-md-9 d-block" name="form-accesso" id="form-accesso"> <!-- TODO Aggiungere php | d-block-->
                        <div class="row">
                            <div class="mb-3">
                                <label for="login-email-input" class="fs-4 form-label text-start w-100">Email</label>
                                <input type="email" class="form-control" id="login-email-input" name="login-email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-4">
                                <label for="password_input" class="fs-4 form-label text-start w-100">Password</label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="password" class="form-control" id="login-password-input" name="login-password" aria-describedby="passwordDimenticata">
                                    <button type="button" class="mostra-password btn" id="show-password" data-password-visibile onclick="mostraPassword('login-password-input', 'immagine-mostra-password', this, event)">
                                        <img src="assets/immagini/mostra.png" class="img-fluid mostra-password" alt="mostra password" id="immagine-mostra-password">
                                    </button>
                                </div>
                                <div class="d-flex justify-content-start" id="passwordDimenticata" onclick="switchForm('form-accesso', 'form-password-dimenticata')"><a href="#"><u>Password dimenticata</u></a></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 d-flex justify-content-center gap-3 w-100">
                                <div class=" w-75">
                                    <?php
                                        if (isset($_GET["error"])) {
                                            echo "<div id='msg-accesso-fallito'><p class='text-danger'>Email e/o password non validi</p></div>";
                                        }
                                    ?>
                                    
                                    <input type="submit" class="btn pulsante-accesso fs-5 bg-blu-chiaro text-white w-100 mb-2" value="ACCEDI">
                                    <div>
                                        <button type="button" class="redirect-registrazione btn" onclick="switchForm('form-accesso', 'form-registrazione')">Registrati</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <!-- Form registrazione -->
                    <form action="" method="post" class="container col-12 col-md-9 d-none" name="form-registrazione" id="form-registrazione"> <!-- TODO Aggiungere php | d-none-->
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="singup-nome-input" class="fs-4 form-label text-start w-100">Nome</label>
                                    <input type="nome" class="form-control" id="nome-input">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="singup-cognome-input" class="fs-4 form-label text-start w-100">Cognome</label>
                                    <input type="Cognome" class="form-control" id="Cognome-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="singup-email-input" class="fs-4 form-label text-start w-100">Email</label>
                                    <input type="email" class="form-control" id="email-input">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <!-- TODO Questo deve essere un select -->
                                <div class="mb-3">
                                    <label for="singup-ruolo-input" class="fs-4 form-label text-start w-100">Ruolo</label>
                                    <input type="ruolo" class="form-control" id="ruolo-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label for="singup-password-input" class="fs-4 form-label text-start w-100">Password</label>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <input type="password" class="form-control" id="singup-password-input" name="password">
                                        <button type="button" class="mostra-password btn" id="show-password" data-password-visibile onclick="mostraPassword('singup-password-input', 'immagine-mostra-singup-password', this, event)">
                                            <img src="assets/immagini/mostra.png" class="img-fluid mostra-password" alt="mostra password" id="immagine-mostra-singup-password">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="mb-4">
                                    <label for="singup-conferma-password-input" class="fs-4 form-label text-start w-100">Conferma Password</label>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <input type="password" class="form-control" id="singup-conferma-password-input" name="password">
                                        <button type="button" class="mostra-password btn" id="show-password" data-password-visibile onclick="mostraPassword('singup-conferma-password-input', 'immagine-mostra-singup-comferma-password', this, event)">
                                            <img src="assets/immagini/mostra.png" class="img-fluid mostra-password" alt="mostra password" id="immagine-mostra-singup-comferma-password">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 d-flex justify-content-center gap-3 w-100">
                                <div class=" w-75">
                                    <input type="submit" class="btn pulsante-accesso fs-5 bg-blu-chiaro text-white w-100 mb-2" value="REGISTRATI">
                                    <div>
                                        <button type="button" class="redirect-registrazione btn" onclick="switchForm('form-registrazione', 'form-accesso')">Accedi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Password dimenticata -->
                    <form action="" method="post" class="" name="form-password-dimenticata" id="form-password-dimenticata">
                        <div class="row">
                            <div class="col">
                                
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

        <script src="js/index/visibilitàPassword.js"></script>
        <script src="js/index/formSwitch.js"></script>
    </body>
</html>