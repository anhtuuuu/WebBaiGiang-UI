<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/dmdisplay.php?url1=dm/wekaintroduction.html&title=Start%20working%20with%20WEKA%20tool%20kit%20and%20understand%20the%20features%20of%20WEKA%20tool%20kit. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:49:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | DATA MINING LAB MANUAL)</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="../images/logo1.png" type="image/x-icon"/>
    <link rel="bookmark" href="../images/logo1.png"/>
    <!-- site css -->
    <link rel="stylesheet" href="../dist/css/main.min.css">
	<link rel="stylesheet" href="../dist/css/prism.css">
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
		
<center><a href="dmprograms.html"><h1>DATA MINING - <font size="" color="#ff3333">(LAB PROGRAMS)</font> </font></h1></a></center><hr>
<h2>Aim: </h2>
  <h1 style="font-size:18px;color:black;"><span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Start working with WEKA tool kit and understand the features of WEKA tool kit. </h1>
  <h2>Solution : </h2>	

 <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Introduction to WEKA data mining toolkit</title>
   <style>
  p {
  color:black;
  }
  </style>
 </head>
 <body>
     <h1>What is WEKA:</h1>
<p>WEKA, an open-source software, offers a range of tools for data preprocessing, implementation of various Data Mining algorithms, and visualization tools. These resources enable users to develop data mining techniques and effectively apply them to real-world data mining problems.</p>
<p>The diagram presented below provides a concise summary of the offerings provided by WEKA.</p>
	<div class="row"> 
		<div class="col-md-7">
		<img src="../../www.tutorialspoint.com/weka/images/weka_summarized.jpg" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>
<p style="font-size:7px">Image Source :https://www.tutorialspoint.com/weka/images/weka_summarized.jpg</p>
  <h1> To start Weka: </h1><br>
  <p> -	 Search for Weka 3.8.6 and click on <strong>Weka 3.8.6 app.</strong> </p><br>

	<div class="row"> 
		<div class="col-md-7">
		<img src="dm/images/Weka20.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>
	<br>
<p> -	The following <strong>Graphical User Interface</strong> Of WEKA you get when you click on <strong>Weka 3.8.6 app</strong>. </p><br>
	<div class="row"> 
		<div class="col-md-7">
		<img src="dm/images/Weka21.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>
	<p>
-	The GUI of WEKA gives five options: <strong>Explorer, Experimenter, Knowledge flow, Workbench, </strong>and <strong>Simple CLI.</strong>  Let us understand each of these individually.
</p>
<h2><font color="#000099">1. Explorer </font></h2>
<p>It is an environment for exploring data with WEKA. And it apply the various data mining algorithms. When you click on the <strong>Explorer</strong> button in the <strong>Applications</strong> selector, it displays the following window.
</p><br>
	<div class="row"> 
		<div class="col-md-12">
		<img src="dm/images/Weka22.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>
	
	<p>Located at the uppermost section of the window, positioned just below the title bar, is a series of tabs. Upon launching the Explorer, only the first tab is enabled, while the remaining tabs are displayed in an unresponsive manner. This is due to the prerequisite of opening and pre-processing a data set before data exploration.</p>
	<p>
	    The <strong>tabs</strong> are as follows: <br><br>
<h4> <span style='font-size:25px;'>&#9758;</span> Preprocess: </h4>The first step in Data Mining is to preprocess the data. You will select the data file in the Preprocess option. Then, you will process the data and make it suitable for applying the different Data Mining algorithms.
<h4><span style='font-size:25px;'>&#9758;</span> Classify:</h4> The Classify tab offers a range of Data Mining algorithms for the classification of your data. Some of the algorithms that can be applied include Linear Regression, Logistic Regression, Support Vector Machines, Decision Trees, Random Tree, Random Forest, Naive Bayes, and others.
<h4><span style='font-size:25px;'>&#9758;</span> Cluster:</h4> The Cluster tab contains a variety of clustering algorithms, including Simple K-Means, FilteredClusterer, HierarchicalClusterer, and many more.

<h4><span style='font-size:25px;'>&#9758;</span> Associate:</h4> The Associate tab contains Apriori, FilteredAssociator and FPGrowth. These are used to learn / discover association rules in the data.
<h4><span style='font-size:25px;'>&#9758;</span> Select attributes:</h4> This tab contains various methods to select the most relevant attributes in the data.
<h4><span style='font-size:25px;'>&#9758;</span> Visualize:</h4> In this tab, various plots and graphs are available to show the trends identified by the model. I.e. it displays an interactive 2D plot of the data.
	</p>
<h2><font color="#000099">2. Experimenter</font></h2>
<p>The Experimenter Environment allows users to easily create, run, modify, and analyze experiments. Users can create experiments that test multiple schemes on different datasets and analyze the results to determine statistical differences between the schemes.<br><br>
When you click on the <strong>Experimenter</strong> button in the <strong>Applications selector</strong>, it displays the following window.</p><br>
<div class="row"> 
		<div class="col-md-12">
		<img src="dm/images/Weka23.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>
	<p>
	    The Experimenter is available in two variants, those are <br>
	    <ul>
	        <li><strong>Simple</strong><br>
	        This variant provides most of the functionality one needs for experiments</li>
	        <li><strong>Advanced</strong><br>
	        This is an interface with full access to the Experimenter’s capabilities.</li>
	    </ul>
	</p>
	
<h2><font color="#000099">3. Knowledge flow</font></h2>
	<p>
The Knowledge Flow offers an alternative to the Explorer as a graphical user interface for accessing the core algorithms of WEKA.</p>
<p>
The Knowledge Flow platform offers an interface that draws inspiration from data-flow principles, specifically designed for WEKA. Users are able to choose components from a selection of WEKA tools, position them on a layout canvas, and establish connections between them. This facilitates the creation of a knowledge flow, enabling efficient processing and analysis of data.
<br><br>
When you click on the <strong>Knowledge flow</strong> button in the <strong>Applications selector</strong>, it displays the following window.
</p><br>
<div class="row"> 
		<div class="col-md-12">
		<img src="dm/images/Weka24.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>	
<p>Currently, all classifiers, filters, clusterers, associators, loaders, and savers provided by WEKA are accessible within the Knowledge Flow platform, along with extra tools.</p>	

<h2><font color="#000099">4. Workbench</font></h2>  
<p>The Workbench is an integrated environment that combines all graphical user interfaces into a unified or single interface.</p>
<p>
If you frequently switch between multiple interfaces, such as the Explorer and the Experiment Environment, it can be beneficial. This is often the case when testing various scenarios in the Explorer and promptly implementing acquired knowledge into controlled experiments.<br><br>
When you click on the Workbench button in the Applications selector, it displays the following window.</p><br>
<div class="row"> 
		<div class="col-md-12">
		<img src="dm/images/Weka26.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>	
<h2><font color="#000099">5. Simple CLI</font></h2>
<p>
The Simple Command Line Interface (CLI) grants comprehensive access to all Weka classes, including classifiers, filters, clusterers, and more, while eliminating the inconvenience of managing the CLASSPATH (it simplifies the one used during Weka's initialization). It presents a straightforward Weka shell with distinct command line and output sections.<br><br>
When you click on the <strong>Simple CLI</strong> button in the <strong>Applications selector</strong>, it displays the following window.</p><br>
<div class="row"> 
		<div class="col-md-12">
		<img src="dm/images/Weka25.png" style="border-radius:10px;" class="img-rounded img-responsive"></img>
		</div>
		<div class="col-md-4">	
		&nbsp;
		</div>
	</div>	


 </body>

<!-- Mirrored from studyglance.in/labprograms/dmdisplay.php?url1=dm/wekaintroduction.html&title=Start%20working%20with%20WEKA%20tool%20kit%20and%20understand%20the%20features%20of%20WEKA%20tool%20kit. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:49:05 GMT -->
</html>


<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>100</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>112</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>124</b><br />
-->

<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>138</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>147</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dmdisplay.php</b> on line <b>158</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Data Mining Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Downloading and/or installation of WEKA Data Mining toolkit.</font> &nbsp;&nbsp;<a href="dmdisplayaea6.php?url1=dm/wekainstallation.html&amp;title=Downloading%20and/or%20installation%20of%20WEKA%20Data%20Mining%20toolkit." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Start working with WEKA tool kit and understand the features of WEKA tool kit.</font> &nbsp;&nbsp;<a href="dmdisplaycc3c.php?url1=dm/wekaintroduction.html&amp;title=Start%20working%20with%20WEKA%20tool%20kit%20and%20understand%20the%20features%20of%20WEKA%20tool%20kit." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Loading Data from different sources in WEKA.</font> &nbsp;&nbsp;<a href="dmdisplayc3f2.php?url1=dm/loadingdataweka.html&amp;title=Loading%20Data%20from%20different%20sources%20in%20WEKA." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Various File Formats supported by WEKA. And Study the ARFF file format.</font> &nbsp;&nbsp;<a href="dmdisplay50af.php?url1=dm/fileformatsweka.html&amp;title=Various%20File%20Formats%20supported%20by%20WEKA.%20And%20Study%20the%20ARFF%20file%20format." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Demonstration of creating a Student dataset (student.arff) using WEKA tool in Data Mining.</font> &nbsp;&nbsp;<a href="dmdisplaycb1f.php?url1=dm/studentdataset.html&amp;title=Demonstration%20of%20creating%20a%20Student%20dataset%20(student.arff)%20using%20WEKA%20tool%20in%20Data%20Mining." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Demonstration of creating a Weather dataset (weather.arff) using WEKA tool in Data Mining</font> &nbsp;&nbsp;<a href="dmdisplayb764.php?url1=dm/weatherdataset.html&amp;title=Demonstration%20of%20creating%20a%20Weather%20dataset%20(weather.arff)%20using%20WEKA%20tool%20in%20Data%20Mining" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Explore the available data sets in WEKA tool kit.</font> &nbsp;&nbsp;<a href="dmdisplay2176.php?url1=dm/wekadatasets.html&amp;title=Explore%20the%20available%20data%20sets%20in%20WEKA%20tool%20kit." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Load a dataset from the available data sets in the WEKA tool.</font> &nbsp;&nbsp;<a href="dmdisplay7099.php?url1=dm/loaddataset.html&amp;title=Load%20a%20dataset%20from%20the%20available%20data%20sets%20in%20the%20WEKA%20tool." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> From the loaded dataset(weather.arff), observe the attribute names, attribute types, number of records in the dataset, Identify the class attribute (if any), and visualize the data in various dimensions.</font> &nbsp;&nbsp;<a href="dmdisplaydc8d.php?url1=dm/exploredataset.html&amp;title=From%20the%20loaded%20dataset(weather.arff),%20observe%20the%20attribute%20names,%20attribute%20types,%20number%20of%20records%20in%20the%20dataset,%20Identify%20the%20class%20attribute%20(if%20any),%20and%20visualize%20the%20data%20in%20various%20dimensions." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Conversion of a Text file into ARFF (Attribute-Relation File Format) using Weka tool. </font> &nbsp;&nbsp;<a href="dmdisplay7995.php?url1=dm/texttoarfffile.html&amp;title=Conversion%20of%20a%20Text%20file%20into%20ARFF%20(Attribute-Relation%20File%20Format)%20using%20Weka%20tool." class="alab"><strong>View Solution </strong></a></p>
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

</html>
