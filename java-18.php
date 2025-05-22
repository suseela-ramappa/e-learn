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
            margin-left:30px;
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
                <h2>Inheritance in Java</h2><br><br><br>
                <p><b>Inheritance</b> is one of the fundamental concepts of object-oriented programming (OOP) in Java. It <br>
                allows a class (subclass or derived class) to inherit the properties and behaviors of another class<br>
                (superclass or base class). This promotes code reuse, modularity, and the creation of a <br>hierarchical structure in the program.<br><Br>
                <h3><b style="color:maroon">Types of Inheritance</b></h3><br>
                <p class="sub"><b>• &nbsp;&nbsp;Single Inheritance<br>
                <p class="sub">• &nbsp;&nbsp;Multiple Inheritance (Through Interfaces)<br>
                <p class="sub">• &nbsp;&nbsp;Multilevel Inheritance<br>
                <p class="sub">• &nbsp;&nbsp;Hierarchical Inheritance<br>
            <p class="sub">• &nbsp;&nbsp;Hybrid Inheritance (Combination of Above)</b><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Single Inheritance:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In <b>single inheritance,</b> a class can inherit from only one superclass.Java supports  <bR>single inheritance as a class can extend only one class at a time. This simplifies the class  <bR>hierarchy but 
                                              can limit code reuse in certain scenarios.<br><br>

            <pre class="prg">class Animal {<br>
    // Animal properties and methods<br>
}<br>

class Dog extends Animal {<br>
    // Dog inherits from Animal<br>
}<br>

}

            </pre><br><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Multiple Inheritance (Through Interfaces):</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java doesn't support multiple inheritance of classes to avoid the diamond problem (a situation  <bR>where a class inherits from two classes that have a common ancestor). However, Java supports  <bR>
                                                                multiple inheritance through interfaces. An interface can be implemented by multiple classes,<br>allowing them to inherit method signatures.<br><br>

            <pre class="prg">class Animal {<br>
    // Animal properties and methods<br>
}<br>

class Dog extends Animal {<br>
    // Dog inherits from Animal<br>
}<br>

}

            </pre><br><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Multilevel Inheritance:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Multilevel inheritance involves a chain of inheritance where a subclass extends another <bR>class, and another class extends that subclass. It creates a hierarchy of classes.<br><br>

            <pre class="prg">class Animal {<br>
    // Animal properties and methods<br>
}<br>

class Mammal extends Animal {<br>
    // Mammal inherits from Animal<br>
}<br>

class Dog extends Mammal {<br>
    // Dog inherits from Mammal<br>
}


            </pre><br><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Hierarchical Inheritance:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hierarchical inheritance involves multiple subclasses inheriting from a single superclass. Each <bR>subclass can have its own additional properties and methods while sharing the common features <br>
            of the superclass.<br><br>

            <pre class="prg">class Animal {<br>
    // Animal properties and methods<br>
}<br>

class Dog extends Animal {<br>
    // Dog inherits from Animal<br>
}<br>

class Cat extends Animal {<br>
    // Cat inherits from Animal<br>
}



            </pre><br><br><br>

            
            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Hybrid Inheritance (Combination of Above):</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hybrid inheritance is a combination of two or more types of inheritance within a single program. <bR>Hybrid inheritance is a combination of two or more types of inheritance within a single program. It often involves the use of interfaces and classes to achieve a mix of single, multiple, multilevel, <bR>
            or hierarchical inheritance.<br><br>

            <pre class="prg">interface A {<br>
    void methodA();<br>
}<br>

interface B {<br>
    void methodB();<br>
}<br>

class C implements A, B {<br>
    // C implements both interfaces A and B<br>
    public void methodA() {<br>
        System.out.println("Method A");<br>
    }<br>

    public void methodB() {<br>
        System.out.println("Method B");<br>
    }<br>
}<br>

class D extends C {<br>
    // D extends class C<br>
}


            </pre><br><br><br>