<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/nodejsdisplay.php?url1=nodejs/exp6.php&title=Create%20a%20custom%20server%20using%20http%20module%20and%20explore%20the%20other%20modules%20of%20Node%20JS%20like%20OS,%20path,%20event. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | Skill Development Course - NodeJs Lab Manual</title>
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
		
<center><a href="dmprograms.html"><h1>Skill Development Course - NodeJs Lab Manual - <font size="" color="#ff3333">(LAB PROGRAMS)</font> </font></h1></a></center><hr>
<h2>Aim: </h2>
  <h1 style="font-size:18px;color:black;"><span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Create a custom server using http module and explore the other modules of Node JS like OS, path, event. </h1>
  <h2>Solution : </h2>	

 <!doctype html>
<html lang="en">
 <head>
  <title>EXP-06</title>
 </head>
 <body>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Open Terminal or Command Prompt:</h3>
<p>Open a terminal or command prompt in the directory where you saved your <em><strong>server.js</strong></em> file.</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Run the Server Script:</h3>
<p>Execute the server script using the Node.js runtime. In the terminal, run:
<pre><code>node server.js
</code></pre></p>
<p>This will start the HTTP server, and you should see the message "<em>Server running at http://127.0.0.1:3000/</em>".</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Access the Server:</h3>
<p>Open your web browser and navigate to <em>http://127.0.0.1:3000/</em> or <em>http://localhost:3000/</em>. You should see the response "<strong>Hello, World!</strong>".</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Check OS Information:</h3>
<p>In the same terminal where your server is running, you'll see information about your operating system (OS) type, platform, architecture, CPU cores, etc.</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Check Current Working Directory:</h3>
<p>The current working directory of the script is printed in the terminal.</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Check Joined Path:</h3>
<p>The joined path using the path module is printed in the terminal.</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Check Custom Event:</h3>
<p>The script emits a custom event and listens for it. In the terminal, you should see the message "Custom Event Triggered: { message: 'Hello from custom event!' }".</p>
<h3> <span style='font-size:25px;color:#ff3333;'>&#9755;</span> &nbsp;Stop the Server:</h3>
<p>To stop the server, press Ctrl+C in the terminal where the server is running.</p>

 <h3>server.js</h3>
  <pre><code class="language-js"><code><span style="color: #000000">
//&nbsp;Step&nbsp;1:&nbsp;Import&nbsp;required&nbsp;modules<br />const&nbsp;http&nbsp;=&nbsp;require('http');<br />const&nbsp;os&nbsp;=&nbsp;require('os');<br />const&nbsp;path&nbsp;=&nbsp;require('path');<br />const&nbsp;{&nbsp;EventEmitter&nbsp;}&nbsp;=&nbsp;require('events');<br /><br />//&nbsp;Step&nbsp;2:&nbsp;Create&nbsp;an&nbsp;instance&nbsp;of&nbsp;EventEmitter<br />const&nbsp;eventEmitter&nbsp;=&nbsp;new&nbsp;EventEmitter();<br /><br />//&nbsp;Step&nbsp;3:&nbsp;Create&nbsp;a&nbsp;simple&nbsp;HTTP&nbsp;server<br />const&nbsp;server&nbsp;=&nbsp;http.createServer((req,&nbsp;res)&nbsp;=&gt;&nbsp;{<br />&nbsp;&nbsp;res.writeHead(200,&nbsp;{&nbsp;'Content-Type':'text/plain'&nbsp;});<br />&nbsp;&nbsp;res.end('Hello,&nbsp;World!\n');<br />});<br /><br />//&nbsp;Step&nbsp;4:&nbsp;Define&nbsp;server&nbsp;port&nbsp;and&nbsp;hostname<br />constport&nbsp;=&nbsp;3000;<br />consthostname&nbsp;=&nbsp;'127.0.0.1';<br /><br />//&nbsp;Step&nbsp;5:&nbsp;Listen&nbsp;for&nbsp;requests&nbsp;on&nbsp;the&nbsp;specified&nbsp;port&nbsp;and&nbsp;hostname<br />server.listen(port,&nbsp;hostname,&nbsp;()&nbsp;=&gt;&nbsp;{<br />&nbsp;&nbsp;console.log('Server&nbsp;running&nbsp;at&nbsp;http://${hostname}:${port}/');<br />});<br /><br />//&nbsp;Step&nbsp;6:&nbsp;Print&nbsp;OS&nbsp;information<br />console.log('OS&nbsp;Type:',&nbsp;os.type());<br />console.log('OS&nbsp;Platform:',&nbsp;os.platform());<br />console.log('OS&nbsp;Architecture:',&nbsp;os.arch());<br />console.log('CPU&nbsp;Cores:',&nbsp;os.cpus().length);<br /><br />//&nbsp;Step&nbsp;7:&nbsp;Print&nbsp;current&nbsp;working&nbsp;directory<br />console.log('Current&nbsp;Working&nbsp;Directory:',&nbsp;process.cwd());<br /><br />//&nbsp;Step&nbsp;8:&nbsp;Join&nbsp;paths&nbsp;using&nbsp;the&nbsp;path&nbsp;module<br />const&nbsp;joinedPath&nbsp;=&nbsp;path.join(__dirname,&nbsp;'public',&nbsp;'images');<br />console.log('Joined&nbsp;Path:',&nbsp;joinedPath);<br /><br />//&nbsp;Step&nbsp;9:&nbsp;Handle&nbsp;a&nbsp;custom&nbsp;event<br />eventEmitter.on('customEvent',&nbsp;(data)&nbsp;=&gt;&nbsp;{<br />&nbsp;&nbsp;console.log('Custom&nbsp;Event&nbsp;Triggered:',&nbsp;data);<br />});<br /><br />//&nbsp;Step&nbsp;10:&nbsp;Emit&nbsp;a&nbsp;custom&nbsp;event<br />eventEmitter.emit('customEvent',&nbsp;{&nbsp;message:'Hello&nbsp;from&nbsp;custom&nbsp;event!'&nbsp;});<br /></span>
</code>  </code></pre><br>

<h2> Output : </h2>
<h3>In the Terminal:</h3>
	<img src="nodejs/customserverC.png" alt="image" class="img-rounded img-responsive"/><br/>
<h3> In the Browser:</h3>
<h4> Link: http://127.0.0.1:3000/</h4>
	<img src="nodejs/customserverB.png" alt="image" class="img-rounded img-responsive"/><br/>



 </body>

<!-- Mirrored from studyglance.in/labprograms/nodejsdisplay.php?url1=nodejs/exp6.php&title=Create%20a%20custom%20server%20using%20http%20module%20and%20explore%20the%20other%20modules%20of%20Node%20JS%20like%20OS,%20path,%20event. by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:50 GMT -->
</html>


<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>100</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>112</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>124</b><br />
-->

<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>138</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>147</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/nodejsdisplay.php</b> on line <b>158</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Skill Development Course - NodeJs Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Build a responsive web application for shopping cart with registration, login, catalog and cart pages using CSS3 features, flex and grid.</font> &nbsp;&nbsp;<a href="nodejsdisplay67d4.php?url1=nodejs/exp1.php&amp;title=Build%20a%20responsive%20web%20application%20for%20shopping%20cart%20with%20registration,%20login,%20catalog%20and%20cart%20pages%20using%20CSS3%20features,%20flex%20and%20grid." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Use JavaScript for doing client – side validation of the pages implemented in the experiment</font> &nbsp;&nbsp;<a href="nodejsdisplaye698.php?url1=nodejs/exp2.php&amp;title=Use%20JavaScript%20for%20doing%20client%20%e2%80%93%20side%20validation%20of%20the%20pages%20implemented%20in%20the%20experiment" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Explore the features of ES6 like arrow functions, callbacks, promises, async/await. Implement an application for reading the weather information from openweathermap.org and display the information in the form of a graph on the web page.</font> &nbsp;&nbsp;<a href="nodejsdisplayf5c9.php?url1=nodejs/exp3.php&amp;title=Explore%20the%20features%20of%20ES6%20like%20arrow%20functions,%20callbacks,%20promises,%20async/await.%20Implement%20an%20application%20for%20reading%20the%20weather%20information%20from%20openweathermap.org%20and%20display%20the%20information%20in%20the%20form%20of%20a%20graph%20on%20the%20web%20page." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Develop a java stand alone application that connects with the database (Oracle / mySql) and perform the CRUD operation on the database tables.</font> &nbsp;&nbsp;<a href="nodejsdisplay1069.php?url1=nodejs/exp4.php&amp;title=Develop%20a%20java%20stand%20alone%20application%20that%20connects%20with%20the%20database%20(Oracle%20/%20mySql)%20and%20perform%20the%20CRUD%20operation%20on%20the%20database%20tables." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Create an xml for the bookstore. Validate the same using both DTD and XSD.</font> &nbsp;&nbsp;<a href="nodejsdisplay5824.php?url1=nodejs/exp5.php&amp;title=Create%20an%20xml%20for%20the%20bookstore.%20Validate%20the%20same%20using%20both%20DTD%20and%20XSD." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Create a custom server using http module and explore the other modules of Node JS like OS, path, event.</font> &nbsp;&nbsp;<a href="nodejsdisplayf7c2.php?url1=nodejs/exp6.php&amp;title=Create%20a%20custom%20server%20using%20http%20module%20and%20explore%20the%20other%20modules%20of%20Node%20JS%20like%20OS,%20path,%20event." class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Develop an express web application that can interact with REST API to perform CRUD operations on student data. (Use Postman)</font> &nbsp;&nbsp;<a href="nodejsdisplay6d23.php?url1=nodejs/exp7.php&amp;title=Develop%20an%20express%20web%20application%20that%20can%20interact%20with%20REST%20API%20to%20perform%20CRUD%20operations%20on%20student%20data.%20(Use%20Postman)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Create a service in react that fetches the weather information from open weathermap.org and the display the current and historical weather information using graphical representation using chart.js</font> &nbsp;&nbsp;<a href="nodejsdisplay8cf0.php?url1=nodejs/exp8.php&amp;title=Create%20a%20service%20in%20react%20that%20fetches%20the%20weather%20information%20from%20open%20weathermap.org%20and%20the%20display%20the%20current%20and%20historical%20weather%20information%20using%20graphical%20representation%20using%20chart.js" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Create a TODO application in react with necessary components and deploy it into github.</font> &nbsp;&nbsp;<a href="nodejsdisplay17da.php?url1=nodejs/exp9.php&amp;title=Create%20a%20TODO%20application%20in%20react%20with%20necessary%20components%20and%20deploy%20it%20into%20github." class="alab"><strong>View Solution </strong></a></p>
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
