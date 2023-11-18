<?php
include("../protect.php");
protect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Z-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Trabalho 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main">
        <header class="header">
            <a href="#" class="logo">Quiz.</a>

            <nav class="navbar">
                <a href="index.php" class="active"><button class="home-btn">Home</button></a>
                <a href="./../login/logout.php"><button class="logout-button"> logout </button></a>
                <a href="./../ranking/ranking.html"><button class="ranking-btn">Ranking</button></a>
                <a href="./../criarQuiz/criarQuiz.php"><button class="criarQuiz-btn" >Criar quiz</button></a>
            </nav>
        </header>

    <div class="container">
        <section class="quiz-section">
        </section>
        <section class="home">
            <div class="home-content">
                <h1>Quiz website</h1>
                <p>Bem-vindo ao webQuiz
                </p>
                <a href="./../quiz/quiz.php"><button class="start-btn">Start Quiz</button></a>
            </div>
        </section>
    </div>
    </main>
</body>

</html>