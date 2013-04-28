<!--
	Name:		Student One, Student Two, Team (One/Two)
	Project:		{AlgorithmA}; 2011
	File:		AVL.php
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
		<h2>AVL</h2>		
		<br />

		<!-- Begin Template Table -->
				<table width="1050px" id="algo-table" border="2" cellpadding="5">
					<tr height="5%" class="algo-table-top">
				<!-- Begin Contols -->				
						<td colspan="6" class="main-controls">
							<div style="float: left;" align="left" id="control-button-box">
								<!-- Insert Buttons here (use <button>s only!) -->
								<button  onClick = "setValue()">Insert </button>
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
<div class="text" id="function1"><b>procedure</b> insert(node)</div> <div class="text" id="function3">&nbsp &nbsp insert(root, node)</div> <div class="text" id="function4">&nbsp &nbsp <b>if</b> balance factor is 2</div>      <b>if</b> balance factor(R) is 1
         <b>then</b> left rotate
      <b>else if</b> balance factor(R) is -1
         <b>then</b> double rotate <div class="text" id="function4">&nbsp &nbsp <b>if</b> balance factor is -2</div>      <b>if</b> balance factor(L) is 1
         <b>then</b> left rotate
      <b>else if</b> balance factor(L) is -1
         <b>then</b> double rotate
</pre>
									</div>
									<div id="tab2" class="tab_content" style="font-size:small;">
<pre>
TreeNode* Tree::insert(TreeNode*& curNode, int d_IN)
{
   if(curNode == NULL)  
        curNode = new TreeNode(d_IN);
   else if(d_IN < curNode->d_stored)
   {  
      insert(curNode->left, d_IN);    
      if(height(curNode->left) - 
			height(curNode->right) == 2)
      {
         if(d_IN < curNode->left->d_stored)
             rotLeftOne(curNode);
         else
             rotLeftTwo(curNode);
      }
   }
   else if(d_IN > curNode->d_stored){ 
      insert(curNode->right, d_IN);
      if(height(curNode->right) - 
			height(curNode->left) == 2)
      {
         if(d_IN > curNode->right->d_stored)
             rotRightOne(curNode);
         else
             rotRightTwo(curNode);
      }
   }
   return curNode;
}
</pre>
									</div>
								
								</div>
							</div>
						</td>
				<!-- End Psuedo -->

				<!-- Begin View -->
						<td colspan="5">
							<div class="workarea" id="workarea">
								<!-- Enter your objects here!! -->
								<TABLE BORDER="0" cellpadding="0" cellspacing="0" background="images/algorithm/avl/background.png" >	
								<!-- table that sets all black circles and numerical values -->		
									<TR>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object1" class="image">
												<img id ="50" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
											
												<div id="node1" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
									</TR>
							
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object2" class="image">
												<img id ="20" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div id="node2"  class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object3" class="image">
												<img id ="80" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node3" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
									</TR>
							
									<TR>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object4" class="image">
												<img id ="10" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div id="node4" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object5" class="image">
												<img id ="30" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node5" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object6" class="image">
												<img id ="70" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node6" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object7" class="image">
												<img id ="90" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node7" class="text"></div>
											</div>
										</td>
									</TR>
							
									<TR>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object8" class="image">
												<img id ="5" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node8" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object9" class="image">
												<img id ="15" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node9" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object10" class="image">
												<img id ="25" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node10" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object11" class="image">
												<img id ="35" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node11" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object12" class="image">
												<img id ="65" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node12" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object13" class="image">
												<img id ="75" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node13" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object14" class="image">
												<img id ="85" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
									
												<div  id="node14" class="text"></div>
											</div>
										</td>
										<TD HEIGHT="50px" width="50px" ></td>
										<TD HEIGHT="50px" width="50px" >
											<div id= "object15" class="image">
									
												<img id ="95" src="images/algorithm/avl/circle.gif"  height="50px" width="50px" >
								
												<div  id="node15" class="text"></div>
											</div>
										</td>
								
								</table>	
							</div>
						</td>
				<!-- End View -->
					</tr>
				
				<!-- Begin Settings --> 
					<tr height="20%" id="algo-table-bottom">
						<td colspan="6" align="center">
					
					Value:<input type = "text" id="value" onChange="updateColor();" size="2" maxlength="2">

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

</div>
</div>
</div>
