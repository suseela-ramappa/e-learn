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
            padding:10px;
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
        .for{
            height: 500px;
            width: 300px;
            margin-left:90px;
        }
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Looping Statement</h2><br><br><br>
                <p>A <b>"looping statement" </b>is a programming instruction that lets you<br>
execute a block of code repeatedly as long as a certain condition is met.<br><br>
<p>It is a tool that helps you automate repetitive tasks and can be used to<br>
iterate over arrays, collections, and other data structures. Loops are an<br>
important programming construct that makes code more efficient and<br>
concise, and can help solve complex problems.<br><br>
<p><b>For example, </b>if you want to show a message 100 times, then rather<br>
than typing the same code 100 times, you can use a loop.  <br><br>
<h3 style="color:maroon">Types of Loops</h3><br>
<p>In Java, there are three types of loops:<br><br>
<p class="sub"><B>1. For loop
<p class="sub">2. For-each loop
<p class="sub">3. While loop
<p class="sub">4. Do..while loop</b><br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;For Loop </b>:<br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java for loop is used to run a block of code for a<br>
certain number of times. The syntax of for loop is:<br><br>
<pre class="prg">for (initialization; condition; increment/Decrement) {<br>
 // body of the loop<br>
}</pre><br><br>
<p>Here,<br><br>
<p class="sub">1. The <b>initialization</b>initializes and/or declares variables and executes<br>&nbsp;&nbsp;
only once.<br><br>
<p class="sub">2. The <b>condition</B> is evaluated. If the <b>condition</B> is true, the body of<br>&nbsp;&nbsp;
the for loop is executed.<br><br>
<p class="sub">3. The <b>increment/Decrement</b> updates the value<br>&nbsp;&nbsp;
of <b>initialExpression.</b><br><br>
<p class="sub">4. The <b>condition</b> is evaluated again. The process continues until<br>&nbsp;&nbsp;
the <b>condition</b> is false.<br>
<br><br>
<img src="../images/java-for.png" class="for"><br><br><br>
<p><b style="color:navy">Example : Display a Text Five Times</b><br>
<pre class="prg">// Program to print a text 5 times<br>
class Main { <br>
 public static void main(String[] args) {<br>
 int n = 5;<br>
 // for loop<br>
 for (int i = 1; i <= n; ++i) {<br>
 System.out.println("welcome to java");<br>
 }<br>
 }</pre><br>
 <p><b>Output</b><br><br>
 <pre class="prg">welcome to Java<br>
 welcome to java<br>
 welcome to java<br>
 welcome to java<br>
 welcome to java</pre><br><br><br>
 <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;For-each Loop </b>:<br><br>
 <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In Java, the <b>for-each loop</b> is used to iterate<br>
through elements of arrays and collections (like ArrayList). It is also<br>
known as the enhanced for loop. <br><br><br>
<p>The syntax of the Java <b>for-each loop</b> is:<br>
<pre class="prg">for(dataType item : array) {<br>
 ...<br>
}</pre><br><br>
<p>Here,<br><br>
<p class="sub">• &nbsp;&nbsp;<b>array </b>- an array or a collection<br><br>
<p class="sub">• &nbsp;&nbsp;<b>item</b> - each item of array/collection is assigned to this variable<br><br>
<p class="sub">• &nbsp;&nbsp;<b>dataType</b> - the data type of the array/collection
<br><br>
<p><b style="color:navy">Example : Print Array Elements</b><br>
<pre class="prg">// print array elements<br>
class Main {<br>
 public static void main(String[] args) {<br>

 // create an array<br>
 int[] numbers = {31, 9, 5, -15};
 <br>
 // for each loop<br>
 for (int number: numbers) {<br>
 System.out.println(number);<br>
 }<br>
 }<br>
}</pre><br>
<p><b>Output</b>
 <pre class="prg">31<br>
9<br>
5<br>
-15</pre><br><br>
<p>Here, we have used the <b>for-each loop</b> to print each element of<br>
the numbers array one by one.<br>
<p class="sub">• &nbsp;&nbsp;In the first iteration, element will be 31.<br>
<p class="sub">• &nbsp;&nbsp;In the second iteration, element will be 9.<br>
<p class="sub">• &nbsp;&nbsp;In the third iteration, element will be 5.<br>
<p class="sub">• &nbsp;&nbsp;In the fourth iteration, element will be -15.<br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;While Loop </b>:<br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java <b>while loop</b> is used to run a specific code<br>
until a certain condition is met. The syntax of the while loop is:<br><br>
<pre class="prg">while (condition) {<br>
 // body of loop<br>
}<br>
</pre><br>
<p>Here,<br><br>
<p class="sub">1. A while loop evaluates the <b>condition</b> inside the parenthesis ().<br><br>
<p class="sub">2. If the <b>condition</b> evaluates to true, the code inside the while loop is<br>
executed.
<br><br>
<p class="sub">3. The <b>condition</b> is evaluated again.<br><br>
<p class="sub">4. This process continues until the <b>condition</b> is false. is false.<br><br>
<p class="sub">5. When the <b>condition</b> evaluates to false, the loop stops..<br><br>
<img src="../images/java-while.png" class="for"><br><br><br>
<p><b style="color:navy">Example : Display Numbers from 1 to 5</b><br>
<pre class="prg">// Program to display numbers from 1 to 5<br>
class Main {<br>
 public static void main(String[] args) {<br>
 // declare variables<br>
 int i = 1, n = 5;<br>
 // while loop from 1 to 5<br>
 while(i <= n) {<br>
 System.out.println(i);<br>
 i++;<br>
 }<br>
 }<br>
}</pre><br>
<p><b>Output</b>
 <pre class="prg">1<br>
2<br>
3<br>
4<br>
5<br></pre><br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Do-While Loop </b>:<br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The <b>do…while </b>loop is similar to while loop.
However,<br> the body of do…while loop is executed once before the test<br>
expression is checked. <br><br>
<p>The syntax of the do…while loop is:<br><br>
<pre class="prg">do {<br>
 // body of loop<br>
} while(condition);</pre><br><br>
<p>Here,<br><br>
<p class="sub">1. The body of the loop is executed at first. Then the <b>condition</b> is<br>
&nbsp;&nbsp;&nbsp;&nbsp;evaluated.<br><br>
<p class="sub">2. If the <b>condition</b>evaluates to true, the body of the loop inside<br>
&nbsp;&nbsp;&nbsp;&nbsp;the do statement is executed again.

<br><br>
<p class="sub">3. The <b>condition</b>is evaluated once again.<br><br>
<p class="sub">4. If the <b>condition</b> evaluates to true, the body of the loop inside<br>
&nbsp;&nbsp;&nbsp;&nbsp;the do statement is executed again.<br><br>
<p class="sub">5. This process continues until the <b>condition</b> evaluates to false. Then<br>
&nbsp;&nbsp;&nbsp;&nbsp;the loop stops.
<br><br>
<img src="../images/java-dowhile.png" class="for"><br><br><br>
<p><b style="color:navy">Example : Display Numbers from 1 to 5</b><br>
<pre class="prg">// Java Program to display numbers from 1 to 5<br>
import java.util.Scanner;<br>
// Program to find the sum of natural numbers from 1 to 100.<br>
class Main {<br>
 public static void main(String[] args) {<br>
 int i = 1, n = 5;<br>
 // do...while loop from 1 to 5<br>
 do {<br>
 System.out.println(i);<br>
 i++;<br>
 } while(i <= n);</pre><br>
<p><b>Output</b>
 <pre class="prg">1<br>
2<br>
3<br>
4<br>
5<br></pre><br><br>

