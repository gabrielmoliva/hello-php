<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASS", "root");
    define("BASE", "visu_clientes");

    $conn = new mysqli(HOST, USER, PASS, BASE);
    $conn->select_db(BASE);