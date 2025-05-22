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
                <h2>OOP's Concept in Java</h2><br><br><br>
            <p>Object-Oriented Programming (OOP) is a programming paradigm based on the<br>
             concept of "objects." Java is a prominent object-oriented programming language,<br>
              and it fully supports OOP principles. The main concepts of OOP in Java include:<br><br>
            <p><b style="color:navy">Class and Object:</b><br><Br>
            <p class="sub">• &nbsp;&nbsp;<b>Class:</b> A class is a blueprint or template for creating objects. <br>
                                           It defines the data and methods common to all objects of that type<br>
            <p class="sub">• &nbsp;&nbsp;<b>Object:</b> An object is an instance of a class, created using the new<br>
             keyword. Objects have state (attributes) and behavior (methods).<br><br>

             <p><b style="color:navy">Encapsulation:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Encapsulation is the bundling of data (fields) and methods that operate<bR>
                                           on the data within a single unit (class). It restricts access to some of <br>
                                           an object's components and prevents the accidental modification of data.<br>
            <p class="sub">• &nbsp;&nbsp;Access modifiers (public, private, protected, etc.) are used to control access<br>
                                         to class members.<br><br>

             <p><b style="color:navy">Inheritance:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Inheritance is a mechanism that allows a class (subclass or derived class) to <br>
                                          inherit the properties and behaviors of another class (superclass or base class). <br>
                                          It promotes code reuse and establishes an "is-a" relationship between classes<br>
            <p class="sub">• &nbsp;&nbsp;The extends keyword is used for inheritance.<br><br>

            <p><b style="color:navy"> Polymorphism:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Polymorphism allows objects of different classes to be treated as objects of a <br>
                                          common base class. It enables methods to be called on objects without knowing their <br>
                                          exact type at compile time.<br>
            <p class="sub">• &nbsp;&nbsp;It includes method overloading and method overriding.<br><br>

            <p><b style="color:navy">Abstraction:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Abstraction is the process of simplifying complex systems by modeling classes based on <br>
                                          essential properties and behaviors, ignoring irrelevant details.<br>
            <p class="sub">• &nbsp;&nbsp;Abstract classes and interfaces are used to achieve abstraction in Java.<br><br>

