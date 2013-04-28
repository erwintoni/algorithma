<!--
	Name:		Esmirna Nolasco, Crystal Bauza, Team Two
	Project:		{AlgorithmA}; 2011
	File:		postorder.php
	Created:		2011.01.31

	Modified By:	Esmirna Nolasco, Crystal Bauza, Team Two
	Modified:		2011.02.11
	
	Commented By:	Christopher Huerta, Documentation Team
	Commented:	2011.03.02
-->
<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg"> 
	  <tr> 
		<td align="center"> 
		<br /> 
		<h2>Postorder Traversal Binary Tree Search</h2>

				<!-- Begin Template Table -->
				<table width="90%" id="algo-table" border="2" cellpadding="5"> 
					 <tr height="5%" class="algo-table-top"> 

	<!-- Begin Contols -->	

	<td colspan="6" class="main-controls"> 
		<div style="float: left;" align="left" id="control-button-box"> 
			<button class="btn" id="s1" onclick="this.disabled=true; animate(); animPseudo();">Animate</button>
			<button class="btn" id="f1" onclick="pause();">Pause</button>
			<button class="btn" id="b1" onclick="resumeAnim();">Resume</button>
			<button class="btn" onClick="history.go(0); Res();">Reset</button>	
		</div> 
 
		<div style="float: right;" align="right" id="info-button-box"> 
			<button class="btn" id="concept" onMouseOut="UnTip();">Concept</button>
			<button class="btn" id="howto" onMouseOut="UnTip();">How-to</button>
		</div> 
	</td> 
 
	<!-- End Controls -->
					</tr> 
 
					<tr height="90%" class="algo-table-middle" > 

<td width="25%" valign="top" class="psuedocode" id="psuedocode-column">		
 
<div class="container"> 
	<ul class="tabs">
		<li><a href="#tab1">Pseudocode</a></li>
		<li><a href="#tab2">C++</a></li>
	</ul>

	<!-- Begin tab_container-->
	<div class="tab_container" style="font-size:small;">

		<!-- Begin tab1 -->
		<div id="tab1" class="tab_content" style="font-size:small;">

		<!-- Begin pcode -->
			<strong>BinarySearchTree::search(int val)</strong><br />

			&nbsp;while (node != 0)<br />

		<div id="pseudo2"> if (val == node.left)</div><br />
					return true; <br />

		<div id="pseudo3">else if (val == node.right)</div><br />
					return true;<br />
	
		<div id="pseudo4">else if (val == node.root)</div><br />
					return true;<br />

				return false;<br />
		<!-- End of pcode -->	

		</div>
		<!-- End of tab1 -->	

		<!-- Begin tab2 -->
		<div id="tab2" class="tab_content" style="font-size:small;">
		<strong><div id="cppLine0">void Postorder(treeNode* currentNode) </div></strong>
		<div id="cppLine1">{</div>
		<div id="cppLine2">&nbsp;&nbsp;&nbsp;if (currentNode != NULL)</div>
		<div id="cppLine3">&nbsp;&nbsp;&nbsp;{</div>
		<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postorder(currentNode -> leftChild);</div>
		<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postorder(currentNode -> rightChild);</div>
		<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << currentNode -> data;</div>
		<div id="cppLine7">&nbsp;&nbsp;&nbsp;}</div>
		<div id="cppLine8">}</div>
		</div>
		<!-- End of tab2 -->

	</div>
	<!-- End of tab_container -->


</div>

						</td> 
				<!-- End Psuedo --> 
				
				<!-- Begin View --> 
						<td colspan="5" height="450px" width="850px" align="center"  valign="top"> 
                        
                        	<div class="animation">
	
	<img src="images/algorithm/postorder/highlight.png" alt="" id="highlight" width="53" height="53" style="visibility:hidden; position: relative; left: -25px; bottom: -269px"/>

	</div>
						</td> 
				<!-- End View --> 
					</tr> 
				
				<!-- Begin Settings --> 

					<tr height="40%" id="algo-table-bottom"> 
						<td colspan="6" align="center"> 
						<br/>
						</td> 
					</tr> 

				<!-- End Settings --> 
				
				</table>	
		<!-- End Template Table --> 
		<br/> <br/> 
		
		</td> 
	  </tr> 
	</table> 
    
				
<!-- End of php file --> 


