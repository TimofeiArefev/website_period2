<?php
    $user = "root";
    $passwordDB = "qwerty";
    try {
        $db = new PDO("mysql:host=mysql;dbname=morningdb", $user, $passwordDB);
    } catch (PDOException $e) {
        echo $e;
    }
?>