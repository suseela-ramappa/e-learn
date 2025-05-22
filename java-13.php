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
            padding:10px;
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
                <h2>Java Class and Object</h2><br><br><br>
                <p>Java is an object-oriented programming language. The core concept of<br>
the object-oriented approach is to break complex problems into smaller<br>
objects.<br><br>
<p>An object is any entity that has a state and behavior. For example,<br>
a bicycle is an object. It has<br><br>
<p class="sub">• &nbsp;&nbsp; <b> States</b>: idle, first gear, etc<br>
<p class="sub">• &nbsp;&nbsp; <b>Behaviors</b>: braking, accelerating, etc<br><br>

<h3><b style="color:maroon">Java Class</b></h3><br><Br>
<p class="sub">• &nbsp;&nbsp; A class is a blueprint or a template for creating objects.<br>
<p class="sub">• &nbsp;&nbsp;It defines a data type that bundles data (attributes or fields)<br> and methods (functions or procedures) that operate on <br>that data<br><br>
<p><b style="color:navy">Create a class in Java</b><br><Br>
<p>You define a class using the class keyword followed by <br>the class name. The body of the class contains the <br>fields and methods.<br><br>
<pre class="prg">public class MyClass {<br>
    // Fields (attributes)<br>
    int myField;<br>
    
    // Methods<br>
    void myMethod() {<br>
        // Code goes here<br>
    }<br>
}
</pre><br>

<p><b style="color:red">Feilds:</b><br>
<p class="sub">• &nbsp;&nbsp;Fields represent the data or attributes of an object. They can<br> be of various data types.<br>
<p class="sub">• &nbsp;&nbsp;Example: int myField;<br>
<p><b style="color:red">Methods:</b><br>
<p class="sub">• &nbsp;&nbsp;Methods are functions associated with a class. They define<br> the behavior of objects of that class.<br>
<p class="sub">• &nbsp;&nbsp;Example: void myMethod() { /* Code goes here */ }<br><br><br>

<h3><b style="color:maroon">Java Object</b></h3><br><Br>
<p class="sub">• &nbsp;&nbsp; An object is an instance of a class. It is a concrete entity<br> created from the class blueprint.<br>
<p class="sub">• &nbsp;&nbsp;Objects have state (values of fields) and behavior (methods that can be performed).<br><br>
<p><b style="color:navy">Create a Object in Java</b><br><Br>
<p>You create objects using the new keyword followed by the class constructor.<br><br>
<pre class="prg">MyClass myObject = new MyClass();</pre><br><br>

<p><b style="color:navy">Access Members of a Class</b><br><Br>
<p class="sub">• &nbsp;&nbsp;Once an object is created, you can access its fields and methods using the dot (.) notation.<br>
<p class="sub">• &nbsp;&nbsp;Example:<br>
<pre class="prg">myObject.myField = 10;<br>
myObject.myMethod();
</pre><br><br><br>
<h3><b style="color:maroon">Example: Java Class and Objects</b></h3><br>
<pre class="prg">public class Car {<Br>
    // Fields<Br>
    String model;<Br>
    int year;<Br>

    // Constructor<Br>
    public Car(String model, int year) {<Br>
        this.model = model;<Br>
        this.year = year;<Br>
    }<Br>

    // Method<Br>
    public void startEngine() {<Br>
        System.out.println("Engine started for " + model);<Br>
    }<Br>
}<Br>

public class Main {<Br>
    public static void main(String[] args) {<Br>
        // Creating an object of the Car class<Br>
        Car myCar = new Car("Toyota", 2022);<Br>

        // Accessing fields and calling methods<Br>
        myCar.startEngine();<Br>
        System.out.println("Year of manufacture: " + myCar.year);<Br>
    }<Br>
}
</pre><br><br>





