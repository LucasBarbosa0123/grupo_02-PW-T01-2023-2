<?php
include_once '../conexao.php';

if(isset($_POST['email']) && strlen($_POST['email']) > 0){
    if(!isset($_SESSION)){
        session_start();
    }
        $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
        $_SESSION['senha'] = $_POST['senha'];

        $sql_username = "SELECT nome FROM usuarios WHERE email = '$_SESSION[email]'";
        $result = $mysqli->query($sql_username);
        $row = $result->fetch_assoc();
        $_SESSION['nome'] = $row['nome'];
        $result->free();

        $sql_code = "SELECT senha, id FROM usuarios WHERE email = '$_SESSION[email]'";
        $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;
        $erro[] = "";

        if($total == 0){
            $erro[] = "Este email não pertence à nenhum usuário.";
        }else{
            if($dado['senha'] == $_SESSION['senha']){
                $_SESSION['usuario'] = $dado['id'];

                echo "<script>
                location.href='./../Home/index.php';
                </script>";

            }else{
                $erro[] = "Senha incorreta.";
            }
        }

        if(count($erro) == 0 || !isset($erro)){
            echo "<script>
            alert(`Login efetuado com sucesso`);
            location.href='./../Home/index.php';
            </script>";
        }
        if(count($erro) > 0)
        foreach($erro as $msg){
            echo "<p>$msg</p>";
        }
}       
?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <p><input value="" name="email" placeholder="E-mail" type="text"></p>
        <p><input value="" name="senha" type="password"></p>
        <p><input value="Entrar" type="submit"></p>
        <p><input value="Registrar" type="submit"></p>
</body>
</html>