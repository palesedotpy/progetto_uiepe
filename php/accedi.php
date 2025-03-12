<?php

    include "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = create_connection();

        $email = $_POST["login-email"];

        $query = "SELECT email, password FROM u_utente";
        $res = $conn -> query($query);

        print_r($res -> fetch_assoc());
        echo "<br>";
        if (($res -> num_rows) >= 1) {
            header('Location: home.html');
        }
        else {
            header('Location: index.html?error=1');
        }
    }
?>