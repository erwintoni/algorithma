<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		redblack.php
	Created:		20XX.XX.XX

	Modified By:	Student Name, Team (One/Two)
	Modified:		20XX.XX.XX
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.03.09
-->

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" bgcolor="white" class="banner_fill">

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">
		<br />
		<p class="algo_title">Red Black</p>		
		<br />

		<!-- Begin Template Table -->

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"></script>
		<link rel="stylesheet" type="text/css" href="css/algorithmLayout.css"></script>
		<link rel="stylesheet" type="text/css" href="css/testStyle.css"></script>

		<script language="JavaScript" type="text/javascript" src="js/jsAnim.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/pbMan.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/testSrc.js"></script>
		<script language="JavaScript" type="text/javascript" src="js/redblackSrc.js"></script>
			<table width="984px" id="algo-table" border="2" cellpadding="5">
				<tr height="5%" class="algo-table-top">
		<!-- Begin Contols -->				
				<td colspan="6" class="main-controls">
					<div style="float: left;" align="left" id="control-button-box">
						<!-- Insert Buttons here (use <button>s only!) -->
						<button id="playpause" onclick="buildTree()">Animation</button>
						<button  onClick="window.location.reload()">Reset</button>

					</div>

					<div style="float: right;" align="right" id="info-button-box">
						<button id="concept" onMouseOut="UnTip();">Concept</button>
						<button id="howto" onMouseOut="UnTip();">How-to</button>
					</div>
				</td>
		<!-- End Controls -->
			</tr>

			<tr height="90%" class="algo-table-middle">
		<!-- Begin Psuedo -->
				<td width="25%" class="psuedocode" id="psuedocode">				
					<!-- Enter Psudo Here -->

					<div class="container"> 
					 
						<ul class="tabs"> 
							<li><a href="#tab1">Pseudocode</a></li> 
							<li><a href="#tab2">C++</a></li> 
						</ul> 
					 
						<div class="tab_container"> 
							<div id="tab1" class="tab_content" style="font-size:small;"> 
<pre>
<b>procedure</b> rbInsert(node)
   x <- node
   insert node and set red
   <b>while</b> x is not root <b>and</b> x.par is red
      <b>if</b> x.par is a left child
         set y <- x.uncle
         <b>if</b> y is red
            set x.par to black
            set y to black
            set x.grandpar to red
            set x <- x.grandpar
         <b>else</b> y is black
            <b>if</b> x is right child
               set x <- x.par
                  <b>then</b> rotate left about x
            set x.par to black
            set x.grandpar to red
               <b>then</b> rotate right about x.grandpar
      <b>else</b> x.par is a right child
         <b>if</b> x.par is a left child
         set y <- x.uncle
         <b>if</b> y is red
            set x.par to black
            set y to black
            set x.grandpar to red
            set x <- x.grandpar
         <b>else</b> y is black
            <b>if</b> x is left child
               set x <- x.par
                  <b>then</b> rotate right about x
            set x.par to black
            set x.grandpar to red
               <b>then</b> rotate left about x.grandpar

</pre>

							</div> 
					 
							<div id="tab2" class="tab_content" style="font-size:small;"> 
<pre>
void rb::rbInsert(node *x)
{
   node *xGParent, *y, *xParent;
   if(x->parent != nil){
      xParent = x->parent;
      if(xParent->parent != nil){
         xGParent = xParent->parent;
         while(x->color == 'r'){
            if(x->parent == xGParent->left){
               y = xGParent->right;
               if(y->color == 'r'){
                  xParent->color = 'b';
                  y->color = 'b';
                  xGParent->color = 'r';
                  x = xGParent;
               }
               else if(x == xParent->right){
                  x = xParent;
                  leftRotate(x);
               }
               xParent = x->parent;
               xGParent = xParent->parent;
               xParent->color = 'b';
               xGParent->color = 'r';
               rightRotate(xGParent);
            }
            else{ 
               //symmetrical to above code
            }
         }
      }
   }root->color = 'b';
}

</pre>
							</div> 
						</div> 
					</div> 	
				</td>
		<!-- End Psuedo -->

		<!-- Begin View -->
				<td colspan="5">
					<div class="workarea" id="workarea"></div>
				</td>
		<!-- End View -->
			</tr>
		
		<!-- Begin Settings --> 
			<tr height="20%" id="algo-table-bottom">
				<td colspan="2" width="50%" align="center">
					
					Input Value:<input id="myText" size = "2" type = "text" value = ""> 
				</td>
				<td>

				</td>
			</tr>
		<!-- End Settings -->
		</table>
<!-- End Template Table -->		  
		<br/> <br/>
		
		</td>
	  </tr>
	</table>

<!-- End of php -->
		</td>
	  </tr>
	</table>

