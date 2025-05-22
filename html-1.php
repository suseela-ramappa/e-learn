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
                    <h2>Introduction To HTML</h2><br><br><br>
                    <p>HTML is a markup language used to structure the content on web pages.<br> 
                    It provides a set of elements that define the different parts of a <br>
                    web page, such as headings, paragraphs, links, images, and more. These <br>
                    elements are enclosed in tags, which tell web browsers how to display<br>
                    the content. HTML isn’t a programming language; it’s a markup language <br>
                    that acts as the structural backbone of web documents.</p>
                    <br>
                    <br>
                    <h3><b style="color:navy">1.1  The Building Blocks</b></h3><br><br>
                    <h4><b style="color:black">1.  Elements:</b></h4><br>
                    <p>HTML is built around elements. Each element is represented by a <br>
                        pair of tags. Tags are enclosed in angle brackets, and they come<br>
                        in pairs – an opening tag and a closing tag. The opening tag <br>
                        indicates the start of an element, while the closing tag marks <br>
                        the end. For example, to create a paragraph of text, you’d use <br>
                        the <b>< p></b> element with an opening and closing tag like this</p><br><br>
                  
                    <pre class="prg"><br>&lt;p&gt;This is a paragraph of text.&lt;/p&gt; <br><br></pre><br><br>


                    <h4><b style="color:black">2. Attributes:</b></h4><br>
                    <p>Elements can also have attributes that provide additional<br>
                        information about them. Attributes are always specified <br>
                        in the opening tag. For example, the<b> &lt;a&gt; </b> (anchor)<br> 
                        element is used to create links, and it has an href attribute <br>
                        to specify the URL the link points to:</p> <br> <br>           
                    <pre class="prg"><br>&lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt; <br><br></pre><br><br>
                   
                    <h4><b style="color:black">3. Nesting:</b></h4><br>
                    <p>Elements can be nested inside one another, creating a hierarchy<br> 
                     of content. For example, you can have a heading within a paragraph:</p><br> <br>           
                    <pre class="prg"><br>&lt;p&gt;This is a &lt;strong&gt;bold&lt;/strong&gt; statement.&lt;/p&gt; <br><br></pre><br><br>
                    <img src="C:\xampp\htdocs\project work\css\img\HTML-Basic-Format.png" width="200px" hight="100px"><bR><br><bR>
                    <h3><b style="color:navy">1.2  HTML Tags for Common Elements:</b></h3><br><br>
                    <p>HTML provides a variety of tags to structure your content.<br>
                     Here are some common ones:</p>
                    <br>
                    <br>      
                    <pre class="prg">
                    <br>
                        <ui>
                            <li><b>&lt;h1&gt;, &lt;h2&gt;,&lt;h3&lt;,.....&gt;&lt;h6&gt;:</b>  Headings of different levels.</li>
                            <li><b>&lt;p&gt;:</b>  Paragraphs.</li>
                            <li><b>&lt;a&gt;:</b>  Links.</li>
                            <li><b>&lt;img&gt;:</b>  Images.</li>
                            <li><b>&lt;li&gt;:</b>  List items.</li>
                            <li><b>&lt;div&gt;:</b>  A generic container for grouping content.</li>
                            <li><b>&lt;span&gt;:</b>  A generic container for inline content.</li>
                         </ui>
                     <br><br>
                    </pre><br><br>
                    <h3><b style="color:navy">1.3  Your First HTML Page:</b></h3><br><br>
                   
                   <p>To create your first HTML page, follow these steps:<br><br></p>
                     
                       <p>1. Open a text editor like Notepad (Windows) or TextEdit (Mac).</p><br>
                       <p>2. Type the following code:</p><br>
                       <pre class="prg"><br><br>&lt;! DOCTYPE html&gt;<br>
                       &lt;html&gt;<br>
                       &lt;head&gt;<br>
                       &lt;title&gt;My first HTML page&lt;/tittle&gt;<br>
                       &lt;/head&gt;<br>
                       &lt;body&gt;<br>
                       &lt;h1&gt;Hello, World!&lt;/h1&gt;<br>
                       &lt;p&gt;This is my first HTML page&lt;/p&gt;<br>
                       &lt;/body&gt;<br>
                       &lt;/html&gt;<br><br><br></pre><br>
                       <p>3. Save the file with a .html extension, e.g., my_first_page.html.</p><br>
                       <p>4. Open the saved HTML file with a web browser to see your page.</p><br>
                      <p>Congratulations! You’ve just created a simple HTML page.</p>
            </div>
        </div>
    </body>
</html>
