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
                <h2>Abstraction in Java</h2><br><br><br>
                <p>• &nbsp;&nbsp;Abstraction is one of the key principles of Object-Oriented Programming (OOP) <br>
                                and is supported in Java. It involves simplifying complex systems by modeling classes<br>
                                 based on essential <br>
                <p>• &nbsp;&nbsp;properties and behaviors while ignoring irrelevant details. In Java, abstraction is <br>
                                 achieved through the use of abstract classes and interfaces. <br><br>
                <p style="color:navy"> <b>Abstraction in java can be achieved by use of</b><br><br>
                <p class="sub" style="color:red"><b>• &nbsp;&nbsp;Abstract classes<br>
                <p class="sub" style="color:red">• &nbsp;&nbsp;Interfaces</b><br><br>

                <p><b style="color:navy">Abstract Classes:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;An abstract class in Java is a class that cannot be instantiated on its own and<br>
                                          may contain abstract methods.<br>
            <p class="sub">• &nbsp;&nbsp;Abstract methods are declared without implementation and must be implemented by any<br>
                                         concrete (non-abstract) subclasses.<br>
            <p class="sub">• &nbsp;&nbsp;Abstract classes can also have regular (non-abstract) methods with implementations.<br><br>
            <pre class="prg">// Abstract class<br>
public abstract class Shape {<br>
    // Abstract method (no implementation)<br>
    public abstract double calculateArea();<br>

    // Regular method with implementation<br>
    public void display() {<br>
        System.out.println("This is a shape.");<br>
    }<br>
}

</pre><br><br>

<p><b style="color:navy">Abstract Methods:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Abstract methods are declared in abstract classes without providing an implementation.<br>
            <p class="sub">• &nbsp;&nbsp;Subclasses must provide concrete implementations for all abstract methods, <br>or they themselves
                                         must be declared as abstract.<br><br>
            
            <pre class="prg">// Concrete subclass implementing abstract class<br>
public class Circle extends Shape {<br>
    private double radius;
    <br>
    // Constructor<br>
    public Circle(double radius) {<br>
        this.radius = radius;<br>
    }<br>

    // Implementation of abstract method<br>
    @Override<br>
    public double calculateArea() {<br>
        return Math.PI * radius * radius;<br>
    }<br>
}

</pre><br><br>



