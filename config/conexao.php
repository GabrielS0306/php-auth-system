<?php 

    // Conexão com o banco de dados
    try {
        $host = "localhost";
        $dbname = "auth_system";
        $user = "root";
        // Sua senha MySql (caso tenha)
        $password = "";

        $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Conexão realizada com sucesso!";
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

?>
