<!DOCTYPE html>
<html>
  
<!-- Mirrored from studyglance.in/labprograms/dsdisplays.php?url1=dslab/B-Tree-C-Program.html&title=Write%20a%20program%20to%20implement%20B%20Trees%20(its%20operations) by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Study Glance |  [R22] Data Structures Lab Manual (Programs)</title>
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
		
<center><h1>[R22]  Data Structures Lab Manual [ <font size="" color="#ff3333">Lab Programs</font> ]</h1></center><hr>
<h2>Aim: </h2>
  <h1 style="font-size:18px;color:black;">Write a program to implement B Trees (its operations) </h1>
  <h2>Solution : </h2>	

 <h1>C program to implement the B-Tree</h1>
<div class="row"> 
<div class="col-md-12">
<div class="alert alert-info"><b>B-Tree</b> <pre><code class="language-c">/* For simplicity, provide a basic implementation focusing on insertion, search, and a simple traversal. We will not include deletion as it is quite complex and would make the code exceedingly long. In practice, B-tree deletion requires handling numerous cases to redistribute or merge nodes.  */

#include &lt;stdio.h>
#include &lt;stdlib.h>

#define MAX_KEYS 3 // Maximum keys in a node (t-1 where t is the minimum degree)
#define MIN_KEYS 1 // Minimum keys in a node (ceil(t/2) - 1)
#define MAX_CHILDREN (MAX_KEYS + 1) // Maximum children in a node (t)

typedef struct BTreeNode {
    int keys[MAX_KEYS];
    struct BTreeNode* children[MAX_CHILDREN];
    int numKeys;
    int isLeaf;
} BTreeNode;

BTreeNode* createNode(int isLeaf) {
    BTreeNode* node = (BTreeNode*)malloc(sizeof(BTreeNode));
    node->isLeaf = isLeaf;
    node->numKeys = 0;
    for (int i = 0; i < MAX_CHILDREN; i++) {
        node->children[i] = NULL;
    }
    return node;
}

void splitChild(BTreeNode* parent, int index, BTreeNode* child) {
    BTreeNode* newChild = createNode(child->isLeaf);
    newChild->numKeys = MIN_KEYS;

    for (int i = 0; i < MIN_KEYS; i++) {
        newChild->keys[i] = child->keys[i + MIN_KEYS + 1];
    }

    if (!child->isLeaf) {
        for (int i = 0; i < MIN_KEYS + 1; i++) {
            newChild->children[i] = child->children[i + MIN_KEYS + 1];
        }
    }

    child->numKeys = MIN_KEYS;

    for (int i = parent->numKeys; i >= index + 1; i--) {
        parent->children[i + 1] = parent->children[i];
    }

    parent->children[index + 1] = newChild;

    for (int i = parent->numKeys - 1; i >= index; i--) {
        parent->keys[i + 1] = parent->keys[i];
    }

    parent->keys[index] = child->keys[MIN_KEYS];
    parent->numKeys++;
}

void insertNonFull(BTreeNode* node, int key) {
    int i = node->numKeys - 1;

    if (node->isLeaf) {
        while (i >= 0 && node->keys[i] > key) {
            node->keys[i + 1] = node->keys[i];
            i--;
        }

        node->keys[i + 1] = key;
        node->numKeys++;
    } else {
        while (i >= 0 && node->keys[i] > key) {
            i--;
        }

        if (node->children[i + 1]->numKeys == MAX_KEYS) {
            splitChild(node, i + 1, node->children[i + 1]);

            if (key > node->keys[i + 1]) {
                i++;
            }
        }

        insertNonFull(node->children[i + 1], key);
    }
}

void insert(BTreeNode** root, int key) {
    BTreeNode* r = *root;
    if (r->numKeys == MAX_KEYS) {
        BTreeNode* newRoot = createNode(0);
        newRoot->children[0] = r;
        splitChild(newRoot, 0, r);
        int i = 0;
        if (newRoot->keys[0] < key) {
            i++;
        }
        insertNonFull(newRoot->children[i], key);
        *root = newRoot;
    } else {
        insertNonFull(r, key);
    }
}

void traverse(BTreeNode* root) {
    if (root == NULL) return;
    int i;
    for (i = 0; i < root->numKeys; i++) {
        if (!root->isLeaf) {
            traverse(root->children[i]);
        }
        printf("%d ", root->keys[i]);
    }

    if (!root->isLeaf) {
        traverse(root->children[i]);
    }
}

int main() {
    BTreeNode* root = createNode(1);

    insert(&root, 10);
    insert(&root, 20);
    insert(&root, 5);
    insert(&root, 6);
    insert(&root, 12);
    insert(&root, 30);
    insert(&root, 7);
    insert(&root, 17);

    printf("Traversal of the constructed B-tree is:\n");
    traverse(root);

    return 0;
}</code></pre>
</div></div></div>
<br>
<div class="row"> 
<div class="col-md-12">
<div class="alert alert-warning"><b>OUTPUT</b><pre><code class="language-c">Traversal of the constructed B-tree is:
5 6 7 10 12 17 20 30 </code></pre>
</div></div></div>


<!--<br />
<b>Notice</b>:  Undefined variable: disurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>100</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>112</b><br />
<br />
<b>Notice</b>:  Undefined variable: disurl4 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>124</b><br />
-->

<!--<br />
<b>Notice</b>:  Undefined variable: opurl2 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>138</b><br />
<br />
<b>Notice</b>:  Undefined variable: opurl3 in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>147</b><br />
-->
<hr>
<!--
<p><span style='font-size:32px;color:#ff9900;'><strong>&#9997;</strong></span> To download above <strong><font color="#ff6600">Program </font>[Source Code ] </strong>, Click the <strong>download</strong> button shown in below</p>
			<center><strong><a  href="<br />
<b>Notice</b>:  Undefined variable: durl in <b>/home/u681245571/domains/studyglance.in/public_html/labprograms/dsdisplays.php</b> on line <b>158</b><br />
" download><button class="downloadbtn"><strong>Download </strong><font size="5">&#8628;</font></button></a></strong></center>
  <hr>-->
  <h2><font color="#000099">Related Content : </font></h2>

<h2>Data Structures Lab Programs</h2>		<p><font color="#000033" style="font-size:14px;"><strong>1)</strong> Write a program that uses functions to perform the following operations on singly linkedlist.: <BR>i) Creation       ii) Insertion       iii) Deletion      iv) Traversal</font> <a href="dsdisplays18d2.php?url1=dslab/sll.html&amp;title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20singly%20linkedlist.:%20<BR>i)%20Creation%20%20%20%20%20%20%20ii)%20Insertion%20%20%20%20%20%20%20iii)%20Deletion%20%20%20%20%20%20iv)%20Traversal" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>2)</strong> Write a program that uses functions to perform the following operations on doubly linkedlist.:<BR> i) Creation      ii) Insertion      iii) Deletion      iv) Traversal</font> <a href="dsdisplays3fe0.php?url1=dslab/dll.html&amp;title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20doubly%20linkedlist.:<BR>%20i)%20Creation%20%20%20%20%20%20ii)%20Insertion%20%20%20%20%20%20iii)%20Deletion%20%20%20%20%20%20iv)%20Traversal" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>3)</strong> Write a program that uses functions to perform the following operations on circular linkedlist.: <BR>i) Creation      ii) Insertion      iii) Deletion      iv) Traversal</font> <a href="dsdisplays5ed9.php?url1=dslab/cll.html&amp;title=Write%20a%20program%20that%20uses%20functions%20to%20perform%20the%20following%20operations%20on%20circular%20linkedlist.:%20<BR>i)%20Creation%20%20%20%20%20%20ii)%20Insertion%20%20%20%20%20%20iii)%20Deletion%20%20%20%20%20%20iv)%20Traversal" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>4)</strong> Write a program that implement Stack (its operations) using Array</font> <a href="dsdisplays92e2.php?url1=dslab/Stack-using-Array.html&amp;title=Write%20a%20program%20that%20implement%20Stack%20(its%20operations)%20using%20Array" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>5)</strong> Write a program that implement Stack (its operations) using Linked List (Pointer)</font> <a href="dsdisplaysd271.php?url1=dslab/Stack-using-pointer.html&amp;title=Write%20a%20program%20that%20implement%20Stack%20(its%20operations)%20using%20Linked%20List%20(Pointer)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>6)</strong> Write a program that implement Queue(its operations) using Array</font> <a href="dsdisplaysf861.php?url1=dslab/Queue-using-Array.html&amp;title=Write%20a%20program%20that%20implement%20Queue(its%20operations)%20using%20Array" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>7)</strong> Write a program that implement Queue (its operations) using Linked List (Pointer)</font> <a href="dsdisplays1209.php?url1=dslab/Queue-using-pointer.html&amp;title=Write%20a%20program%20that%20implement%20Queue%20(its%20operations)%20using%20Linked%20List%20(Pointer)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>8)</strong> Write a program that implements Quick sort sorting methods to sort a given list of integers in ascending order</font> <a href="dsdisplays71cb.php?url1=dslab/Quick-sort.html&amp;title=Write%20a%20program%20that%20implements%20Quick%20sort%20sorting%20methods%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>9)</strong> Write a program that implements Merge sort sorting methods to sort a given list of integers in ascending order</font> <a href="dsdisplays8570.php?url1=dslab/Merge-sort.html&amp;title=Write%20a%20program%20that%20implements%20Merge%20sort%20sorting%20methods%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>10)</strong> Write a program that implements Heap sort sorting methods to sort a given list of integers in ascending order</font> <a href="dsdisplaysb0c1.php?url1=dslab/Heap-sort.html&amp;title=Write%20a%20program%20that%20implements%20Heap%20sort%20sorting%20methods%20to%20sort%20a%20given%20list%20of%20integers%20in%20ascending%20order" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>11)</strong> Write a program to implement the tree traversal methods using Recursive</font> <a href="dsdisplays4607.php?url1=dslab/Tree-traversal-using-Recursive.html&amp;title=Write%20a%20program%20to%20implement%20the%20tree%20traversal%20methods%20using%20Recursive" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>12)</strong> Write a program to implement the tree traversal methods using Non Recursive</font> <a href="dsdisplays2973.php?url1=dslab/Tree-traversal-using-non-Recursive.html&amp;title=Write%20a%20program%20to%20implement%20the%20tree%20traversal%20methods%20using%20Non%20Recursive" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>13)</strong> Write a  program to implement Binary Search Tree (its operations)</font> <a href="dsdisplays98c2.php?url1=dslab/Binary-Search-Tree.html&amp;title=Write%20a%20%20program%20to%20implement%20Binary%20Search%20Tree%20(its%20operations)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>14)</strong> Write a program to implement AVL Tree (its operations)</font> <a href="dsdisplays60f9.php?url1=dslab/avl-tree.html&amp;title=Write%20a%20program%20to%20implement%20AVL%20Tree%20(its%20operations)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>15)</strong> Write a program to implement Red - Black Tree (its operations)</font> <a href="dsdisplaysb0cf.php?url1=dslab/Red-Black-Tree.html&amp;title=Write%20a%20program%20to%20implement%20Red%20-%20Black%20Tree%20(its%20operations)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>16)</strong> Write a program to implement B Trees (its operations)</font> <a href="dsdisplayse58e.php?url1=dslab/B-Tree-C-Program.html&amp;title=Write%20a%20program%20to%20implement%20B%20Trees%20(its%20operations)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>17)</strong> Write a program to implement B+ Trees (its operations)</font> <a href="dsdisplays1235.php?url1=dslab/Bplus-Tree-C-Program.html&amp;title=Write%20a%20program%20to%20implement%20B+%20Trees%20(its%20operations)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>18)</strong> Write a program to implement the graph traversal methods (Breadth First Search)</font> <a href="dsdisplays506e.php?url1=dslab/BFS-C-Program.html&amp;title=Write%20a%20program%20to%20implement%20the%20graph%20traversal%20methods%20(Breadth%20First%20Search)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>19)</strong> Write a program to implement the graph traversal methods (Depth First Search)</font> <a href="dsdisplaysd958.php?url1=dslab/Depth-First-search-c-program.html&amp;title=Write%20a%20program%20to%20implement%20the%20graph%20traversal%20methods%20(Depth%20First%20Search)" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>20)</strong> Write a program to Implement a Pattern matching algorithms using Boyer- Moore</font> <a href="dsdisplays2ae8.php?url1=dslab/Boyer-Moore-pattern-matching.html&amp;title=Write%20a%20program%20to%20Implement%20a%20Pattern%20matching%20algorithms%20using%20Boyer-%20Moore" class="alab"><strong>View Solution </strong></a></p>
						<p><font color="#000033" style="font-size:14px;"><strong>21)</strong> Write a program to Implement a Pattern matching algorithms using Knuth-Morris-Pratt</font> <a href="dsdisplays03ef.php?url1=dslab/Knuth-Morris-Pratt-pattern-matching.html&amp;title=Write%20a%20program%20to%20Implement%20a%20Pattern%20matching%20algorithms%20using%20Knuth-Morris-Pratt" class="alab"><strong>View Solution </strong></a></p>
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


<!-- Mirrored from studyglance.in/labprograms/dsdisplays.php?url1=dslab/B-Tree-C-Program.html&title=Write%20a%20program%20to%20implement%20B%20Trees%20(its%20operations) by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 May 2025 03:48:55 GMT -->
</html>
