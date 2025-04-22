<?php 
include 'conexao.php';
session_start();

// Recebe os dados do formulário
$email = $_POST['textEmail'];
$senha = $_POST['txtSenha'];

// Verifica se os campos estão vazios
if (empty($email) || empty($senha)) {
    header('Location:loginForm.php?erro=campos_vazios');
    exit();
}

try {
    // Usa parâmetro nomeado para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT id_usuario, primeiro_nome, email, senha, status FROM usuario WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Verifica se encontrou 1 usuário
    if ($stmt->rowCount() == 1) {
        $exibe = $stmt->fetch(PDO::FETCH_ASSOC);

        //if (password_verify($senha, $exibe['senha'])) {   n.b por trocar senha HASH no banco
        if ($senha === $exibe['senha']) {
		$_SESSION['ID'] = $exibe['id_usuario'];
            $_SESSION['NOME'] = $exibe['primeiro_nome'];
            header('Location:home/index.php');
            exit();
        } else {
            // Senha incorreta
            header('Location:loginForm.php?erro=senha');
            exit();
        }
    } else {
        // Usuário não encontrado
		echo 'nao encotro nada';
        header('Location:loginForm.php?erro=email');
        exit();
    }
} catch (PDOException $e) {
    echo "Erro ao consultar o banco de dados: " . $e->getMessage();
}
?>
