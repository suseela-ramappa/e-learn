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
                    <h2>HTML Headings</h2><br><br><br>
                    <p>HTML headings are elements used to define <br>
                     structure and hierarchy of content on a web page.<br>
                     They serve as labels for different sections or parts<br>
                     of your content, helping both humans and search<br>
                     engines understand the organization and flow of the <br>
                     page. HTML headings range from &lt;h1&gt; to &lt;h6&gt;, with<br> 
                     &lt;h1&gt; being the highest level and &lt;h6&gt; the lowest.</p>
                    <br>
                    <br>

                    <h3><b style="color:navy">The Hierarchy of Headings:</b></h3><br>
                    <p>HTML headings follow a hierarchical structure,<br>
                     where &lt;h1&gt; is the most significant and &lt;h6&gt;<br>
                     is the least significant. Think of them like the<br>
                     chapters and subchapters of a book. The hierarchical <br>
                     order helps browsers and assistive technologies <br>
                     understand the relationship between different sections <br>
                     of your content.</p><br><br>

                      <p>&lt;h1&gt; should be used for the main title of your page<br>
                         and is typically unique on a page. It defines the <br>
                         highest level of importance.</p><br><br>

                       <p>&lt;h2&gt; is used for subheadings of &lt;h1&gt;. It<br>
                         denotes a slightly lower level of importance.</p><br><br>

                      <p>&lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, and &lt;h6&gt; are used for further subheadings within<br>
                         their respective parent headings, with decreasing levels of importance.</p><br><br>
                          
                         <pre class="prg"><br><br>  &lt;h1&gt;This is a Level 1 Heading&lt;/h1&gt;
&lt;h2&gt;This is a Level 2 Heading&lt;/h2&gt;
&lt;h3&gt;This is a Level 3 Heading&lt;/h3&gt;
&lt;h4&gt;This is a Level 4 Heading&lt;/h4&gt;
&lt;h5&gt;This is a Level 5 Heading&lt;/h5&gt;
&lt;h6&gt;This is a Level 6 Heading&lt;/h6&gt;<br><br></pre>

                        <h3><b style="color:navy">Why Are Headings Important?</b></h3><br>
                        <h4><b style="color:black">1.  Readability:</b></h4><br>
                        <p>Headings break up your content into digestible<br>
                          sections, making it easier for readers to scan <br>
                          and find the information they are looking for. <br>
                          This is particularly crucial in today’s fast-paced<br>
                           online world.</p><br>
                         
                           <h4><b style="color:black">2.  SEO (Search Engine Optimization):</b></h4><br>
                        <p>Search engines use headings to understand the <br>
                            content’s structure and relevance. Properly <br>
                            structured headings can improve your page’s ranking<br>
                             in search results.</p><br>
                           
                           <h4><b style="color:black">3.  Accessibility:</b></h4><br>
                        <p>Search engines use headings to understand the content’s<br>
                         structure and relevance. Properly structured headings<br>
                          can improve your page’s ranking in search results.</p><br>

                           <h4><b style="color:black">4.  Content Organization:</b></h4><br>
                        <p>Well-structured headings make content easier to <br>
                        manage, edit, and maintain. They also aid in collaborative<br>
                         efforts when multiple people are working on a website.</p><br>
            </div>
        </div>
    </body>
</html>