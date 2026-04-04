<?php 

    // Conexão com o banco de dados
    try {
        $host = "localhost";
        // sua porta MySql (caso tenha)
        $port = "";
        // O nome do seu banco de dados
        $dbname = "";
        // Seu usuário MySql (caso tenha)
        $user = "";
        // Sua senha MySql (caso tenha)
        $password = "";

        $conexao = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
    }

?>
