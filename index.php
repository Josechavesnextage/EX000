<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - # EX000</title>
    <style>
        /* CSS Básico só para não ficar feio */
        body { font-family: Arial; text-align: center; margin-top: 100px; }
        .caixa { border: 1px solid #ccc; padding: 20px; width: 300px; margin: 0 auto; }
        input { display: block; width: 90%; margin: 10px auto; padding: 8px; }
        button { padding: 10px 20px; cursor: pointer; }
        .erro { color: red; }
    </style>
</head>
<body>

    <div class="caixa">
        <h2>Acesso - EX000</h2>
        
        <?php if ($erro != '') echo "<p class='erro'>$erro</p>"; ?>

        <form method="POST">
            <input type="text" name="usuario" placeholder="Digite seu usuário" required>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>