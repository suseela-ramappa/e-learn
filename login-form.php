
<html>
    <head>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <style>
      *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
section{
    display:flex;
    justify-content:center;
    align-items:center;
    width:100%;
    height:100%;
    background-image:url(../images/login-image.png);
    background-position:center;
    background-size: cover;
    animation: animateBg 5s linear infinite;
}
/* @keyframes animateBg {
    100%{
        filter:hue-rotate(360deg);
    }
} */
body{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background-image:url(../images/login-image.png);
    width:100%;
    height: 100%; 
    background-position:center;
    background-size: cover;
}
.main-box{
    position:relative;
    width:400px;
    height:450px;
    background:transparent;
    border:1px solid rgba(255,255,255,.5);
    border-radius:20px;
    display:flex;
    justify-content:center;
    align-items:center;
    backdrop-filter:blur(5px);
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.5); 
}
.main-box::before {
    content: "";
    position: absolute;
    border-radius:20px;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    /* background: rgba(255, 255, 255, 0.1);  */
    z-index: -1;
    filter: blur(0.3px);
}
h2{
    font-size:2em;
    color:#fff;
    text-align:center;
    margin-top:-20px;
}
.input-box{
    position:relative;
    width:310px;
    margin:30px 0px;
    border-bottom:2px solid #fff;
}
.input-box label{
    position:absolute;
    top:50%;
    left:5px;
    transition:translatey(-50%);
    font-size:1em;
    color:#fff;
    pointer-events:none;
    transition:.5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top:-5px;
}
.input-box input{
    width:100%;
    height:50px;
    background:transparent;
    border:none;
    outline:none;
    font-size:1em;
    font-weight:bold;
    color:pink;
    padding:0 35px 0 5px;
}
.input-box .icon{
    position:absolute;
    right:8px;
    top:15px;
    color:#fff;
    font-size:1.2em;
    line-height:80px;
}
button{
    width:100%;
    height:40px;
    background:#fff;
    border:none;
    border-radius:40px;
    outline:none;
    cursor:pointer;
    font-size:1em;
    color:#ooo;
    font-weight:700;
}
.register-link{
    font-size:1em;
    color:#fff;
    text-align:center;
    margin:25px 0 10px;
}
.register-link p a{
    color:#fff;
    text-decoration:none;
    font-weight:600px;
    font-size:20px;
}
.register-link p a:hover{
    text-decoration:underline;
    color:orange;
}
.fa-circle-xmark{
    font-size:30px;
    position:absolute;
    margin-top:-200px;
    margin-left:350px;
    z-index:1;
    color:#fff;
}
        </style>

    <body>
        <section>
        <a href="head.php"><i class="fa-regular fa-circle-xmark"></i></a>
      
    <div class="main-box">
        <form action="login.php" method="POST" autocomplete="off">
            <h2>Login</h2>

            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="username" required />
                <label>Username</label>
            </div>

            <div class="input-box">
                <span class="icon"><i class="fa-solid fa-lock"></i></span>
                <input type="password" name="pass" minlength="6" maxlength="10" required />
                <label>Password</label>
            </div>

            <button type="submit" class="login-btn">Login</button>
                 <div class="register-link">
                    <p>Don't have an account? <a href="register-form.php"><b>signup</b></a></p> 
                </div>
        </div>
</section>
        </form>
    </body>
</html>