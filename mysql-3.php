<?php
 include("mysql.php")
 ?>
 <html>
  <head>
    <style>
        .content{
            margin-right:100px;
            margin-left:350px;
            margin-top:100px;
           
            border:3px solid rgba(221,146,0, 74%); 
            border-radius:10px;
            color:rgba(6, 29, 61, 100%);
            font-weight:500;
        }
        .matter{
             margin-left:100px;
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
        h4{
            font-size:20px;
            color:rgba(221,146,0, 100%);
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
   </head>
  
    <body>
        <div class="content">
            <div class="matter">
                    <h2>SQL Comments -A Complete Guide</h2><br><br><br>
                    <p>SQL comments are annotations within the SQL code that are <br>
                    ignored by the database engine during execution. They serve as <br>
                    explanatory notes or reminders for developers and are not<br>
                     processed as part of the SQL query. Comments are a crucial <br>
                    tool for documenting code, providing insights into the logic<br>
                     and purpose behind each line or block of code.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">Types of SQL Comments:</b></h3><br>
                    <p>SQL comments can be divided into two types:</p><br>
                    <h4><b style="color:black">1.  Single-Line Comments:</b></h4><br>
                    <p>The most basic form of SQL comment is the single-line <br>
                    comment. In SQL, a line beginning with two consecutive hyphens<br>
                     (–), known as a double-dash, is treated as a comment. For example:</p><br><br>      
                    <pre class="prg"><br><br>-- This is a single-line comment
SELECT * FROM employees;
<br><br></pre><br><br>
                      <p>Single-line comments are handy for adding brief explanations<br>
                         to specific lines of code, making it easier for developers to <br>
                         understand the purpose or context of a particular query.</p><br><br>

                        <h4><b style="color:black">2. Multi-Line Comments:</b></h4><br>
                    <p>In addition to single-line comments, SQL also supports multi-line <br>
                        comments. These are enclosed within /* and */, allowing developers <br>
                        to add more extensive comments spanning multiple lines. Multi-line <br>
                        comments are particularly useful for documenting complex queries <br>
                        or providing detailed explanations. Here’s an example:</p><br><br>
                          <pre class="prg"><br><br>/*
This is a multi-line comment
that provides additional information
about the purpose of the SQL query.
*/
SELECT column1, column2
FROM orders
WHERE order_date > '2023-01-01';
<br><br></pre>

                    <p>Using multi-line comments, developers can offer comprehensive <br>
                        insights into the logic and rationale behind a series of SQL <br>
                        statements.</p><br><br>
                       
                        <h3><b style="color:navy">Benefits of SQL Comments:</b></h3><br>
                    <h4><b style="color:black">1.  Code Documentation:</b></h4><br>
                    <p>  SQL comments play a vital role in documenting code. They help developers <br>
                        understand the intention behind each query, making it easier to maintain <br>
                        and troubleshoot the code in the future.</p><br><br>

                    <h4><b style="color:black">2. Collaboration:</b></h4><br>
                    <p>  When working on projects with multiple developers, SQL comments become a <br>
                        communication tool. They enable team members to share information about the<br>
                         code, reducing the learning curve for those who may not be familiar with a <br>
                         particular part of the database schema or query logic.</p><br><br>

                    <h4><b style="color:black">3. Debugging: </b></h4><br>
                    <p>Comments can be invaluable during the debugging process. When an issue arises,<br>
                        well-documented SQL code can expedite the identification of problems and facilitate<br>
                         quicker resolutions.</p><br><br>

                    <h4><b style="color:black">4. Code Review:</b></h4><br>
                    <p>During code reviews, comments offer reviewers insights into the thought process <br>
                    of the original developer. This aids in identifying potential improvements, ensuring <br>
                    that the code adheres to best practices, and promoting overall code quality.</p><br><br>
                
            </div>
            </div>
        </div>
    </body>
</html>
