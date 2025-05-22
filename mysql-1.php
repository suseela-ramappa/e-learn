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
            font-size:25px;
            color:rgba(221,146,0, 100%);
            margin-left:40px;
        }
        h5{
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
                    <h2>Introduction To SQL</h2><br><br><br>
                    <p>SQL, pronounced as “sequel” or “S-Q-L,” stands for Structured<br>
                     Query Language. It is a domain-specific language used for managing<br>
                     and manipulating relational databases. SQL provides a standardized<br>
                     way to interact with databases, making it possible to create, retrieve,<br> 
                     update, and delete data.</p>
                    <br>
                    <p>SQL has a rich history that dates back to the 1970s. It was initially <br>
                    developed by IBM researchers Donald D. Chamberlin and Raymond F. Boyce <br>
                    as a way to manage and manipulate data stored in the System R database. <br>
                    Over the years, SQL has evolved and become the standard language for <br>
                    relational database management systems (RDBMS), with different implementations<br>
                     such as MySQL, PostgreSQL, Microsoft SQL Server, and Oracle Database.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">SQL Commands:</b></h3><br>
                    <h4><b style="color:black">1.  Data Definition Language (DDL):</b></h4><br>
                    <p>DDL is a subset of SQL used to define and manage the structure of a <br>
                        database. Key DDL commands include:<br></p><br><br>
                      <h5><b>1.  CREATE:</b></h5>
                      <p>Used to create database objects like tables, indexes, and views.</p><br>
                      <h5><b>2.  ALTER:</b></h5>
                      <p>Modifies the structure of existing database objects.</p><br>
                      <h5><b>3.  DROP:</b></h5>
                      <p>Deletes database objects.</p><br><br>

                        <h4><b style="color:black">2.Data Manipulation Language (DML): </b></h4><br>
                      <p>DML commands enable users to interact with and manipulate data within the<br>
                         database. Common DML commands include</p><br><br>
                         <h5><b>1. INSERT:</b></h5>
                      <p>Adds new records to a table.</p><br>
                      <h5><b>2.  UPDATE:</b></h5>
                      <p>Modifies existing records in a table.</p><br>
                      <h5><b>3.  DELETE:</b></h5>
                      <p>Removes records from a table.</p><br><br>

                        <h4><b style="color:black">3. Data Control Language (DCL):</b></h4><br>
                    <p>DCL commands manage the permissions and access control within the database. <br>
                        Key DCL commands include:</p><br><br>
                        <h5><b>1. GRANT:</b></h5>
                      <p>Provides specific privileges to users or roles.</p><br>
                      <h5><b>2.  REVOKE:</b></h5>
                      <p>Removes specific privileges from users or roles.</p><br><br>

                        <h4><b style="color:black">4. TCL (Transaction Control Language):</b></h4><br>
                    <p> TCL (Transaction Control Language) commands are used to manage transactions<br>
                         within a database. Transactions are sequences of one or more SQL statements<br>
                          that are executed as a single unit of work.</p><br><br>
                          <h5><b>1. COMMIT:</b></h5>
                      <p>The COMMIT command is used to save all the changes made during the current <br>
                        transaction to the database. Once a COMMIT statement is executed, the changes<br>
                         become permanent.</p><br>
                      <h5><b>2.  ROLLBACK:</b></h5>
                      <p>The ROLLBACK command is used to undo all changes made during the current<br>
                         transaction. It restores the database to its state before the transaction <br>
                         began.</p><br>
                      <h5><b>3.  SAVEPOINT:</b></h5>
                      <p>The SAVEPOINT command is used to set a point within a transaction to which<br>
                         you can later roll back. It allows you to create intermediate points in a<br>
                          transaction for more granular control over the rollback process.</p><br><br>

                        <h4><b style="color:black">5. DQL (Data Query Language):</b></h4><br>
                        <p>DQL (Data Query Language) commands in SQL are primarily focused on retrieving<br>
                         and querying data from a database. The most commonly used DQL command is<br>
                         SELECT. Here are some DQL commands and examples:</p><br><br>
                         <h5><b>SELECT :</b></h5>
                      <p>The SELECT statement is used to retrieve data from one or more tables. It <br>
                        can retrieve specific columns or all columns, filter rows based on conditions,<br>
                         and join multiple tables.</p><br>

                        <h3><b style="color:navy">Uses of SQL:</b></h3><br>
                    <h4><b style="color:black">1. Database Creation and Management:</b></h4><br>
                    <p>SQL is used to create, modify, and manage databases. Database administrators <br>
                    (DBAs) utilize SQL’s Data Definition Language (DDL) commands to define the <br>
                    structure of databases, tables, indexes, and other objects. Examples of DDL<br>
                    commands include CREATE, ALTER, and DROP, which are essential for designing and<br> 
                    maintaining the database schema.</p><br><br>

                    <h4><b style="color:black">2. Data Retrieval: </b></h4><br>
                    <p> SQL’s primary function is to retrieve data from databases. The SELECT statement <br>
                        allows users to fetch specific columns or entire rows from one or more tables <br>
                        based on specified conditions. This capability is crucial for applications ranging<br>
                         from simple data retrieval to complex reporting and analytics.</p><br><br>

                    <h4><b style="color:black">3. Data Modification: </b></h4><br>
                    <p>SQL provides commands for modifying existing data within a database. The Data<br>
                        Manipulation Language (DML) commands such as INSERT, UPDATE, and DELETE enable<br>
                        users to add, modify, or remove records from tables.</p><br><br>

                    <h4><b style="color:black">4. Data Filtering and Sorting:</b></h4><br>
                    <p>SQL allows users to filter and sort data based on specific criteria using the WHERE <br>
                        and ORDER BY clauses, respectively. This is crucial for tailoring query results to<br>
                         meet specific requirements.</p><br><br>

                    <h4><b style="color:black">5. Data Integrity and Constraints:</b></h4><br>
                    <p>SQL supports the implementation of constraints to maintain data integrity within a<br>
                        database. Constraints such as PRIMARY KEY, FOREIGN KEY, and CHECK ensure that data <br>
                        adheres to specified rules, preventing inconsistencies and errors.</p><br><br>
                    
                    <h4><b style="color:black">6. Data Security:</b></h4><br>
                    <p>Data Control Language (DCL) commands in SQL, such as GRANT and REVOKE, are used to <br>
                        manage access permissions and control user privileges. Database administrators can <br>
                        grant or revoke specific privileges to users or roles, ensuring data security and <br>
                        access control.</p><br><br>

                    <h4><b style="color:black">7. Data Analysis and Reporting:</b></h4><br>
                    <p>SQL is a crucial tool for data analysts and business intelligence professionals. By <br>
                    leveraging SQL queries, analysts can extract, transform, and analyze data to derive <br>
                    meaningful insights and generate reports.</p><br><br>

                
            </div>
            </div>
        </div>
    </body>
</html>
