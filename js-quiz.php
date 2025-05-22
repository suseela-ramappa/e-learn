<?php
 include("menu1.php")
 ?>
 <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* .body{
                background-color:red;
            } */
            /* .navbar{
                margin-top:-200px;
            } */
            .quiz{
                background:#ebf5fc;
                display:flex;
            }
            .content{
                margin-left:200px;
                margin-top:310px;
                /* display:flex;
                column-gap:50px; */
            }
            a{
                text-decoration:none;
                color:white;
                font-size:large;
            }
            .quiz1,.quiz2,.quiz3{
                width:400px;
                height:100px;
                padding:20px;
                background:skyblue;
                color:white;
                border-radius:10px;
                text-align:center;
            }
            .quiz2{
                background:blue;
         
            }
            .quiz3{
                background:navy;
            }
            h2{
                margin-top:-100px;
                margin-left:130px;
                color:navy;
            }
            .image{
                width:500px;
                height:500px;
                margin-top:320px;
                margin-left:100px;
            }
            h1{
                margin-top:-710px;
                margin-left:500px;
                font-size:50px;
                /* border:4px solid navy; */
                color:purple;
                /* border-bottom:3px solid orange; */
            }
            </style>
    <body>
        <div class="page">
            
             <div class="quiz">
             
                 <div class="content">
                   
                    <h2 class="head">Test Yourself</h2><br><br>
                    <div class="quiz1"><a href="java-quiz1.php">Start Quiz 1<br><bR>(Easy)</a></div><bR><br>
                    <div class="quiz2"><a href="java-quiz1.php">Start Quiz 2<br><br>(Medium)</a></div><bR><br>
                    <div class="quiz3"><a href="java-quiz1.php">Start Quiz 3<br><br>(Hard)</a></div><bR><br>
       
                </div>
                <div class="image"><img src="../images/quiz-1.png"> </div> 
  
            </div>
            <h1 class="head">Welcome To Java-Script Quiz</h1><br><br><br>
        </div>
        </body>
