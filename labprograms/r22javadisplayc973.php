<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/r22javadisplay.php?url1=java/MouseEventPerformer.java&url2=&url3=&url4=&title=Write%20a%20Java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired.%20[Use%20Adapter%20classes]&alg=&opurl1=java/outputs/w101.PNG&opurl2=java/outputs/w102.PNG&opurl3=java/outputs/w103.PNG&opurl4=java/outputs/w104.PNG&opurl5=java/outputs/w105.PNG by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | Java Programming Lab Manual(Programs)</title>
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
			
 <center><h1><a href="r22javalabprograms.html" class="atopic">Java Programming [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
  <h2>Aim: </h2>
  <p> Write a Java program that handles all mouse events and shows the event name at the center of the window when a mouse event is fired. [Use Adapter classes] </p>
  <!--<h2> Algorithm </h2>
  <pre></pre>-->
  <h2>Source Code: </h2>
  <h3>MouseEventPerformer.java</h3>
<pre><code class="language-java"><code><span style="color: #000000">
import&nbsp;javax.swing.*;<br />import&nbsp;java.awt.*;<br />import&nbsp;javax.swing.event.*;<br />import&nbsp;java.awt.event.*;<br />class&nbsp;MouseEventPerformer&nbsp;extends&nbsp;JFrame&nbsp;implements&nbsp;MouseListener<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;JLabel&nbsp;l1;<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;MouseEventPerformer()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setSize(300,300);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setLayout(new&nbsp;FlowLayout(FlowLayout.CENTER));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1&nbsp;=&nbsp;new&nbsp;JLabel();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font&nbsp;f&nbsp;=&nbsp;new&nbsp;Font("Verdana",&nbsp;Font.BOLD,&nbsp;20);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setFont(f);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setForeground(Color.BLUE);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add(l1);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addMouseListener(this);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setVisible(true);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseExited(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Exited");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseEntered(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Entered");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseReleased(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Released");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mousePressed(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Pressed");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseClicked(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Clicked");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String[]&nbsp;args)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MouseEventPerformer&nbsp;mep&nbsp;=&nbsp;new&nbsp;MouseEventPerformer();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</code></code></pre><br>
<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>124</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>136</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>148</b><br />
-->
<h2>Output: </h2>
<img src="java/outputs/w101.html" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w102.png" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w103.html" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w104.png" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w105.png" alt="image" class="img-rounded img-responsive"/><br/>
<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>173</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>182</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/r22javadisplay.php</b> on line <b>193</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Java Programming Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Use eclipse or Netbean platform and acquaint with the various menus, create a test project, add a test class and run it see how you can use auto suggestions, auto fill. Try code formatter and code refactoring like renaming variables, methods and classes. Try debug step by step with a small program of about 10 to 15 lines which contains at least one if else condition and a for loop.</font> <a href="r22javadisplay5343.php?url1=java/Sample_Program.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Use%20eclipse%20or%20Netbean%20platform%20and%20acquaint%20with%20the%20various%20menus,%20create%20a%20test%20project,%20add%20a%20test%20class%20and%20run%20it%20see%20how%20you%20can%20use%20auto%20suggestions,%20auto%20fill.%20Try%20code%20formatter%20and%20code%20refactoring%20like%20renaming%20variables,%20methods%20and%20classes.%20Try%20debug%20step%20by%20step%20with%20a%20small%20program%20of%20about%2010%20to%2015%20lines%20which%20contains%20at%20least%20one%20if%20else%20condition%20and%20a%20for%20loop.&amp;alg=&amp;opurl1=java/outputs/w1.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a Java program to demonstrate the OOP principles. [i.e., Encapsulation, Inheritance, Polymorphism and Abstraction]</font> <a href="r22javadisplay7f12.php?url1=java/OopPrinciplesDemo.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20to%20demonstrate%20the%20OOP%20principles.%20[i.e.,%20Encapsulation,%20Inheritance,%20Polymorphism%20and%20Abstraction]&amp;alg=&amp;opurl1=java/outputs/r22w21.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a Java program to handle checked and unchecked exceptions. Also, demonstrate the usage of custom exceptions in real time scenario.</font> <a href="r22javadisplay346f.php?url1=java/ExceptionsDemo.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20to%20handle%20checked%20and%20unchecked%20exceptions.%20Also,%20demonstrate%20the%20usage%20of%20custom%20exceptions%20in%20real%20time%20scenario.&amp;alg=&amp;opurl1=java/outputs/r22w31.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a Java program on Random Access File class to perform different read and write operations.</font> <a href="r22javadisplaydf18.php?url1=java/RandomAccessFileExample.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20on%20Random%20Access%20File%20class%20to%20perform%20different%20read%20and%20write%20operations.&amp;alg=&amp;opurl1=java/outputs/r22w41.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a Java program to demonstrate the working of different collection classes. [Use package structure to store multiple classes].</font> <a href="r22javadisplay2329.php?url1=java/ListExample.java&amp;url2=java/SetExample.java&amp;url3=java/MapExample.java&amp;url4=java/CollectionsDemo.java&amp;title=Write%20a%20Java%20program%20to%20demonstrate%20the%20working%20of%20different%20collection%20classes.%20[Use%20package%20structure%20to%20store%20multiple%20classes].&amp;alg=&amp;opurl1=java/outputs/r22w50.png&amp;opurl2=java/outputs/r22w51.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a program to synchronize the threads acting on the same object. [Consider the example of any reservations like railway, bus, movie ticket booking, etc.]</font> <a href="r22javadisplay99d8.php?url1=&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20synchronize%20the%20threads%20acting%20on%20the%20same%20object.%20[Consider%20the%20example%20of%20any%20reservations%20like%20railway,%20bus,%20movie%20ticket%20booking,%20etc.]&amp;alg=&amp;opurl1=&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a program to perform CRUD operations on the student table in a database using JDBC.</font> <a href="r22javadisplayb5bd.php?url1=java/InsertData.java&amp;url2=java/UpdateData.java&amp;url3=java/DeleteData.java&amp;url4=java/DisplayData.java&amp;title=Write%20a%20program%20to%20perform%20CRUD%20operations%20on%20the%20student%20table%20in%20a%20database%20using%20JDBC.&amp;alg=&amp;opurl1=java/outputs/r22w91.PNG&amp;opurl2=java/outputs/r22w92.PNG&amp;opurl3=java/outputs/r22w93.PNG&amp;opurl4=java/outputs/r22w94.PNG&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write a Java program that works as a simple calculator. Use a grid layout to arrange buttons for the digits and for the +, -,*, % operations. Add a text field to display the result. Handle any possible exceptions like divided by zero.</font> <a href="r22javadisplay4a4d.php?url1=java/MyCalculator.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20works%20as%20a%20simple%20calculator.%20Use%20a%20grid%20layout%20to%20arrange%20buttons%20for%20the%20digits%20and%20for%20the%20+,%20-,*,%20%%20operations.%20Add%20a%20text%20field%20to%20display%20the%20result.%20Handle%20any%20possible%20exceptions%20like%20divided%20by%20zero.&amp;alg=&amp;opurl1=java/outputs/w21.png&amp;opurl2=java/outputs/w22.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Write a Java program that handles all mouse events and shows the event name at the center of the window when a mouse event is fired. [Use Adapter classes]</font> <a href="r22javadisplayc973.php?url1=java/MouseEventPerformer.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired.%20[Use%20Adapter%20classes]&amp;alg=&amp;opurl1=java/outputs/w101.PNG&amp;opurl2=java/outputs/w102.PNG&amp;opurl3=java/outputs/w103.PNG&amp;opurl4=java/outputs/w104.PNG&amp;opurl5=java/outputs/w105.PNG" class="alab"><strong>View Solution </strong></a></p>
				<br><hr>
  
        </div>
    </div>

	<!-- end panel body -->
	<div>
	</div>
</div>
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


<!-- Mirrored from studyglance.in/labprograms/r22javadisplay.php?url1=java/MouseEventPerformer.java&url2=&url3=&url4=&title=Write%20a%20Java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired.%20[Use%20Adapter%20classes]&alg=&opurl1=java/outputs/w101.PNG&opurl2=java/outputs/w102.PNG&opurl3=java/outputs/w103.PNG&opurl4=java/outputs/w104.PNG&opurl5=java/outputs/w105.PNG by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:45 GMT -->
</html>
