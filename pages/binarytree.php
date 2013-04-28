<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		binarytree.php
	Created:		2010.xx.xx

	Modified By:	Student One, Student Two, Team (One/Two)
	Modified:		2010.xx.xx
	
	Commented By:	Christopher Huerta, Documentation Team
	Commented:	2011.03.09
-->

<!-- Begin php -->
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td width="100%" class="banner_fill">

<!-- Start of file: /app/views/algorithm/view.ctp -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg">
	  <tr>
		<td align="center">

		<h2>Binary Tree</h2>	

				<!-- Begin Template Table -->
				<table width="984px" id="algo-table" border="1" cellpadding="0">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<button onClick = "highlight();">Animate</button>
								<button onClick = "resetNodes();">Reset</button>
								<button onClick = "highlight2();">Step</button>
								<button onClick = "goBack();">Previous</button>
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
						<td width="25%" valign="top" class="psuedocode" id="psuedocode-column">		
<!-- Begin container -->
<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<!-- Begin tab_container -->
	<div class="tab_container">
 
		<!-- Begin tab1 -->
		<div id="tab1" class="tab_content" style="font-size:small;"> 
<pre>
<b>function</b> search(x, r)
   <b>if</b> r is <b>nil then</b>
         <b>return nil</b><br>
<div id="found">   <b>else if</b> x is r.value 
         <b>then return</b> r   </div>
<div id="lessthanroot">   <b>else if</b> x < r.value 
         <b>then return</b> search(x, r.left-child)   </div>
<div id="greaterthanroot">   <b>else return</b> search(x, r.right-child)   </div>        
</pre>
		</div> 
		<!-- End tab1 -->
 
		<!-- Begin tab2 -->
		<div id="tab2" class="tab_content" style="font-size:small;">
<pre>
bool searchTree(int value)
{
   Node *currentNode = this->root;

   while(currentNode != NULL)
   {
   if(value == currentNode->nodeValue)
      return true;
   else if(value < currentNode->nodeValue)
      currentNode = currentNode->left;
   else
      currentNode = currentNode->right;
   }
   return false;
}
</pre>
		</div> 
		<!-- End tab2 -->
	</div> 
	<!-- End tab_container -->
</div>
<!-- End container -->

						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5" align="center" valign="top">
							<TABLE BORDER="0" cellpadding="0" cellspacing="0" background="images/algorithm/binarytree/background.png">			
								<TR>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
									</td>
									<TD HEIGHT="50px" width="50px" >
								   <div id="0" class="image">

									  <img id ="50" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										50
									  </div>
									  </div>


									</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								</TR>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								 
								  <div id="1" class="image">

									  <img id ="20" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										20
									  </div>
									  </div>

								</div>
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="2" class="image">

									  <img id ="80" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										80
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								</TR>

								<TR>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node10" class="image">

									  <img id ="10" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										10
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node30" class="image">

									  <img id ="30" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										30
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node70" class="image">

									  <img id ="70" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										70
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node90" class="image">

									  <img id ="90" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										90
									  </div>
									  </div>

								</td>
								</TR>

								<TR>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node5" class="image">

									  <img id ="5" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										5
									  </div>
									  </div>

								</td>

								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node15" class="image">

									  <img id ="15" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										15
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node25" class="image">

									  <img id ="25" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										25
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node35" class="image">

									  <img id ="35" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										35
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node65" class="image">

									  <img id ="65" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										65
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node75" class="image">

									  <img id ="75" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										75
									  </div>
									  </div>

								</td><TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node85" class="image">

									  <img id ="85" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										85
									  </div>
									  </div>

								</td>
								<TD HEIGHT="50px" width="50px" >
								</td>
								<TD HEIGHT="50px" width="50px" >
								  <div id="node95" class="image">

									  <img id ="95" src="images/algorithm/breadthfirst/circle.gif"  height="50px" width="50px" />
									  
									  <div class="text">
										95
									  </div>
									  </div>

								</td>

							</table>	

						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings -->
					<tr height="20%" id="algo-table-bottom">
						<td colspan="6" align="center"><!-- form to set value of the stack -->
							Search Value:<input id="myText" size = "2" type = "text" value = "">
							<button onClick = "selectText();">Set Value</button>
						</td>
					</tr>
				




<!-- End Settings -->
			
</table>
<!-- End Template Table -->

<br/> <br/>

</td></tr>

</table>







</td> </tr>

</table>

