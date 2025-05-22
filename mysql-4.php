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
                    <h2>SQL Transactions</h2><br><br><br>
                    <p>A transaction in SQL represents a sequence of one or more SQL <br>
                        statements that are executed as a single, atomic unit of work. <br>
                        The term “atomic” here implies that the transaction is treated <br>
                        as a single, indivisible operation. Either all the changes made <br>
                        by the transaction are committed to the database, or none of them <br>
                        are.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">Properties of Transaction:</b></h3><br>
                    <h4><b style="color:black">1. Atomicity:</b></h4><br>
                    <p>Atomicity ensures that a transaction is treated as a single, indivisible<br>
                     unit. If any part of the transaction fails, the entire transaction is rolled<br>
                      back, and the database is left unchanged. This property guarantees consistency<br>
                       in the database state.</p><br><br>      
                         
                       <h4><b style="color:black">2.Consistency:</b></h4><br>
                      <p>Consistency ensures that the database remains in a valid state before <br>
                        and after the transaction. If the transaction violates any integrity <br>
                        constraints or rules, it is rolled back to maintain the overall consistency<br> 
                        of the data.</p><br><br>

                        <h4><b style="color:black">3. Isolation:</b></h4><br>
                    <p>Isolation ensures that the intermediate state of a transaction is not <br>
                        visible to other transactions until it is committed. This property prevents<br>
                         interference between concurrent transactions and maintains data integrity.</p><br><br>
                        
                         <h4><b style="color:black">4. Durability:</b></h4><br>
                    <p>Durability guarantees that once a transaction is committed, its changes are <br>
                        permanent and survive any subsequent failures. The committed changes are <br>
                        stored in a way that can withstand system crashes or power outages.</p><br><br>
                       
                        <h3><b style="color:navy">SQL transaction commands:</b></h3><br>
                        <p>Here are the main SQL transaction commands:</p>
                    <h4><b style="color:black">1.  BEGIN TRANSACTION:</b></h4><br>
                    <p> The BEGIN TRANSACTION command marks the beginning of a transaction. It indicates<br>
                         the start of a sequence of SQL statements that should be treated as a single unit.</p><br><br>

                    <h4><b style="color:black">2. COMMIT: </b></h4><br>
                    <p>The COMMIT command is used to save all the changes made during the current transaction<br>
                     to the database. Once a COMMIT statement is executed, the changes become permanent.</p><br><br>

                    <h4><b style="color:black">3. ROLLBACK: </b></h4><br>
                    <p> The ROLLBACK command is used to undo all changes made during the current transaction. It <br>
                        restores the database to its state before the transaction began.</p><br><br>

                    <h4><b style="color:black">4. SAVEPOINT: </b></h4><br>
                    <p> The SAVEPOINT command is used to set a point within a transaction to which you can later <br>
                        roll back. It allows you to create intermediate points in a transaction for more granular<br>
                         control over the rollback process.</p><br><br>
                
                         <h4><b style="color:black">5.  ROLLBACK TO SAVEPOINT: </b></h4><br>
                    <p> The ROLLBACK TO SAVEPOINT command is used to undo all changes made after a specific SAVEPOINT<br>
                         within the current transaction.</p><br><br>

                    <h4><b style="color:black">6.  SET TRANSACTION:</b></h4><br>
                    <p> The SET TRANSACTION command is used to control characteristics of a transaction, such as <br>
                        isolation level and access mode.</p><br><br>
            </div>
            </div>
        </div>
    </body>
</html>
