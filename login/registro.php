<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>
<body>

<h2>Cadastro</h2>

<form action="processa_cadastro.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br>

    <label for="confirmar_senha">Confirmar Senha:</label>
    <input type="password" name="confirmar_senha" required><br>

    <a><input type="submit" value="Cadastrar"></a>
</form>

</body>
</html>