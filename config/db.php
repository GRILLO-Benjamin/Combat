<?php 
    try {
        /* Connexion à une base MySQL avec l'invocation de pilote */
        $dsn = 'mysql:dbname=combat;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $db = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    } catch (\Throwable $th) {
        throw $th;
    }
?>