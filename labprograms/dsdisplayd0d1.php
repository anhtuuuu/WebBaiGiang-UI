<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/dsdisplay.php?url1=ds/dll.c&url2=&url3=&url4=&title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20Doubly%20Linked%20List.:i)%20Creation%20%20%20%20ii)%20Insertion%20%20%20%20iii)%20Deletion%20%20%20%20iv)%20Traversal%20%20%20%20&opurl1=ds/outputs/dlla.png&opurl2=ds/outputs/dllb.png&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:51:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance | [R18] Data Structures Lab Manual (Programs)</title>
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
			
 <center><h1><a href="dslabprograms.html" class="atopic">[R18]  Data Structures Lab Manual [ <font size="" color="#ff3333">Lab Programs</font> ]</a></h1></center><hr>
 <!--<iframe src="https://docs.google.com/gview?url=http://localhost/studyglance/XML.pdf&embedded=true" style="width:600px; height:500px;" frameborder="0"></iframe>-->
  <!--<iframe src="File Handling in PHP.pptx" type="application/pptx" width="100%"  height="600px" />-->
  <h2>Aim: </h2>
  <p>Write a program that uses functions to perform the following operations on Doubly Linked List.:i) Creation    ii) Insertion    iii) Deletion    iv) Traversal    </p>
  <h2>Source Code: </h2>
  <h3>dll.c</h3>
<pre><code class="language-c"><code><span style="color: #000000">
#include&lt;stdio.h&gt;<br />#include&lt;conio.h&gt;<br />#include&lt;stdlib.h&gt;<br />int&nbsp;count=0;<br />struct&nbsp;node<br />{<br />int&nbsp;data;<br />struct&nbsp;node&nbsp;*next,*prev;<br />}*head,*last,*newn,*trav;<br />//----------------------------------------------------<br />void&nbsp;create_list()<br />{<br />struct&nbsp;node&nbsp;*temp;<br />int&nbsp;value;<br />temp=last;<br />newn=(struct&nbsp;node&nbsp;*)malloc(sizeof&nbsp;(struct&nbsp;node));<br />printf("\n&nbsp;enter&nbsp;value");<br />scanf("%d",&amp;value);<br />newn-&gt;data=value;<br />if(last==NULL)<br />{<br />head=last=newn;<br />head-&gt;prev=NULL;<br />head-&gt;next=NULL;<br />count++;<br />}<br />else<br />{<br />newn-&gt;next=NULL;<br />newn-&gt;prev=last;<br />last-&gt;next=newn;<br />last=newn;<br />count++;<br />}<br />}<br />//----------------------------------------------------<br />void&nbsp;insert_at_begning(int&nbsp;value)<br />{<br />newn=(struct&nbsp;node&nbsp;*)malloc(sizeof&nbsp;(struct&nbsp;node));<br />newn-&gt;data=value;<br />if(head==NULL)<br />{<br />head=last=newn;<br />head-&gt;prev=NULL;<br />head-&gt;next=NULL;<br />count++;<br />}<br />else<br />{<br />newn-&gt;next=head;<br />head-&gt;prev=newn;<br />newn-&gt;prev=NULL;<br />head=newn;<br />count++;<br />}<br />}<br />//----------------------------------------------------------<br />void&nbsp;insert_at_end(int&nbsp;value)<br />{<br />struct&nbsp;node&nbsp;*temp;<br />temp=last;<br />newn=(struct&nbsp;node&nbsp;*)malloc(sizeof&nbsp;(struct&nbsp;node));<br />newn-&gt;data=value;<br />if(last==NULL)<br />{<br />head=last=newn;<br />head-&gt;prev=NULL;<br />head-&gt;next=NULL;<br />count++;<br />}<br />else<br />{<br />newn-&gt;next=NULL;<br />newn-&gt;prev=last;<br />last-&gt;next=newn;<br />last=newn;<br />count++;<br />}<br />}<br />//------------------------------------------------------<br />int&nbsp;insert_at_middle()<br />{<br />if(count&gt;=2)<br />{<br />struct&nbsp;node&nbsp;*var2,*temp;<br />int&nbsp;loc,value;<br />printf("\nselect&nbsp;location&nbsp;where&nbsp;you&nbsp;want&nbsp;to&nbsp;insert&nbsp;the&nbsp;data");<br />scanf("%d",&amp;loc);<br />printf("\nenter&nbsp;which&nbsp;value&nbsp;do&nbsp;u&nbsp;want&nbsp;to&nbsp;inserted");<br />scanf("%d",&amp;value);<br />newn=(struct&nbsp;node&nbsp;*)malloc(sizeof&nbsp;(struct&nbsp;node));<br />newn-&gt;data=value;<br />temp=head;<br />while(temp-&gt;data!=loc)<br />{<br />temp=temp-&gt;next;<br />if(temp==NULL)<br />{<br />printf("\nSORRY...there&nbsp;is&nbsp;no&nbsp;%d&nbsp;element",loc);<br />return&nbsp;0;<br />}<br />}<br />if(temp-&gt;next==NULL)<br />{<br />printf("\n%d&nbsp;is&nbsp;last&nbsp;node..please&nbsp;enter&nbsp;midddle&nbsp;node&nbsp;values&nbsp;",loc)&nbsp;;<br />return;<br />}<br />var2=temp-&gt;next;<br />temp-&gt;next=newn;<br />newn-&gt;next=var2;<br />newn-&gt;prev=temp;<br />var2-&gt;prev=newn;<br />count++;<br />}<br />else<br />{<br />printf("\nthe&nbsp;no&nbsp;of&nbsp;nodes&nbsp;must&nbsp;be&nbsp;&gt;=2");<br />}<br />}<br />//----------------------------------------------------------------<br />int&nbsp;delete_from_middle()<br />{<br />if(count&gt;2)<br />{<br />struct&nbsp;node&nbsp;*temp,*var;<br />int&nbsp;value;<br />temp=head;<br />printf("\nenter&nbsp;the&nbsp;data&nbsp;that&nbsp;you&nbsp;want&nbsp;to&nbsp;delete&nbsp;from&nbsp;the&nbsp;list&nbsp;shown&nbsp;above");<br />scanf("%d",&amp;value);<br />while(temp!=NULL)<br />{<br />if(temp-&gt;data&nbsp;==&nbsp;value)<br />{<br />if(temp-&gt;next==NULL)//if(temp==head)<br />{<br />printf("\n\n&nbsp;sorry&nbsp;%d&nbsp;is&nbsp;last&nbsp;node&nbsp;..please&nbsp;enter&nbsp;middle&nbsp;nodes&nbsp;only",value);<br />return&nbsp;0;<br />}<br />else<br />{<br />if(temp==head)<br />{<br />printf("\n\n&nbsp;%d&nbsp;is&nbsp;first&nbsp;node..plz&nbsp;enter&nbsp;middle&nbsp;nodes",value);<br />return;<br /><br />}<br />var-&gt;next=temp-&gt;next;<br />temp-&gt;next-&gt;prev=var;<br />free(temp);<br />count--;<br />return&nbsp;0;<br />}<br />}<br />else<br />{<br />var=temp;<br />temp=temp-&gt;next;<br />}<br />}<br />if(temp==NULL)<br />printf("\n%d&nbsp;is&nbsp;not&nbsp;avilable..&nbsp;enter&nbsp;only&nbsp;middle&nbsp;elements..",value);<br />else<br />printf("\ndata&nbsp;deleted&nbsp;from&nbsp;list&nbsp;is&nbsp;%d",value);<br />}<br />else<br />{<br />printf("\nthere&nbsp;no&nbsp;middle&nbsp;elemts..only&nbsp;%d&nbsp;elemts&nbsp;is&nbsp;avilable",count);<br />}<br />}<br />//------------------------------------------------------------------<br />int&nbsp;delete_from_front()<br />{<br />struct&nbsp;node&nbsp;*temp;<br />if(head==NULL)<br />{<br />printf("no&nbsp;elements&nbsp;for&nbsp;deletion&nbsp;in&nbsp;the&nbsp;list");<br />return&nbsp;0;<br />}<br />else&nbsp;if(head-&gt;next==NULL)<br />{<br />printf("deleted&nbsp;element&nbsp;is&nbsp;:%d",head-&gt;data);<br />head=last=NULL;<br /><br />}<br />else<br />{<br />temp=head-&gt;next;<br />printf("deleted&nbsp;element&nbsp;is&nbsp;:%d",head-&gt;data);<br />head-&gt;next=NULL;<br />temp-&gt;prev=NULL;<br />head=temp;<br />count--;<br />return&nbsp;0;<br />}<br />}<br />//--------------------------------------------------------<br />int&nbsp;delete_from_end()<br />{<br />struct&nbsp;node&nbsp;*temp,*var;<br />temp=last;<br />if(last==NULL)<br />{<br />printf("no&nbsp;elemts&nbsp;in&nbsp;the&nbsp;list");<br />return&nbsp;0;<br />}<br />else&nbsp;if(last-&gt;prev==NULL)<br />{<br />printf("data&nbsp;deleted&nbsp;from&nbsp;list&nbsp;is&nbsp;%d",last-&gt;data);<br />head=last=NULL;<br />//free(last);<br />count--;<br />return&nbsp;0;<br />}<br />else{<br />printf("data&nbsp;deleted&nbsp;from&nbsp;list&nbsp;is&nbsp;%d",last-&gt;data);<br />var=last-&gt;prev;<br />last-&gt;prev-&gt;next=NULL;<br />last=var;<br />count--;<br />return&nbsp;0;<br />}<br />}<br />//------------------------------------------------------<br />int&nbsp;display()<br />{<br />trav=last;//head;<br />if(trav==NULL)<br />{<br />printf("\nList&nbsp;is&nbsp;Empty");<br />return&nbsp;0;<br />}<br />else<br />{<br />printf("\n\nElements&nbsp;in&nbsp;the&nbsp;List&nbsp;is&nbsp;%d:\n",count);<br />while(trav!=NULL)<br />{<br />printf("%d&lt;--&gt;&nbsp;",trav-&gt;data);<br />trav=trav-&gt;prev;//next;<br />}<br />printf("\n");<br />}<br />}<br />//---------------------------------------------------------------<br />int&nbsp;main()<br />{<br />int&nbsp;ch=0;<br />char&nbsp;ch1;<br />//&nbsp;clrscr();<br />head=NULL;<br />last=NULL;<br />while(1)<br />{<br />Printf("\n&nbsp;Double&nbsp;Linked&nbsp;List&nbsp;Operations")<br />printf("\n1.Create&nbsp;Double&nbsp;Linked&nbsp;List");<br />printf("\n2.insertion&nbsp;at&nbsp;begning&nbsp;of&nbsp;linked&nbsp;list");<br />printf("\n3.insertion&nbsp;at&nbsp;the&nbsp;end&nbsp;of&nbsp;linked&nbsp;list");<br />printf("\n4.insertion&nbsp;at&nbsp;the&nbsp;middle&nbsp;where&nbsp;you&nbsp;want");<br />printf("\n5.deletion&nbsp;from&nbsp;the&nbsp;front&nbsp;of&nbsp;linked&nbsp;list");<br />printf("\n6.deletion&nbsp;from&nbsp;the&nbsp;end&nbsp;of&nbsp;linked&nbsp;list&nbsp;");<br />printf("\n7.deletion&nbsp;of&nbsp;the&nbsp;middle&nbsp;data&nbsp;that&nbsp;you&nbsp;want");<br />printf("\n8.display");<br />printf("\n9.exit\n");<br />printf("\nenter&nbsp;the&nbsp;choice&nbsp;of&nbsp;operation&nbsp;to&nbsp;perform&nbsp;on&nbsp;linked&nbsp;list");<br />scanf("%d",&amp;ch);<br />switch(ch)<br />{<br />case&nbsp;1:<br />{<br />do{<br />create_list();<br />display();<br />printf("do&nbsp;you&nbsp;want&nbsp;to&nbsp;create&nbsp;list&nbsp;,y&nbsp;/&nbsp;n");<br />getchar();<br />scanf("%c",&amp;ch1);<br />}while(ch1=='y');<br />break;<br />}<br />case&nbsp;2:<br />{<br />int&nbsp;value;<br />printf("\nenter&nbsp;the&nbsp;value&nbsp;to&nbsp;be&nbsp;inserted");<br />scanf("%d",&amp;value);<br />insert_at_begning(value);<br />display();<br />break;<br />}<br />case&nbsp;3:<br />{<br />int&nbsp;value;<br />printf("\nenter&nbsp;value&nbsp;to&nbsp;be&nbsp;inserted");<br />scanf("%d",&amp;value);<br />insert_at_end(value);<br />display();<br />break;<br />}<br />case&nbsp;4:<br />{<br />insert_at_middle();<br />display();<br />break;<br />}<br />case&nbsp;5:<br />{<br />delete_from_front();<br />display();<br />}break;<br />case&nbsp;6:<br />{<br />delete_from_end();<br />display();<br />break;<br />}<br />case&nbsp;7:<br />{<br />display();<br />delete_from_middle();<br />display();<br />break;<br />}<br />case&nbsp;8:display();break;<br />case&nbsp;9:<br />{<br />exit(0);<br />}<br />}<br />}<br />getch();<br />}<br /></span>
</code></code></pre><br>
<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>120</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>132</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>144</b><br />
-->
<h2>Output: </h2>
<img src="ds/outputs/dlla.png" alt="image" class="img-rounded img-responsive"/><br/>
<img src="ds/outputs/dllb.png" alt="image" class="img-rounded img-responsive"/><br/>
<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>169</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>178</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplay.php</b> on line <b>189</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Data Structures Lab Programs</h2>		<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>1</strong>) Write a C program that uses functions to perform the following on Singly Linked List: 
i) Creation    
ii) Insertion   
iii) Deletion   
iv) Traversal   
</pre></font>  <a href="dsdisplay2714.php?url1=ds/sll.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20C%20program%20that%20uses%20functions%20to%20perform%20the%20following%20on%20Singly%20Linked%20List:%20i)%20Creation%20%20%20%20ii)%20Insertion%20%20%20iii)%20Deletion%20%20%20iv)%20Traversal%20%20%20&amp;opurl1=ds/outputs/slla.png&amp;opurl2=ds/outputs/sllb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>2</strong>) Write a program that uses functions to perform the following operations on Doubly Linked List.:
i) Creation    
ii) Insertion    
iii) Deletion    
iv) Traversal    </pre></font>  <a href="dsdisplayd0d1.php?url1=ds/dll.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20Doubly%20Linked%20List.:i)%20Creation%20%20%20%20ii)%20Insertion%20%20%20%20iii)%20Deletion%20%20%20%20iv)%20Traversal%20%20%20%20&amp;opurl1=ds/outputs/dlla.png&amp;opurl2=ds/outputs/dllb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>3</strong>) Write a program that uses functions to perform the following operations on Circular Linked List.:
i) Creation     
ii) Insertion    
iii) Deletion    
iv) Traversal   </pre></font>  <a href="dsdisplayd796.php?url1=ds/CLL.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20Circular%20Linked%20List.:i)%20Creation%20%20%20%20%20ii)%20Insertion%20%20%20%20iii)%20Deletion%20%20%20%20iv)%20Traversal%20%20%20&amp;opurl1=ds/outputs/clla.png&amp;opurl2=ds/outputs/cllb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>4</strong>) Write a program that implement Stack (its operations) using Arrays                    </pre></font>  <a href="dsdisplay7eaf.php?url1=ds/stackarr.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implement%20Stack%20(its%20operations)%20using%20Arrays%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20&amp;opurl1=ds/outputs/stacka.png&amp;opurl2=ds/outputs/stackb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>5</strong>) Write a program that implement Stack (its operations) using Pointers   </pre></font>  <a href="dsdisplaye6f6.php?url1=ds/stacksll.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implement%20Stack%20(its%20operations)%20using%20Pointers%20%20%20&amp;opurl1=ds/outputs/stackpa.png&amp;opurl2=ds/outputs/stackpb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>6</strong>) Write a program that implement Queue (its operations) using Arrays            </pre></font>  <a href="dsdisplay75cc.php?url1=ds/queuearr.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implement%20Queue%20(its%20operations)%20using%20Arrays%20%20%20%20%20%20%20%20%20%20%20%20&amp;opurl1=ds/outputs/queuea.png&amp;opurl2=ds/outputs/queueb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>7</strong>) Write a program that implement Queue (its operations) using Pointers   </pre></font>  <a href="dsdisplay686c.php?url1=ds/queuesll.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implement%20Queue%20(its%20operations)%20using%20Pointers%20%20%20&amp;opurl1=ds/outputs/queuepa.png&amp;opurl2=ds/outputs/queuepb.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>8</strong>) Write a program that implements Bubble Sort Method to sort a given list of integers in ascending order.</pre></font>  <a href="dsdisplayfea4.php?url1=ds/Bubblesort.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implements%20Bubble%20Sort%20Method%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order.&amp;opurl1=ds/outputs/bsort.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>9</strong>) Write a program that implements Selection Sort Method to sort a given list of integers in ascending order.</pre></font>  <a href="dsdisplayd5d3.php?url1=ds/Selectionsort.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implements%20Selection%20Sort%20Method%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order.&amp;opurl1=ds/outputs/ssort.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>10</strong>) Write a program that implements Insertion Sort Method to sort a given list of integers in ascending order.</pre></font>  <a href="dsdisplayaf6e.php?url1=ds/insertionsort.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20implements%20Insertion%20Sort%20Method%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order.&amp;opurl1=ds/outputs/isort.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>11</strong>) Write a program that use both recursive and non recursive functions to perform Linear search operations for a Key value in a given list of integers.</pre></font>  <a href="dsdisplayff90.php?url1=ds/nonrecursive-linearsearch.c&amp;url2=ds/recursive-linearsearch.c&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20use%20both%20recursive%20and%20non%20recursive%20functions%20to%20perform%20Linear%20search%20operations%20for%20a%20Key%20value%20in%20a%20given%20list%20of%20integers.&amp;opurl1=ds/outputs/nrls.png&amp;opurl2=ds/outputs/rls.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>12</strong>) Write a program that use both recursive and non recursive functions to perform Binary search operations for a Key value in a given list of integers.</pre></font>  <a href="dsdisplay0c95.php?url1=ds/nonrecursive-binarysearch.c&amp;url2=ds/recursive-binarysearch.c&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20that%20use%20both%20recursive%20and%20non%20recursive%20functions%20to%20perform%20Binary%20search%20operations%20for%20a%20Key%20value%20in%20a%20given%20list%20of%20integers.&amp;opurl1=ds/outputs/nrbs.png&amp;opurl2=ds/outputs/rbs.png&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>13</strong>) Write a program to implement the tree traversal methods.</pre></font>  <a href="dsdisplay1577.php?url1=ds/bst.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20implement%20the%20tree%20traversal%20methods.&amp;opurl1=ds/outputs/bst.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>14</strong>) Write a program to implement Depth First Search (DFS) graph traversal methods.</pre></font>  <a href="dsdisplayabed.php?url1=ds/dfs.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20implement%20Depth%20First%20Search%20(DFS)%20graph%20traversal%20methods.&amp;opurl1=ds/outputs/dfs.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
						<p><pre style="border:none;font-size:15px;font-color:#000033;"><strong>15</strong>) Write a program to implement Breadth First Search (BFS) graph traversal methods.</pre></font>  <a href="dsdisplay99ea.php?url1=ds/bfs.c&amp;url2=&amp;url3=&amp;url4=&amp;title=Write%20a%20program%20to%20implement%20Breadth%20First%20Search%20(BFS)%20graph%20traversal%20methods.&amp;opurl1=ds/outputs/bfs.png&amp;opurl2=&amp;opurl3=&amp;opurl4=" class="alab"><strong>View Solution </strong></a></p>
				<br><hr>
  
        </div>
    </div>

	<!-- end panel body -->
	<div>
	</div>
</div>
<style>
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

</div><br></div>
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


<!-- Mirrored from studyglance.in/labprograms/dsdisplay.php?url1=ds/dll.c&url2=&url3=&url4=&title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20Doubly%20Linked%20List.:i)%20Creation%20%20%20%20ii)%20Insertion%20%20%20%20iii)%20Deletion%20%20%20%20iv)%20Traversal%20%20%20%20&opurl1=ds/outputs/dlla.png&opurl2=ds/outputs/dllb.png&opurl3=&opurl4= by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:51:11 GMT -->
</html>
