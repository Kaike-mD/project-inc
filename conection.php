<?php 

$host = 'localhost';
$database = 'carteira';
$user = 'root';
$pass = '';


// CRIANDO CONEXÃO E TRATANDO ERROS
try {
    // CRIANDO NOVA INSTÂNCIA PDO
    $pdo = new PDO('mysql:host=localhost;dbname=carteira', $user, $pass); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Conexão com o banco de dados realizada com sucesso!';
    
} catch (PDOException $error) {

    // MENSAGEM PARA RELATAR ERRO
    echo 'ERROR: ' . $error->getMessage();

}



?>