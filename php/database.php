<?php

    function create_connection() {
        $conn = new mysqli("localhost", "root", "", "uiepe_db");
        
        if ($conn -> connect_error) {
            echo "You are not connected";
            return false;
        }
        
        return $conn;
    }

?>