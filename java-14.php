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
            background:rgb(58, 58, 58);
            width:800px;
            padding:20px;
            margin-left:50px;
            color:white;
            font-size:small;
        }
        .fa-circle{
            font-size:8px;
            color:rgba(6, 29, 61, 100%)
        }
        .sub{
            margin-left:80px;
        }
        .meth{
            color: rgb(34, 171, 3);
        }
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Constructors in Java</h2><br><br><br>
                <p>JA constructor in Java is a <b>special method</b> that is used to initialize objects.<br>
The constructor is called when an object of a class is created. <br><br>
<p>A <b>constructor</b> has the same name as that of the class and does not have<br>
any return type. <br><br>
<p>For Example,<br>
<pre class="prg">class myclass {<br>
    myclass () {<br>
 // constructor body<br>
 }<br>
}
</pre><br><br>
<p><b style="color:navy">Rules for creating a Constructor :</b><br><Br>
<p class="sub">• &nbsp;&nbsp;The class name and constructor name should be the same.<br>
<p class="sub">• &nbsp;&nbsp;It must have no explicit return type.<br>
<p class="sub">• &nbsp;&nbsp;It can not be abstract, static, final, and synchronized.<br><br><br>

<h3><b style="color:maroon">Types of Constructor</b></h3><br>
<p>In Java, constructors can be divided into 3 types:<br><br>
<p class="sub"><b>• &nbsp;&nbsp;Default Constructor<br>
<p class="sub">• &nbsp;&nbsp;Parameterized Constructor</B><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Default Constructor:</b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A constructor with no parameters is known as default constructor.<br>
<p>If we do not create any constructor, the Java compiler automatically create a<br>
no-arg constructor during the execution of the program. This constructor is<br>
called default constructor.<br><br>
<p><b style="color:navy">Example : Default Constructor</b><br><Br>
<pre class="prg">class Main {<br>
 int a;<br>
 boolean b;<br>
 public static void main(String[] args) {<br>
 // A default constructor is called<br>
 Main obj = new Main();<br>
 System.out.println("Default Value:");<br>
 System.out.println("a = " + obj.a);<br>
 System.out.println("b = " + obj.b);<br>

 }
</pre><br><br>
<p><b>OUTPUT</b></p>
<pre class="prg">Default Value:<br>
a = 0<br>
b = false</pre><br><br>
<p>Here, we haven't created any constructors. Hence, the Java compiler<br>
automatically creates the default constructor.<br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Parameterized Constructor:</b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A constructor with some specified number of parameters is known as a parameterized constructor.<br><br>
<p><b style="color:navy">Example : Parameterized constructor</b><br><Br>
<pre class="prg">class myclass {<Br>
 String languages;<Br>
 // constructor accepting single value<Br>
 myclass  (String lang) {<Br>
 languages = lang;<Br>
 System.out.println(languages + " Programming Language");<Br>
 }<Br>
 public static void main(String[] args) {<Br>
 // call constructor by passing a single value<Br>
 myclass  obj1 = new myclass ("Java");<Br>
 myclass  obj2 = new myclass ("Python");<Br>
 myclass  obj3 = new myclass ("C");<Br>
 }<Br>
}</pre><br><br>
<p><b>OUTPUT</b></p>
<pre class="prg">Java Programming Language<br>
Python Programming Language<br>
C Programming Language</pre><br><br>


