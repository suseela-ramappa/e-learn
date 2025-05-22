<?php
 include("java.php")
 ?>
 <html>
<head>
    <style>
        .content{
            margin-right:50px;
            margin-left:300px;
            margin-top:100px;
           
            border:3px solid rgba(221,146,0, 74%); 
            border-radius:10px;
            color:rgba(6, 29, 61, 100%);
            font-weight:500;
        }
        .matter{
             margin-left:150px;
             margin-bottom:100px;
        }
        .content h2{
           margin-top:50px;
           margin-left:200px;
           font-size:40px;
           font-style:italic;
           color:rgba(221,146,0, 74%)
        }
        p{
            margin-left:40px;
            font-size:20px;
            line-height:30px;
        }
        h3{
            font-size:30px;
            color:rgba(221,146,0, 74%);
            margin-left:40px;
        }
        .prg{
            border:2px solid orange;
            background:rgb(67, 66, 66);
            width:800px;
            padding:20px;
            margin-left:50px;
            color:orange;
        }
        .fa-circle{
            font-size:8px;
            color:rgba(6, 29, 61, 100%)
        }
        .sub{
            margin-left:80px;
        }
        .break{
            height: 300px;
            width: 400px;
            margin-left:150px;
        }
        </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>jump Statement</h2><br><br><br>
                <p><b>Jumping statements</b> are control statements that move program<br>
execution from one location to another.<br><br>
<p>Jump statements are used to shift program control unconditionally from<br>
one location to another within the program. Jump statements are typically<br>
used to forcefully end a loop or switch-case.<br> <br>
<h3 style="color:maroon">Types of Jumping Statements</h3><br>
<p>In Java, there are three types of Jumping Statements:<br><br>
<p class="sub"><B>1. Break statement
<p class="sub">1. continue statement
<p class="sub">3. return loop</b><br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; </b>Break statement:<br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The ‘break’ statement in Java terminates the<br>
loop immediately, and the control of the program moves to the next<bR>
statement following the loop.<br><br>
<p>It is almost always used with decision-making statements (Java if...else<br>
Statement).<br><bR>
<p>Here is the syntax of the break statement in Java:<br><br>
<pre class="prg">break;</pre><br><br>
<img src="../images/break.png" class="break"><br><br><br>
<p><b style="color:navy">Example 1: Java break statement</b><br>
<pre class="prg">class Topperworld {<br>
 public static void main(String[] args) <br>{

 // for loop<br>
 for (int i = 1; i <= 10; ++i) {<br>
 // if the value of i is 5 the loop terminates<br>
 if (i == 5) {<br>
 break;<br>
 }<br>
 System.out.println(i);<br>
 }<br>
 }</pre><br>

 <p><b>Output</b>
 <pre class="prg">1<br>
2<br>
3<br>
4<br></pre><br><br>
<p>In the above program, we are using the for loop to print the value of i in<br>
each iteration.
<pre class="prg">if (i == 5) {<br>
 break;<br>
}</pre><br><br>
<p>This means when the value of i is equal to 5, the loop terminates. Hence<br>
we get the output with values less than 5 only.<br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Continue statement:</b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <b>‘continue’</b> statement skips the<br>
current iteration of a loop (for, while, do…while, etc).<bR><br>
<p>After the continue statement, the program moves to the end of the loop.<br>
And, test expression is evaluated (update statement is evaluated in case<br>
of the for loop).<br><br>
<p>Here's the syntax of the continue statement.<br>
<pre class="prg">continue;</pre><br><br>
<img src="../images/continue.png" class="break"><br><br><br>
<p><b style="color:navy">Example : Java continue statement</b><br>
<pre class="prg">class Main {<br>
 public static void main(String[] args) {<br>
 // for loop<br>
 for (int i = 1; i <= 10; ++i) {<br>
 // if value of i is between 4 and 9<br>
 // continue is executed<br>
 if (i > 4 && i < 9) {<br>
 continue;<br>
 }<br>
 System.out.println(i);<br>
 }<br>
 }</pre><br>

 <p><b>Output</b>
 <pre class="prg">1<br>
2<br>
3<br>
4<br>
9<br>
10<br></pre><br><br>
<p>In the above program, we are using the for loop to print the value of i in
each iteration.<br><br>
<pre class="prg">if (i > 4 && i < 9) {<br>
 continue;<br>
}</pre><br><br>
<p>Here, the continue statement is executed when the value of i becomes<br>
more than <b>4</b> and less than <b>9</b>.<br><br>
<p>It then skips the print statement for those values. Hence, the output skips<br>
the values <b>5</b>, <b>6</b>, <b>7</b>, and <b>8</b>.<br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Return statement:</b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The ‘return’ keyword is used to transfer<br>
a program’s control from a method back to the one that called it. Since<br>
the control jumps from one part of the program to another, return is<br>
also a jump statement.<bR><br>
<pre class="prg">public class Main {<br>
 public static int add(int a, int b){<br>
 int sum = a+b;<br>
 return sum;<br>
 }<br>
 public static void main(String[] args) {<br>
 int x = 5, y = 10;<br>
 int sum = add(x, y);<br>
 System.out.println("Sum of a and b: " + sum);<br>
 }<br>
}
</pre><br>

 <p><b>Output</b>
 <pre class="prg">
 Sum of a & b: 15</pre><br><br>
