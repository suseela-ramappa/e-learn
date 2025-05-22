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
                <h2>Packages in Java</h2><br><br><br>
                <p>In Java, a package is a way to organize related classes and interfaces into a single directory <br>
                hierarchy. It helps in avoiding naming conflicts, provides better modularization of code, and<bR>
                 supports access control.<Br><br>
                <p><b>Here are the key aspects of encapsulation in Java:</b><br><Br>

                <p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Package Declaration:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A package is declared using the <b>'package'</b> keyword at the beginning of a Java source file. The <br>
            package declaration must be the first statement in the file (before <b>'import'</b> statements and the<br>
             <b>'class'</b> or <b>'interface'</b> <b>'declaration'</b>)<br><br>

            <pre class="prg">package com.example.myapp;

</pre><br><br><br>



<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Package Structure:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Packages are organized in a hierarchical structure, similar to directories in a file system. The <br>
            package name is a dot-separated sequence of identifiers, usually reflecting the directory structure <br>
            in the file system.<br><br>

            <pre class="prg">com<br>
|-- example<br>
|   `-- myapp<br>
|       |-- MyClass1.java<br>
|       `-- MyClass2.java


</pre><br><br><br>



<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Package and Directory Structure:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java enforces a directory structure that mirrors the package hierarchy. Each subdirectory <br>
            corresponds to a package, and Java source files are placed in the appropriate directories based <br>
            on their package.<br><br>

            <pre class="prg">src<br>
|-- com<br>
|   `-- example<br>
|       `-- myapp<br>
|           |-- MyClass1.java<br>
|           `-- MyClass2.java<br>


</pre><br><br><br>




<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Import Statements:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To use classes or interfaces from other packages in your code, you need to use the <br>
            <b>'import'</b> statement. Import statements inform the compiler about the classes or packages that need to be resolved.<br><br>

            <pre class="prg">package com.example.myapp;<br>

import java.util.ArrayList;<br>
import java.util.List;


</pre><br><br><br>





<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp; Access Modifiers:</b><br><br>
            <p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java supports four access modifiers: <B>'public'</b>, <b>'protected', 'default'</b> (package-private), and <b>'private.'</b>' Classes, interfaces, and members can be given these access modifiers to control their visibility and access from other packages.<br><br>

            <pre class="prg">package com.example.myapp;

</pre><br><br><br>