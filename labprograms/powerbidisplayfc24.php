<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/powerbidisplay.php?url1=powerbi/week3.html&title=Tableau%20Calculations,%20Overview%20of%20SUM,%20AVR,%20and%20Aggregate%20features,%20Creating%20custom%20calculationsand%20fields by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:49:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | SKILL DEVELOPMENT COURSE (DATA VISUALIZATION - R PROGRAMMING/ POWER BI)</title>
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
		
<center><h1>SKILL DEVELOPMENT COURSE - <font size="" color="#ff3333">(DATA VISUALIZATION - R
PROGRAMMING/ POWER BI)</font> </font></h1></center><hr>
<h2>Aim: </h2>
  <h1 style="font-size:18px;color:black;">Tableau Calculations, Overview of SUM, AVR, and Aggregate features, Creating custom calculationsand fields </h1>
  <h2>Solution : </h2>	

 <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Tableau Calculations, Overview of SUM, AVG, and Aggregate features, Creating custom calculations and fields</title>
 </head>
 <body>

<p>Tableau offers a powerful set of calculation tools that allow you to manipulate, transform, and analyze your data in various ways. Here's an overview of some key concepts related to Tableau calculations, including SUM, AVG (average), and aggregate functions, as well as creating custom calculations and fields</p>

<h1>SUM and AVG (Average) Functions</h1>
<h2>SUM Function</h2> 
<p>The SUM function in Tableau calculates the total sum of a numeric field. You can use it to find the sum of values in a column or as part of a more complex calculation. To use SUM, simply drag and drop a numeric field into the "SUM" shelf, or you can create a calculated field using the SUM function.</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-1.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>
<h2>AVG (Average) Function</h2>
<p>The AVG function calculates the average (mean) value of a numeric field. Like SUM, you can use it by dragging a numeric field into the "AVG" shelf or creating a calculated field with the AVG function.</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-2.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-3.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>

<h1>Aggregate Functions:</h1>
<p>Tableau provides a range of aggregate functions that allow you to perform calculations on groups of data. Common aggregate functions include SUM, AVG, COUNT, MIN (minimum value), and MAX (maximum value). These functions are particularly useful when you want to analyze data at different levels of granularity (e.g., by category, region, or time period).</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-4.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-5.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>


<h1>Creating Custom Calculations</h1>
<p>Tableau allows you to create custom calculations using calculated fields. Here's how to create a custom calculation:</p>
<h2>1.	Create a New Calculated Field</h2>
<p>In the Data Source Pane, right-click on your data source and select "Create Calculated Field".</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-6.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>

<p>Alternatively, you can create a calculated field by right-clicking on a shelf in your worksheet and choosing "Create Calculated Field".</p>
<h2>2.	Enter Your Calculation:</h2>
<p>In the calculated field editor, you can use functions, operators, and field references to define your calculation.</p>
<p>For example, you can create a calculated field to calculate profit margin as (SUM([Profit]) / SUM([Sales])) * 100.</p>
<h2>3.	Name and Save the Calculated Field:</h2>
<p>Give your calculated field a meaningful name.</p>
<p>Click the "OK" or "Apply" button to save the calculated field.</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-7.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>

<h2>4.	Use the Calculated Field in Your Worksheet:</h2>
<p>You can now use the calculated field like any other field in your worksheet. Drag it to the Rows or Columns shelf, use it in filters, or create visualizations based on it.</p>
<div class="row"> 
	<div class="col-md-12">
	<img src="powerbi/images/w3-8.jpg" width="80%" style="border-radius:10px;"/>
	</div>
	<div class="col-md-4">	
	&nbsp;
	</div>
</div>
 </body>

<!-- Mirrored from studyglance.in/labprograms/powerbidisplay.php?url1=powerbi/week3.html&title=Tableau%20Calculations,%20Overview%20of%20SUM,%20AVR,%20and%20Aggregate%20features,%20Creating%20custom%20calculationsand%20fields by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:49:59 GMT -->
</html>


<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>101</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>113</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>125</b><br />
-->

<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>139</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>148</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/powerbidisplay.php</b> on line <b>159</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Power BI Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Understanding Data, What is data, where to find data, Foundations for building Data Visualizations,Creating Your First visualization?</font> <a href="powerbidisplayfcc4.php?url1=powerbi/week1.html&amp;title=Understanding%20Data,%20What%20is%20data,%20where%20to%20find%20data,%20Foundations%20for%20building%20Data%20Visualizations,Creating%20Your%20First%20visualization?" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong>  Getting started with Tableau Software using Data file formats, connecting your Data to Tableau,creating basic charts(line, bar charts, Tree maps),Using the Show me panel.</font> <a href="powerbidisplayaeaf.php?url1=powerbi/week2.html&amp;title=%20Getting%20started%20with%20Tableau%20Software%20using%20Data%20file%20formats,%20connecting%20your%20Data%20to%20Tableau,creating%20basic%20charts(line,%20bar%20charts,%20Tree%20maps),Using%20the%20Show%20me%20panel." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Tableau Calculations, Overview of SUM, AVR, and Aggregate features, Creating custom calculationsand fields</font> <a href="powerbidisplayfc24.php?url1=powerbi/week3.html&amp;title=Tableau%20Calculations,%20Overview%20of%20SUM,%20AVR,%20and%20Aggregate%20features,%20Creating%20custom%20calculationsand%20fields" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Applying new data calculations to your visualizations, Formatting Visualizations, Formatting Toolsand Menus, Formatting specific parts of the view.</font> <a href="powerbidisplay3c31.php?url1=powerbi/week4.html&amp;title=Applying%20new%20data%20calculations%20to%20your%20visualizations,%20Formatting%20Visualizations,%20Formatting%20Toolsand%20Menus,%20Formatting%20specific%20parts%20of%20the%20view." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Editing and Formatting Axes, Manipulating Data in Tableau data, Pivoting Tableau data.</font> <a href="powerbidisplayc74e.php?url1=powerbi/week5.html&amp;title=Editing%20and%20Formatting%20Axes,%20Manipulating%20Data%20in%20Tableau%20data,%20Pivoting%20Tableau%20data." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Structuring your data, Sorting and filtering Tableau data, Pivoting Tableau data.</font> <a href="powerbidisplayf357.php?url1=powerbi/week6.html&amp;title=Structuring%20your%20data,%20Sorting%20and%20filtering%20Tableau%20data,%20Pivoting%20Tableau%20data." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Advanced Visualization Tools: Using Filters, Using the Detail panel, using the Size panels, customizing filters, Using and Customizing tooltips, Formatting your data with colors.</font> <a href="powerbidisplaya387.php?url1=powerbi/week7.html&amp;title=Advanced%20Visualization%20Tools:%20Using%20Filters,%20Using%20the%20Detail%20panel,%20using%20the%20Size%20panels,%20customizing%20filters,%20Using%20and%20Customizing%20tooltips,%20Formatting%20your%20data%20with%20colors." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Creating Dashboards & Storytelling, creating your first dashboard and Story, Design for differentdisplays, adding interactivity to your Dashboard, Distributing & Publishing your Visualization.</font> <a href="powerbidisplay9ff8.php?url1=powerbi/week8.html&amp;title=Creating%20Dashboards%20&amp;%20Storytelling,%20creating%20your%20first%20dashboard%20and%20Story,%20Design%20for%20differentdisplays,%20adding%20interactivity%20to%20your%20Dashboard,%20Distributing%20&amp;%20Publishing%20your%20Visualization." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Tableau file types, publishing to Tableau Online, Sharing your visualizations, printing, and Exporting.</font> <a href="powerbidisplay531a.php?url1=powerbi/week9.html&amp;title=Tableau%20file%20types,%20publishing%20to%20Tableau%20Online,%20Sharing%20your%20visualizations,%20printing,%20and%20Exporting." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Creating custom charts, cyclical data and circular area charts, Dual Axis charts.</font> <a href="powerbidisplay3c13.php?url1=powerbi/week10.html&amp;title=Creating%20custom%20charts,%20cyclical%20data%20and%20circular%20area%20charts,%20Dual%20Axis%20charts." class="alab"><strong>View Solution </strong></a></p>
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
