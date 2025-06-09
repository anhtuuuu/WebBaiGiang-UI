<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/pythondisplay.php?url1=python/week7.py&url2=&url3=&url4=&title=Write%20a%20program%20to%20demonstrate%20working%20with%20dictionaries%20in%20python.%20&opurl1=python/outputs/w7.png&opurl2=&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:50:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | Python Programming Lab Manual(Programs)</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="../images/logo1.png" type="image/x-icon"/>
    <link rel="bookmark" href="../images/logo1.png"/>
    <!-- site css -->
    <link rel="stylesheet" href="../dist/css/main.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../dist/js/site.min.js"></script>
	<script type="text/javascript" src="../dist/js/prism.js"></script>
	<script>
		function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
		}
	</script>
	<style>
.downloadbtn {
background-color: #0099cc; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top:10px;
  padding:8px 15px 8px 15px;
  cursor: pointer;
  }
  button.downloadbtn:hover {
background-color: #ff3300; 
  }
	</style>
	<script async src="../../pagead2.googlesyndication.com/pagead/js/f9b65.txt?client=ca-pub-8096140274719176"
     crossorigin="anonymous"></script>
  </head>
<body>
<!--nav-->
<link rel="stylesheet" href="../dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../dist/js/site.min.js"></script>
	 <script type="text/javascript" src="../dist/js/prism.js"></script>
	<script>
			function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
		}
	</script>
	<script async src="../../pagead2.googlesyndication.com/pagead/js/f9b65.txt?client=ca-pub-8096140274719176"
     crossorigin="anonymous"></script>
  </head>
<body>    
<nav role="navigation" class="navbar">
	<!-- logo -->
	<center><img src="../images/logo4.png" height="90" border="0" alt="" style="padding-left:5px;padding-top:2px;padding-bottom:5px;"></center>
	<!-- main menu-->   
	<div class="topnav" id="myTopnav">
	<a href="../index-2.html" class="">Home</a>
	<div class="mdropdown">
    <button class="mdropbtn">Tutorials
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="mdropdown-content">
	  <a href="../c/index.html" class="">C - Programming</a>
	<a href="../ds/index.html" class="" >Data Structure</a>
      <a href="../html/index.html" class="">HTML</a>
	  <a href="../php/index.html" class="">PHP</a>
	  <a href="../xml/index.html" class="" >XML</a>
	  <a href="../servlet/index.html" class="" >SERVLET</a>
     <a href="../python/index.html" class="" >PYTHON</a>
     <a href="../dbms/index.html" class="" >DBMS</a>
     <a href="../dm/index.html" class="" >Data Mining</a>
     <a href="../daa/index.html" class="" >DAA</a>
	 <a href="../nn/index.html" class="" >Neural Networks</a>
	 <a href="../dl/index.html" class="" >Deep Learning</a>
      <!--<a href="#php" class="">PHP</a>-->
    </div>
  </div>

<!--
	<a href="html/index.php" class="">HTML</a>
	<a href="python/index.php" class="">PYTHON</a>
	<a href="#php" class="">PHP</a>-->
	<a href="../ppts/index.html" class="">PPTs</a>
	<a href="../lecturenotes/index.html" class="">Lecture Notes</a>
	<!--<a href="../questions/index.php" class="">Questions</a>-->
	<a href="../objquestions/index.html" class="">Objective Questions</a>
	<a href="index.html" class="active">Lab Programs</a>
	<!--<a href="../syllabus/index.php" class="">Syllabus</a>-->
	<a href="../blog/index.html" class="">Blog</a>
	<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	<i class="fa fa-bars"></i>
	</a>
	</div>
	<!-- end main menu-->
</nav>
<!--nav end -->
<!--body container-->
    <div class="container-fluid">
    <div class="row row-offcanvas row-offcanvas-left">
<!-- Side Menu-->
	<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation" id="non-printable">
    <ul class="list-group panel">
		<li class="list-group-item"><img src="../images/tutorials_icons.png" width="20"alt="">&nbsp;<b>Tutorials</b></li>
        <!--<li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>-->
		 <li class="list-group-item"><a href="../c/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    C - Programming</a></li>
        <li class="list-group-item"><a href="../html/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    HTML</a></li>
		<li class="list-group-item"><a href="../php/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    PHP</a></li>
		<li class="list-group-item"><a href="../xml/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    XML</a></li>
		<li class="list-group-item"><a href="../python/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    PYTHON</a></li>
	    <li class="list-group-item"><a href="../dbms/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	   DBMS</a></li>
	   <li class="list-group-item"><a href="../dm/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	   Data Mining</a></li>
	    <li class="list-group-item"><a href="../daa/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	   DAA</a></li>
		<li class="list-group-item"><a href="../nn/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    Neural Networks</a></li>
		<li class="list-group-item"><a href="../dl/index.html"><i class="glyphicon glyphicon-list-alt"></i>
	    Deep Learning</a></li>
		<!--<li class="list-group-item"><a href="#php"><i class="glyphicon glyphicon-list-alt"></i>
	    PHP</a></li>
		<li class="list-group-item"><a href="#xml"><i class="glyphicon glyphicon-list-alt"></i>
	    XML</a></li>
		<li class="list-group-item"><a href="#js"><i class="glyphicon glyphicon-list-alt"></i>
	    JAVA SCRIPT</a></li>-->


		<li class="list-group-item"><a href="../ppts/index.html"><img src="../images/ppt_icons.png" width="20"alt="">&nbsp;<b>PPTs</b></a></li>
		<li class="list-group-item"><a href="../lecturenotes/index.html"><img src="../images/note_icons.png" width="20"alt="">&nbsp;<b>Lecture Notes</b></a></li>
		   <!--<li class="list-group-item"><a href="#html"><i class="glyphicon glyphicon-list-alt"></i>
	    HTML</a></li>
		<li class="list-group-item"><a href="#python"><i class="glyphicon glyphicon-list-alt"></i>
	    PYTHON</a></li>
		<li class="list-group-item"><a href="#php"><i class="glyphicon glyphicon-list-alt"></i>
	    PHP</a></li>
		<li class="list-group-item"><a href="#xml"><i class="glyphicon glyphicon-list-alt"></i>
	    XML</a></li>
		<li class="list-group-item"><a href="#js"><i class="glyphicon glyphicon-list-alt"></i>
	    JAVA SCRIPT</a></li>-->


		<li class="list-group-item"><img src="../images/faq_icons.png" width="20"alt="">&nbsp;<b><a href="../questions/index.html" class="active">Questions</a></b></li>
		 <!--  <li class="list-group-item"><a href="#html"><i class="glyphicon glyphicon-list-alt"></i>
	    HTML</a></li>
		<li class="list-group-item"><a href="#python"><i class="glyphicon glyphicon-list-alt"></i>
	    PYTHON</a></li>
		<li class="list-group-item"><a href="#php"><i class="glyphicon glyphicon-list-alt"></i>
	    PHP</a></li>
		<li class="list-group-item"><a href="#xml"><i class="glyphicon glyphicon-list-alt"></i>
	    XML</a></li>
		<li class="list-group-item"><a href="#js"><i class="glyphicon glyphicon-list-alt"></i>
	    JAVA SCRIPT</a></li>-->
		<li class="list-group-item"><a href="../objquestions/index.html"><img src="../images/objective_icons.png" width="20"alt="">&nbsp;<b>Objective Questions</b></a></li>
		<li class="list-group-item"><a href="index.html"><img src="../images/lab_icons.png" width="20"alt="">&nbsp;<b>Lab Programs</b></a></li>
		<!--<li class="list-group-item"><a href="../syllabus/index.php"><img src="../images/syllabus_icons.png" width="20"alt="">&nbsp;<b>Syllabus</b></a></li>-->
		<li class="list-group-item"><a href="../blog/index.html"><img src="../images/faq_icons.png" width="20"alt="">&nbsp;<b>Blog</b></a></li>
		   <!--<li class="list-group-item"><a href="#html"><i class="glyphicon glyphicon-list-alt"></i>
	    HTML</a></li>
		<li class="list-group-item"><a href="#python"><i class="glyphicon glyphicon-list-alt"></i>
	    PYTHON</a></li>
		<li class="list-group-item"><a href="#php"><i class="glyphicon glyphicon-list-alt"></i>
	    PHP</a></li>
		<li class="list-group-item"><a href="#xml"><i class="glyphicon glyphicon-list-alt"></i>
	    XML</a></li>
		<li class="list-group-item"><a href="#js"><i class="glyphicon glyphicon-list-alt"></i>
	    JAVA SCRIPT</a></li>-->
        <!--
        <li>
        <a href="#demo3" class="list-group-item " data-toggle="collapse">Item 3  <span class="glyphicon glyphicon-chevron-right"></span></a>
        <div class="collapse" id="demo3">
        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse">Subitem 1  <span class="glyphicon glyphicon-chevron-right"></span></a>
        <div class="collapse list-group-submenu" id="SubMenu1">
			<a href="#" class="list-group-item">Subitem 1 a</a>
            <a href="#" class="list-group-item">Subitem 2 b</a>
            <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse">Subitem 3 c <span class="glyphicon glyphicon-chevron-right"></span></a>
            <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                  <a href="#" class="list-group-item">Sub sub item 1</a>
                  <a href="#" class="list-group-item">Sub sub item 2</a>
            </div>
            <a href="#" class="list-group-item">Subitem 4 d</a>
        </div>
             <a href="javascript:;" class="list-group-item">Subitem 2</a>
             <a href="javascript:;" class="list-group-item">Subitem 3</a>
        </div>
        </li>
        <li>
              <a href="#demo4" class="list-group-item " data-toggle="collapse">Item 4  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="" class="list-group-item">Subitem 1</a>
                      <a href="" class="list-group-item">Subitem 2</a>
                      <a href="" class="list-group-item">Subitem 3</a>
                    </li>
        </li>-->
	</ul>
	<!-- Multiplex2Ver1 Start-->
<script async src="../../pagead2.googlesyndication.com/pagead/js/f9b65.txt?client=ca-pub-8096140274719176"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:360px;height:400px"
     data-ad-client="ca-pub-8096140274719176"
     data-ad-slot="3459332850"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- Multiplex2Ver end-->
    </div><!-- End side Menu-->
<!-- content -->
<div class="col-xs-12 col-sm-9">
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar" ><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Menu</h3>
    </div>
	<!--panel-Body-->
    <div class="panel-body">
		<div class="content-row">
			
 <center><h1><a href="pythonlabprograms.html" class="atopic">Python Programming [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
  <h2>Aim: </h2>
  <p>Write a program to demonstrate working with dictionaries in python.  </p>
  <h2>Source Code: </h2>
  <h3>week7.py</h3>
<pre><code class="language-py"><code><span style="color: #000000">
'''Write&nbsp;a&nbsp;program&nbsp;to&nbsp;demonstrate&nbsp;working&nbsp;with&nbsp;dictionaries&nbsp;in&nbsp;python.'''<br />dict1&nbsp;=&nbsp;{'StdNo':'532','StuName':&nbsp;'Naveen',&nbsp;'StuAge':&nbsp;21,&nbsp;'StuCity':&nbsp;'Hyderabad'}<br />print("\n&nbsp;Dictionary&nbsp;is&nbsp;:",dict1)<br />#Accessing&nbsp;specific&nbsp;values&nbsp;<br />print("\n&nbsp;Student&nbsp;Name&nbsp;is&nbsp;:",dict1['StuName'])<br />print("\n&nbsp;Student&nbsp;City&nbsp;is&nbsp;:",dict1['StuCity'])<br />#Display&nbsp;all&nbsp;Keys<br />print("\n&nbsp;All&nbsp;Keys&nbsp;in&nbsp;Dictionary&nbsp;")<br />for&nbsp;x&nbsp;in&nbsp;dict1:<br />&nbsp;&nbsp;&nbsp;&nbsp;print(x)<br />#Display&nbsp;all&nbsp;values<br />print("\n&nbsp;All&nbsp;Values&nbsp;in&nbsp;Dictionary&nbsp;")<br />for&nbsp;x&nbsp;in&nbsp;dict1:<br />&nbsp;&nbsp;&nbsp;&nbsp;print(dict1[x])<br />#Adding&nbsp;items<br />dict1["Phno"]=85457854<br />#Updated&nbsp;dictoinary<br />print("\n&nbsp;Uadated&nbsp;Dictionary&nbsp;is&nbsp;:",dict1)<br />#Change&nbsp;values<br />dict1["StuName"]="Madhu"<br />#Updated&nbsp;dictoinary<br />print("\n&nbsp;Uadated&nbsp;Dictionary&nbsp;is&nbsp;:",dict1)<br />#Removing&nbsp;Items<br />dict1.pop("StuAge");<br />#Updated&nbsp;dictoinary<br />print("\n&nbsp;Uadated&nbsp;Dictionary&nbsp;is&nbsp;:",dict1)<br />#Length&nbsp;of&nbsp;Dictionary<br />print("Length&nbsp;of&nbsp;Dictionary&nbsp;is&nbsp;:",len(dict1))<br />#Copy&nbsp;a&nbsp;Dictionary<br />dict2=dict1.copy()<br />#New&nbsp;dictoinary<br />print("\n&nbsp;New&nbsp;Dictionary&nbsp;is&nbsp;:",dict2)<br />#empties&nbsp;the&nbsp;dictionary<br />dict1.clear()<br />print("\n&nbsp;Uadated&nbsp;Dictionary&nbsp;is&nbsp;:",dict1)</span>
</code></code></pre><br>
<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>120</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>132</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>144</b><br />
-->
<h2>Output: </h2>
<img src="python/outputs/w7.png" alt="image" class="img-rounded img-responsive"/><br/>
<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>169</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>178</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/pythondisplay.php</b> on line <b>189</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Python Programming Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a program to demonstrate different number data types in Python.</font> <a href="pythondisplay2265.php?url1=python/week1.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20demonstrate%20different%20number%20data%20types%20in%20Python.&amp;opurl1=python/outputs/w1.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a program to perform different Arithmetic Operations on numbers in Python. </font> <a href="pythondisplayd0ce.php?url1=python/week2.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20perform%20different%20Arithmetic%20Operations%20on%20numbers%20in%20Python.%20&amp;opurl1=python/outputs/w2.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a program to create, concatenate and print a string and accessing sub-string from a given string. </font> <a href="pythondisplay3cf0.php?url1=python/week3.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20create,%20concatenate%20and%20print%20a%20string%20and%20accessing%20sub-string%20from%20a%20given%20string.%20&amp;opurl1=python/outputs/w3.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a python script to print the current date in the following format “Sun May 29 02:26:23 IST 2017” </font> <a href="pythondisplayadf5.php?url1=python/week4.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20python%20script%20to%20print%20the%20current%20date%20in%20the%20following%20format%20%e2%80%9cSun%20May%2029%2002:26:23%20IST%202017%e2%80%9d%20&amp;opurl1=python/outputs/w4.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a program to create, append, and remove lists in python.</font> <a href="pythondisplay6c30.php?url1=python/week5.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20create,%20append,%20and%20remove%20lists%20in%20python.&amp;opurl1=python/outputs/w5.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a program to demonstrate working with tuples in python. </font> <a href="pythondisplayfa5c.php?url1=python/week6.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20demonstrate%20working%20with%20tuples%20in%20python.%20&amp;opurl1=python/outputs/w6.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a program to demonstrate working with dictionaries in python. </font> <a href="pythondisplay60da.php?url1=python/week7.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20demonstrate%20working%20with%20dictionaries%20in%20python.%20&amp;opurl1=python/outputs/w7.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write a python program to find largest of three numbers. </font> <a href="pythondisplaya430.php?url1=python/week8.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20python%20program%20to%20find%20largest%20of%20three%20numbers.%20&amp;opurl1=python/outputs/w8.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Write a Python program to convert temperatures to and from Celsius, Fahrenheit.  [Formula: c/5 = f-32/9] </font> <a href="pythondisplayffa1.php?url1=python/week9.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20program%20to%20convert%20temperatures%20to%20and%20from%20Celsius,%20Fahrenheit.%20%20[Formula:%20c/5%20=%20f-32/9]%20&amp;opurl1=python/outputs/w9.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Write a Python program to construct the stars(*) pattern, using a nested for loop </font> <a href="pythondisplaya48b.php?url1=python/week10.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20program%20to%20construct%20the%20stars(*)%20pattern,%20using%20a%20nested%20for%20loop%20&amp;opurl1=python/outputs/w10.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>11)</strong> Write a Python script that prints prime numbers less than 20.</font> <a href="pythondisplayb621.php?url1=python/week11.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20script%20that%20prints%20prime%20numbers%20less%20than%2020.&amp;opurl1=python/outputs/w11.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>12)</strong> Write a python program to find factorial of a number using Recursion.</font> <a href="pythondisplay3775.php?url1=python/week12.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20python%20program%20to%20find%20factorial%20of%20a%20number%20using%20Recursion.&amp;opurl1=python/outputs/w12.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>13)</strong> Write a program that accepts the lengths of three sides of a triangle as inputs. The program output should indicate whether or not the triangle is a right triangle (Recall from the Pythagorean Theorem that in a right triangle, the square of one side equals the sum of the squares of the other two sides).</font> <a href="pythondisplayf5cd.php?url1=python/week13.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20accepts%20the%20lengths%20of%20three%20sides%20of%20a%20triangle%20as%20inputs.%20The%20program%20output%20should%20indicate%20whether%20or%20not%20the%20triangle%20is%20a%20right%20triangle%20(Recall%20from%20the%20Pythagorean%20Theorem%20that%20in%20a%20right%20triangle,%20the%20square%20of%20one%20side%20equals%20the%20sum%20of%20the%20squares%20of%20the%20other%20two%20sides).&amp;opurl1=python/outputs/w13.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>14)</strong> Write a python program to define a module to find Fibonacci Numbers and import the module to another program. </font> <a href="pythondisplay2a49.php?url1=python/fibonacci.py&amp;url2=python/week14.py&amp;url3=&amp;url4=&amp;title=Write%20a%20python%20program%20to%20define%20a%20module%20to%20find%20Fibonacci%20Numbers%20and%20import%20the%20module%20to%20another%20program.%20&amp;opurl1=python/outputs/w14.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>15)</strong> Write a python program to define a module and import a specific function in that module to another program.</font> <a href="pythondisplay40c2.php?url1=python/arth.py&amp;url2=python/week15.py&amp;url3=&amp;url4=&amp;title=Write%20a%20python%20program%20to%20define%20a%20module%20and%20import%20a%20specific%20function%20in%20that%20module%20to%20another%20program.&amp;opurl1=python/outputs/w15.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>16)</strong> Write a script named copyfile.py. This script should prompt the user for the names of two text files. The contents of the first file should be input and written to the second file.</font> <a href="pythondisplayf287.php?url1=python/file1.txt&amp;url2=python/week16.py&amp;url3=&amp;url4=&amp;title=Write%20a%20script%20named%20copyfile.py.%20This%20script%20should%20prompt%20the%20user%20for%20the%20names%20of%20two%20text%20files.%20The%20contents%20of%20the%20first%20file%20should%20be%20input%20and%20written%20to%20the%20second%20file.&amp;opurl1=python/outputs/w16.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>17)</strong> Write a program that inputs a text file. The program should print all of the unique words in the file in alphabetical order.</font> <a href="pythondisplayc1bd.php?url1=python/file1.txt&amp;url2=python/week17.py&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20inputs%20a%20text%20file.%20The%20program%20should%20print%20all%20of%20the%20unique%20words%20in%20the%20file%20in%20alphabetical%20order.&amp;opurl1=python/outputs/w17.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>18)</strong> Write a Python class to convert an integer to a roman numeral.</font> <a href="pythondisplay1536.php?url1=python/week18.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20class%20to%20convert%20an%20integer%20to%20a%20roman%20numeral.&amp;opurl1=python/outputs/w18.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>19)</strong> Write a Python class to implement pow(x, n)</font> <a href="pythondisplay72ef.php?url1=python/week19.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20class%20to%20implement%20pow(x,%20n)&amp;opurl1=python/outputs/w19.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>20)</strong> Write a Python class to reverse a string word by word.</font> <a href="pythondisplay58fa.php?url1=python/week20.py&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Python%20class%20to%20reverse%20a%20string%20word%20by%20word.&amp;opurl1=python/outputs/w20.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
				<br><hr>
  
        </div>
    </div>

	<!-- end panel body -->
	<div>
	</div>
</div>
<!--<style>
.button {
  background-color: #ff9900; 
  border-radius: 5px;
  color: #560bad;
  padding: 8px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-weight:bold;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
</style>
<br><div class="col-xs-12" style="border:1px solid lightgrey; background:#f4e6ff;">
<h2 style="color:#6600ff;">Suggestion/Feedback Form : </h2><hr style="background:black">
<form method="post">
	<div class="row"> 
	<div class="col-md-6">
    <label for="fname" > Name:</label><br>
    <input type="text" id="fname" name="fname" placeholder="Full Name" class="form-control" required> 
    </div>
	<div class="col-md-6">
	<label>Please provide rate this topic </label><br>
	<input type="radio" name="rating" value="Excellent" style="height: 18px;width: 18px;margin:10px;" required>Excellent</input>&nbsp;
	<input type="radio" name="rating" value="Very Good" style="height: 18px;width: 18px;margin:10px;">Very Good</input>&nbsp;
	<input type="radio" name="rating" value="Good" style="height: 18px;width: 18px;margin:10px;">Good</input>&nbsp;
	<input type="radio" name="rating" value="Average" style="height: 18px;width: 18px;margin:10px;">Average</input>&nbsp;
	<input type="radio" name="rating" value="Poor" style="height: 18px;width: 18px;margin:10px;">Poor</input></div>
	</div>
	<div class="row"> 
	<div class="col-md-6"><br>
	<label>Please tick the boxes to show what this form is about</label><br>
	<input type="checkbox" name="s_type[]" value="Compliment" style="height: 18px;width: 18px;margin:10px;"> This is a Compliment</input><br>
	<input type="checkbox" name="s_type[]" value="Suggestion" style="height: 18px;width: 18px;margin:10px;">This is a Suggestion for improvement</input><br>
	<input type="checkbox" name="s_type[]" value="Feedback" style="height: 18px;width: 18px;margin:10px;">This is Feedback</input><br>
	<input type="checkbox" name="s_type[]" value="Grievance" style="height: 18px;width: 18px;margin:10px;">This is Grievance</input><br><br>
	</div>
	<div class="col-md-6"><br>
	<label> Do you have suggestions to improve our services ?</label><br>
	<textarea name="suggestions" rows="8" cols="50" placeholder="Type Here.." class="form-control"></textarea><br>
	
	<input type="submit" name="btnsbt" Value="Submit" class="button" ></input>	<br>
	</div>
	</div>
</form>

</div><br>-->
</div>
<!-- end content -->
</div>
 <!-- Google Ad Multiflex1 <div class="container">
        <div class="row">
		<div class="col-sm-12
<!-- Google Ad Multiflex1 Start
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8096140274719176"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-8096140274719176"
     data-ad-slot="3158072222"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
</div></div>
END-->
 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
	          <p class="text-justify">Study Glance provides Tutorials , Power point Presentations(ppts), Lecture Notes, Important & previously asked questions, Objective Type questions, Laboratory programs and we provide Syllabus of various subjects.</p>
          </div>
		<div class="col-xs-6 col-md-3" style="padding-left:100px;">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="../Tutorialindex.html">Tutorials</a></li>
              <li><a href="../ppts/index.html">PPTs</a></li>
              <li><a href="../lecturenotes/index.html">Lecture Notes</a></li>
            </ul>
          </div>
          <div class="col-xs-6 col-md-3" style="padding-left:100px;">
            <h6></h6><br>
            <ul class="footer-links">
              
              <li><a href="../questions/index.html">Questions</a></li>
              <li><a href="index.html">Lab Programs</a></li>
              <li><a href="../syllabus/index.html">Syllabus</a></li>
            </ul>
          </div>

          
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">StudyGlance</a>.
            </p>
            <p><!-- hitwebcounter Code START -->

<img src="https://hitwebcounter.com/counter/counter.php?page=7760160&amp;style=0007&amp;nbdigits=5&amp;type=ip&amp;initCount=0" Alt=""   border="0" />    </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer> </div>
 
 <!--end body container-->
    <!--footer
    <div class="site-footer">
      <div class="container">
       </div>
    </div>-->
  </body>


<!-- Mirrored from studyglance.in/labprograms/pythondisplay.php?url1=python/week7.py&url2=&url3=&url4=&title=Write%20a%20program%20to%20demonstrate%20working%20with%20dictionaries%20in%20python.%20&opurl1=python/outputs/w7.png&opurl2=&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:50:45 GMT -->
</html>
