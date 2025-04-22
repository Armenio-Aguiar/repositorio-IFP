<?php 
$server = '127.0.0.1';
$senha = '';
$usuario = 'root';
$banco = 'repositório';

try {
    // Tenta criar a conexão com PDO
    $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Se chegou aqui, a conexão foi bem-sucedida
    echo "✅ Conexão realizada com sucesso!";
} catch (PDOException $e) {
    // Se houve erro, exibe mensagem de erro
    echo "❌ Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
