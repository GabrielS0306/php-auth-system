<?php

    try {
        $host = "localhost";
        $port = "3306";
        $dbname = "dev_panel";
        $user = "root";
        $password = "";

        $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
        $conexao = new PDO($dsn, $user, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Erro na conexao com o banco: " . $e->getMessage());
        $conexao = null;
    }
