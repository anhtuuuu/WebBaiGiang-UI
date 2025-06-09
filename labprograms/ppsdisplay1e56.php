<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/ppsdisplay.php?url1=PPS/min-max-avg-of-an-array-c-program.html&title=Write%20a%20C%20program%20to%20find%20the%20minimum,%20maximum%20and%20average%20in%20an%20array%20of%20integers. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | Programming for Problem Solving Lab Manual(Programs)</title>
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
			
 <center><h1><a href="ppslabprograms.html" class="atopic">Programming for Problem Solving [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
 
<h1>Write a C program to find the minimum, maximum and average in an array of integers.</h1>

<div class="row"> 
<div class="col-md-12">
<div class="alert alert-info"><b>Algorithm</b> <pre><code class="language-algorithm">
start
	step1: 
	step2: 
	step3: 
	step4: 
	step5: 
	step6: 
	step7: 
	step8: 
	step9: 
	step10:
stop
</code></pre>
</div></div></div>
<br>
<div class="row"> 
<div class="col-md-12">
<div class="alert alert-info"><b>Flowchart</b> <pre>

</pre>
</div>
</div></div>
<br>

<div class="row"> 
<div class="col-md-12">
<div class="alert alert-info"><b>C Programming</b> <pre><code class="language-c">//to find the minimum, maximum and average in an array of integers
#include &lt;stdio.h>
#include &lt;math.h>

int main() {
    int n,arr[10],min,max,sum;
    float average;

    // Read the size of the array
    printf("Enter the number of elements in the array: ");
    scanf("%d", &n);

    // Read the elements of the array
    printf("Enter %d integers:\n", n);
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    // Initialize min, max and sum
    min = arr[0];
    max = arr[0];
    sum = arr[0]; // Using long long to avoid overflow

    // Iterate through the array to find min, max, and sum
    for (int i = 1; i < n; i++) {
        if (arr[i] < min) {
            min = arr[i];
        }
        if (arr[i] > max) {
            max = arr[i];
        }
        sum += arr[i];
    }

    // Calculate the average
    average = (float)sum / n;

    // Print the results
    printf("Minimum: %d\n", min);
    printf("Maximum: %d\n", max);
    printf("Average: %.2f\n", average);

    return 0;
}
</code></pre>
</div></div></div>
<br>

<div class="row"> 
<div class="col-md-12">
<div class="alert alert-warning"><b>OUTPUT</b><pre><code class="language-c">Enter the number of elements in the array: 5
Enter 5 integers:
5
15
25
10
20
Minimum: 5
Maximum: 25
Average: 15.00</code></pre>
</div></div></div><!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/ppsdisplay.php</b> on line <b>108</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Programming for Problem Solving Lab Programs</h2><tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Practice sessions:</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a simple program that prints the results of all the operators available in C (including pre/ post increment , bitwise and/or/not , etc.). Read required operand values from standard input <a href="ppsdisplayf4df.php?url1=PPS/operators-c-program.html&amp;title=Write%20a%20simple%20program%20that%20prints%20the%20results%20of%20all%20the%20operators%20available%20in%20C%20(including%20pre/%20post%20increment%20,%20bitwise%20and/or/not%20,%20etc.).%20Read%20required%20operand%20values%20from%20standard%20input" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a simple program that converts one given data type to another using auto conversion and casting. Take the values from standard input. <a href="ppsdisplayd73c.php?url1=PPS/Type-casting-c-program.html&amp;title=Write%20a%20simple%20program%20that%20converts%20one%20given%20data%20type%20to%20another%20using%20auto%20conversion%20and%20casting.%20Take%20the%20values%20from%20standard%20input." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Simple numeric problems:</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a program for finding the max and min from the three numbers. <a href="ppsdisplayc6d4.php?url1=PPS/largest-and-smallest-of-the-three-numbers-program.html&amp;title=Write%20a%20program%20for%20finding%20the%20max%20and%20min%20from%20the%20three%20numbers." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write the program for the simple, compound interest. <a href="ppsdisplayb183.php?url1=PPS/simple-compound-interest-c-program.html&amp;title=Write%20the%20program%20for%20the%20simple,%20compound%20interest." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a program that declares Class awarded for a given percentage of marks, where mark <40%= Failed, 40% to <60% = Second class, 60% to <70%=First class, >= 70% = Distinction.Read percentage from standard input. <a href="ppsdisplay3941.php?url1=PPS/declares-Class-awarded-c-program.html&amp;title=Write%20a%20program%20that%20declares%20Class%20awarded%20for%20a%20given%20percentage%20of%20marks,%20where%20mark%20<40%=%20Failed,%2040%%20to%20<60%%20=%20Second%20class,%2060%%20to%20<70%=First%20class,%20>=%2070%%20=%20Distinction.Read%20percentage%20from%20standard%20input." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a program that prints a multiplication table for a given number and the number of rows inthe table. For example, for a number 5 and rows = 3, the output should be:<br>  
5 x 1 = 5<br> 
5 x 2 = 10 <br>
5 x 3 = 15 <a href="ppsdisplayda74.php?url1=PPS/tables-c-program.html&amp;title=Write%20a%20program%20that%20prints%20a%20multiplication%20table%20for%20a%20given%20number%20and%20the%20number%20of%20rows%20inthe%20table.%20For%20example,%20for%20a%20number%205%20and%20rows%20=%203,%20the%20output%20should%20be:<br>%20%205%20x%201%20=%205<br>%205%20x%202%20=%2010%20<br>5%20x%203%20=%2015" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a program that shows the binary equivalent of a given positive number between 0 to 255 <a href="ppsdisplayd5fa.php?url1=PPS/decimal-to-binary-c-program.html&amp;title=Write%20a%20program%20that%20shows%20the%20binary%20equivalent%20of%20a%20given%20positive%20number%20between%200%20to%20255" class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Expression Evaluation</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> A building has 10 floors with a floor height of 3 meters each. A ball is dropped from the top of the building. Find the time taken by the ball to reach each floor. (Use the formula s = ut+(1/2)at^2where u and a are the initial velocity in m/sec (= 0) and acceleration in m/sec^2 (= 9.8 m/s^2)). <a href="ppsdisplayeb81.php?url1=PPS/velocity-c-program.html&amp;title=A%20building%20has%2010%20floors%20with%20a%20floor%20height%20of%203%20meters%20each.%20A%20ball%20is%20dropped%20from%20the%20top%20of%20the%20building.%20Find%20the%20time%20taken%20by%20the%20ball%20to%20reach%20each%20floor.%20(Use%20the%20formula%20s%20=%20ut+(1/2)at^2where%20u%20and%20a%20are%20the%20initial%20velocity%20in%20m/sec%20(=%200)%20and%20acceleration%20in%20m/sec^2%20(=%209.8%20m/s^2))." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a C program, which takes two integer operands and one operator from the user, performs the operation and then prints the result. (Consider the operators +,-,*, /, % and use Switch Statement) <a href="ppsdisplayd1e0.php?url1=PPS/arithmetic-operators-using-switch-case-c-program.html&amp;title=Write%20a%20C%20program,%20which%20takes%20two%20integer%20operands%20and%20one%20operator%20from%20the%20user,%20performs%20the%20operation%20and%20then%20prints%20the%20result.%20(Consider%20the%20operators%20+,-,*,%20/,%20%%20and%20use%20Switch%20Statement)" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a program that finds if a given number is a prime number <a href="ppsdisplay5d00.php?url1=PPS/prime-number-c-program.html&amp;title=Write%20a%20program%20that%20finds%20if%20a%20given%20number%20is%20a%20prime%20number" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a C program to find the sum of individual digits of a positive integer and test given numberis palindrome <a href="ppsdisplay1917.php?url1=PPS/sum-of-individual-digits-c-program.html&amp;title=Write%20a%20C%20program%20to%20find%20the%20sum%20of%20individual%20digits%20of%20a%20positive%20integer%20and%20test%20given%20numberis%20palindrome" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> A Fibonacci sequence is defined as follows: the first and second terms in the sequence are 0 and 1. Subsequent terms are found by adding the preceding two terms in the sequence. Writea C program to generate the first n terms of the sequence. <a href="ppsdisplayab4d.php?url1=PPS/Fibonacci-sequence-c-program.html&amp;title=A%20Fibonacci%20sequence%20is%20defined%20as%20follows:%20the%20first%20and%20second%20terms%20in%20the%20sequence%20are%200%20and%201.%20Subsequent%20terms%20are%20found%20by%20adding%20the%20preceding%20two%20terms%20in%20the%20sequence.%20Writea%20C%20program%20to%20generate%20the%20first%20n%20terms%20of%20the%20sequence." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a C program to generate all the prime numbers between 1 and n, where n is a value supplied by the user <a href="ppsdisplay0f92.php?url1=PPS/Prime-numbers-between-1-to-n-c-program.html&amp;title=Write%20a%20C%20program%20to%20generate%20all%20the%20prime%20numbers%20between%201%20and%20n,%20where%20n%20is%20a%20value%20supplied%20by%20the%20user" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a C program to find the roots of a Quadratic equation. <a href="ppsdisplay0c39.php?url1=PPS/Quadratic-equation-c-program.html&amp;title=Write%20a%20C%20program%20to%20find%20the%20roots%20of%20a%20Quadratic%20equation." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write a C program to calculate the following, where x is a fractional value.i. 1-x/2 +x^2/4-x^3/6 <a href="ppsdisplayfa2e.php?url1=PPS/fractional-sequence-c-program.html&amp;title=Write%20a%20C%20program%20to%20calculate%20the%20following,%20where%20x%20is%20a%20fractional%20value.i.%201-x/2%20+x^2/4-x^3/6" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Write a C program to read in two numbers, x and n, and then compute the sum of this geometric progression: 1+x+x^2+x^3+..............+x^n. For example: if n is 3 and x is 5, then the program computes 1+5+25+125. <a href="ppsdisplayf56a.php?url1=PPS/Geometric-progression-c-program.html&amp;title=Write%20a%20C%20program%20to%20read%20in%20two%20numbers,%20x%20and%20n,%20and%20then%20compute%20the%20sum%20of%20this%20geometric%20progression:%201+x+x^2+x^3+..............+x^n.%20For%20example:%20if%20n%20is%203%20and%20x%20is%205,%20then%20the%20program%20computes%201+5+25+125." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Arrays, Pointers and Functions:</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a C program to find the minimum, maximum and average in an array of integers. <a href="ppsdisplay1e56.php?url1=PPS/min-max-avg-of-an-array-c-program.html&amp;title=Write%20a%20C%20program%20to%20find%20the%20minimum,%20maximum%20and%20average%20in%20an%20array%20of%20integers." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a function to compute mean, variance, Standard Deviation, sorting of n elements in a single dimension array. <a href="ppsdisplay5fc5.php?url1=PPS/mean-variance-Standard-Deviation-c-program.html&amp;title=Write%20a%20function%20to%20compute%20mean,%20variance,%20Standard%20Deviation,%20sorting%20of%20n%20elements%20in%20a%20single%20dimension%20array." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a C program that uses functions to perform Addition of Two Matrices <a href="ppsdisplayc900.php?url1=PPS/Matrices-Addition-c-program.html&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20perform%20Addition%20of%20Two%20Matrices" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a C program that uses functions to perform Multiplication of Two Matrices <a href="ppsdisplay32d1.php?url1=PPS/Matrices-Multiplication-c-program.html&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20perform%20Multiplication%20of%20Two%20Matrices" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a C program that uses functions to perform Transpose of a matrix with memory dynamically allocated for the new matrix as row and column counts may not be the same. <a href="ppsdisplay94eb.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20perform%20Transpose%20of%20a%20matrix%20with%20memory%20dynamically%20allocated%20for%20the%20new%20matrix%20as%20row%20and%20column%20counts%20may%20not%20be%20the%20same." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write C programs that use both recursive and non-recursive functions to find the factorial of a given integer. <a href="ppsdisplay8afd.php?url1=PPS/Factorial-c-programm.html&amp;title=Write%20C%20programs%20that%20use%20both%20recursive%20and%20non-recursive%20functions%20to%20find%20the%20factorial%20of%20a%20given%20integer." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write C programs that use both recursive and non-recursive functions to find the GCD (greatest common divisor) of two given integers. <a href="ppsdisplayb9de.php?url1=PPS/greatest-common-divisor-c-programm.html&amp;title=Write%20C%20programs%20that%20use%20both%20recursive%20and%20non-recursive%20functions%20to%20find%20the%20GCD%20(greatest%20common%20divisor)%20of%20two%20given%20integers." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write C programs that use both recursive and non-recursive functions to find x^n <a href="ppsdisplaybcee.php?url1=PPS/x-raised-to-the-power-of-n-c-programm.html&amp;title=Write%20C%20programs%20that%20use%20both%20recursive%20and%20non-recursive%20functions%20to%20find%20x^n" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Write a program for reading elements using a pointer into an array and display the values using the array <a href="ppsdisplaybb9f.php?url1=PPS/reading-printing-array-using-pointer-c-program.html&amp;title=Write%20a%20program%20for%20reading%20elements%20using%20a%20pointer%20into%20an%20array%20and%20display%20the%20values%20using%20the%20array" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Write a program for display values reverse order from an array using a pointer. <a href="ppsdisplayf1a1.php?url1=PPS/display-reverse-order-using-pointer-c-program.html&amp;title=Write%20a%20program%20for%20display%20values%20reverse%20order%20from%20an%20array%20using%20a%20pointer." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>11)</strong> Write a program through a pointer variable to sum of n elements from an array. <a href="ppsdisplay55a4.php?url1=PPS/sum-of-n-elements-using-pointer-c-program.html&amp;title=Write%20a%20program%20through%20a%20pointer%20variable%20to%20sum%20of%20n%20elements%20from%20an%20array." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Files</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a C program to display the contents of a file to standard output device. <a href="ppsdisplayfc3a.php?url1=PPS/display-the-contents-of-a-file-c-program.html&amp;title=Write%20a%20C%20program%20to%20display%20the%20contents%20of%20a%20file%20to%20standard%20output%20device." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a C program which copies one file to another, replacing all lowercase characters with their uppercase equivalents. <a href="ppsdisplay29b3.php?url1=PPS/&amp;title=Write%20a%20C%20program%20which%20copies%20one%20file%20to%20another,%20replacing%20all%20lowercase%20characters%20with%20their%20uppercase%20equivalents." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a C program to count the number of times a character occurs in a text file. The file name and the character are supplied as command line arguments <a href="ppsdisplay794b.php?url1=PPS/&amp;title=Write%20a%20C%20program%20to%20count%20the%20number%20of%20times%20a%20character%20occurs%20in%20a%20text%20file.%20The%20file%20name%20and%20the%20character%20are%20supplied%20as%20command%20line%20arguments" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a C program that does the following: It should first create a binary file and store 10 integers, where the file name and 10 values are given in the command line. (hint: convert the strings using atoi function) Now the program asks for an index and a value from the user and the value at that index should be changed to the new value in the file. (hint: use fseek function) The program should then read all 10 values and print them back. <a href="ppsdisplay65a7.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20does%20the%20following:%20It%20should%20first%20create%20a%20binary%20file%20and%20store%2010%20integers,%20where%20the%20file%20name%20and%2010%20values%20are%20given%20in%20the%20command%20line.%20(hint:%20convert%20the%20strings%20using%20atoi%20function)%20Now%20the%20program%20asks%20for%20an%20index%20and%20a%20value%20from%20the%20user%20and%20the%20value%20at%20that%20index%20should%20be%20changed%20to%20the%20new%20value%20in%20the%20file.%20(hint:%20use%20fseek%20function)%20The%20program%20should%20then%20read%20all%2010%20values%20and%20print%20them%20back." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a C program to merge two files into a third file (i.e., the contents of the first file followed by those of the second are put in the third file). <a href="ppsdisplayd413.php?url1=PPS/&amp;title=Write%20a%20C%20program%20to%20merge%20two%20files%20into%20a%20third%20file%20(i.e.,%20the%20contents%20of%20the%20first%20file%20followed%20by%20those%20of%20the%20second%20are%20put%20in%20the%20third%20file)." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Strings</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a C program to convert a Roman numeral ranging from I to L to its decimal equivalent. <a href="ppsdisplaycab8.php?url1=PPS/roman-to-decimal-c-program.html&amp;title=Write%20a%20C%20program%20to%20convert%20a%20Roman%20numeral%20ranging%20from%20I%20to%20L%20to%20its%20decimal%20equivalent." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a C program that converts a number ranging from 1 to 50 to Roman equivalent <a href="ppsdisplay1655.php?url1=PPS/decimal-to-roman-c-program.html&amp;title=Write%20a%20C%20program%20that%20converts%20a%20number%20ranging%20from%201%20to%2050%20to%20Roman%20equivalent" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a C program that uses functions to insert a sub-string into a given main string from a given position <a href="ppsdisplaya056.php?url1=PPS/insert-a-sub-string-c-program.html&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20insert%20a%20sub-string%20into%20a%20given%20main%20string%20from%20a%20given%20position" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a C program that uses functions to delete n Characters from a given position in a given string <a href="ppsdisplay5e75.php?url1=PPS/delete-n-characters-c-program.html&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20delete%20n%20Characters%20from%20a%20given%20position%20in%20a%20given%20string" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a C program to determine if the given string is a palindrome or not (Spelled same in both directions with or without a meaning like madam, civic, noon, abcba, etc.) <a href="ppsdisplay639c.php?url1=PPS/string-palindrome-or-not-c-program.html&amp;title=Write%20a%20C%20program%20to%20determine%20if%20the%20given%20string%20is%20a%20palindrome%20or%20not%20(Spelled%20same%20in%20both%20directions%20with%20or%20without%20a%20meaning%20like%20madam,%20civic,%20noon,%20abcba,%20etc.)" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a C program that displays the position of a character ch in the string S or – 1 if S doesn‘t contain ch <a href="ppsdisplay5760.php?url1=PPS/position-of-a-character-c-program.html&amp;title=Write%20a%20C%20program%20that%20displays%20the%20position%20of%20a%20character%20ch%20in%20the%20string%20S%20or%20%e2%80%93%201%20if%20S%20doesn%e2%80%98t%20contain%20ch" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a C program to count the lines, words and characters in a given text. <a href="ppsdisplayb94f.php?url1=PPS/count-lines-words-character-c-program.html&amp;title=Write%20a%20C%20program%20to%20count%20the%20lines,%20words%20and%20characters%20in%20a%20given%20text." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Miscellaneous:</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a menu driven C program that allows a user to enter n numbers and then choose between finding the smallest, largest, sum, or average. The menu and all the choices are to be functions. Use a switch statement to determine what action to take. Display an error message if an invalid choice is entered. <a href="ppsdisplay4c80.php?url1=PPS/&amp;title=Write%20a%20menu%20driven%20C%20program%20that%20allows%20a%20user%20to%20enter%20n%20numbers%20and%20then%20choose%20between%20finding%20the%20smallest,%20largest,%20sum,%20or%20average.%20The%20menu%20and%20all%20the%20choices%20are%20to%20be%20functions.%20Use%20a%20switch%20statement%20to%20determine%20what%20action%20to%20take.%20Display%20an%20error%20message%20if%20an%20invalid%20choice%20is%20entered." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a C program to construct a pyramids. <a href="ppsdisplaya5b4.php?url1=PPS/&amp;title=Write%20a%20C%20program%20to%20construct%20a%20pyramids." class="alab"><strong>View Solution </strong></a></font></p>
				<tr><td></td><td colspan='2'><strong> &nbsp;&nbsp; Sorting and Searching</strong></td></tr>				
		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a C program that uses non recursive function to search for a Key value in a given list of integers using linear search method <a href="ppsdisplay7e23.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20uses%20non%20recursive%20function%20to%20search%20for%20a%20Key%20value%20in%20a%20given%20list%20of%20integers%20using%20linear%20search%20method" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a C program that uses non recursive function to search for a Key value in a given sorted list of integers using binary search method. <a href="ppsdisplay2c00.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20uses%20non%20recursive%20function%20to%20search%20for%20a%20Key%20value%20in%20a%20given%20sorted%20list%20of%20integers%20using%20binary%20search%20method." class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a C program that implements the Bubble sort method to sort a given list of integers in ascending order <a href="ppsdisplay9a40.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20implements%20the%20Bubble%20sort%20method%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a C program that sorts the given array of integers using selection sort in descending order <a href="ppsdisplay78c0.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20sorts%20the%20given%20array%20of%20integers%20using%20selection%20sort%20in%20descending%20order" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a C program that sorts the given array of integers using insertion sort in ascending order <a href="ppsdisplaya570.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20sorts%20the%20given%20array%20of%20integers%20using%20insertion%20sort%20in%20ascending%20order" class="alab"><strong>View Solution </strong></a></font></p>
								
		<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a C program that sorts a given array of names <a href="ppsdisplay1aa3.php?url1=PPS/&amp;title=Write%20a%20C%20program%20that%20sorts%20a%20given%20array%20of%20names" class="alab"><strong>View Solution </strong></a></font></p>
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


<!-- Mirrored from studyglance.in/labprograms/ppsdisplay.php?url1=PPS/min-max-avg-of-an-array-c-program.html&title=Write%20a%20C%20program%20to%20find%20the%20minimum,%20maximum%20and%20average%20in%20an%20array%20of%20integers. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:27 GMT -->
</html>
