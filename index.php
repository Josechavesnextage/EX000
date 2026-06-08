<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - # EX000</title>
    <style>
        /* Fundo com um tom cinza-azulado bem suave */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f0f4f8; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Caixa de login branca com bordas arredondadas e sombra suave */
        .caixa { 
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px; 
            width: 320px; 
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Título em azul-escuro */
        h2 { 
            margin-top: 0;
            margin-bottom: 20px;
            color: #1a365d; 
            font-size: 24px;
        }

        /* Inputs com bordas que mudam de cor ao clicar */
        input { 
            display: block; 
            width: 100%; 
            margin-bottom: 15px; 
            padding: 12px; 
            border: 1px solid #cbd5e1; 
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            outline: none;
            transition: border-color 0.2s;
        }

        /* Efeito de clique no input */
        input:focus {
            border-color: #3182ce;
        }

        /* Botão azul com efeito de hover (mudar de cor ao passar o mouse) */
        button { 
            width: 100%;
            padding: 12px; 
            background-color: #3182ce;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        /* Cor do botão ao passar o mouse */
        button:hover { 
            background-color: #2b6cb0;
        }

        /* Caixa de erro em tom vermelho/rosa suave */
        .erro { 
            background-color: #fed7d7;
            color: #9b2c2c; 
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="caixa">
        <h2>Sistema # EX000</h2>
        
        <?php if ($erro != '') echo "<div class='erro'>$erro</div>"; ?>

        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>