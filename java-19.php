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
                <h2>Encapsulation in Java</h2><br><br><br>
                <p><b>Encapsulation</b> is one of the four fundamental principles of object-oriented programming (OOP)  <br>
                and is a key concept in Java. It involves bundling the data (attributes) and the methods (functions)<br>
                that operate on the data into a single unit, known as a class. Encapsulation helps in hiding the<br>
                internal implementation details of a class from the outside world and allows controlled access to<br>
                the class members through well-defined interfaces.<Br><br>
                <p><b>Here are the key aspects of encapsulation in Java:</b><br><Br>

                <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Class Definition:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In Java, a class is used to encapsulate data and methods. The data members of a class are<br> declared as private, and public methods are provided to access and manipulate these data <br>members. This ensures that the internal state of an object is not directly accessible from outside<br> the class.<br><br>

            <pre class="prg">public class Person {<br>
    // Private data members<br>
    private String name;<br>
    private int age;<br>

    // Public methods to access and modify data<br>
    public String getName() {<br>
        return name;<br>
    }<br>

    public void setName(String name) {<br>
        this.name = name;<br>
    }<br>

    public int getAge() {<br>
        return age;<br>
    }<br>

    public void setAge(int age) {<br>
        if (age > 0) {<br>
            this.age = age;<br>
        } else {<br>
            System.out.println("Age must be a positive value.");<br>
        }<br>
    }<br>
}


            </pre><br><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Private Access Modifiers:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data members of a class are declared as private to restrict direct access from outside the class. <br>This is an essential part of encapsulation, as it prevents unauthorized modification of the object's <br>state.<br><br>

            <pre class="prg">private String name;<br>
private int age;



            </pre><br><br><br>

            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Public Methods (Accessors and Mutators):</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Public methods, also known as accessors and mutators, are provided to access and modify the <br>private data members. Accessor methods retrieve the values, and mutator methods modify the<br> values, often including validation logic.<br><br>

            <pre class="prg">public String getName() {<br>
    return name;<br>
}<br>

public void setName(String name) {<br>
    this.name = name;<br>
}<br>

public int getAge() {<br>
    return age;<br>
}<br>

public void setAge(int age) {<br>
    if (age > 0) {<br>
        this.age = age;<br>
    } else {<br>
        System.out.println("Age must be a positive value.");<br>
    }<br>
}
</pre><br><br><br>


<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Information Hiding:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encapsulation provides information hiding, which means the internal details of a class are hidden<br> from the outside world. Users of the class interact with the object through a well-defined <br>interface without needing to know the internal implementation.<br><br>


            
            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Data Validation:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encapsulation allows the implementation of data validation within the class. Mutator methods<br> can include validation checks to ensure that the data remains in a valid state.<br><br>

            <pre class="prg">public void setAge(int age) {<bR>
    if (age > 0) {<bR>
        this.age = age;<bR>
    } else {<bR>
        System.out.println("Age must be a positive value.");<bR>
    }<bR>
}

</pre><br><br><br>


<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Better Maintenance and Modularity:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encapsulation promotes better code maintenance and modularity. If the internal implementation <br>of a class changes, only the class itself needs to be updated, while the external code using the<br> class remains unaffected.<br><br><br>

            <p>Encapsulation, along with abstraction, inheritance, and polymorphism, forms the foundation of <br>object-oriented programming and helps in creating more organized, modular, and secure code in <br>Java.


