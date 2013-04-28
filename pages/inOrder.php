<!--
	Name:		Wes Rockwood, Andrew Hutchinson, Team One
	Project:		{AlgorithmA}; 2011
	File:		inorder.css
	Created:		2011.01.31

	Modified By:	Wes Rockwood, Andrew Hutchinson, Team One
	Modified:		2011.02.11
	
	Commented By:	Michael Basilious, Documentation Team
	Commented:	2011.02.28
-->

<!-- Start of php -->
	<table width="100%" border="0" align="center" cellpadding="15" cellspacing="0" class="fill_white_bkg"> 
	  <tr> 
		<td align="center"> 
		<br /> 
		<h2>In-Order Traversal</h2>
		<!-- Begin Template Table -->	
				<table width="1100px" style="height:500px;" id="algo-table" border="2" cellpadding="5"> 
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
 
					<tr height="90%" class="algo-table-middle"> 
				
				<!-- Begin Psuedo -->
<td width="25%" valign="top" class="psuedocode" id="psuedocode-column">		
 
<div class="container"> 
 
	<ul class="tabs"> 
		<li><a href="#tab1">Pseudocode</a></li> 
		<li><a href="#tab2">C++</a></li> 
	</ul> 
 
	<div class="tab_container" style="font-size:small;"> 
		<div id="tab1" style="width:267px;" class="tab_content" > 
<pre> 

<strong>BinarySearchTree::search(int val)</strong>

while (node != 0)

	<div id="pseudo2">if (val == node.left)</div>
	return true; 
	<div id="pseudo3">else if (val == node.root)</div>
	return true;
	<div id="pseudo4">else if (val == node.right)</div>
	return true;
    
	return false;

</pre> 
		</div> 
 
		<div id="tab2" class="tab_content"> 
 
<strong><div id="cppLine0">void Inorder(treeNode* currentNode) </div></strong>
<div id="cppLine1">{</div>
<div id="cppLine2">&nbsp;&nbsp;&nbsp;if (currentNode != NULL)</div>
<div id="cppLine3">&nbsp;&nbsp;&nbsp;{</div>
<div id="cppLine4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inorder(currentNode -> leftChild);</div>
<div id="cppLine5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout << currentNode -> data;</div>
<div id="cppLine6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inorder(currentNode -> rightChild);</div>
<div id="cppLine7">&nbsp;&nbsp;&nbsp;}</div>
<div id="cppLine8">}</div>

		</div> 
	</div> 
	
			<div class="animation">
				<img src="images/algorithm/postorder/highlight.png" alt="" id="highlight" width="53" height="53" style="visibility:hidden; position: relative; left: -255px; bottom: -269px"/>
			</div>
</div> 	
						</td> 
				<!-- End Psuedo -->
				



				<!-- Begin View -->
						<td colspan="5" align="center" valign="top"> 
						</td>
					<!-- Begin Settings -->
							<tr height="20%" >
							<td colspan="6" align="center"><!-- form to set value of the stack -->
								<br />
							</td>
							</tr> 
					<!-- End Settings -->
			
				<!-- End View -->
				
				
				</table>	
		<!-- End Template Table -->
		<br/> <br/> 
		
		</td> 
	  </tr> 
	</table> 
				
<!-- End of php file -->

