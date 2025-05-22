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
                <h2>Interface in Java</h2><br><br><br>
                <p>In Java, an <b>interface</b> is a reference type that is similar to a class. It is a collection of abstract <br>
                methods. An interface can also contain constants, default methods, static methods, and nested <br>
                types. Interfaces provide a way to achieve abstraction, support multiple inheritance, and define a <br>
                contract for implementing classes.<Br><br>
                <p><b>Here are the key aspects of encapsulation in Java:</b><br><Br>

                <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Declaration:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An interface in Java is declared using the <b>'interface'</b> keyword. It contains method signatures but<br>
             no method bodies. All the methods declared in an interface are implicitly public and abstract.<br><br>

            <pre class="prg">interface MyInterface {<br>
    void method1();<br>
    int method2();<br>
}
</pre><br><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Implementing an Interface:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To use an interface in a class, the <b>'implements'</b> keyword is used. A class that implements an<br>
             interface must provide concrete (non-abstract) implementations for all the methods declared in<br>
              the interface.<br><br>

            <pre class="prg">class MyClass implements MyInterface {<br>
    @Override<br>
    public void method1() {<br>
        // Implementation of method1<br>
    }<br>

    @Override<br>
    public int method2() {<br>
        // Implementation of method2<br>
        return 42;<br>
    }<br>
}

</pre><br><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Multiple Inheritance:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java supports multiple inheritance through interfaces. A class can implement multiple interfaces, <br>
            allowing it to inherit method signatures from multiple sources.<br><br>

            <pre class="prg">interface Interface1 {<br>
    void method1();<br>
}<br>

interface Interface2 {<br>
    void method2();<br>
}<br>

class MyClass implements Interface1, Interface2 {<br>
    @Override<br>
    public void method1() {<br>
        // Implementation of method1<br>
    }<br>

    @Override<br>
    public void method2() {<br>
        // Implementation of method2<br>
    }<br>
}

</pre><br><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Default Methods:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java 8 introduced the concept of default methods in interfaces. Default methods have a default<br>
             implementation provided in the interface itself. Classes that implement the interface can choose<br>
              to override the default method.<br><br>

            <pre class="prg">interface MyInterface {<br>
    void method1();<br>

    default void defaultMethod() {<br>
        System.out.println("Default implementation of defaultMethod");<br>
    }<br>
}

</pre><br><br><br>


<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Static Methods:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java 8 also introduced static methods in interfaces. These methods are defined with the <B>'static'</b><br>
             keyword and can be called on the interface itself, not on instances of implementing classes.<br><br>

            <pre class="prg">interface MyInterface {<br>
    static void staticMethod() {<br>
        System.out.println("Static method in MyInterface");<Br>
    }<Br>
}
</pre><br><br><br>


<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Constants:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interfaces can have constants, which are implicitly <b>'public', 'static',</b> and <b>'final'</b>. These <br>
            constants can be accessed using the interface name.<br><br>

            <pre class="prg">interface MyInterface {<br>
    int MY_CONSTANT = 42;<Br>
}<Br>

}
</pre><br><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Nested Interfaces:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interfaces can be nested within other interfaces or classes. This allows for a more organized and<br> modular structure.<br><br>

            <pre class="prg">interface OuterInterface {<br>
    void outerMethod();<br>

    interface InnerInterface {<br>
        void innerMethod();<br>
    }<br>
}

</pre><br><br><br>
<p>Interfaces play a crucial role in achieving abstraction, polymorphism, and code organization in <br>Java applications. They provide a way to define a contract that multiple classes can adhere to,<br> promoting flexibility and extensibility in the codebase.