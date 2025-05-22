<?php
  include("menu1.php")
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Quiz App</title>
    <style>
    body {
    font-family: 'Arial', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-color: #ebf5fc;
}
.navbar{
    margin-top:-660px;
}
#quiz-container {
    /* max-width: 600px; */
    width: 800px;
    height:600px;
    font-size:20px;
    font-weight:bold;
    background-color: white;
    border-radius: 10px;
    padding: 20px;
    border:5px solid orange;
    margin-top:100px;
}
h1{
        text-align: center;
        color:navy;
        font-size:50px;
        margin-top:-30px;
}
.btn-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.btn {
    padding: 10px;
    font-size: 16px;
    cursor: pointer;
    border: 2px solid rgba(138,187,232,50%);
    border-radius: 5px;
    background-color: white;
    transition: 0.3s;
}

#next-button:hover {
    background-color: rgba(138,187,232,50%);
}

.timer {
    font-size: 20px;
    margin-top: 30px;
    color: navy;
    border:2px solid black;
    width:235px;
    padding:10px;
}

.correct {
    border: 2px solid green;
    background:rgba(75, 227, 62,31%)
}

.incorrect {
    border: 2px solid red;
    background:rgba(227, 62, 62,31%);
}

.score {

}


#next-button {
    display: none;
    margin-left:670px;
    margin-top:-40px;
    padding:10px 20px;
    border: 2px solid navy;
}
.close i{
    margin-top:-520px;
    margin-left:520px;
    color:navy;
    font-size:30px;
    position:fixed;
}
.score{
    margin-left:250px;
    font-size: 40px;
    margin-top: 100px;
    color: black;
}
.close-link {
            position: relative;
            left:720px;
            font-size: 30px;
            color:navy;
            text-decoration: none;
        }
.quiz-completed {
    color: green;       
    font-weight: bold;
    font-size:30px;
    margin-left:270px;
}
</style>

</head>
<body>
    <div id="quiz-container">
        <a href="java-quiz.php" class="close-link"><i class="fa-solid fa-circle-xmark"></i></a>
        <h1 id="quizTimeContainer">Quiz Time!</h1><br><bR>
        <div id="question-container"></div><br>
        <div id="answer-buttons" class="btn-container"></div>
        <div id="timer" class="timer"></div>
        <button id="next-button" class="btn" onclick="nextQuestion()">Next</button>
        <div id="score-container" class="score"></div><br><Br><br><BR>
   
        <div id="quizResultContainer"></div>
    </div>

    <script src="java-quiz2.js"></script>
</body>
</html>
