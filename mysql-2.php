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
                    <h2>SQL Data Types With Examples</h2><br><br><br>
                    <p>Structured Query Language (SQL) serves as the backbone<br>
                     for managing and manipulating relational databases. In <br>
                     the world of SQL, data types play a crucial role in defining<br>
                     the nature of data stored in tables. Choosing the right data<br>
                     type is essential for optimizing storage, ensuring data <br>
                     integrity, and improving overall database performance.</p>
                    <br>
                    <p>Data types define the type of data that a column can hold.<br>
                        They ensure that data is stored in a consistent format <br>
                        and provide a level of control over the kind of values that<br>
                         can be inserted into a column.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">Categories of SQL Data Types:</b></h3><br>
                    <p>SQL data types can be broadly categorized into several groups:</p><br>
                    <h4><b style="color:black">1.  Numeric Data Types:</b></h4><br>
                    <p>Numeric data types are used to store numeric values such as <br>
                    integers and floating-point numbers. Common examples include INTEGER,<br>
                    BIGINT, DECIMAL, and FLOAT. Choosing the appropriate numeric data <br>
                    type is crucial for optimizing storage and ensuring accurate <br>
                    representation of numerical values.</p><br><br>      
                    <pre class="prg"><br><br>CREATE TABLE example_table (
id INTEGER,
price DECIMAL(10, 2),
quantity INT
);
<br><br></pre>
                        <h4><b style="color:black">2. Character String Data Types: </b></h4><br>
                      <p>Character string data types are designed to store text values. VARCHAR,<br>
                        CHAR, and TEXT are commonly used types in this category. VARCHAR is<br>
                        variable-length, while CHAR is fixed-length. The choice between them <br>
                        depends on the expected length of the data.</p><br><br>
                        <pre class="prg"><br><br>CREATE TABLE employee (
first_name VARCHAR(50),
last_name CHAR(30),
bio TEXT
);
<br><br></pre>

                        <h4><b style="color:black">3. Date and Time Data Types: </b></h4><br>
                    <p>Date and time data types are used to store temporal information. Examples <br>
                        include DATE, TIME, TIMESTAMP, and INTERVAL. Understanding these types is<br>
                         crucial for accurately representing and manipulating time-related data in<br>
                          your database.</p><br><br>
                          <pre class="prg"><br><br>CREATE TABLE event (
event_name VARCHAR(100),
event_date DATE,
start_time TIME,
end_time TIMESTAMP
);<br><br></pre>


                        <h4><b style="color:black">4. Boolean Data Type:</b></h4><br>
                    <p>The BOOLEAN data type is used to store true or false values. It’s particularly<br>
                        useful for columns that represent binary choices, such as ‘active’ or ‘inactive’,<br>
                         ‘yes’ or ‘no’.</p><br><br>
                         <pre class="prg"><br><br>CREATE TABLE user_status (
user_id INT,
is_active BOOLEAN
);<br><br></pre>

                        <h4><b style="color:black">5. Binary Data Types:</b></h4><br>
                        <p>Binary data types are used to store binary data, such as images or documents.<br>
                         BLOB (Binary Large Object) and VARBINARY are examples of binary data types.</p><br><br>
                         <pre class="prg"><br><br>CREATE TABLE document (
document_id INT,
file_data BLOB
);<br><br></pre>

                        <h3><b style="color:navy">Significance of Choosing the Right Data Type:</b></h3><br>
                    <h4><b style="color:black">1.  Storage Optimization:</b></h4><br>
                    <p> Choosing appropriate data types helps optimize storage space, ensuring that <br>
                        tables do not consume unnecessary resources.</p><br><br>

                    <h4><b style="color:black">2. Data Integrity:</b></h4><br>
                    <p> Proper data types enforce data integrity by preventing incompatible data<br>
                         from being stored in a column.</p><br><br>

                    <h4><b style="color:black">3. Performance Enhancement:</b></h4><br>
                    <p>Using the correct data types contributes to faster query execution and improved<br>
                     overall database performance.</p><br><br>

                    <h4><b style="color:black">4. Compatibility:</b></h4><br>
                    <p>Ensures compatibility with other applications and systems that interact with <br>
                        the database.</p><br><br>
                
            </div>
            </div>
        </div>
    </body>
</html>
