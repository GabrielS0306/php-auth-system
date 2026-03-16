<?php 

    // Conexão com o banco de dados
    try {
        $host = "localhost";
        $port = "3307";
        $dbname = "php_auth_system";
        $user = "root";
        // Sua senha MySql (caso tenha)
        $password = "";

        $conexao = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

?>
