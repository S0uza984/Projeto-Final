<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
</head>
<body>
    <div id="login-container">
        <h2>Faça o Login</h2>
        <form action="processar_login.php" method="POST">
            <div class="form-group">
                <label for="username">Nome de Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
