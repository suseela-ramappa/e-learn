<?php
 include("menu1.php")
 ?>
 <html>
 <head>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <style>
section{
    padding-top:100px;
    display:flex;
    align-items:center;
    justify-content:center;
    column-gap:120px;
    background:#ebf5fc;
    height:100%
}
.main-box{
    margin-left:-px;
}
h1{
    font-size:80px;
    font-style:Poppins;
    font-weight:100;
    color:navy;
}
input{
    width:600px;
    height:60px;
    border:none;
    outline:none;
    border-radius:40px;
    background: #ebf5fc;
    padding-left:50px;
    line-height:20px;
    background:rgba(135,206,235,17%);
}
.input-box{
    position:relative;
}
textarea{
    width:600px;
    height:200px;
    border:none;
    outline:none;
    border-radius:10px;
    background: #ebf5fc;
    padding:25px;
    background:rgba(135,206,235,17%);
}
.icon{
    position:absolute;
    left:20px;
    top:20px;
    z-index:100;
}
.image img{
    height:500px;
    width:600px;
    margin-top:20px;
}
button{
    width:600px;
    height:60px;
    border:none;
    outline:none;
    border-radius:40px;
    background: skyblue;
    padding-left:50px;
    line-height:20px;
    color:black;
    font-size:large;
    align-items:center;
}
        </style>
</head>
<body>
    <section>
        
     <div class="main-box">
            <form action="contact.php" method="post">
                <h1>Contact Us</h1><bR><Br>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text"  name="name" placeholder="Name" required></input>
                </div><br>

                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" placeholder="Email" required></input>
                </div><br>

                <div class="input-box">
                    <textarea placeholder="Message" name="message" required></textarea>
                </div><br>

                <button type="submit">Send Message</button>
    </div>
    <div class="image"><img src="../images/contact.png">

</section>