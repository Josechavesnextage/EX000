<?php
session_start();

// Vai Conectar ao banco de dados (Host, Usuário, Senha, Nome do Banco)
$conexao = new mysqli('localhost', 'root', '', 'ex000');

$erro = '';

// 2. Verifica se o formulário foi enviado
if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // 3. Procura no banco se existe esse usuário com essa senha
    $sql = "SELECT * FROM USUARIO WHERE usuario = '$usuario' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    // 4. Se encontrou pelo menos 1 linha, o login está certo!
    if ($resultado->num_rows > 0) {
        $_SESSION['logado'] = true;
        header("Location: index.php"); // Redireciona para o menu
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>