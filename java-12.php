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
            margin-left:0px;
            border-collapse:collapse;
        }
        td,tr,th{
            padding:10px;
        }
        .meth{
            color: rgb(34, 171, 3);
        }
    </style>
    <body>
        <div class="content">
            <div class="matter">
                <h2>Strings in Java</h2><br><br><br>
                <p><b>String</b> is a sequence of characters. It is a built-in class in the Java<br>
programming language, and it is used to represent text or string data.<br><br>
              <p>For example, "hello" is a string containing a sequence of<br>
characters 'h', 'e', 'l', 'l', and 'o'.<br>
<p>We use <b>double </b> to represent a string in Java. For example,<br><br>
<pre class="prg">// create a string<br>
String topperworld = "Java programming";</pre><br><br>
<p><b style="color:navy">How to Create a String Object?</b><br><Br>
<p>There are two ways to create String object:<br>
<p class="sub">• &nbsp;&nbsp; By string literal<br>
<p class="sub">• &nbsp;&nbsp; By new keyword<br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;String Literal:</b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In this method, we simply assign a string literal (in<br>
double quotes) to a String variable. This is the most common and<br>
convenient way to create a String object.<bR><br>
<pre class="prg">public class Main {<br>
 public static void main(String args[]) {<br>
 // A string object<br>
 String topperworld = "Java Tutorial";<br>
 }<br>
}<br>
</pre><br><br><br>
<p style="color:red"><b><i class="fa-solid fa-arrow-right-long"></i>&nbsp;&nbsp;By new Keyword : </b><br><br>
<p class="sub"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  In this method, we use the new keyword to<br>
create a new instance of the String class and initialize it with the specified<br>
string value. This method is less common and less efficient, as it creates a<br>
new object on the heap every time it is executed.
convenient way to create<br> a String object.<bR><br>
<pre class="prg">class Main {<br>
 public static void main(String[] args) {<br>
 // create a string using new<br>
 String name = new String("Java String");<br>
 System.out.println(name); // print Java String<br>
 }<br>
}</pre><br><br><br>
<p><b style="color:maron">Java string operations</b><br><Br>
<p>Java String provides various methods to perform different operations on<br>
strings. We will look into some of the commonly used string operations.<br><br>
<p><b style="color:navy">1. Get length of a String</b><br><Br>
<p>To find the length of a string, we use the length() method of the String. For<br>
example,<br>
<pre class="prg">class Main {<br>
 public static void main(String[] args) {<br>
 // create a string<br>
 String topperworld = "Hello! World";<br>
 System.out.println("String: " + topperworld);<br>
 // get the length of greet<br>
 int length = topperworld.length();<br>
 System.out.println("Length: " + length);<br>
 }<br>
}</pre><br><br><br>
<p><b>Output</b>
<pre class="prg">String: Hello! World<br>
Length: 12<br>
<br></pre>
<p>In the above example, the length() method calculates the total number of<br>
characters in the string and returns it.<br><br>
<p><b style="color:navy">2. Join Two Java Strings</b><br><Br>
<p>To find the length of a string, we use the length() method of the String. For<br>
example,<br>
<pre class="prg">class Main {<Br>
 public static void main(String[] args) {<Br>
 // create first string<Br>
 String first = "Java ";<Br>
 System.out.println("First String: " + first);<Br>
 // create second<Br>
 String second = "Programming";<Br>
 System.out.println("Second String: " + second);<Br>
 // join two strings<Br>
 String joinedString = first.concat(second);<Br>
 System.out.println("Joined String: " + joinedString);<Br>
 }</pre><br><br><br>
 <p><b>Output</b>
<pre class="prg">First String: Java<Br>
Second String: Programming<Br>
Joined String: Java Programming<Br>
</pre>
<p>In the above example, we have created two strings named first and second.<br>
Notice the statement,
<br><br>
<p><b style="color:navy">3. Compare two Strings</b><br><Br>
<p>In Java, we can make comparisons between two strings using<br>
the equals() method.<br>
<pre class="prg">class Main {<br>
 public static void main(String[] args) {<br>
 // create 3 strings<br>
 String first = "java programming";<br>
 String second = "java programming";<br>
 String third = "python programming";<br>
 // compare first and second strings<br>
 boolean result1 = first.equals(second);<br>
 System.out.println("Strings first and second are equal: " + result1);<br>
 // compare first and third strings<br>
 boolean result2 = first.equals(third);<br>
 System.out.println("Strings first and third are equal: " + result2);<br>
 }</pre><br><br><br>
 <p><b>Output</b>
<pre class="prg">Strings first and second are equal: true<br>
Strings first and third are equal: false<Br>
</pre>
<p>In the above example, we have created 3 strings named first, second,<br>
and third. Here, we are using the equal() method to check if one string is<Br>
equal to another.
<br><br>
<p><b style="color:navy">Methods of Java String
</b><br><Br>
<p>Besides those mentioned above, there are various string methods present in
Java. Here are some of those methods:
<br><br>
<table border="1">
            <tr>
                <th>No.</th>
                <th> Method</th>
                <th> Description</th>
            </tr>
            <tr>
                <td>1 </td>
                <td class="meth">char charAt(int index)</td>
                <td> It returns char value for the <br>
                    particular index</td>
            </tr>
            <tr>
                <td>2  
                </td>
                <td class="meth">int length()</td>
                <td>It returns string length</td>
            </tr>
            <tr>
                <td>3  </td>
                <td class="meth">static String format(String format, Object... <br>
                    args)</td>
                <td> It returns a formatted string.</td>
            </tr>
            <tr>
                <td>4 
                   </td>
                <td class="meth">static String format(Locale l, String format,<br> 
                    Object... args)</td>
                <td> It returns formatted string with <br>
                    given locale</td>
            </tr>
            <tr>
                <td>5 
                   </td>
                <td class="meth"> String substring(int beginIndex)</td>
                <td>It returns substring for given <br>
                    begin index.</td>
            </tr>
            <tr>
                <td>6 </td>
                <td class="meth">String substring(int beginIndex, int endIndex)</td>
                <td>  It returns substring for given 
                    begin index and end end Index</td>
            </tr>
            <tr>
                <td>7 
                    
                  </td>
                <td class="meth"> boolean contains(CharSequence s)</td>
                <td>It returns true or false after<br> 
                    matching the sequence of char <Br>
                    value.</td>
            </tr>
            <tr>
                <td> 8</td>
                <td class="meth">static String join(CharSequence delimiter, <br>
                    CharSequence... elements)</td>
                <td>  It returns a joined string</td>
            </tr>
            <tr>
                <td>9 
                   
                    </td>
                <td class="meth">static String join(CharSequence delimiter,<br> 
                    Iterable<? extends CharSequence> elements)</td>
                <td> It returns a joined string.</td>
            </tr>
            <tr>
                <td>10 </td>
                <td class="meth">boolean equals(Object another)</td>
                <td> It checks the equality of string <br>
                    with the given object</td>
            </tr>
            <tr>
                <td>11  
                      </td>
                <td class="meth">boolean isEmpty()</td>
                <td>It checks if string is empty.</td>
            </tr>
            <tr>
                <td>12</td>
                <td class="meth">String concat(String str)</td>
                <td>It concatenates the specified<br> 
                    string.</td>
            </tr>
            <tr>
                <td>13 
                    
                    </td>
                <td class="meth">String replace(char old, char new)</td>
                <td>It replaces all occurrences of the <br>
                    specified char value.</td>
            </tr>
            <tr>
                <td>14</td>
                <td class="meth"> String replace(CharSequence old,<br> 
                    CharSequence new)</td>
                <td>It replaces all occurrences of the<br> 
                    specified CharSequence</td>
            </tr>
            <tr>
                <td>15
                     
                    </td>
                <td class="meth"> static String equalsIgnoreCase(String another) </td>
                <td>It compares another string. It 
                    doesn't check case. </td>
            </tr>
            <tr>
                <td>16</td>
                <td class="meth">String[] split(String regex)</td>
                <td> It returns a split string matching<br> 
                    regex.</td>
            </tr>
            <tr>
                <td>17
                  
                   </td>
                <td class="meth"> String[] split(String regex, int limit) </td>
                <td >It returns a split string matching <br>
                    regex and limit.</td>
            </tr>
            <tr>
                <td>18</td>
                <td class="meth"> String intern()</td>
                <td>  It returns an interned string.</td>
            </tr>
            <tr>
                <td> 19 </td>
                <td class="meth"> int indexOf(int ch)</td>
                <td>It returns the specified char value 
                    index.</td>
            </tr>
            <tr>
                <td>20  
                    </td>
                <td class="meth">int indexOf(int ch, int fromIndex)</td>
                <td>It returns the specified char value <br>
                    index starting with given index.</td>
            </tr>
            <tr>
                <td> 21</td>
                <td class="meth">int indexOf(String substring)</td>
                <td> It returns the specified substring <br>
                    index.</td>
            </tr>
        </table>



