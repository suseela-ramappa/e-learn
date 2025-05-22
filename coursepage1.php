<?php
 include("menu1.php")
 ?>
 <html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            /* @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900&display=swap'); */

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    /* font-family: 'Poppins',sans-serif; */
}
.navbar{
    margin-top:-1042px;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #ebf5fc;
}

.container {
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    width: 1100px;
    margin-top:100px;
}

.container .card {
    width: 320px;
    margin: 20px;
    padding: 40px 30px;
    background: #ebf5fc;
    border-radius: 40px;
    box-shadow: -6px -6px 20px rgba(255,255,255,1),6px 6px 20px rgba(0,0,0,0.1);
}

.container .card:hover {
    box-shadow: inset -6px -6px 20px rgba(255,255,255,0.5),inset 6px 6px 20px rgba(0,0,0,0.05);
}

.container .card .imgBx {
    position: relative;
    text-align: center;
}

.container .card .imgBx img {
    max-width: 120px;
}

.container .card .contentBx {
    position: relative;
    margin-top: 20px;
    text-align: center;
    line-height:30px;
}

.container .card .contentBx h2 {
    color: #0575E6;
    /* font-weight: 700; */
    font-size: 25px;
    letter-spacing: 2px;
   
}

.container .card .contentBx p {
    color: #3a9bdc;
}

.container .card .contentBx a {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 15px;
    border-radius: 40px;
    color: #3a9bdc;
    font-size: 16px;
    text-decoration: none;
    box-shadow: -4px -4px 15px rgba(255,255,255,1),4px 4px 15px rgba(0,0,0,0.1);
}

.container .card .contentBx a:hover {
    box-shadow: inset -4px -4px 10px rgba(255,255,255,0.5),inset 4px 4px 10px rgba(0,0,0,0.1);
}

.container .card a:hover span {
    display: block;
    transform: scale(0.98);
}

.container .card:hover .imgBx,.container .card:hover .contentBx {
    transform: scale(0.98);
}
a{
    font-size: 25px;
    font-weight: bold;
}
.contentBx{

}

</style>
            
    </head>
    <div class="body">
	<div class="container">
		<div class="card">
			<div class="imgBx">
				<img src="https://cdn.pixabay.com/photo/2021/03/27/06/31/code-6127616__340.png" alt="">
			</div>
			<div class="contentBx">
				<h2>HTML</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="html.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747__340.png" alt="">
			</div>
			<div class="contentBx">
				<h2>CSS</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="css.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="https://cdn.pixabay.com/photo/2017/03/30/17/41/javascript-2189147__340.png" alt="">
			</div>
			<div class="contentBx">
				<h2>JavaScript</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="js.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
        <div class="card">
			<div class="imgBx">
				<img src="../images/mysql.png" alt="">
			</div>
			<div class="contentBx">
				<h2>MySql</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="mysql.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="../images/java.jpg" alt="">
			</div>
			<div class="contentBx">
				<h2>JAVA</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="java.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
		<div class="card">
			<div class="imgBx">
				<img src="../images/python.jpg" alt="">
			</div>
			<div class="contentBx">
				<h2>PYTHON</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laboriosam omnis dolore amet sequi nobis provident nisi esse optio recusandae quod.</p>
				<a href="python.php">
					<span>Read More</span>
				</a>
			</div>
		</div>
	</div>

</div>

                    <!-- <div class="row1">
                        <div class="card"><a href="html.php"><img src="../images/html.jpg"></a></div>
                        <div class="card"><a href="css.php"><img src="../images/css.jpg"></a></div>
                        <div class="card"><a href="php.php"><img src="../images/php.jpg"></a></div>
                    </div> -->
                    <!-- <div class="row2">
                        <div class="card"><a href="js.php"><img src="../images/javascript.jpg"></a></div>
                        <div class="card"><a href="java.php"><img src="../images/java.jpg"></a></div>
                        <div class="card"><a href="python.php"><img src="../images/python.jpg"></a></div>
                    </div>
                </div> -->
        </div>


     