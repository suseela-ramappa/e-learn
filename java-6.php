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
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Java Input & Output</h2><br><br><br>
                    <h3><b style="color:navy">Java Input</b></h3><br>
                    <p>Java provides different ways to get input from the user.  <br>
                        However, in this tutorial, you will learn to get input from user using the <br>
                        object of Scanner class. <br><br>
                    <p>In order to use the object of Scanner, we need to import <br>
                        <b>java.util.Scanner</b> package.</p><br>
                    <pre class="prg">import java.util.Scanner;</pre><br><br>
                    <p>Then, we need to create an object of the Scanner class. We can use the <br>
                         object to take input from the user. </p><br>
       
                     
                    <pre class="prg">                   // create an object of Scanner <br>
                     Scanner input = new Scanner(System.in); <br>
             
                     // take input from the user <br>
                     int number = input.nextInt();</pre><br><br><br>
                    <p><b>Example: Get Integer Input From the User </b></p><br>
                    <pre class="prg">import java.util.Scanner; <br>
                     class Input { <br>
                     public static void main(String[] args) { <br>
                      
                     Scanner input = new Scanner(System.in); <br>
                     Java Programming <br>
                 
                 
                      
                     System.out.print("Enter an integer: "); <br>
                     int number = input.nextInt(); <br>
                     System.out.println("You entered " + number); <br>
                 
                     } <br>
                    }</pre><br><br>
                    <p><b> Output: </b></p>
  <pre class="prg">            Enter an integer: 23 <br>
            You entered 23</pre><br><br>
                    <p>In the above example, we have created an object named input of <br>
                    the Scanner class. We then call the nextInt() method of <br>
                    the Scanner class to get an integer input from the user. <br>
                    Similarly, we can use nextLong(), nextFloat(), nextDouble(), <br>
                    and next() methods to get long, float, double, and string input <br>
                    respectively from the user.</p><br><br>
                    <h3><b style="color:navy">Java Output</b></h3><br>
                    <p>In Java, you can simply use to send output to standard output (screen).</p><br>
                    <pre class="prg">   System.out.println(); or <br>
 
    System.out.print(); or<br> 
                         
    System.out.printf();</pre><br>
                        <p>Here, <br><br>
                        <p class="sub">• System is a class <br>
                        <p class="sub">• out is a public static field: it accepts output data.</p><br><rb>
                            <p>Let's take an example to output a line.</p><br>
                            <pre class="prg">class Topperworld { <br>
                             public static void main(String[] args) { <br>
                                  
                             System.out.println("Java programming is interesting.");<br>    
                             }<br>
                            }</pre><br><br>
                            
                                <p><b style="color:navy">   Output: </b></p>
                                <pre class="prg">Java programming is interesting. </pre><br>
                                <p>Here, we have used the println() method to display the string.</p><br><br>
                                <p><b style="color:navy">Difference between println(), print(). </b></p><br>
                                <p class="sub">• print() - It prints string inside the quotes.<br> 
                                <p class="sub">• println() - It prints string inside the quotes similar <br>
                                    &nbsp;&nbsp;like print() method. Then the cursor moves to the beginning of the <br>
                                    &nbsp;&nbsp;next line. </p><br><br>
                                    <p><b style="color:navy">Example: print() and println() </b></p><br>
                                    <pre class="prg">
                                        class Output { 
                                            public static void main(String[] args) { 
                                              
                                                System.out.println("1. println "); 
                                                System.out.println("2. println "); 
                                              
                                                System.out.print("1. print "); 
                                                System.out.print("2. print"); 
                                            } 
                                        } 
                                        
                                    </pre><br><br>
                                    <p><b>  Output: </b></p><br>
                                    <pre class="prg">
                                      
                                        1. println  
                                        2. println  
                                        1. print 2. print
                                    </pre>