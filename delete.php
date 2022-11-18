<?php
    if ( isset($_GET["id"]) ) {
        $id = $_GET["id"];

        $servename = "localhost";
        $username = "root";
        $password = "";
        $database = "myshop";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $database);

        $sql = "DELETE FROM clinets WHERE id=$id";
        $connection->query($sql);
    }

    header("location: /myshop/index.php");
    exist;
?>