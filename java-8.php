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
            background:rgb(67, 66, 66);
            width:800px;
            padding:10px;
            margin-left:50px;
            color:orange;
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
        .if{
            height: 300px;
            width: 700px;
        }
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Conditional Statement</h2><br><br><br>
                <p class="sub">• <b>Conditional Statement </b>is also Known as Decision-Making
  Statement.<br>
  <p class="sub">• Conditional Statement decides which statement to execute and<br>
  &nbsp;&nbsp;when.<br>
  <p class="sub">• Java provides the facility to make decisions using selection<br>
  &nbsp;&nbsp;statements.<br>
  <p class="sub">• They evaluate the decision based on provided conditions and<br>
  &nbsp;&nbsp;proceed with the flow of the program in a certain direction.</p><br><br>
<p>Java provides two types of conditional statements : </p><br>
<p class="sub">• <b>if Statement<br><br>
<p class="sub">• switch Statement </b></p><br><br>
<h3 style="color:red"> Java-if Statement : </h3><br>
<p>The java if-Statement is used to test the condition.It check boolean condition:
  <b> true or false. </b>
</p><br>
<p>There are varios types of if-Statement in java. </p><br>
<b style="color:navy"><p class="sub">• f statement <br>
<p class="sub">•  If-else statement <br>
<p class="sub">•  If-else-if ladder <br>
<p class="sub">•  Nested if statement </b>
</p><br><br><br>
<p><b style="color:navy">1. Java if Statement </b><br><br>
  The syntax of an <b>if-then </b>statement is: </p><br>
<pre class="prg">
                if (condition) { <br>
                    // statements <br>
                  }
            </pre><br><br>
<p>
  Here, condition is a boolean expression such as age >= 18. <br>
  <p class="sub">• if condition evaluates to true, statements are executed<br>
  <p class="sub">• if condition evaluates to false, statements are skipped
</p><br><br>
<p><b  style="color:navy"> Working of if Statement </b></p>
<img src="../images/if.png" class="if"><br><br><br>
<p>
  <b style="color:navy"> Example 1: Java if Statement </b><br>
</p>
<pre class="prg">
    class IfStatement { <br>
  public static void main(String[] args) { <br>
 
    int number = 10; <br>
 
    // checks if number is less than 0 <br>
    if (number < 0) { <br>
      System.out.println("The number is negative."); <br>
    } <br>
 
    System.out.println("Statement outside if block"); <br>
  } <br>
} </pre><br>

<p><b>Output </b></p>
<pre class="prg">Statement outside if block</pre><br><br>
<p>In the program, number < 0 is false. Hence, the code inside the body of <br>the if statement is<b> skipped.</b></p><br><br>
<p style="color:navy"><b>2. Java if...else (if-then-else) Statement </b></p><br>
<p>The if statement executes a certain section of code if the test expression is <br>
  evaluated to true. However, if the test expression is evaluated to false, it <br>
  does nothing. <br>
  <p>In this case, we can use an optional else block. Statements inside the body <br>
  of else block are executed if the test expression is evaluated to false. This is <br>
  known as the <b>if-...else</b> statement in Java. </p><br><br>

<p> The syntax of the<b>if...else</b> statement is: </p><br>
<pre class="prg">
            if (condition) { <br>
                // codes in if block <br>
              } <br>
              Java Programming <br>
               
               
              else { <br>
                // codes in else block <br>
              }<br>
        </pre><br>
<p>Here, the program will do one task (codes inside if block) if the condition <br>
  is true and another task (codes inside else block) if the condition is false.</p><bR><br>
<p><b style="color:navy">Working of if...else statement </b></p><br><br>
<img src="../images/if-else.png" class="if"><br><br><br>
<p><b style="color:navy">Example 2: Java if...else Statement </b></p>
<pre class="prg">
                class Main { <br>
                    public static void main(String[] args) { <br>
                      int number = 10; <br>
                   
                      // checks if number is greater than 0 <br>
                      if (number > 0) { <br>
                        System.out.println("The number is positive."); <br>
                      } <br>
                       
                      // execute this block <br>
                      // if number is not greater than 0 <br>
                      else { <br>
                        System.out.println("The number is not positive."); <br>
                      } <br>
                   
                      System.out.println("Statement outside if...else block"); <br> 
                    } <br>
                  } <br>
                </pre><br>


<p><b>Output </b></p>
<pre class="prg"> The number is positive. <br>
  Statement outside if...else block</pre><br><br>
<p> In the above example, we have a variable named number. Here, the test <br>
  expression number > 0 checks if number is greater than 0. <br><br>
 <p> Since the value of the number is 10, the test expression evaluates to true. <br>
  Hence code inside the body of if is executed. <br><br>
 <p> Now, change the value of the number to a negative integer. Let's say -5.
</p><br>
<pre class="prg">int number = -5; </pre><br>
<p>If we run the program with the new value of number, the output will be:</p><br>
<pre class="prg">    The number is not positive.<br> 
    Statement outside if...else block</pre><br><br>
<p>Here, the value of number is -5. So the test expression evaluates to false.
  Hence code inside the body of else is executed. </p><br><br><br>
<p><b style="color:navy">3. Java if...else...if Statement</b><br><br>
<p>In Java, we have an <b>if...else...if ladder</b>, that can be used to execute one <br>
  block of code among multiple other blocks.</p><br>
<pre class="prg">
        if (condition1) {<br> 
        // codes <br>
      } <br>
      else if(condition2) { <br>
        // codes <br>
      } <br>
      else if (condition3) { <br>
        // codes <br>
      } <br>
      . <br>
      . <br>
      else { <br>
        // codes <br>
      }</pre><br>
<p>Here, if statements are executed from the top towards the bottom. When the <br>
  test condition is true, codes inside the body of that if block is executed. And, <br>
  program control jumps outside the,<b> if...else...if ladder.</b> <br>
  <p>If all test expressions are false, codes inside the body of else are executed.</p></br><br>
<p><b style="color:navy"> Working of if Statement </b></p><br><br>
<img src="../images/if-elif.png" class="if"><br><br>
<p><b style="color:navy">Example 3: Java if...else...if Statement</b></p>
<pre class="prg">
  class Main { <br>
    public static void main(String[] args) { <br>
   
      int number = 0;<br> 
   
      // checks if number is greater than 0 <br>
      if (number > 0) { <br>
        System.out.println("The number is positive."); <br>
      } <br>
   
      // checks if number is less than 0 <br>
      else if (number < 0) { <br>
        System.out.println("The number is negative."); <br>
      } <br>
       
      // if both condition is false <br>
      else { <br>
        System.out.println("The number is 0."); <br>
      } <br>
    } <br>
  }<br>
</pre><br>
<p><b>Output </b></p>
<pre class="prg"> The number is 0.</pre><br><br>
<p>
  In the above example, we are checking<br>
  whether number is <b>positive, negative, or zero</b>. Here, we have two<br>
  condition expressions: <br>
  <p class="sub">• &nbsp;&nbsp;number > 0 - checks if number is greater than 0 <br>
  <p class="sub">• &nbsp;&nbsp; number < 0 - checks if number is less than 0 <br>
<p>Here, the value of number is 0. So both the conditions evaluate to false. <br>
    <p>Hence the statement inside the body of else is executed.
</p><br>
<p><b style="color:navy">4. Java Nested if..else Statement </b><br><br>
<p>In Java, it is also possible to use if..else statements inside <br>
  an if...else statement. It's called the nested if...else statement. <br>
  Here's a program to find the largest of 3 numbers using the <br>
  nested if...else statement.</p><br><br>
<p><b style="color:navy">Example 4: Nested if...else Statement </b></p><br>
<pre class="prg">
    class Main { <br>
    public static void main(String[] args) { <br>
   
      // declaring double type variables <br>
      Double n1 = -1.0, n2 = 4.5, n3 = -5.3, largest;<br> 
   
      // checks if n1 is greater than or equal to n2<br> 
      if (n1 >= n2) { <br>
   
        // if...else statement inside the if block <br>
        // checks if n1 is greater than or equal to n3 <br>
        if (n1 >= n3) { <br>
          largest = n1; <br>
        } <br>
   
        else { <br>
          largest = n3; <br>
        } <br>
      } else { <br>
   
        // if..else statement inside else block <br>
        // checks if n2 is greater than or equal to n3 <br>
        if (n2 >= n3) { <br>
          largest = n2; <br>
        } <br>
   
        else { <br>
          largest = n3; <br>
        } <br>
      } <br>
   
      System.out.println("Largest Number: " + largest); <br>
    } <br>
  }</pre><br>
<p><b>Output: </b></p>
<pre class="prg">Largest Number: 4.5</pre><br>
<p>In the above programs, we have assigned the value of variables ourselves to <br>
  make this easier.</p><br><br>
  <p><b style="color:navy">Switch Statement : </b><br>
<p>The <b>Switch statement</b> allows us to execute a block of code among many
  alternatives. </p><br>

<p> The syntax of the switch statement in Java is:</p>
<pre class="prg">
      switch (expression) { <br>
 
        case value1: <br>
          // code <br>
          break; <br>
         
        case value2: <br>
          // code<br>
          break; <br>
         
        ... <br>
        ...<br> 
         
        default: <br>
          // default statements<br>
        }   <br>    
     </pre><br><br>
<p><b style="color:navy">Working of switch case statement </b></p><br>
<p>The expression is evaluated once and compared with the values of each
  case. <br>
  <p class="sub">• &nbsp;&nbsp;If expression matches with value1, the code of case value1 are<br>
  &nbsp;&nbsp; &nbsp;&nbsp;executed. Similarly, the code of case value2 is executed <Br>
  &nbsp;&nbsp; &nbsp;&nbsp;if expression matches with value2.<br>
  <p class="sub">• &nbsp;&nbsp;If there is no match, the code of the default case is executed.</p><br><br>
<p><b style="color:navy">Example: Java switch Statement </b></p>
<pre class="prg">
        // Java Program to check the size <br>
        // using the switch...case statement <br>
         
        class Main { <br>
          public static void main(String[] args) { <br>
         
            int number = 44; <br>
            String size;<br> 
         
            // switch statement to check size <br>
            switch (number) { <br>
         
              case 29: <br>
                size = "Small"; <br>
                break; <br>
         
              case 42: <br>
                size = "Medium"; <br>
                break; <br>
         
              // match the value of week<br> 
              case 44: <br>
                size = "Large"; <br>
                break; <br>
         
              case 48: <br>
                size = "Extra Large";<br> 
                break; <br>
               
              default: <br>
        Java Programming <br>
         
         
                size = "Unknown"; <br>
                break; <br>
         
            } <br>
            System.out.println("Size: " + size); <br>
          } <br>
        } <br>
      </pre><br>

<p><b> Output: </b></p>
<pre class="prg">Size: Large</pre><br>
<p>In the above example, we have used the switch statement to find the size. <br>
  Here, we have a variable number. The variable is compared with the value of <br>
  each case statement. <br>
  <p>Since the value matches with 44, the code of case 44 is executed. </p><br>
<pre class="prg">     size = "Large"; <br>
     break; </pre><br>
<p>Here, the size variable is assigned with the value Large.</p>