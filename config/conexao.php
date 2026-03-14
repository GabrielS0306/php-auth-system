<?php 

    // Conexão com o banco de dados
    try {
        $host = "localhost";
        $dbname = "auth_system";
        $user = "root";
        // Sua senha MySql (caso tenha)
        $password = "@Biel03062008";

        $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

?>
