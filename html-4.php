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
                    <h2>HTML Elements</h2><br><br><br>
                    <p>HTML elements are the fundamental units that structure and<br>
                        define the content on a web page. They are the tags that<br>
                        enclose various parts of a webpage, telling the browser <br>
                        how to display and interpret the content. Each HTML element<br>
                        serves a unique purpose, and by combining them creatively, <br>
                        web developers can shape the appearance and functionality of<br>
                      a website.</p>
                    <br>
                    <br>

                    <h3><b style="color:navy">Anatomy of an HTML Element:</b></h3><br>
                    <p>An HTML element consists of several key components:</p><br>
                    <h4><b style="color:black">1.  Opening Tag:</b></h4><br>
                    <p>This is the first part of the element and defines the start of<br>
                         the element. It is enclosed in angle brackets, e.g., &lt;element&gt;.</p><br><br>

                        <h4><b style="color:black">2. Content:</b></h4><br>
                      <p>This is the actual content that the element encapsulates.<br>
                         It could be text, images, or other HTML elements.</p><br><br>

                        <h4><b style="color:black">3. Closing Tag:</b></h4><br>
                       <p>The closing tag marks the end of the element and is identical 
                        to the opening tag but with a forward slash, e.g., &lt;/element&gt;.</p><br><br>

                        <h4><b style="color:black">4. Attributes:</b></h4><br>
                      <p>Attributes provide additional information about an element, such
                         as its behavior or appearance. They are placed within the opening
                          tag and follow the tag name. For instance,
                         &lt;a href=”https://www.topperworld.in”&gt;.</p><br><br>

                        <h4><b style="color:black">5. Nesting:</b></h4><br>
                       <p>HTML elements can be nested within each other, creating a<br>
                         hierarchical structure. This nesting is what enables the<br>
                          creation of complex web page layouts.</p><br><br>


                        <h3><b style="color:navy">Common HTML Elements:</b></h3><br>
                        <p>HTML provides a wide range of elements, each serving a<br>
                         unique purpose. Here are some of the most commonly used ones:</p><br>
                      <h4><b style="color:black">&lt;div&gt;:</b></h4><br>
                    <p>The ‘division’ element is a versatile container for grouping<br> 
                        and styling content on a webpage.</p><br><br>

                    <h4><b style="color:black">&lt;p&gt;:</b></h4><br>
                    <p>The ‘paragraph’ element is used for text content, <br>
                        creating paragraphs.</p><br><br>

                    <h4><b style="color:black">&lt;a&gt;:</b></h4><br>
                    <p>The ‘anchor’ element is used for creating hyperlinks to<br>
                         other web pages.</p><br><br>

                    <h4><b style="color:black">&lt;img&gt;:</b></h4><br>
                    <p>The ‘image’ element is used to embed images on a webpage.</p><br><br>

                    <h4><b style="color:black">&lt;ul&gt;,&lt;ol&gt;,&lt;li&gt;:</b></h4><br>
                    <p>These elements are used to create lists, both unordered (bulleted)<br>
                         and ordered (numbered).</p><br><br>

                      <h4><b style="color:black">&lt;h1&gt;to&lt;h6&gt;</b></h4><br>
                    <p>The ‘heading’ elements are used for defining headings of different <br>
                        levels, with &lt;h1&gt; being the highest level and &lt;h6&gt; the<br>
                         lowest.</p><br><br>

                     <h4><b style="color:black">&lt;input&gt;:</b></h4><br>
                    <p>The ‘input’ element is used to create various input fields, like text<br>
                         boxes, radio buttons, and checkboxes.</p><br><br>

                     <h4><b style="color:black">&lt;form&gt;:</b></h4><br>
                    <p>The ‘form’ element is used to create data entry forms that can be <br>
                        submitted to a server for processing.</p><br><br>
            
            </div>
        </div>
    </body>
</html>