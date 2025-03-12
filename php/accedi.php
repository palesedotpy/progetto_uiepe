<?php

    include "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = create_connection();

        $email = $_POST["login-email"];
        $password = $_POST["login-password"];

        $query = "SELECT email, password FROM u_utente WHERE email='$email'";
        $res = $conn -> query($query);

        if (($res -> num_rows) >= 1) {
            header('Location: home.php');
        }
        else {
            header('Location: ../index.php?error=1');
        }
    }
?>