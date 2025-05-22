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
                <h2>Exception Handling in Java</h2><br><br><br>
                <p>Exception handling in Java is a mechanism to handle runtime errors, known as exceptions, <br>
                gracefully. Exception handling helps prevent abnormal termination of a program by providing a<br>
                 structured way to handle errors. In Java, exceptions are objects that represent abnormal <br>
                 conditions that can occur during the execution of a program.<Br><br>
                <p><b>Here are the key aspects of encapsulation in Java:</b><br><Br>

                <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Exception Classes:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java defines a hierarchy of exception classes, divided into two main categories: checked<br>
             exceptions and unchecked exceptions. Both types ultimately inherit from the <b>'Throwable'</b> class.<br><br>

             <p><b style="color:navy">Checked Exceptions:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Checked exceptions are subclasses of Exception (excluding RuntimeException and its subclasses).<br>
            <p class="sub">• &nbsp;&nbsp;They must be either caught or declared in the method signature using the throws clause.<br>
            <p class="sub">• &nbsp;&nbsp;Examples: <b>'IOException', 'SQLException'</b>.<br><br>
            <p><b style="color:navy">Unchecked Exceptions:</b><br><Br>
             <p class="sub">• &nbsp;&nbsp;Unchecked exceptions are subclasses of RuntimeException.<br>
            <p class="sub">• &nbsp;&nbsp;They do not need to be caught or declared explicitly.<br>
            <p class="sub">• &nbsp;&nbsp;Examples: <b>'NullPointerException', 'ArrayIndexOutOfBoundsException'.</b>.<br><br>



<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;  throw Statement:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The throw statement is used to explicitly throw an exception. It is typically used when a specific <br>
            condition is met, and the programmer wants to signal an exceptional situation.<br><br>

            <pre class="prg">if (condition) {<br>
    throw new MyException("This is a custom exception");<Br>
}



</pre><br><br><br>



<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; throws Clause:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The throws clause in a method signature is used to declare that the method may throw <br>
            exceptions of the specified types. This is necessary for checked exceptions that are not caught<br>
             within the method.<br><br>

            <pre class="prg">public void myMethod() throws IOException, SQLException {<br>
    // Method code that may throw IOException or SQLException<br>
}



</pre><br><br><br>




<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; finally Block:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The finally block contains code that is guaranteed to be executed, regardless of whether an <br>
            exception is thrown or not. It is often used for cleanup operations.<br><br>

            <pre class="prg">try {<br>
    // Code that might throw an exception<br>
} catch (Exception e) {<br>
    // Handle the exception<br>
} finally {<br>
    // Code to be executed regardless of whether an exception occurs or not<br>
}



</pre><br><br><br>





<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Custom Exceptions:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Programmers can create their own exception classes by extending the Exception class or its <br>
            subclasses. These are known as custom exceptions and are useful for representing application-<br>
            specific error conditions.<br><br>

            <pre class="prg">class MyException extends Exception {<br>
    // Custom exception codeb,<br>
}


</pre><br><br><br>



<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;  Exception Propagation:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When an exception occurs in a method and is not caught, it is propagated up the call stack. If a <br>
            method is not capable of handling a particular exception, it can declare that it throws that <br>
            exception using the throws clause.<br><br>


            <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;  Built-in Exception Classes:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java provides a variety of built-in exception classes that cover common error scenarios, including<br>
             <b>'ArithmeticException', 'NullPointerException', 'ArrayIndexOutOfBoundsException'</b>, etc.<br><br>
             <pre class="prg">try {<br>
    int result = 5 / 0; // ArithmeticException<Br>
} catch (ArithmeticException e) {<Br>
    System.out.println("Error: " + e.getMessage());<br>
}
</pre><br><br><br>
