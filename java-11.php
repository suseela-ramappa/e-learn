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
        </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Arrays in Java</h2><br><br><br>
                <p>Arrays are a fundamental data structure in Java (and many other programming <br>languages) that
                 allows you to store and manipulate a collection <br>of elements of the same type.<br><br>
                 <p><b style="color:navy">Declaration:</b><br>
<p>You declare an array in Java using the following syntax:<br>
<pre class="prg">dataType[] arrayName;</pre><br><br>
<p><b style="color:navy">Initialization:</b><br>
<p>After declaring an array, you need to initialize it. You can do this using the <br>new keyword along with the data type and the <br>size of the array.<br>
<pre class="prg">arrayName = new dataType[size];</pre><br>
<p>Alternatively, you can declare and initialize an array in one line:<br>
<pre class="prg">dataType[] arrayName = new dataType[size];</pre><br><br>
<p><b style="color:navy">Accessing Elements:</b><br>
<p>Elements in an array are accessed using their index. The index starts at 0 for the <br>first element and goes up to length - 1 for an array<br> of length length<br>
<pre class="prg">arrayName[index] = value;  // Set value at index<br>
dataType element = arrayName[index];  // Retrieve value at index
</pre><br><br>
<p><b style="color:navy">Iterating Through an Array:</b><br>
<p>You can use loops to iterate through all elements of an array.<br>
<pre class="prg">for (int i = 0; i < arrayName.length; i++) {<br>
    // Access and process each element using arrayName[i]<br>
}
</pre><br><br>
<p>Arrays are versatile and widely used in Java programming for various purposes, such as <br>storing collections of data,implementing algorithms, and more<br><br>
<p><b style="color:navy">Types of Arrays</b><br><br>
<p class="sub">• &nbsp;&nbsp;Single-Dimensional Arrays<br>
<p class="sub">• &nbsp;&nbsp;Multidimensional Arrays<br>
<p class="sub">• &nbsp;&nbsp;Jagged Arrays<br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Single-Dimensional Arrays:</b><br><br>
<p class="sub">• &nbsp;&nbsp;A single-dimensional array is the most basic form of an array.<br>
<p class="sub">• &nbsp;&nbsp;It consists of a single row of elements.<br>
<p class="sub">• &nbsp;&nbsp;Declaration: dataType[] arrayName;<br><br>
<p><b style="color:navy">Example,</b><br>
<pre class="prg">int[] numbers = new int[5];</pre><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Multi-Dimensional Arrays:</b><br><br>
<p class="sub">• &nbsp;&nbsp;Java supports multidimensional arrays, such as 2D arrays (matrices) and 3D arrays.<br>
<p class="sub">• &nbsp;&nbsp;Declaration of a 2D array: dataType[][] arrayName;<br>
<p><b style="color:navy">Example,</b><br>
<pre class="prg">int[][] matrix = new int[3][4];</pre><br><br>

<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;Jagged Arrays:</b><br><br>
<p class="sub">• &nbsp;&nbsp;A jagged array is an array of arrays where each row can have a different length<br>
<p class="sub">• &nbsp;&nbsp;Declaration and Initialization:<br>
<pre class="prg">int[][] jaggedArray = {<br>
    {1, 2, 3},<br>
    {4, 5},<br>
    {6, 7, 8, 9}<br>
};
</pre><br><br><br>
<p><b style="color:navy">These are some common types of arrays in Java. The choice of which type <br>to use depends on the specific requirements of your program and <br>the nature of the data you're working with.</b><br>





