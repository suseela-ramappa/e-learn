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
                <h2>Polymorphism in Java</h2><br><br><br>
                <p><b>Polymorphism</b> is an important concept of object-oriented programming. It simply<br> means more than one form.<br><br>
                <p>That is, the same entity (method or operator or object) can perform different operations<br> in different scenarios.<br><Br>
                <h3><b style="color:maroon">Types of Polymorphism</b></h3><br>
                <p class="sub"><B>• &nbsp;&nbsp;Compile-time polymorphism<br>
            <p class="sub">• &nbsp;&nbsp;Run-time polymorphism</b><br><br>
            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Compile-time polymorphism</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Compile-time </b> polymorphism in Java is also called static
                                             polymorphism or static <bR>method dispatch. It can be achieved by method overloading. In this process,
                                              an <br>overloaded method is resolved at compile time rather than resolving at runtime.<br><br>

            <pre class="prg">class Calculator {<br>
    int add(int a, int b) {<br>
        return a + b;<br>
    }<br>

    double add(double a, double b) {<br>
        return a + b;<br>
    }<br>
}<br>

public class Main {<br>
    public static void main(String[] args) {<br>
        Calculator calculator = new Calculator();<br>
        int result1 = calculator.add(5, 10);<br>
        double result2 = calculator.add(3.5, 2.5);<br>
    }<br>
}

            </pre><br><br><br>



            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Run-time polymorphism</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Run-time </b>polymorphism is achieved through method overriding. Method  overriding <bR>allows a
            subclass to provide a specific implementation of a method that is already <br>defined in its
            superclass. The decision of which method to call is made at runtime based <br>on the actual type of 
            the object.<bR><br>

            <pre class="prg">class Animal {<bR>
    void makeSound() {<bR>
        System.out.println("Animal makes a sound");<bR>
    }<bR>
}<bR>

class Dog extends Animal {<bR>
    @Override<bR>
    void makeSound() {<bR>
        System.out.println("Dog barks");<bR>
    }<bR>
}<bR>

public class Main {<bR>
    public static void main(String[] args) {<bR>
        Animal animal = new Dog(); // Upcasting<bR>
        animal.makeSound(); // Calls Dog's makeSound at runtime<bR>
    }<bR>
}


            </pre><br><br><br>

            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Polymorphism </b>simplifies code, enhances flexibility, and promotes code reuse by allowing<bR> 
                                                                 code to work with objects of multiple types without knowing their specific types at compile time.<br>It is a crucial concept in building modular and extensible software systems.