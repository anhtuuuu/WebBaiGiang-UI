<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/javadisplay.php?url1=java/MouseEventPerformer.java&url2=&url3=&url4=&title=Write%20a%20java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired%20(Use%20Adapter%20classes).&alg=&opurl1=java/outputs/w101.PNG&opurl2=java/outputs/w102.PNG&opurl3=java/outputs/w103.PNG&opurl4=java/outputs/w104.PNG&opurl5=java/outputs/w105.PNG by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:38 GMT -->
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
			
 <center><h1><a href="javalabprograms.html" class="atopic">Java Programming [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
  <h2>Aim: </h2>
  <h1 style=" text-align: justify;"> Write a java program that handles all mouse events and shows the event name at the center of the window when a mouse event is fired (Use Adapter classes). </h1>
  <!--<h2> Algorithm </h2>
  <pre></pre>-->
  <h2>Source Code: </h2>
  <h3>MouseEventPerformer.java</h3>
<pre><code class="language-java"><code><span style="color: #000000">
import&nbsp;javax.swing.*;<br />import&nbsp;java.awt.*;<br />import&nbsp;javax.swing.event.*;<br />import&nbsp;java.awt.event.*;<br />class&nbsp;MouseEventPerformer&nbsp;extends&nbsp;JFrame&nbsp;implements&nbsp;MouseListener<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;JLabel&nbsp;l1;<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;MouseEventPerformer()<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setSize(300,300);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setLayout(new&nbsp;FlowLayout(FlowLayout.CENTER));<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1&nbsp;=&nbsp;new&nbsp;JLabel();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Font&nbsp;f&nbsp;=&nbsp;new&nbsp;Font("Verdana",&nbsp;Font.BOLD,&nbsp;20);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setFont(f);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setForeground(Color.BLUE);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add(l1);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addMouseListener(this);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setVisible(true);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseExited(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Exited");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseEntered(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Entered");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseReleased(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Released");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mousePressed(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Pressed");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;void&nbsp;mouseClicked(MouseEvent&nbsp;m)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;l1.setText("Mouse&nbsp;Clicked");<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;void&nbsp;main(String[]&nbsp;args)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MouseEventPerformer&nbsp;mep&nbsp;=&nbsp;new&nbsp;MouseEventPerformer();<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</code></code></pre><br>
<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>124</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>136</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>148</b><br />
-->
<h2>Output: </h2>
<img src="java/outputs/w101.html" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w102.png" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w103.html" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w104.png" alt="image" class="img-rounded img-responsive"/><br/>
<img src="java/outputs/w105.png" alt="image" class="img-rounded img-responsive"/><br/>
<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>173</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>182</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/javadisplay.php</b> on line <b>193</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Java Programming Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Use eclipse or Netbean platform and acquaint with the various menus, create a test project, add a test class and run it see how you can use auto suggestions, auto fill. Try code formatter and code refactoring like renaming variables, methods and classes. Try debug step by step with a small program of about 10 to 15 lines which contains at least one if else condition and a for loop.</font> <a href="javadisplaybdf1.php?url1=java/Sample_Program.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Use%20eclipse%20or%20Netbean%20platform%20and%20acquaint%20with%20the%20various%20menus,%20create%20a%20test%20project,%20add%20a%20test%20class%20and%20run%20it%20see%20how%20you%20can%20use%20auto%20suggestions,%20auto%20fill.%20Try%20code%20formatter%20and%20code%20refactoring%20like%20renaming%20variables,%20methods%20and%20classes.%20Try%20debug%20step%20by%20step%20with%20a%20small%20program%20of%20about%2010%20to%2015%20lines%20which%20contains%20at%20least%20one%20if%20else%20condition%20and%20a%20for%20loop.&amp;alg=Step1:%20Define%20a%20class%20Prime.%20Step%202:%20Declare%20three%20variables.%20%20Step%203:%20Read%20the%20input.%20%20Step%204:%20Check%20whether%20the%20input%20is%20prime%20or%20not%20based%20on%20factors%20count.%20&amp;opurl1=java/outputs/w1.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a Java program that works as a simple calculator. Use a grid layout to arrange buttons for the digits and for the +, -,*, % operations. Add a text field to display the result. Handle any possible exceptions like divided by zero.</font> <a href="javadisplay4a4d.php?url1=java/MyCalculator.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20works%20as%20a%20simple%20calculator.%20Use%20a%20grid%20layout%20to%20arrange%20buttons%20for%20the%20digits%20and%20for%20the%20+,%20-,*,%20%%20operations.%20Add%20a%20text%20field%20to%20display%20the%20result.%20Handle%20any%20possible%20exceptions%20like%20divided%20by%20zero.&amp;alg=&amp;opurl1=java/outputs/w21.png&amp;opurl2=java/outputs/w22.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> a) Develop an applet in Java that displays a simple message.
</font> <a href="javadisplayfa9a.php?url1=java/FirstApplet.java&amp;url2=&amp;url3=&amp;url4=&amp;title=a)%20Develop%20an%20applet%20in%20Java%20that%20displays%20a%20simple%20message.&amp;alg=&amp;opurl1=java/outputs/w3a1.png&amp;opurl2=java/outputs/w3a2.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> b) Develop an applet in Java that receives an integer in one text field, and computes its factorial Value and returns it in another text field, when the button named “Compute” is clicked.</font> <a href="javadisplaye1f8.php?url1=java/FactorialApplet.java&amp;url2=&amp;url3=&amp;url4=&amp;title=b)%20Develop%20an%20applet%20in%20Java%20that%20receives%20an%20integer%20in%20one%20text%20field,%20and%20computes%20its%20factorial%20Value%20and%20returns%20it%20in%20another%20text%20field,%20when%20the%20button%20named%20%e2%80%9cCompute%e2%80%9d%20is%20clicked.&amp;alg=&amp;opurl1=java/outputs/w3b1.png&amp;opurl2=java/outputs/w3b2.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a Java program that creates a user interface to perform integer divisions. The user enters two numbers in the text fields, Num1 and Num2. The division of Num1 and Num 2 is displayed in the Result field when the Divide button is clicked. If Num1 or Num2 were not an integer, the program would throw a Number Format Exception. If Num2 were Zero, the program would throw an Arithmetic Exception. Display the exception in a message dialog box.</font> <a href="javadisplaybbc2.php?url1=java/DivisionApp.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20creates%20a%20user%20interface%20to%20perform%20integer%20divisions.%20The%20user%20enters%20two%20numbers%20in%20the%20text%20fields,%20Num1%20and%20Num2.%20The%20division%20of%20Num1%20and%20Num%202%20is%20displayed%20in%20the%20Result%20field%20when%20the%20Divide%20button%20is%20clicked.%20If%20Num1%20or%20Num2%20were%20not%20an%20integer,%20the%20program%20would%20throw%20a%20Number%20Format%20Exception.%20If%20Num2%20were%20Zero,%20the%20program%20would%20throw%20an%20Arithmetic%20Exception.%20Display%20the%20exception%20in%20a%20message%20dialog%20box.&amp;alg=&amp;opurl1=java/outputs/w41.png&amp;opurl2=java/outputs/w42.png&amp;opurl3=java/outputs/w43.png&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a Java program that implements a multi-thread application that has three threads. First thread generates random integer every 1 second and if the value is even, second thread computes the square of the number and prints. If the value is odd, the third thread will print the value of cube of the number.</font> <a href="javadisplay93c4.php?url1=java/MultiThreadRandOddEven.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20implements%20a%20multi-thread%20application%20that%20has%20three%20threads.%20First%20thread%20generates%20random%20integer%20every%201%20second%20and%20if%20the%20value%20is%20even,%20second%20thread%20computes%20the%20square%20of%20the%20number%20and%20prints.%20If%20the%20value%20is%20odd,%20the%20third%20thread%20will%20print%20the%20value%20of%20cube%20of%20the%20number.&amp;alg=&amp;opurl1=java/outputs/w51.png&amp;opurl2=java/outputs/w52.png&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a Java program for the following:
i) Create a doubly linked list of elements.
ii) Delete a given element from the above list.
iii)Display the contents of the list after deletion.</font> <a href="javadisplay8aee.php?url1=java/DoublyLinkListDemo.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20for%20the%20following:i)%20Create%20a%20doubly%20linked%20list%20of%20elements.ii)%20Delete%20a%20given%20element%20from%20the%20above%20list.iii)Display%20the%20contents%20of%20the%20list%20after%20deletion.&amp;alg=&amp;opurl1=java/outputs/w61.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a Java program that simulates a traffic light. The program lets the user selects one of three lights: red, yellow, or green with radio buttons. On selecting a button, an appropriate message with Stop, Ready, or Go should appear above the buttons in the selected color. Initially, there is no message shown</font> <a href="javadisplay3d1c.php?url1=java/TrafficLights.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20simulates%20a%20traffic%20light.%20The%20program%20lets%20the%20user%20selects%20one%20of%20three%20lights:%20red,%20yellow,%20or%20green%20with%20radio%20buttons.%20On%20selecting%20a%20button,%20an%20appropriate%20message%20with%20Stop,%20Ready,%20or%20Go%20should%20appear%20above%20the%20buttons%20in%20the%20selected%20color.%20Initially,%20there%20is%20no%20message%20shown&amp;alg=&amp;opurl1=java/outputs/w71.png&amp;opurl2=java/outputs/w72.png&amp;opurl3=java/outputs/w73.png&amp;opurl4=java/outputs/w74.png&amp;opurl5=java/outputs/w75.png" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write a Java program to create an abstract class named Shape that contains two integers and an empty method named print Area (). Provide three classes named Rectangle, Triangle, and Circle such that each one of the classes extends the class Shape. Each one of the classes contains only the method print Area () that prints the area of the given shape.</font> <a href="javadisplayea8a.php?url1=java/AreaOfShapes.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20to%20create%20an%20abstract%20class%20named%20Shape%20that%20contains%20two%20integers%20and%20an%20empty%20method%20named%20print%20Area%20().%20Provide%20three%20classes%20named%20Rectangle,%20Triangle,%20and%20Circle%20such%20that%20each%20one%20of%20the%20classes%20extends%20the%20class%20Shape.%20Each%20one%20of%20the%20classes%20contains%20only%20the%20method%20print%20Area%20()%20that%20prints%20the%20area%20of%20the%20given%20shape.&amp;alg=&amp;opurl1=java/outputs/w81.PNG&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Suppose that a table named Table.txt is stored in a text file. The first line in the file is the header, and the remaining lines correspond to rows in the table. The elements are separated by commas. Write a java program to display the table using Labels in Grid Layout.</font> <a href="javadisplaya13a.php?url1=java/TableText.java&amp;url2=java/Table.txt&amp;url3=&amp;url4=&amp;title=Suppose%20that%20a%20table%20named%20Table.txt%20is%20stored%20in%20a%20text%20file.%20The%20first%20line%20in%20the%20file%20is%20the%20header,%20and%20the%20remaining%20lines%20correspond%20to%20rows%20in%20the%20table.%20The%20elements%20are%20separated%20by%20commas.%20Write%20a%20java%20program%20to%20display%20the%20table%20using%20Labels%20in%20Grid%20Layout.&amp;alg=&amp;opurl1=java/outputs/w91.PNG&amp;opurl2=java/outputs/w92.PNG&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Write a java program that handles all mouse events and shows the event name at the center of the window when a mouse event is fired (Use Adapter classes).</font> <a href="javadisplaycccb.php?url1=java/MouseEventPerformer.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired%20(Use%20Adapter%20classes).&amp;alg=&amp;opurl1=java/outputs/w101.PNG&amp;opurl2=java/outputs/w102.PNG&amp;opurl3=java/outputs/w103.PNG&amp;opurl4=java/outputs/w104.PNG&amp;opurl5=java/outputs/w105.PNG" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>11)</strong> Write a Java Program that loads names and phone numbers from a text file where the data is organized as one line per record and each filed in a record are separated by a tab (\t). It takes a name or phone number as input and prints the corresponding other value from the hash table (hint: use hash tables).</font> <a href="javadisplay2c2d.php?url1=java/Contacts.java&amp;url2=java/myfile.txt&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20Program%20that%20loads%20names%20and%20phone%20numbers%20from%20a%20text%20file%20where%20the%20data%20is%20organized%20as%20one%20line%20per%20record%20and%20each%20filed%20in%20a%20record%20are%20separated%20by%20a%20tab%20(\t).%20It%20takes%20a%20name%20or%20phone%20number%20as%20input%20and%20prints%20the%20corresponding%20other%20value%20from%20the%20hash%20table%20(hint:%20use%20hash%20tables).&amp;alg=&amp;opurl1=java/outputs/w110.png&amp;opurl2=java/outputs/w111.png&amp;opurl3=java/outputs/w112.png&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>12)</strong> Write a Java program that correctly implements the producer – consumer problem using the concept of inter thread communication</font> <a href="javadisplaybb64.php?url1=java/ProducerConsumer.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20that%20correctly%20implements%20the%20producer%20%e2%80%93%20consumer%20problem%20using%20the%20concept%20of%20inter%20thread%20communication&amp;alg=&amp;opurl1=java/outputs/w120.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>13)</strong> Write a Java program to list all the files in a directory including the files present in all its subdirectories</font> <a href="javadisplay1af1.php?url1=java/ListOfFilesInDir.java&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Java%20program%20to%20list%20all%20the%20files%20in%20a%20directory%20including%20the%20files%20present%20in%20all%20its%20subdirectories&amp;alg=&amp;opurl1=java/outputs/w130.png&amp;opurl2=&amp;opurl3=&amp;opurl4=&amp;opurl5=" class="alab"><strong>View Solution </strong></a></p>
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


<!-- Mirrored from studyglance.in/labprograms/javadisplay.php?url1=java/MouseEventPerformer.java&url2=&url3=&url4=&title=Write%20a%20java%20program%20that%20handles%20all%20mouse%20events%20and%20shows%20the%20event%20name%20at%20the%20center%20of%20the%20window%20when%20a%20mouse%20event%20is%20fired%20(Use%20Adapter%20classes).&alg=&opurl1=java/outputs/w101.PNG&opurl2=java/outputs/w102.PNG&opurl3=java/outputs/w103.PNG&opurl4=java/outputs/w104.PNG&opurl5=java/outputs/w105.PNG by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:40 GMT -->
</html>
