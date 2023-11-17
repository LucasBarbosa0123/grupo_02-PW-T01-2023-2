<?php
session_start();
include_once '../conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correta = $_POST["correta"];

    // Inserir enunciado no banco de dados
    $enunciado = $_POST["enunciado"];
    $stmtEnunciado = $conn->prepare("INSERT INTO perguntas (questao) VALUES (:enunciado)");
    $stmtEnunciado->bindParam(':enunciado', $enunciado);

    if ($stmtEnunciado->execute()) {
        $enunciadoId = $conn->lastInsertId();

        // Inserir alternativas associadas ao enunciado
        if (isset($_POST['alternativa']) && is_array($_POST['alternativa'])) {
            $conn->beginTransaction();

            $contador = 1;
            $incorreta = 2;
            $correta = 1;
            foreach ($_POST['alternativa'] as $alternativa) {
                $stmtAlternativa = $conn->prepare("INSERT INTO alternativas (resposta, pergunta_id, val_resposta)
                 VALUES (:alternativa, :enunciadoId, :correta)");
                $stmtAlternativa->bindParam(':alternativa', $alternativa);
                $stmtAlternativa->bindParam(':enunciadoId', $enunciadoId);
                if($contador ==  $correta)
                {
                    $stmtAlternativa->bindParam(':correta', $correta);
                }else{
                    $stmtAlternativa->bindParam(':correta', $incorreta);
                }
                $stmtAlternativa->execute();
                $contador = $contador + 1;
            }

            $conn->commit();
            echo "Enunciado e alternativas enviadas com sucesso!";
        } else {
            echo "Erro: Nenhuma alternativa foi enviada.";
        }
    } else {
        echo "Erro ao enviar enunciado: ";
    }
}
?>
<script>
    window.onload = function() {
        window.location.href = "criarQuiz.php"
    };
</script>