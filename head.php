<?php
  include("menu.php")
  ?>
  <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
.homepage{
    width:100%;
    height: 100%; 
    opacity:1;
    display:flex;
    align-items:center;

}
.main{
    padding-top: 50px;
    background-image: url(../images/bg.png);
    width:100%;
    height: 100%; 
    background-position:center;
    background-size: cover;
}
.h-cont{
    font-size: 70px;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
    margin-left: 80px;
    margin-top: 130;
    color:white;
}
.quote{
    color: rgba(255, 255, 255,0.7);
    font-size: x-large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
    margin-top: 80px;
    margin-left:80px ;
}
.start{
    border: 0.2px solid rgba(255, 255, 255,0.2);
    border-radius: 10px;
    margin-left: 900px;
    padding:15px 20px;
}
.start a{
    color:white;
    font-size: 25px;
}
.start:hover{
    background-color: rgba(255,255,255,0.2);
}
</style>
    </head>
    <body>
        <div class="homepage">
            <div class="main">
            <div class="h-cont">
                LET'S GROW YOUR<BR> EDUCATION LEVEL UP <BR>WITH E-LEARN
            </div>  
            <div class="quote">
                start learning any programming language in an interesting way and unleash<br> your true potential 
            </div>   
            <span class="start">
               <a href="login-form.php">join us</a>
            </span>
            </div>  
        </div>
       
    </body>
</html>