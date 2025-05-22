           
   <html>
    <head>
        <!-- <link rel="stylesheet" href="../css/style.css"> -->
        <style>
            /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap'); */
             *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Poppins',sans-serif;
}
.logo img{
    height:50px;
    width:150px;
    margin-left:20px;
    margin-top:5px
}
.navbar{
    width: 100%;
    height: 70px;
    display: flex block;
    column-gap: 350px;
    background-color: white;
    position: fixed;
    z-index:100;
    box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.76);
    -webkit-box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.76);
    -moz-box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.76);
}

.menu{
    height: 70px;
    float:left;
    margin-top: 5px;
     padding:15px; 

}
ul{
    float:left;
    display: flex block;
   column-gap: 80px;
    align-items: center;
    margin-top:5px;
}
ul li a{
    color:rgba(6, 29, 61, 100%);
    font-size: 20px;
    font-weight: bold;
    transition:0.4s ease-in-out;
    border: 3px solid transparent;
    padding:5px;
    border-radius: 10px;
    
}
li a:hover{
    color:orange;
    border-bottom:3px solid rgba(6, 29, 61, 89%);
    /* border: 2px solid rgba(6, 29, 61, 89%);
    padding:5px;
    border-radius: 10px; */
}
.signin {
    margin-left: -250px;
    margin-top: 20px;
}
.signin a{
    color: rgba(6, 29, 61, 100%);
    font-weight:100;
    font-size: 25px;
    padding: 5px 10px;;
    border: 2px solid rgba(6, 29, 61,100%);
    border-radius: 20px;
    transition:0.4s ease-in-out;
}
.signin a:hover{
    background-color: rgba(221,146,0, 74%) ;
    border:none;
} 
</style>
    <body>        
           
           
           <div class="navbar">
                <div class="logo">
                    <img src="../images/Screenshot (81).png">
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="head1.php">home</a></li>
                        <li><a href="coursepage1.php">courses</a></li>
                        <li><a href="quizpage.php">quiz</a></li>
                        <li><a href="contactpage.php">contact</a></li>
                    </ul>
                </div>
                <div class="signin"><a href="login-form.php">login</a></div>
            </div>