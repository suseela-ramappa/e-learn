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
        }
        .fa-circle{
            font-size:8px;
            color:rgba(6, 29, 61, 100%)
        }
        .sub{
            margin-left:80px;
        }
        table{
            margin-left:50px;
            border-collapse:collapse;
        }
        td,tr,th{
            padding:10px;
        }
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Operator in Java</h2><br><br><br>
               
<p><b>Java operators</b> are symbols that are used to perform operations on <br>
    variables and manipulate the values of the operands. Each operator performs <br>
    specific operations. <br><br>
   <p> Let us consider an expression 5 + 1 = 6; here, 5 and 1 are <b>operands</b>, and <br>
    the symbol + (plus) is called the <b>operator</b>. We will also learn about operator <br>
    precedence and operator associativity. </p><br><br>
<h3 style="color:navy"><b>Types of Java Operator </b></h3><br>
<p class="sub">• Arithmetic Operators <br>
<p class="sub">• Assignment Operators <br>
<p class="sub">•Logical Operators <br>
<p class="sub">• Bitwise Operators <br>
<p class="sub">• Ternary Operators <br>
<p class="sub">• Relational Operators <br><br>
    <h3><b style="color:red"> Arithmetic Operators :</b></h3><br>
<p>Arithmetic operators are used to performing addition, subtraction, <br>
    multiplication, division, and modulus. It acts as a mathematical <br>
    operations.</p><br>
<table border=1 style="border-style:thick">
    <tr>
        <th style="color:navy"><b>Operator</b></th>
        <th style="color:navy"><b>Description </b></th>
    </tr>
    <tr>
        <td>
            <b>+ ( Addition )</b>
        </td>
        <td>This operator is used to add the value of the <br>
            operands.</td>
    </tr>
    <tr>
        <td>
        <b>- ( Subtraction )</b>
        </td>
        <td>This operator is used to subtract the right-hand <br>
            operator with the left hand operator. <br>
        </td>
    </tr>

    <tr>
        <td>
        <b> * ( Multiplication )</b>
        </td>
        <td> This operator is used to multiply the value of the <br>
            operands.
        </td>
    </tr>

    <tr>
        <td>
        <b>/ ( Division )</b>
        </td>
        <td> This operator is used to divide the left hand <br>
            operator with right hand operator.
        </td>
    </tr>
    <tr>
        <td>
           <b> % ( Modulus )</b>
        </td>
        <td> This operator is used to divide the left hand <br>
            operator with right hand operator and returns <br>
            remainder.
        </td>
    </tr>
</table><br><br><br>
<p><b>Example </b></p><br>
<p>Let us look at a simple code that in which all the <b>arithmetic operators</b> are used.</p>
<pre class="prg">public class ArithmeticOperatorsExample { <br>
    public static void main(String[] args) { <br>
        int num1 = 10, num2 = 5, result; <br>
         
        // Addition Operator <br>
        result = num1 + num2; <br>
        System.out.println("Addition: " + result); <br>
         
        // Subtraction Operator <br>
        result = num1 - num2; <br>
        System.out.println("Subtraction: " + result); <br>
         
        // Multiplication Operator<br> 
        result = num1 * num2; <br>
        System.out.println("Multiplication: " + result); <br>
         
        // Division Operator <br>
        result = num1 / num2; <br>
 
 
        System.out.println("Division: " + result); <br>
         
        // Modulus Operator <br>
        result = num1 % num2; <br>
        System.out.println("Modulus: " + result); <br>
         
        // Increment Operator <br>
        num1++; <br>
        System.out.println("Increment: " + num1); <br>
         
        // Decrement Operator <br>
        num2--; <br>
        System.out.println("Decrement: " + num2); <br>
    } <br>
}    </pre><br>
<p><b>OUTPUT</b></p>
<pre class="prg">     Addition: 15 <br>
    Subtraction: 5 <br>
    Multiplication: 50 <br>
    Division: 2 <br>
    Modulus: 0 <br>
    Increment: 11 <br>
    Decrement: 4</pre><br><br>
    <h3><b style="color:red"> Asignment Operators :</b></h3><br>
<p>Assignment operator are used to assign new value to a variable. The left <br>
    side operand of the assignment operator is called variable and the right <br>
    side operand of the assignment operator is called value. </p><br><br>
<table border=1>
    <tr>
        <th style="color:navy"><b>Operator</b></th>
        <th style="color:navy"><b>Description </b></th>
    </tr>
    <tr>
        <td>
        <b> =</b>
        </td>
        <td> This operator is used to assign the value on the <br>
            right to the operand on the left.</td>
    </tr>
    <tr>
        <td>
        <b>+=</b>
        </td>
        <td>
            This operator is used to add right operand to the <br>
            left operand and assigns the result to the left <br>
            operand.</td>
    </tr>
    <tr>
        <td>
        <b> - =</b>
        </td>
        <td>
            This operator subtracts right operand from the <br>
            left operand and assigns the result to the left <br>
            operand.</td>
    </tr>
    <tr>
        <td>
        <b> *=</b>
        </td>
        <td>
            This operator multiplies right operand with the <br>
            left operand and assigns the result to the left <br>
            operand.</td>
    </tr>
    <tr>
        <td>
        <b>/=</b>
        </td>
        <td>
            This operator divides left operand with the right <br>
            operand and assigns the result to the left <br>
            operand.</td>
    </tr>
</table><br><br>
<p><b>Example</b></p><br>
<p>Let us look at a simple code in which all the <b>assignment operators</b> are used. </p><br>
<pre class="prg">
            public class Topperworld { <br>
                public static void main ( String[] args ) { <br>
                int a = 10; <br>
                int b = 20; <br>
                int c; <br>
                System.out.println ( c = a ); <br> 
                System.out.println ( b += a ); <br>
                System.out.println ( b -= a); <br>
                System.out.println ( b *= a ); <br>
                System.out.println ( b /= a ); <br>
                System.out.println ( b ^= a ); <br>
                System.out.println ( b %= a ); <br>
                } <br>
                } <br>
            </pre><br>
<p><b> OUTPUT</b> </p>
<pre class="prg">
        10 <br>
        30 <br>
        10 <br>
        200 <br>
        2 <br>
        0 </pre><br><br>
        <h3><b style="color:red"> Logical Operators :</b></h3><br>
<p>Logical operators are used to combining two or more conditions or <br>
    complement the evaluation of the original condition under consideration.</p><br>
<table border=1>
    <tr>
        <th style="color:navy"><b>Operator</b></th>
        <th style="color:navy"><b>Description </b></th>
    </tr>
    <tr>
        <td>
        <b> && (Logical AND)</b>
        </td>
        <td>This operator returns True if both the operands
            are true, otherwise, it returns False.
        </td>
    </tr>
    <tr>
        <td> <b>|| (Logical OR)</b>
        </td>
        <td>This operator returns True if either the operands
            are true, otherwise it returns False.
        </td>
    </tr>
    <tr>
        <td> <b>! (Logical NOT)</b>
        </td>
        <td>This operator returns True if an operand is False.
            It reverses the logical state of an operand.
        </td>
    </tr>
</table><br><br>
<p><b>Example</b></p><br>
<p>Let us look at a simple code that in which all the <b>logical operators</b> are used</p><br>
<pre class="prg">public class Main { 
    public static void main ( String args[] ) { 
                 int a = 5; 
                 System.out.println ( a<5  &&  a<20 ); 
                 System.out.println ( a<5 || a<20 ); 
                 System.out.println ( ! ( a<5  &&  a<20 )); 
    }   
    } </pre><br>
<p><b>OUTPUT</b> </p>
<pre class="prg"> False 
      True  
      True </pre><br>
      <h3><b style="color:red"> Bitwise Operators :</b></h3><br>
<p>
    The bitwise operator operates on bit string, binary number, or bit array. It <br>
    is fast and simple and directly supported by the processor. The bitwise <br>
    operation is also known as bit-level programming.</p><br>
<table border=1>
    <tr>
        <th style="color:navy" ><b>Operator</b></th>
        <th style="color:navy"><b>Description </b></th>
    </tr>
    <tr>
        <td>
            <b>& (Bitwise AND)</B>
        </td>
        <td> This operator takes two numbers as operands <br>
            and does AND on every bit of two numbers.
        </td>
    </tr>
    <tr>
        <td>
        <b>| (Bitwise OR)</b>
        </td>
        <td> This operator takes two numbers as operands <br>
            and does OR on every bit of two numbers.
        </td>
    </tr>
    <tr>
        <td>
           <b> ^ (Bitwise XOR)<b>
        </td>
        <td> This operator takes two numbers as operands <br>
            and does XOR on every bit of two numbers.
        </td>
    </tr>
    <tr>
        <td><b>~ (Bitwise NOT)<b></td>
        <td>
        This operator takes one number as an operand <br>
        and does invert all bits of that number.
        </td>
    </tr>
</table><br><br>
<p><b>Example</b></p><br>
<p> Let us look at a simple code that in which all the <b>bitwise operators</b> are used.</p><bR>
<pre class="prg">public class Topperworld {<br> 
    public static void main(String[] args) { <br>
        int num1 = 10, num2 = 5; <br>
         
        // Bitwise AND Operator <br>
        int result = num1 & num2; <br>
        System.out.println("Bitwise AND: " + result); <br>
         
        // Bitwise OR Operator <br>
        result = num1 | num2; <br>
        System.out.println("Bitwise OR: " + result); <br>
         
        // Bitwise XOR Operator <br>
        result = num1 ^ num2; <br>
        System.out.println("Bitwise XOR: " + result); 
        <br>
        // Bitwise Complement Operator <br>
        result = ~num1; <br>
        System.out.println("Bitwise Complement of num1: " + result); <br>
         
        // Left Shift Operator <br>
        result = num1 << 2; <br>
        System.out.println("Left Shift of num1: " + result); <br>
         
        // Right Shift Operator <br>
        result = num1 >> 2; <br>
        System.out.println("Right Shift of num1: " + result); <br>
         
        // Unsigned Right Shift Operator <br>
        result = num1 >>> 2; <br>
        System.out.println("Unsigned Right Shift of num1: " + result);<br> 
    }<br> 
} 
</pre><br>

<p><b>OUTPUT</b></p>
<pre class="prg">Bitwise AND: 0 <br>
Bitwise OR: 15 <br>
Bitwise XOR: 15 <br>
Bitwise Complement of num1: -11 <br>
Left Shift of num1: 40 <br>
Right Shift of num1: 2<br> 
Unsigned Right Shift of num1: 2 </pre><br>
<h3><b style="color:red"> Ternary Operators :</b></h3><br>
<p> Ternary operator is an conditional operator, it reduces the line of code <br>
    while performing the conditional or comparisons. It is the replacement of <br>
    if-else or nested if-else statements. It is also referred to as inline if, <br>
    conditional operator, or ternary if.. </p><bR>
<p><b> Example </b></p><br>
<p> Let us look at a simple code of<b> Ternary operator</b>.</p><br>
<pre class="prg">
    public class Topperworld {   <br>
    public static void main ( String args[] ) {  <br> 
    int a = 4;   <br>
    int b = 9;   <br>
    int min = ( a < b ) ? a : b;   <br>
    System.out.println ( min );  <br> 
    } <br>
    }     <br>    
     
    </pre><br>
<p><b> OUTPUT
    </b></p>
<pre class="prg">4</pre><br><br>
<h3><b style="color:red"> Relational Operators :</b></h3><br>
<p> Relational operator compares two numbers and returns a boolean value. This <br>
    operator is used to define a relation or test between two operands.</p><br>

<table border="1">
    <tr>
        <th style="color:navy"><b>Operator</b></th>
        <th style="color:navy"><b>Description</b> </th>
    </tr>
    <tr>
        <td>
            <b>< (Less than)</b> </td>
        <td> This operator returns True, if the value of the <br>
            left operand is less than the value of the right <br>
            operand, else it returns False.</td>
    </tr>
    <tr>
        <td><b>> (Greater than) </b></td>
        <td>
            This operator returns True, if the value of the
            left operand is greater than the value of the right
            operand, else it returns False.</td>
    </tr>
    <tr>
        <td>
        <b> <= (Less than or equal to)</b> </td>
        <td>
            This operator returns True, if the value of the <br>
            left operand is less than or equal to the value of <br>
            the right operand, else it returns False. </td>
    </tr>
    <tr>
        <td> <b>>= (Greater than or equal to) </b></td>
        <td>
            This operator returns True, if the value of the <br>
            left operand is greater than or equal to the value <br>
            of the right operand, else it returns False. </td>
    </tr>
    <tr>
        <td><b>== (Equal to)</b>
        </td>
        <td> This operator returns True, if two operands are <br>
            equal, else it returns False.</td>
    </tr>
</table><br><br>
<p><b>Example
    </b></p><br>
<p> Let us look at a simple code that in which all the <b>relational operators </b>are used.</p><br>
<pre class="prg">public class Topperworld { <br>
                public static void main ( String args[] ) { <br>
                             int  a = 10; <br>
                             int  b = 20; <br>
                System.out.println ( a < b ); <br>
                System.out.println(  a > b ); <br>
                System.out.println ( a <= b ); <br>
                System.out.println (a >= b ); <br>
                System.out.println ( a == b );<br> 
                System.out.println ( a != b ); <br>
                     }   <br>
                } <br>
            </pre><br>
<p><b> OUTPUT </b></p><br>
<pre class="prg">    strue <br>
    false <br>
    true <br>
    false <br>
    false <br>
    true</pre><br><br><br>
<h3>Java Operator Precedence Table </h3><br>
<table border=1>
    <tr>
        <th style="color:navy">Category </th>
        <th style="color:navy">Operator</th>
        <th style="color:navy">Associativity</th>
    </tr>
    <tr>
        <td>Postfix </td>
        <td>>() [] . (dot operator) </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Unary </td>
        <td>>++ - - ! ~</td>
        <td> Right to left</td>
    </tr>
    <tr>
        <td>Multiplicative </td>
        <td> >* / </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Additive </td>
        <td> >+ - </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Shift </td>
        <td> >>> >>> << </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Relational </td>
        <td> >> >= < <=</td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Equality </td>
        <td> >== !=</td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Bitwise AND </td>
        <td> >& </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Bitwise XOR</td>
        <td> >^ </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Bitwise OR</td>
        <td> >| </td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Logical AND </td>
        <td>>&&</td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Logical OR </td>
        <td> >||</td>
        <td>Left to right</td>
    </tr>
    <tr>
        <td>Conditional </td>
        <td> ?:</td>
        <td>right to left</td>
    </tr>
    <tr>
        <td>Assignment </td>
        <td> >= += -= *= /= %= >>=
            <<= &=^=|=</td>
        <td>right to left</td>
    </tr>
</table>