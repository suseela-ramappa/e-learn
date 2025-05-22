<?php
 include("html.php")
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
            font-size:13px;
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
                    <h2>HTML Comments</h2><br><br><br>
                    <p>HTML comments are essentially hidden notes or annotations within<br>
                        the HTML code of a web page. These comments are not displayed<br>
                        on the web page itself but are intended solely for developers,<br>
                        allowing them to make explanations, provide context, or temporarily <br>
                        disable certain sections of code without affecting the page’s<br>
                        visual output.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">Syntax of HTML Comments:</b></h3><br>
                    <p>HTML comments are enclosed within <!– and –> tags, like this:</p>
                    <br>
                    <pre class=prg><br>&lt;!-- This is an HTML comment. --&gt;<br><br></pre><br><br>

                    <h3><b style="color:navy">Why Use HTML Comments?</b></h3><br>
                    <h4><b style="color:black">1.  Documentation:</b></h4><br>
                    <p>One of the primary purposes of HTML comments is to document<br>
                        your code. They provide clarity and context to anyone<br>
                        (including yourself) who reads or works with the code.<br>
                        Comments help you remember why you wrote a particular <br>
                        piece of code, what it does, and how it fits into the <br>
                        overall structure of the webpage.</p><br><br>

                        <h4><b style="color:black">2. Debugging:</b></h4><br>
                      <p>When troubleshooting issues in your code, comments can be<br>
                         invaluable. By temporarily commenting out sections of your <br>
                         code, you can isolate problems and test different solutions<br>
                          without altering the original code. This makes debugging more<br>
                           efficient and less error-prone.</p><br><br>

                        <h4><b style="color:black">3. Collaboration:</b></h4><br>
                    <p>In collaborative web development projects, comments can <br>
                        facilitate communication among team members. They provide<br>
                        a means to share insights, notes, and instructions related<br>
                        to specific code segments. This enhances teamwork and <br>
                        ensures that everyone is on the same page.</p><br><br>

                        <h4><b style="color:black">4. Temporary Removal:</b></h4><br>
                    <p>Sometimes, you may need to remove a part of your code temporarily.<br>
                        Instead of deleting it and risking losing important code, <br>
                        you can comment it out. This way, you can easily restore it <br>
                        when needed.</p><br><br>

                        <h4><b style="color:black">5. Accessibility Testing:</b></h4><br>
                        <p>Comments can be used to mark sections of the code that require <br>
                        accessibility enhancements or testing. This is especially <br>
                        important for creating websites that are inclusive and usable<br>
                        by people with disabilities.</p><br><br>

                        <h3><b style="color:navy">Best Practices for HTML Comments:</b></h3><br>
                    <h4><b style="color:black">1.  Keep Them Concise:</b></h4><br>
                    <p>Comments should be clear, concise, and to the point. Avoid overly<br>
                    lengthy comments, as they can make the code harder to read.</p><br><br>

                    <h4><b style="color:black">2. Use Them Sparingly:</b></h4><br>
                    <p>While comments are valuable, don’t overuse them. Excessive<br>
                     comments can clutter your code and make it harder to read. <br>
                     Only add comments where they genuinely provide value.</p><br><br>

                    <h4><b style="color:black">3. Maintain Consistency:</b></h4><br>
                    <p>Establish a consistent style for your comments. You can <br>
                        use a particular format or naming convention to make<br>
                         your comments easily recognizable.</p><br><br>

                    <h4><b style="color:black">4. Update and Remove:</b></h4><br>
                    <p>Over time, the context and purpose of code may change. <br>
                        Always update or remove comments that are no longer <br>
                        accurate to avoid confusion.</p><br><br>

                    <h4><b style="color:black">5. Avoid Redundancy:</b></h4><br>
                    <p>If your code is self-explanatory, there’s no need to<br>
                         add a comment stating the obvious. Reserve comments <br>
                         for clarifying complex or non-intuitive code</p><br><br>
            </div>
        </div>
    </body>
</html>
