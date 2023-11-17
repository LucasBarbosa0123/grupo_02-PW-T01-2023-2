<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Quiz</title>
    <link rel="stylesheet" href="criarQuiz.css">
</head>
<body>
    <div class="container">
        <h1>Criar quiz</h1>

        <form action="processaCriarQuiz.php" method="post">

            <label for="enunciado">Enunciado da questão:</label>
            <input type="text" id="enunciado" name="enunciado" required>

            <div class="alternativas">
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "<div>";
                    echo "<label for='alternativa{$i}'>Alternativa {$i}:</label>";
                    echo "<input type='text' id='alternativa{$i}' name='alternativa[]'></input>";
                    echo "</div>";
                }
                ?>
            </div>

            <label for="correta">Alternativa correta</label>
            <input type="number" id="correta" name="correta" required>

            <div class="buttons">
                <a href="./../Home/index.html"><button type="button" class="voltar-btn">Voltar</button></a>
                <button type="submit" class="criar-btn">Criar</button>
            </div>
        </form>
    </div>
</body>
</html>