<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/sdcdisplay.php?url1=ai/week4.pl&url2=&url3=&url4=&title=WAP%20in%20turbo%20prolog%20for%20medical%20diagnosis%20and%20show%20the%20advantages%20and%20disadvantages%20of%20green%20and%20red%20cuts.&opurl1=ai/outputs/w3.txt&opurl2=&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | Skill Development Course (Prolog) Lab Manual(Programs)</title>
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
			
 <center><h1><a href="ailabprograms.html" class="atopic">Skill Development Course (Prolog) [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
  <h2>Aim: </h2>
  <h1 style="font-size:22px;color:black;">WAP in turbo prolog for medical diagnosis and show the advantages and disadvantages of green and red cuts. </h1>
  <h2>Solution : </h2>
  <!--<h3>week4.pl</h3>-->
<pre><code class="language-prolog"><xmp>/* Description:

This object of this famous puzzle is to move N disks from the left peg to the right peg using the center peg as an auxiliary holding peg. At no time can a larger disk be placed upon a smaller disk. The following diagram depicts the starting setup for N=3 disks. 
*/

% Production rules:

hanoi(N) 🡪 move(N,left,middle,right).
move(1,A,_,C) 🡪 inform(A,C),fail.
move(N,A,B,C) 🡪 N1=N-1,move(N1,A,C,B),inform(A,C),move(N1,B,A,C).


% Domains:

loc =right;middle;left

% Predicates:

hanoi(integer)
move(integer,loc,loc,loc)
inform(loc,loc)

% Clauses:

hanoi(N):-
	move(N,left,middle,right).

move(1,A,_,C):-
	inform(A,C),!.

move(N,A,B,C):-
	N1=N-1,
	move(N1,A,C,B),
	inform(A,C),
	move(N1,B,A,C).

inform(Loc1, Loc2):-
	write("\nMove a disk from ", Loc1, " to ", Loc2).
</xmp></code></pre><br>
<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>121</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>133</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>145</b><br />
-->
<h2>Output: </h2>
<pre><code class="language-prolog"><xmp>% Queries:

 ?- can_reach(A, B).
 A = monkey.
 B = banana.

 ?- can_reach(monkey, banana).
 Yes.</xmp></code></pre>
<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>173</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>182</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/sdcdisplay.php</b> on line <b>193</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Skill Development Course (PROLOG/ LISP/
PYSWIP)
 Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write simple fact for following:
A. Ram likes mango.
B. Seema is a girl.
C. Bill likes Cindy.
D. Rose is red.
E. John owns gold</font> <a href="sdcdisplay8899.php?url1=ai/week1.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20simple%20fact%20for%20following:A.%20Ram%20likes%20mango.B.%20Seema%20is%20a%20girl.C.%20Bill%20likes%20Cindy.D.%20Rose%20is%20red.E.%20John%20owns%20gold&amp;opurl1=ai/outputs/w1.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write predicates one converts centigrade temperatures to Fahrenheit, the other checks if a temperature is below freezing.</font> <a href="sdcdisplayaf1d.php?url1=ai/week2.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20predicates%20one%20converts%20centigrade%20temperatures%20to%20Fahrenheit,%20the%20other%20checks%20if%20a%20temperature%20is%20below%20freezing.&amp;opurl1=ai/outputs/w2.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a program to solve the Monkey Banana problem</font> <a href="sdcdisplay50df.php?url1=ai/week3.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20solve%20the%20Monkey%20Banana%20problem&amp;opurl1=ai/outputs/w3.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> WAP in turbo prolog for medical diagnosis and show the advantages and disadvantages of green and red cuts.</font> <a href="sdcdisplayfa3f.php?url1=ai/week4.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=WAP%20in%20turbo%20prolog%20for%20medical%20diagnosis%20and%20show%20the%20advantages%20and%20disadvantages%20of%20green%20and%20red%20cuts.&amp;opurl1=ai/outputs/w3.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a program to solve 4-Queens problem</font> <a href="sdcdisplay9ce1.php?url1=ai/week6.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20solve%204-Queens%20problem&amp;opurl1=ai/outputs/w6.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a program to solve Traveling salesman problems</font> <a href="sdcdisplaya909.php?url1=ai/week7.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20solve%20Traveling%20salesman%20problems&amp;opurl1=ai/outputs/w7.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a program to solve water jug problems using Prolog</font> <a href="sdcdisplayfe84.php?url1=ai/week8.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20solve%20water%20jug%20problems%20using%20Prolog&amp;opurl1=ai/outputs/w8.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write simple Prolog functions such as the following. Take into account lists which are too short.
-- remove the Nth item from the list. -- insert as the Nth item.</font> <a href="sdcdisplay2375.php?url1=ai/week9.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20simple%20Prolog%20functions%20such%20as%20the%20following.%20Take%20into%20account%20lists%20which%20are%20too%20short.--%20remove%20the%20Nth%20item%20from%20the%20list.%20--%20insert%20as%20the%20Nth%20item.&amp;opurl1=ai/outputs/w9.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Assume the prolog predicate gt(A, B) is true when A is greater than B. Use this predicate to
define the predicate addLeaf(Tree, X, NewTree) which is true if NewTree is the Tree
producedby adding the item X in a leaf node. Tree and NewTree are binary search trees. The
empty treeis represented by the atom nil.
</font> <a href="sdcdisplayedf7.php?url1=ai/week10.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Assume%20the%20prolog%20predicate%20gt(A,%20B)%20is%20true%20when%20A%20is%20greater%20than%20B.%20Use%20this%20predicate%20todefine%20the%20predicate%20addLeaf(Tree,%20X,%20NewTree)%20which%20is%20true%20if%20NewTree%20is%20the%20Treeproducedby%20adding%20the%20item%20X%20in%20a%20leaf%20node.%20Tree%20and%20NewTree%20are%20binary%20search%20trees.%20Theempty%20treeis%20represented%20by%20the%20atom%20nil.&amp;opurl1=ai/outputs/w10.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Write a Prolog predicate, countLists(Alist, Ne, Nl), using accumulators, that is true when Nl is
the number of items that are listed at the top level of Alist and Ne is the number of empty
lists. Suggestion: First try to count the lists, or empty lists, then modify by adding the other
counter.</font> <a href="sdcdisplay9443.php?url1=ai/week11.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20Prolog%20predicate,%20countLists(Alist,%20Ne,%20Nl),%20using%20accumulators,%20that%20is%20true%20when%20Nl%20isthe%20number%20of%20items%20that%20are%20listed%20at%20the%20top%20level%20of%20Alist%20and%20Ne%20is%20the%20number%20of%20emptylists.%20Suggestion:%20First%20try%20to%20count%20the%20lists,%20or%20empty%20lists,%20then%20modify%20by%20adding%20the%20othercounter.&amp;opurl1=ai/outputs/w11.txt&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>11)</strong> Define a predicate memCount(AList,Blist,Count) that is true if Alist occurs Count times
within Blist. Define without using an accumulator. Use "not" as defined in utilities.pro, to
make similarcases are unique, or else you may get more than one count as an answer.</font> <a href="sdcdisplay3784.php?url1=ai/week12.pl&amp;url2=&amp;url3=&amp;url4=&amp;title=Define%20a%20predicate%20memCount(AList,Blist,Count)%20that%20is%20true%20if%20Alist%20occurs%20Count%20timeswithin%20Blist.%20Define%20without%20using%20an%20accumulator.%20Use"not" as defined in utilities.pro, to
make similarcases are unique, or else you may get more than one count as an answer.&opurl1=ai/outputs/w12.txt&opurl2=&opurl3=&opurl4=" class="alab"><strong>View Solution </strong></a></p>
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


<!-- Mirrored from studyglance.in/labprograms/sdcdisplay.php?url1=ai/week4.pl&url2=&url3=&url4=&title=WAP%20in%20turbo%20prolog%20for%20medical%20diagnosis%20and%20show%20the%20advantages%20and%20disadvantages%20of%20green%20and%20red%20cuts.&opurl1=ai/outputs/w3.txt&opurl2=&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:56 GMT -->
</html>
