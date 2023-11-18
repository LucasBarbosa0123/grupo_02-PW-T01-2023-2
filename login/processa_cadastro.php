<?php
include_once '../conexao.php';
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];


$sql_verifica_email = "SELECT id FROM usuarios WHERE email = '$email'";
$result_verifica_email = $mysqli->query($sql_verifica_email);

if ($result_verifica_email->num_rows > 0) {
    echo "O email já está cadastrado. Por favor, escolha outro email.";
}else{
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem. Tente novamente.";
    } else {
        // Insira os dados no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        $mysqli->query($sql);
    }   
}

echo "<script>
location.href='login.php';
</script>";
?>